<?php
/**
 * TOP API: ecs.aliyuncs.com.DeleteImage.2013-01-10 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-13 16:51:05
 */
class Ecs20130110DeleteImageRequest
{
	/** 
	 * 镜像ID
	 **/
	private $imageId;
	
	/** 
	 * 镜像所在的Region ID
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
		return "ecs.aliyuncs.com.DeleteImage.2013-01-10";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->imageId,"imageId");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
