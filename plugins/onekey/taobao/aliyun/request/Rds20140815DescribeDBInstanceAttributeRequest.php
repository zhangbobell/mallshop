<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeDBInstanceAttribute.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815DescribeDBInstanceAttributeRequest
{
	/** 
	 * 实例名，可以一次输入多个，以英文半角“,”分隔
	 **/
	private $dBInstanceId;
	
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

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.DescribeDBInstanceAttribute.2014-08-15";
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
