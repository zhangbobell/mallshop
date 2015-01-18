<?php
/**
 * TOP API: ecs.aliyuncs.com.UnassociateEipAddress.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Ecs20140526UnassociateEipAddressRequest
{
	/** 
	 * 申请Id
	 **/
	private $allocationId;
	
	/** 
	 * 实例Id
	 **/
	private $instanceId;
	
	private $apiParas = array();
	
	public function setAllocationId($allocationId)
	{
		$this->allocationId = $allocationId;
		$this->apiParas["AllocationId"] = $allocationId;
	}

	public function getAllocationId()
	{
		return $this->allocationId;
	}

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
		return "ecs.aliyuncs.com.UnassociateEipAddress.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->allocationId,"allocationId");
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
