<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeSlowLogs.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Rds20140815DescribeSlowLogsRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * DB名称
	 **/
	private $dBName;
	
	/** 
	 * 查询结束日期，不能小于查询开始日期，格式：YYYY-MM-DDZ
	 **/
	private $endTime;
	
	/** 
	 * 页码，大于0，且不超过Integer的最大值
默认值：1<br /> 支持最大值为：65535<br /> 支持最小值为：1
	 **/
	private $pageNumber;
	
	/** 
	 * 每页记录数，取值：30|50|100
默认值：30<br /> 支持最大值为：100<br /> 支持最小值为：30
	 **/
	private $pageSize;
	
	/** 
	 * 排序依据，取值：
1 TotalExecutionCounts:总执行次数最多
2 TotalQueryTimes:总执行时间最多
3 TotalLogicalReads:总逻辑读最多
4 TotalPhysicalReads:总物理读最多
此参数对SQLServer实例有效
	 **/
	private $sortKey;
	
	/** 
	 * 查询开始日期，
格式：YYYY-MM-DDZ
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

	public function setdBName($dBName)
	{
		$this->dBName = $dBName;
		$this->apiParas["DBName"] = $dBName;
	}

	public function getdBName()
	{
		return $this->dBName;
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

	public function setSortKey($sortKey)
	{
		$this->sortKey = $sortKey;
		$this->apiParas["SortKey"] = $sortKey;
	}

	public function getSortKey()
	{
		return $this->sortKey;
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
		return "rds.aliyuncs.com.DescribeSlowLogs.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkMaxValue($this->pageNumber,65535,"pageNumber");
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,30,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
