<?php
/**
 * TOP API: taobao.aitaobao.items.detail.convert request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:04
 */
class AitaobaoItemsDetailConvertRequest
{
	/** 
	 * 商品混淆id
	 **/
	private $openIid;
	
	/** 
	 * 完整的三段式推广pid
	 **/
	private $pid;
	
	private $apiParas = array();
	
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

	public function getApiMethodName()
	{
		return "taobao.aitaobao.items.detail.convert";
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
