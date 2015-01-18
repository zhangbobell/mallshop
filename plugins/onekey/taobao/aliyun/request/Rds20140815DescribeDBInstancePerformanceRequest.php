<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeDBInstancePerformance.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815DescribeDBInstancePerformanceRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 查询结束时间
	 **/
	private $endTime;
	
	/** 
	 * 性能指标
	 **/
	private $key;
	
	/** 
	 * 查询开始时间
	 **/
	private $startTime;
	
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

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["EndTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setKey($key)
	{
		$this->key = $key;
		$this->apiParas["Key"] = $key;
	}

	public function getKey()
	{
		return $this->key;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["StartTime"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.DescribeDBInstancePerformance.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->key,"key");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
