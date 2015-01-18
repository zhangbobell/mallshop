<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeParameterTemplates.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815DescribeParameterTemplatesRequest
{
	/** 
	 * 数据库类型，取值为MySQL和SQLServer
	 **/
	private $engine;
	
	/** 
	 * 数据库版本号
MySQL数据库为:5.1或5.5或5.6
SQLServer数据库为：2008r2
	 **/
	private $engineVersion;
	
	private $apiParas = array();
	
	public function setEngine($engine)
	{
		$this->engine = $engine;
		$this->apiParas["Engine"] = $engine;
	}

	public function getEngine()
	{
		return $this->engine;
	}

	public function setEngineVersion($engineVersion)
	{
		$this->engineVersion = $engineVersion;
		$this->apiParas["EngineVersion"] = $engineVersion;
	}

	public function getEngineVersion()
	{
		return $this->engineVersion;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.DescribeParameterTemplates.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->engine,"engine");
		RequestCheckUtil::checkNotNull($this->engineVersion,"engineVersion");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
