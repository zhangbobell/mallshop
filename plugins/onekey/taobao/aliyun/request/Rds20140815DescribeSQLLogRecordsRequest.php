<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeSQLLogRecords.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815DescribeSQLLogRecordsRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 查询结束时间，格式如：yyyy-MM-dd'T’HH:mm:ssZ，且大于查询开始时间
	 **/
	private $endTime;
	
	/** 
	 * 页码，大于0，且不超过Integer的最大值
默认值：1<br /> 支持最大值为：2147483647<br /> 支持最小值为：1
	 **/
	private $pageNumber;
	
	/** 
	 * 每页记录数，取值：30|50|100|200
默认值：100<br /> 支持最大值为：200<br /> 支持最小值为：30
	 **/
	private $pageSize;
	
	/** 
	 * 关键字查询，多个关键字以空格分隔，不超过10个关键字。
	 **/
	private $queryKeywords;
	
	/** 
	 * 查询开始时间，格式如：yyyy-MM-dd'T’HH:mm:ssZ
	 **/
	private $startTime;
	
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

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["EndTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setQueryKeywords($queryKeywords)
	{
		$this->queryKeywords = $queryKeywords;
		$this->apiParas["QueryKeywords"] = $queryKeywords;
	}

	public function getQueryKeywords()
	{
		return $this->queryKeywords;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["StartTime"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.DescribeSQLLogRecords.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkMaxValue($this->pageNumber,2147483647,"pageNumber");
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,30,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
