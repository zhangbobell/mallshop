<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyPostpaidDBInstanceSpec.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ModifyPostpaidDBInstanceSpecRequest
{
	/** 
	 * 目标实例级别
	 **/
	private $dBInstanceClass;
	
	/** 
	 * 待升降级的实例
	 **/
	private $dBInstanceId;
	
	/** 
	 * 自定义存储空间，取值范围：mysql为[5,1000],sqlserver为[10,1000].此参数替代型号中的最大存储空间，见实例规格附表
单位：GB
只能升级<br /> 支持最大值为：1000<br /> 支持最小值为：5
	 **/
	private $dBInstanceStorage;
	
	private $apiParas = array();
	
	public function setdBInstanceClass($dBInstanceClass)
	{
		$this->dBInstanceClass = $dBInstanceClass;
		$this->apiParas["DBInstanceClass"] = $dBInstanceClass;
	}

	public function getdBInstanceClass()
	{
		return $this->dBInstanceClass;
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

	public function setdBInstanceStorage($dBInstanceStorage)
	{
		$this->dBInstanceStorage = $dBInstanceStorage;
		$this->apiParas["DBInstanceStorage"] = $dBInstanceStorage;
	}

	public function getdBInstanceStorage()
	{
		return $this->dBInstanceStorage;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifyPostpaidDBInstanceSpec.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkMaxValue($this->dBInstanceStorage,1000,"dBInstanceStorage");
		RequestCheckUtil::checkMinValue($this->dBInstanceStorage,5,"dBInstanceStorage");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
