<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyParameter.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ModifyParameterRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * true：强制重启
false：不强制重启
默认不强制重启
	 **/
	private $forcerestart;
	
	/** 
	 * 参数及其值的JSON串，
参数的值都是字符串类型，
{"auto_increment_increment":"1",
"character_set_client":"utf8"}
	 **/
	private $parameters;
	
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

	public function setForcerestart($forcerestart)
	{
		$this->forcerestart = $forcerestart;
		$this->apiParas["Forcerestart"] = $forcerestart;
	}

	public function getForcerestart()
	{
		return $this->forcerestart;
	}

	public function setParameters($parameters)
	{
		$this->parameters = $parameters;
		$this->apiParas["Parameters"] = $parameters;
	}

	public function getParameters()
	{
		return $this->parameters;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifyParameter.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->parameters,"parameters");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
