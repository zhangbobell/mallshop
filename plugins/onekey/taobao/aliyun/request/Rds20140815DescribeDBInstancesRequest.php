<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeDBInstances.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815DescribeDBInstancesRequest
{
	/** 
	 * 实例状态，取值参见附录：实例状态表。
不填默认返回所有
	 **/
	private $dBInstanceStatus;
	
	/** 
	 * Primary:主实例
Readonly：只读实例
	 **/
	private $dBInstanceType;
	
	/** 
	 * 数据库类型，取值范围MySQL|SQLServer，
不填，默认返回所有
	 **/
	private $engine;
	
	/** 
	 * 页码，大于0，且不超过Integer的最大值
默认值：1<br /> 支持最大值为：2147483647<br /> 支持最小值为：0
	 **/
	private $pageNumber;
	
	/** 
	 * 每页记录数，取值：30|50|100
默认值：30<br /> 支持最大值为：100<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 实例的region
	 **/
	private $regionId;
	
	private $apiParas = array();
	
	public function setdBInstanceStatus($dBInstanceStatus)
	{
		$this->dBInstanceStatus = $dBInstanceStatus;
		$this->apiParas["DBInstanceStatus"] = $dBInstanceStatus;
	}

	public function getdBInstanceStatus()
	{
		return $this->dBInstanceStatus;
	}

	public function setdBInstanceType($dBInstanceType)
	{
		$this->dBInstanceType = $dBInstanceType;
		$this->apiParas["DBInstanceType"] = $dBInstanceType;
	}

	public function getdBInstanceType()
	{
		return $this->dBInstanceType;
	}

	public function setEngine($engine)
	{
		$this->engine = $engine;
		$this->apiParas["Engine"] = $engine;
	}

	public function getEngine()
	{
		return $this->engine;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setRegionId($regionId)
	{
		$this->regionId = $regionId;
		$this->apiParas["RegionId"] = $regionId;
	}

	public function getRegionId()
	{
		return $this->regionId;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.DescribeDBInstances.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageNumber,2147483647,"pageNumber");
		RequestCheckUtil::checkMinValue($this->pageNumber,0,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
