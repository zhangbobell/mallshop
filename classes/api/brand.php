<?php
/**
 * @copyright (c) 2011 jooyea.cn
 * @file brand.php
 * @brief 品牌API
 * @author chendeshan
 * @date 2014/10/12 13:59:44
 * @version 2.7
 */
class APIBrand
{
	//品牌列表
	public function getBrandInfo($id)
	{
		$query = new IModel('brand');
		$info  = $query->getObj("id=".$id);
		return $info;
	}

	//根据商品分类ID获取品牌数据
	public function getBrandListByGoodsCategoryId($id)
	{
		$tb_brand_category = new IModel('brand_category');
		$info  = $tb_brand_category->getObj("goods_category_id=".$id);
		if($info)
		{
			$query = new IQuery('brand');
			$query->where = " find_in_set (".$info['id'].",category_ids)";
			$query->order = 'id desc';
		    $query->limit  = 14;
		    $list = $query->find();
			return $list;
		}
	}
}