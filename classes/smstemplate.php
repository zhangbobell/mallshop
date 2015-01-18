<?php
/**
 * @copyright (c) 2011 aircheng.com
 * @file smstemplate.php
 * @brief 短信发送模板
 * @author chendeshan
 * @date 2014/8/11 9:51:51
 * @version 2.9
 */

 /**
 * @class smsTemplate
 * @brief 短信发送模板
 */
class smsTemplate
{
	/**
	 * @brief 订单发货的信息模板
	 * @param array $data 替换的数据
	 */
	public static function sendGoods($data = null)
	{
		$siteConfig = new Config("site_config");
		$templateString = "您好{user_name}，订单号：{order_no}，已由{sendor}发货，物流公司：{delivery_company}，物流单号：{delivery_no}";
		return strtr($templateString,$data);
	}

	/**
	 * @brief 手机找回密码模板
	 * @param array $data 替换的数据
	 */
	public static function findPassword($data = null)
	{
		$templateString = "您的密码重置功能的手机校验码：{mobile_code}，请勿向陌生人透露";
		return strtr($templateString,$data);
	}

	/**
	 * @brief 手机短信校验码
	 * @param array $data 替换的数据
	 */
	public static function checkCode($data = null)
	{
		$templateString = "您的手机校验码：{mobile_code}，请勿向陌生人透露";
		return strtr($templateString,$data);
	}
}