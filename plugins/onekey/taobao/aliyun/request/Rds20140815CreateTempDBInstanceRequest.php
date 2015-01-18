<?php
/**
 * TOP API: rds.aliyuncs.com.CreateTempDBInstance.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815CreateTempDBInstanceRequest
{
	/** 
	 * 备份ID
	 **/
	private $backupId;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * "用户指定7天内的任意时间点
Xx年xx月xx日 xx时xx分xx秒"
	 **/
	private $restoreTime;
	
	private $apiParas = array();
	
	public function setBackupId($backupId)
	{
		$this->backupId = $backupId;
		$this->apiParas["BackupId"] = $backupId;
	}

	public function getBackupId()
	{
		return $this->backupId;
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

	public function setRestoreTime($restoreTime)
	{
		$this->restoreTime = $restoreTime;
		$this->apiParas["RestoreTime"] = $restoreTime;
	}

	public function getRestoreTime()
	{
		return $this->restoreTime;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.CreateTempDBInstance.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
