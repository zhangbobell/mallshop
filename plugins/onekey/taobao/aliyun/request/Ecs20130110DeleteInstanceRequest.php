<?php
/**
 * TOP API: ecs.aliyuncs.com.DeleteInstance.2013-01-10 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Ecs20130110DeleteInstanceRequest
{
	/** 
	 * 实例ID
	 **/
	private $instanceId;
	
	private $apiParas = array();
	
	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["InstanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function getApiMethodName()
	{
		return "ecs.aliyuncs.com.DeleteInstance.2013-01-10";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
