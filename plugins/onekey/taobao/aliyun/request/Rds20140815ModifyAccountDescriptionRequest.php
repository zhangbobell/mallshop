<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyAccountDescription.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ModifyAccountDescriptionRequest
{
	/** 
	 * 修改帐号备注
	 **/
	private $accountDescription;
	
	/** 
	 * 操作帐号，需惟一性检查，由小写字母，数字、下划线组成，字母开头，长度不超过16个字符。
	 **/
	private $accountName;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	private $apiParas = array();
	
	public function setAccountDescription($accountDescription)
	{
		$this->accountDescription = $accountDescription;
		$this->apiParas["AccountDescription"] = $accountDescription;
	}

	public function getAccountDescription()
	{
		return $this->accountDescription;
	}

	public function setAccountName($accountName)
	{
		$this->accountName = $accountName;
		$this->apiParas["AccountName"] = $accountName;
	}

	public function getAccountName()
	{
		return $this->accountName;
	}

	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifyAccountDescription.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accountDescription,"accountDescription");
		RequestCheckUtil::checkNotNull($this->accountName,"accountName");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
