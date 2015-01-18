<?php
/**
 * TOP API: rds.aliyuncs.com.ImportDataForSQLServer.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815ImportDataForSQLServerRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 数据文件名，带扩展名
	 **/
	private $fileName;
	
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

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["FileName"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ImportDataForSQLServer.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->fileName,"fileName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
