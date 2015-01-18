<?php
/**
 * TOP API: rds.aliyuncs.com.CreateBackup.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815CreateBackupRequest
{
	/** 
	 * 备份方法，取值：Logical，逻辑备份；Physical，物理备份
默认值为Physical，逻辑备份不支持没有DB的实例，SQLServer仅支持物理备份
	 **/
	private $backupMethod;
	
	/** 
	 * 备份类型，取值：Auto，自动计算是全量还是增量；FullBackup，全量。
默认值为Auto
	 **/
	private $backupType;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	private $apiParas = array();
	
	public function setBackupMethod($backupMethod)
	{
		$this->backupMethod = $backupMethod;
		$this->apiParas["BackupMethod"] = $backupMethod;
	}

	public function getBackupMethod()
	{
		return $this->backupMethod;
	}

	public function setBackupType($backupType)
	{
		$this->backupType = $backupType;
		$this->apiParas["BackupType"] = $backupType;
	}

	public function getBackupType()
	{
		return $this->backupType;
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
		return "rds.aliyuncs.com.CreateBackup.2014-08-15";
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
