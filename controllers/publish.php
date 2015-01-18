<?php
/**
 * Created by PhpStorm.
 * User: zhangbobell
 * Date: 2015/1/18
 * Time: 15:37
 */

class Publish extends IController {

    public function tb_oauth() {

//保存时间请求参数
        $state = time();
        ISession::set('tb_state',$state);

        $goods_id = IFilter::act(IReq::get('id'),'int');
        ISession::set('goods_id', $goods_id);
        $ret_url = $this->tb_get_auth_url($state);

        header("location:".$ret_url);
    }

    public function tb_oauth_cb() {

        $main_config = include(IWeb::$app->getBasePath().'config/config.php');

        if( !isset($_GET["state"])||empty($_GET["state"])||!isset($_GET["code"])||empty($_GET["code"]) )
        {
            echo "<span style='font-size:12px;line-height:24px;'>请求非法或超时!&nbsp;&nbsp;<a href='/index.php'>返回首页</a></span>";
            exit;
        }
        else
        {
            //参数验证
            if( $_GET["state"] != ISession::get('tb_state') )
            {
                //echo "网站获取用于第三方应用防止CSRF攻击失败。";
                echo "<span style='font-size:12px;line-height:24px;'>请求非法或超时!&nbsp;&nbsp;<a href='/index.php'>返回首页</a></span>";
                exit;
            }

            $code = $_GET["code"]; // 通过访问https://oauth.taobao.com/authorize获取code

            // 请求参数
            $postfields = array (
                'grant_type' => "authorization_code",
                'client_id' => $main_config['tb_appid'],
                'client_secret' => $main_config['tb_appkey'],
                'code' => $code,
                'redirect_uri' => $main_config['tb_callback_url']
            );

            $url = 'https://oauth.tbsandbox.com/token';//'https://oauth.taobao.com/token';

            $token = json_decode ( $this->tb_curl ( $url, $postfields ));
            $access_token = $token->access_token;
            ISession::set('tb_access_token', $access_token);

            //保存用户信息
            $user_info['user_id'] = $token -> taobao_user_id;
            $user_info['user_name'] = $token -> taobao_user_nick;
            $user_info['user_domain'] = "";
            $user_info['user_profile'] = "";
            $user_info['user_token'] = $token -> access_token;
            $user_info['user_type'] = "taobao";
            ISession::set('user_info', $user_info);

            $uname = $token -> taobao_user_nick;
            $openid = $token -> taobao_user_id;
            $sign = md5($uname.$openid.substr($openid, 2, 4));

            $go_url = 'index.php?controller=publish&action=tb_up';

            header("location:".$go_url);

//            var_dump($_SESSION);
        }
    }

    public function tb_up() {
        $goods_id = ISession::get('goods_id');
        $main_config = include(IWeb::$app->getBasePath().'config/config.php');
        include_once(IWeb::$app->getBasePath().'plugins/onekey/taobao/TopSdk.php');

        $c = new TopClient;
        $c->appkey = $main_config['tb_appid'];
        $c->secretKey = $main_config['tb_appkey'];
        $sessionKey = ISession::get('tb_access_token');

        $resp = $this->tb_get_seller_type($c, $sessionKey);

        print_r($resp->user->type);

        $goods_info = $this->get_goods_detail($goods_id);

        var_dump($goods_info);
    }

    /*
     * 1. 获取卖家类型
     * */
    private function tb_get_seller_type($c, $sessionKey) {
        include_once(IWeb::$app->getBasePath().'plugins/onekey/taobao/TopSdk.php');

        $req = new UserSellerGetRequest;
        $req->setFields("type");

        return $c->execute($req, $sessionKey);
    }

    /*
     * 2. 获取商品详情
     * */
    private function get_goods_detail($goods_id) {

        if(!$goods_id)
        {
            IError::show(403,"传递的参数不正确");
            exit;
        }

        //使用商品id获得商品信息
        $tb_goods = new IModel('goods');
        $goods_info = $tb_goods->getObj('id='.$goods_id." AND is_del=0");
        if(!$goods_info)
        {
            IError::show(403,"这件商品不存在");
            exit;
        }

        //品牌名称
        if($goods_info['brand_id'])
        {
            $tb_brand = new IModel('brand');
            $brand_info = $tb_brand->getObj('id='.$goods_info['brand_id']);
            if($brand_info)
            {
                $goods_info['brand'] = $brand_info['name'];
            }
        }

        //获取商品分类
        $categoryObj = new IModel('category_extend as ca,category as c');
        $categoryRow = $categoryObj->getObj('ca.goods_id = '.$goods_id.' and ca.category_id = c.id','c.id,c.name');
        $goods_info['category'] = $categoryRow ? $categoryRow['id'] : 0;

        $goods_info['full_cat'] = goods_class::catRecursion($goods_info['category']);

        return $goods_info;
    }

    private function tb_get_auth_url($state) {
        $main_config = include(IWeb::$app->getBasePath().'config/config.php');
        $url= "https://oauth.tbsandbox.com/authorize"; //"https://oauth.taobao.com/authorize";
        $params = array(
            "response_type"	=>	"code",
            "client_id"		=>	$main_config['tb_appid'],
            "redirect_uri"	=>	$main_config['tb_callback_url'],
            "state"			=>	$state
        );
        foreach($params as $key=>$val){
            $get[] = $key."=".urlencode($val);
        }

        return $url."?".join("&", $get);
    }

    private function tb_curl($url, $postFields = null)
    {
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_FAILONERROR, false );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );

        if (is_array ( $postFields ) && 0 < count ( $postFields )) {
            $postBodyString = "";
            foreach ( $postFields as $k => $v ) {
                $postBodyString .= "$k=" . urlencode ( $v ) . "&";
            }
            unset ( $k, $v );
            curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
            curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
            curl_setopt ( $ch, CURLOPT_POST, true );
            curl_setopt ( $ch, CURLOPT_POSTFIELDS, substr ( $postBodyString, 0, - 1 ) );
        }
        $reponse = curl_exec ( $ch );
        if (curl_errno ( $ch )) {
            throw new Exception ( curl_error ( $ch ), 0 );
        } else {
            $httpStatusCode = curl_getinfo ( $ch, CURLINFO_HTTP_CODE );
            if (200 !== $httpStatusCode) {
                throw new Exception ( $reponse, $httpStatusCode );
            }
        }
        curl_close ( $ch );
        return $reponse;
    }

}