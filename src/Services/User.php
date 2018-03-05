<?php
	
	namespace Live\Services;
	
	use Live\Libs\HttpClient;
	
	/**
	 * 用户Api
	 * Class ImApi
	 * @package Live
	 */
	class User
	{
		/**
		 * 用户注册
		 *
		 * @param $accid 用户ID
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function register($acc_id)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/create.action', 'POST');
			
			$response = $client->send ([
				'accid' => $acc_id,
				'token' => md5 ($acc_id),
			]);
			
			return $response;
		}
		
		/**
		 * 网易云通信ID更新
		 *
		 * @param $accid
		 * @param $props
		 * @param $token
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function update($accid, $props, $token)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/update.action', 'POST');
			
			$response = $client->send ([
				'accid' => $accid,
				'props' => $props,
				'token' => $token,
			]);
			
			return $response;
		}
		
		
		/**
		 * 更新并获取新token
		 *
		 * @param $accid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function refreshToken($accid)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/refreshToken.action', 'POST');
			
			$response = $client->send ([
				'accid' => $accid,
			]);
			
			return $response;
		}
		
		
		/**
		 * 封禁网易云通信ID
		 *
		 * @param $accid
		 * @param $needkick
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function block($accid, $needkick)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/block.action', 'POST');
			
			$response = $client->send ([
				'accid'    => $accid,
				'needkick' => $needkick,
			]);
			
			return $response;
		}
		
		/**
		 * 解禁网易云通信ID
		 *
		 * @param $accid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function unblock($accid)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/unblock.action', 'POST');
			
			$response = $client->send ([
				'accid' => $accid,
			]);
			
			return $response;
		}
		
		/**
		 * 更新用户信息
		 *
		 * @param $acc_id
		 * @param $name
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function updateUserInfo($acc_id, $name)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/updateUinfo.action', 'POST');
			
			$response = $client->send ([
				'accid' => $acc_id,
				'name'  => $name,
			]);
			
			return $response;
		}
		
		
		/**
		 * 获取用户信息
		 *
		 * @param array $acc_ids
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function getUserInfo($acc_ids)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/getUinfos.action', 'POST');
			
			$response = $client->send ([
				'accids' => \GuzzleHttp\json_encode ($acc_ids),
			]);
			
			return $response;
		}
		
		
		/**
		 * 设置桌面端在线时，移动端是否需要推送
		 *
		 * @param $accid
		 * @param $donnopOpen
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function setDonnop($accid, $donnopOpen)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/getUinfos.action', 'POST');
			
			$response = $client->send ([
				'accid'      => $accid,
				'donnopOpen' => $donnopOpen,
			]);
			
			return $response;
		}
		
		
		/**
		 * 好友关系
		 *
		 * @param        $accid
		 * @param        $faccid
		 * @param        $type
		 * @param string $msg
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function addFriend($accid, $faccid, $type, $msg = '')
		{
			$client = new HttpClient('https://api.netease.im/nimserver/friend/add.action', 'POST');
			
			$response = $client->send ([
				'accid'  => $accid,
				'faccid' => $faccid,
				'type'   => $type,
				'msg'    => $msg,
			]);
			
			return $response;
		}
		
		
		public function setSpecialRelation($accid, $targetAcc, $relationType, $value)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/user/setSpecialRelation.action', 'POST');
			
			$response = $client->send ([
				'accid'        => $accid,
				'targetAcc'    => $targetAcc,
				'relationType' => $relationType,
				'value'        => $value,
			]);
			
			return $response;
		}
		
	}