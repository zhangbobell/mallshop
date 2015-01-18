<?php
/**
 * @copyright (c) 2014 aircheng.com
 * @file sendmail.php
 * @brief 邮件数据模板
 * @author chendeshan
 * @date 2014/11/28 23:20:51
 * @version 2.9
 */
class mailTemplate
{
	/**
	 * @brief 找回密码模板
	 * @param array $param 模版参数
	 * @return string
	 */
	public static function findPassword($param)
	{
		$siteConfig = new Config("site_config");
		$templateString = "您好，您在{$siteConfig->name}申请找回密码的操作，点击下面这个链接进行密码重置：<a href='{url}'>{url}</a>。<br />如果不能点击，请您把它复制到地址栏中打开。";
		return strtr($templateString,$param);
	}
}
