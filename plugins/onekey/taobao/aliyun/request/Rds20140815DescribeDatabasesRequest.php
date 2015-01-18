<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeDatabases.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815DescribeDatabasesRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 数据库名
	 **/
	private $dBName;
	
	/** 
	 * 数据库状态
Creating：创建中；
Running：使用中；
Deleting：删除中
	 **/
	private $dBStatus;
	
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

	public function setdBName($dBName)
	{
		$this->dBName = $dBName;
		$this->apiParas["DBName"] = $dBName;
	}

	public function getdBName()
	{
		return $this->dBName;
	}

	public function setdBStatus($dBStatus)
	{
		$this->dBStatus = $dBStatus;
		$this->apiParas["DBStatus"] = $dBStatus;
	}

	public function getdBStatus()
	{
		return $this->dBStatus;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.DescribeDatabases.2014-08-15";
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
