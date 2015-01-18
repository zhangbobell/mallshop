<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyDBDescription.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ModifyDBDescriptionRequest
{
	/** 
	 * 修改DB备注
	 **/
	private $dBDescription;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 数据库名
	 **/
	private $dBName;
	
	private $apiParas = array();
	
	public function setdBDescription($dBDescription)
	{
		$this->dBDescription = $dBDescription;
		$this->apiParas["DBDescription"] = $dBDescription;
	}

	public function getdBDescription()
	{
		return $this->dBDescription;
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

	public function setdBName($dBName)
	{
		$this->dBName = $dBName;
		$this->apiParas["DBName"] = $dBName;
	}

	public function getdBName()
	{
		return $this->dBName;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifyDBDescription.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBDescription,"dBDescription");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->dBName,"dBName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
