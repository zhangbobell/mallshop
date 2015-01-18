<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyBackupPolicy.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ModifyBackupPolicyRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday
	 **/
	private $preferredBackupPeriod;
	
	/** 
	 * 备份时间，格式：
00:00—01:00,01:00-02:00一个小时为一个粒度等等
	 **/
	private $preferredBackupTime;
	
	private $apiParas = array();
	
	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setPreferredBackupPeriod($preferredBackupPeriod)
	{
		$this->preferredBackupPeriod = $preferredBackupPeriod;
		$this->apiParas["PreferredBackupPeriod"] = $preferredBackupPeriod;
	}

	public function getPreferredBackupPeriod()
	{
		return $this->preferredBackupPeriod;
	}

	public function setPreferredBackupTime($preferredBackupTime)
	{
		$this->preferredBackupTime = $preferredBackupTime;
		$this->apiParas["PreferredBackupTime"] = $preferredBackupTime;
	}

	public function getPreferredBackupTime()
	{
		return $this->preferredBackupTime;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifyBackupPolicy.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->preferredBackupPeriod,"preferredBackupPeriod");
		RequestCheckUtil::checkNotNull($this->preferredBackupTime,"preferredBackupTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
