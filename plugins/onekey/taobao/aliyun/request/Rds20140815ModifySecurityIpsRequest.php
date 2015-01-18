<?php
/**
 * TOP API: rds.aliyuncs.com.ModifySecurityIps.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ModifySecurityIpsRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 允许访问该实例下所有数据库的IP名单，以逗号隔开，不可重复，最多100个；支持格式：0.0.0.0/0，10.23.12.24（IP），或者10.23.12.24/24（CIDR模式，无类域间路由，/24表示了地址中前缀的长度，范围[1,32]）其中， 0.0.0.0/0，表示不限制
	 **/
	private $securityIps;
	
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

	public function setSecurityIps($securityIps)
	{
		$this->securityIps = $securityIps;
		$this->apiParas["SecurityIps"] = $securityIps;
	}

	public function getSecurityIps()
	{
		return $this->securityIps;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifySecurityIps.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->securityIps,"securityIps");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
