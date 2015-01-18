<?php
/**
 * TOP API: ecs.aliyuncs.com.DescribeRegions.2013-01-10 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Ecs20130110DescribeRegionsRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "ecs.aliyuncs.com.DescribeRegions.2013-01-10";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
