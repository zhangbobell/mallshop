<?php
/**
 * TOP API: rds.aliyuncs.com.GrantAccountPrivilege.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815GrantAccountPrivilegeRequest
{
	/** 
	 * 帐号名
	 **/
	private $accountName;
	
	/** 
	 * 帐号权限，ReadOnly 只读，ReadWrite读写
	 **/
	private $accountPrivilege;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 设置与该帐号关联的数据库名数据库名称
	 **/
	private $dBName;
	
	private $apiParas = array();
	
	public function setAccountName($accountName)
	{
		$this->accountName = $accountName;
		$this->apiParas["AccountName"] = $accountName;
	}

	public function getAccountName()
	{
		return $this->accountName;
	}

	public function setAccountPrivilege($accountPrivilege)
	{
		$this->accountPrivilege = $accountPrivilege;
		$this->apiParas["AccountPrivilege"] = $accountPrivilege;
	}

	public function getAccountPrivilege()
	{
		return $this->accountPrivilege;
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

	public function setdBName($dBName)
	{
		$this->dBName = $dBName;
		$this->apiParas["DBName"] = $dBName;
	}

	public function getdBName()
	{
		return $this->dBName;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.GrantAccountPrivilege.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accountName,"accountName");
		RequestCheckUtil::checkNotNull($this->accountPrivilege,"accountPrivilege");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->dBName,"dBName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
