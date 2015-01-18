<?php
/**
 * @copyright (c) 2014 aircheng.com
 * @file other.php
 * @brief 其他api方法
 * @author chendeshan
 * @date 2014/11/4 7:33:34
 * @version 2.8
 */
class APIOther
{
	//获取促销规则
	public function getProrule()
	{
		$proRuleObj = new ProRule(999999999);
		$proRuleObj->isGiftOnce = false;
		$proRuleObj->isCashOnce = false;
		return $proRuleObj->getInfo();
	}
}