<?php
/**
 * TOP API: mts.aliyuncs.com.QueryMediaBucket.2014-06-18 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Mts20140618QueryMediaBucketRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "mts.aliyuncs.com.QueryMediaBucket.2014-06-18";
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
