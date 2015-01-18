<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyDBInstanceDescription.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ModifyDBInstanceDescriptionRequest
{
	/** 
	 * 实例描述信息
	 **/
	private $dBInstanceDescription;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	private $apiParas = array();
	
	public function setdBInstanceDescription($dBInstanceDescription)
	{
		$this->dBInstanceDescription = $dBInstanceDescription;
		$this->apiParas["DBInstanceDescription"] = $dBInstanceDescription;
	}

	public function getdBInstanceDescription()
	{
		return $this->dBInstanceDescription;
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
		return "rds.aliyuncs.com.ModifyDBInstanceDescription.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceDescription,"dBInstanceDescription");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
