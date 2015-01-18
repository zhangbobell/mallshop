<?php
/**
 * TOP API: ecs.aliyuncs.com.DescribeZones.2013-01-10 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Ecs20130110DescribeZonesRequest
{
	/** 
	 * 指定的Region ID
	 **/
	private $regionId;
	
	private $apiParas = array();
	
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
		return "ecs.aliyuncs.com.DescribeZones.2013-01-10";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
