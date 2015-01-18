<?php
session_start();
include_once( 'config.php' );

//保存时间请求参数
$state = time();
$_SESSION["tb_state"] = $state;
$ret_url = get_auth_url($state);

//保存来路URL，最后将返回
$back_url = empty($_GET['callback']) ? "/index.php":$_GET['callback'];
$_SESSION["back_url"] = $back_url;

header("location:".$ret_url);

//页面调用
function get_auth_url($state){
	$url= "https://oauth.tbsandbox.com/authorize"; //"https://oauth.taobao.com/authorize";
	$params = array(
				"response_type"	=>	"code",
				"client_id"		=>	tb_appid,
				"redirect_uri"	=>	tb_callback_url,
				"state"			=>	$state
			);
	foreach($params as $key=>$val){
		$get[] = $key."=".urlencode($val);
	}
	
	return $url."?".join("&", $get);
}
?>
