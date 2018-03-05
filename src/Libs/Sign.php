<?php
	
	namespace Live\Libs;
	/**
	 * Created by PhpStorm.
	 * User: crazy
	 * Date: 2018/3/2
	 * Time: 16:41
	 */
	class Sign
	{
		// 计算并获取CheckSum
		public static function getCheckSum($appSecret, $nonce, $curTime)
		{
			return sha1 ($appSecret . $nonce . $curTime);
		}
		
	}