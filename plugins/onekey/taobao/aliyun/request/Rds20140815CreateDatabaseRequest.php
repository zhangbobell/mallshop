<?php
/**
 * TOP API: rds.aliyuncs.com.CreateDatabase.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815CreateDatabaseRequest
{
	/** 
	 * 字符集，取值范围限定如下字符集：
MySQL类型：utf8|gbk|latin1|utf8mb4(5.5和5.6有)
SQLServer类型：
Chinese_PRC_CI_AS
Chinese_PRC_CS_AS
SQL_Latin1_General_CP1_CI_AS
SQL_Latin1_General_CP1_CS_AS
Chinese_PRC_BIN
	 **/
	private $characterSetName;
	
	/** 
	 * 数据库描述
	 **/
	private $createDatabase;
	
	/** 
	 * 数据库描述，不超过256个字符
	 **/
	private $dBDescription;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 数据库名，由小写字母，数字、下划线组成，字母开头，长度不超过64个字符
	 **/
	private $dBName;
	
	private $apiParas = array();
	
	public function setCharacterSetName($characterSetName)
	{
		$this->characterSetName = $characterSetName;
		$this->apiParas["CharacterSetName"] = $characterSetName;
	}

	public function getCharacterSetName()
	{
		return $this->characterSetName;
	}

	public function setCreateDatabase($createDatabase)
	{
		$this->createDatabase = $createDatabase;
		$this->apiParas["CreateDatabase"] = $createDatabase;
	}

	public function getCreateDatabase()
	{
		return $this->createDatabase;
	}

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
		return "rds.aliyuncs.com.CreateDatabase.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->characterSetName,"characterSetName");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->dBName,"dBName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
