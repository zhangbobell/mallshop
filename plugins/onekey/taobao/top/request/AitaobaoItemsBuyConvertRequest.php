<?php
/**
 * TOP API: taobao.aitaobao.items.buy.convert request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:04
 */
class AitaobaoItemsBuyConvertRequest
{
	/** 
	 * 是否立即购买
	 **/
	private $buyNow;
	
	/** 
	 * 来源
	 **/
	private $from;
	
	/** 
	 * 商品混淆id
	 **/
	private $openIid;
	
	/** 
	 * 完整的三段式推广pid
	 **/
	private $pid;
	
	/** 
	 * 购买数量
	 **/
	private $quantity;
	
	/** 
	 * sku
	 **/
	private $skuId;
	
	private $apiParas = array();
	
	public function setBuyNow($buyNow)
	{
		$this->buyNow = $buyNow;
		$this->apiParas["buy_now"] = $buyNow;
	}

	public function getBuyNow()
	{
		return $this->buyNow;
	}

	public function setFrom($from)
	{
		$this->from = $from;
		$this->apiParas["from"] = $from;
	}

	public function getFrom()
	{
		return $this->from;
	}

	public function setOpenIid($openIid)
	{
		$this->openIid = $openIid;
		$this->apiParas["open_iid"] = $openIid;
	}

	public function getOpenIid()
	{
		return $this->openIid;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function getApiMethodName()
	{
		return "taobao.aitaobao.items.buy.convert";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openIid,"openIid");
		RequestCheckUtil::checkNotNull($this->pid,"pid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
