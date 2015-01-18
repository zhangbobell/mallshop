<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyDBInstanceMaintainTime.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ModifyDBInstanceMaintainTimeRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 可维护时间段
22:00-02:00  02:00-06:00  06:00-10:00  10:00-14:00  14:00-18:00  18:00-22:00
	 **/
	private $maintainTime;
	
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

	public function setMaintainTime($maintainTime)
	{
		$this->maintainTime = $maintainTime;
		$this->apiParas["MaintainTime"] = $maintainTime;
	}

	public function getMaintainTime()
	{
		return $this->maintainTime;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifyDBInstanceMaintainTime.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->maintainTime,"maintainTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
