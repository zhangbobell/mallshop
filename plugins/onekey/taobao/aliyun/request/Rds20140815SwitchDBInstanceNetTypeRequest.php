<?php
/**
 * TOP API: rds.aliyuncs.com.SwitchDBInstanceNetType.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815SwitchDBInstanceNetTypeRequest
{
	/** 
	 * 新的用户连接，用户连接DB的地（前辍），需惟一性检查，由小写字母数字，中划线组成，字母开头，长度不超过30个字符
	 **/
	private $connectionStringPrefix;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 端口号,参数大小范围：3001~3999<br /> 支持最大值为：3999<br /> 支持最小值为：3001
	 **/
	private $port;
	
	private $apiParas = array();
	
	public function setConnectionStringPrefix($connectionStringPrefix)
	{
		$this->connectionStringPrefix = $connectionStringPrefix;
		$this->apiParas["ConnectionStringPrefix"] = $connectionStringPrefix;
	}

	public function getConnectionStringPrefix()
	{
		return $this->connectionStringPrefix;
	}

	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setPort($port)
	{
		$this->port = $port;
		$this->apiParas["Port"] = $port;
	}

	public function getPort()
	{
		return $this->port;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.SwitchDBInstanceNetType.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->connectionStringPrefix,"connectionStringPrefix");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkMaxValue($this->port,3999,"port");
		RequestCheckUtil::checkMinValue($this->port,3001,"port");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
