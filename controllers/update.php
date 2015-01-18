<?php
/**
 * @brief 升级更新控制器
 */
class Update extends IController
{
	/**
	 * @brief iwebshop14102000 版本升级更新
	 */
	public function iwebshop14102000()
	{
		$sql = array("ALTER TABLE `iweb_brand_category` ADD `goods_category_id` int(11) unsigned not null default '0' comment '商品分类ID'");

		foreach($sql as $key => $val)
		{
			$val = str_replace('iweb_',IWeb::$app->config['DB']['tablePre'],$val);
			IDBFactory::getDB()->query($val);
		}

		die('升级成功！');
	}
}