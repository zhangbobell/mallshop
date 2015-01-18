<?php
/**
 * TOP API: taobao.aitaobao.shops.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:04
 */
class AitaobaoShopsDetailGetRequest
{
	/** 
	 * 需返回的字段列表.可选值:AitaobaoShop淘宝客商品结构体中的user_id,shop_title,commission_rate;字段之间用","分隔.
	 **/
	private $fields;
	
	/** 
	 * 卖家昵称串.最大输入10个.格式如:"value1,value2,value3" 用" , "号分隔。
注意：sids和seller_nicks两个参数任意必须输入一个，如果同时输入，则以seller_nicks为准
	 **/
	private $sellerNicks;
	
	/** 
	 * 店铺id串.最大输入10个.格式如:"value1,value2,value3" 用" , "号分隔店铺id.
注意：sids和seller_nicks两个参数任意必须输入一个，如果同时输入，则以seller_nicks为准
	 **/
	private $sids;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setSellerNicks($sellerNicks)
	{
		$this->sellerNicks = $sellerNicks;
		$this->apiParas["seller_nicks"] = $sellerNicks;
	}

	public function getSellerNicks()
	{
		return $this->sellerNicks;
	}

	public function setSids($sids)
	{
		$this->sids = $sids;
		$this->apiParas["sids"] = $sids;
	}

	public function getSids()
	{
		return $this->sids;
	}

	public function getApiMethodName()
	{
		return "taobao.aitaobao.shops.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->sellerNicks,10,"sellerNicks");
		RequestCheckUtil::checkMaxListSize($this->sids,10,"sids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
