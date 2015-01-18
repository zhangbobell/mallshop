<?php
/**
 * TOP API: rds.aliyuncs.com.CreateAccount.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815CreateAccountRequest
{
	/** 
	 * 帐号备注，长度不超过256个字符
	 **/
	private $accountDescription;
	
	/** 
	 * 数据库帐户名操作帐号，需惟一性检查，由小写字母，数字、下划线组成，字母开头，长度不超过16个字符。
	 **/
	private $accountName;
	
	/** 
	 * 操作密码，由字母、数字或下划线组成，长度为6~32位
	 **/
	private $accountPassword;
	
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

	public function setAccountPassword($accountPassword)
	{
		$this->accountPassword = $accountPassword;
		$this->apiParas["AccountPassword"] = $accountPassword;
	}

	public function getAccountPassword()
	{
		return $this->accountPassword;
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
		return "rds.aliyuncs.com.CreateAccount.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accountName,"accountName");
		RequestCheckUtil::checkNotNull($this->accountPassword,"accountPassword");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
