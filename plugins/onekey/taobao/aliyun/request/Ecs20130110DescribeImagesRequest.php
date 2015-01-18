<?php
/**
 * TOP API: ecs.aliyuncs.com.DescribeImages.2013-01-10 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Ecs20130110DescribeImagesRequest
{
	/** 
	 * 镜像ID，可以输入多个，以”,”分割
	 **/
	private $imageId;
	
	/** 
	 * 镜像所有者别名，多个值使用逗号分隔
可选值：system, self, others
不指定该参数默认返回所有镜像
	 **/
	private $imageOwnerAlias;
	
	/** 
	 * 实例状态列表的页码，起始值为1，默认值为1<br /> 支持最小值为：1
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数，最大值50行，默认为10<br /> 支持最大值为：50<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 实例所属于的Region ID
	 **/
	private $regionId;
	
	private $apiParas = array();
	
	public function setImageId($imageId)
	{
		$this->imageId = $imageId;
		$this->apiParas["ImageId"] = $imageId;
	}

	public function getImageId()
	{
		return $this->imageId;
	}

	public function setImageOwnerAlias($imageOwnerAlias)
	{
		$this->imageOwnerAlias = $imageOwnerAlias;
		$this->apiParas["ImageOwnerAlias"] = $imageOwnerAlias;
	}

	public function getImageOwnerAlias()
	{
		return $this->imageOwnerAlias;
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

	public function setRegionId($regionId)
	{
		$this->regionId = $regionId;
		$this->apiParas["RegionId"] = $regionId;
	}

	public function getRegionId()
	{
		return $this->regionId;
	}

	public function getApiMethodName()
	{
		return "ecs.aliyuncs.com.DescribeImages.2013-01-10";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
