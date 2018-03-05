<?php
	
	namespace Live\Services\Im;
	
	use Live\Libs\HttpClient;
	
	class ChatRoom
	{
		
		/**
		 * 创建聊天室
		 *
		 * @param $creator
		 * @param $name
		 * @param $announcement
		 * @param $broadcast_url
		 * @param $ext
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function create($creator, $name, $announcement, $broadcast_url, $ext)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/create.action', 'POST');
			
			$response = $client->send ([
				'creator'      => $creator,
				'name'         => $name,
				'announcement' => $announcement,
				'broadcasturl' => $broadcast_url,
				'ext'          => $ext,
			]);
			
			return $response;
		}
		
		/**
		 * 查询聊天室信息
		 *
		 * @param $roomId
		 * @param $needOnlineUserCount
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function get($roomId, $needOnlineUserCount)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/get.action', 'POST');
			
			$response = $client->send ([
				'roomid'              => $roomId,
				'needOnlineUserCount' => $needOnlineUserCount,
			]);
			
			return $response;
		}
		
		
		/**
		 * 更新聊天室信息
		 *
		 * @param $roomId
		 * @param $name
		 * @param $announcement
		 * @param $broadcasturl
		 * @param $ext
		 * @param $needNotify
		 * @param $notifyExt
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function update($roomId, $name, $announcement, $broadcasturl, $ext, $needNotify, $notifyExt)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/update.action', 'POST');
			
			$response = $client->send ([
				'roomid'       => $roomId,
				'name'         => $name,
				'announcement' => $announcement,
				'broadcasturl' => $broadcasturl,
				'ext'          => $ext,
				'needNotify'   => $needNotify,
				'notifyExt'    => $notifyExt,
			]);
			
			return $response;
		}
		
		
		/**
		 * 修改聊天室开/关闭状态
		 *
		 * @param $roomId
		 * @param $operator
		 * @param $valid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function toggleCloseStat($roomId, $operator, $valid)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/toggleCloseStat.action', 'POST');
			
			$response = $client->send ([
				'roomid'   => $roomId,
				'operator' => $operator,
				'valid'    => $valid,
			]);
			
			return $response;
		}
		
		
		/**
		 * 设置聊天室内用户角色
		 *
		 * @param $roomId
		 * @param $operator
		 * @param $target
		 * @param $opt
		 * @param $optvalue
		 * @param $notifyExt
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function setMemberRole($roomId, $operator, $target, $opt, $optvalue, $notifyExt)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/setMemberRole.action', 'POST');
			
			$response = $client->send ([
				'roomid'    => $roomId,
				'operator'  => $operator,
				'target'    => $target,
				'opt'       => $opt,
				'optvalue'  => $optvalue,
				'notifyExt' => $notifyExt,
			]);
			
			return $response;
		}
		
		
		/**
		 * 请求聊天室地址
		 *
		 * @param $roomId
		 * @param $accid
		 * @param $clienttype
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function requestAddress($roomId, $accid, $clienttype)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/requestAddr.action', 'POST');
			
			$response = $client->send ([
				'roomid'     => $roomId,
				'accid'      => $accid,
				'clienttype' => $clienttype,
			]);
			
			return $response;
		}
		
		
		/**
		 * 发送聊天室消息
		 *
		 * @param $roomId
		 * @param $msgId
		 * @param $fromAccid
		 * @param $msgType
		 * @param $resendFlag
		 * @param $attach
		 * @param $ext
		 * @param $antispam
		 * @param $antispamCustom
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function sendMsg($roomId, $msgId, $fromAccid, $msgType, $resendFlag, $attach, $ext, $antispam, $antispamCustom)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/sendMsg.action', 'POST');
			
			$response = $client->send ([
				'roomid'         => $roomId,
				'msgId'          => $msgId,
				'fromAccid'      => $fromAccid,
				'msgType'        => $msgType,
				'resendFlag'     => $resendFlag,
				'attach'         => $attach,
				'ext'            => $ext,
				'antispam'       => $antispam,
				'antispamCustom' => $antispamCustom,
			]);
			
			return $response;
		}
		
		
		/**
		 * 往聊天室内添加机器人
		 *
		 * @param $roomId
		 * @param $accids
		 * @param $roleExt
		 * @param $notifyExt
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function addRobot($roomId, $accids, $roleExt, $notifyExt)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/addRobot.action', 'POST');
			
			$response = $client->send ([
				'roomid'    => $roomId,
				'accids'    => $accids,
				'roleExt'   => $roleExt,
				'notifyExt' => $notifyExt,
			]);
			
			return $response;
		}
		
		
		/**
		 * 从聊天室内删除机器人
		 *
		 * @param $roomId
		 * @param $accids
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function removeRobot($roomId, $accids)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/removeRobot.action', 'POST');
			
			$response = $client->send ([
				'roomid' => $roomId,
				'accids' => $accids,
			]);
			
			return $response;
		}
		
		
		/**
		 * 设置临时禁言状态
		 *
		 * @param $roomId
		 * @param $operator
		 * @param $target
		 * @param $muteDuration
		 * @param $needNotify
		 * @param $notifyExt
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function temporaryMute($roomId, $operator, $target, $muteDuration, $needNotify, $notifyExt)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/temporaryMute.action', 'POST');
			
			$response = $client->send ([
				'roomid'       => $roomId,
				'operator'     => $operator,
				'target'       => $target,
				'muteDuration' => $muteDuration,
				'needNotify'   => $needNotify,
				'notifyExt'    => $notifyExt,
			]);
			
			return $response;
		}
		
		
		/**
		 * 往聊天室有序队列中新加或更新元素
		 *
		 * @param $roomId
		 * @param $key
		 * @param $value
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queueOffer($roomId, $key, $value)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/queueOffer.action', 'POST');
			
			$response = $client->send ([
				'roomid' => $roomId,
				'key'    => $key,
				'value'  => $value,
			]);
			
			return $response;
		}
		
		
		/**
		 * 从队列中取出元素
		 *
		 * @param $roomId
		 * @param $key
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queuePoll($roomId, $key)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/queuePoll.action', 'POST');
			
			$response = $client->send ([
				'roomid' => $roomId,
				'key'    => $key,
			]);
			
			return $response;
		}
		
		
		/**
		 * 排序列出队列中所有元素
		 *
		 * @param $roomId
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queueList($roomId)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/queueList.action', 'POST');
			
			$response = $client->send ([
				'roomid' => $roomId,
			]);
			
			return $response;
		}
		
		
		/**
		 * 删除清理整个队列
		 *
		 * @param $roomId
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queueDrop($roomId)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/queueDrop.action', 'POST');
			
			$response = $client->send ([
				'roomid' => $roomId,
			]);
			
			return $response;
		}
		
		
		/**
		 * 初始化队列
		 *
		 * @param $roomId
		 * @param $sizeLimit
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queueInit($roomId, $sizeLimit)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/queueInit.action', 'POST');
			
			$response = $client->send ([
				'roomid'    => $roomId,
				'sizeLimit' => $sizeLimit,
			]);
			
			return $response;
		}
		
		
		/**
		 *
		 * 将聊天室整体禁言
		 *
		 * @param $roomId
		 * @param $operator
		 * @param $mute
		 * @param $needNotify
		 * @param $notifyExt
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function muteRoom($roomId, $operator, $mute, $needNotify, $notifyExt)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/muteRoom.action', 'POST');
			
			$response = $client->send ([
				'roomid'     => $roomId,
				'operator'   => $operator,
				'mute'       => $mute,
				'needNotify' => $needNotify,
				'notifyExt'  => $notifyExt,
			]);
			
			return $response;
		}
		
		
		/**
		 * 查询聊天室统计指标TopN
		 *
		 * @param $topn
		 * @param $timestamp
		 * @param $period
		 * @param $orderby
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function topn($topn, $timestamp, $period, $orderby)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/topn.action', 'POST');
			
			$response = $client->send ([
				'topn'      => $topn,
				'timestamp' => $timestamp,
				'period'    => $period,
				'orderby'   => $orderby,
			]);
			
			return $response;
		}
		
		
		/**
		 * 分页获取成员列表
		 *
		 * @param $roomid
		 * @param $type
		 * @param $endtime
		 * @param $limit
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function membersByPage($roomid, $type, $endtime, $limit)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/membersByPage.action', 'POST');
			
			$response = $client->send ([
				'roomid'  => $roomid,
				'type'    => $type,
				'endtime' => $endtime,
				'limit'   => $limit,
			]);
			
			return $response;
		}
		
		
		/**
		 * 批量获取在线成员信息
		 *
		 * @param $roomid
		 * @param $accids
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queryMembers($roomid, $accids)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/queryMembers.action', 'POST');
			
			$response = $client->send ([
				'roomid' => $roomid,
				'accids' => \GuzzleHttp\json_encode ($accids),
			]);
			
			return $response;
		}
		
		
		/**
		 *
		 * 变更聊天室内的角色信息
		 * @param $roomid
		 * @param $accid
		 * @param $save
		 * @param $needNotify
		 * @param $notifyExt
		 * @param $nick
		 * @param $avator
		 * @param $ext
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function updateMyRoomRole($roomid, $accid, $save, $needNotify, $notifyExt, $nick, $avator, $ext)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/chatroom/updateMyRoomRole.action', 'POST');
			
			$response = $client->send ([
				'roomid'     => $roomid,
				'accid'      => $accid,
				'save'       => $save,
				'needNotify' => $needNotify,
				'notifyExt'  => $notifyExt,
				'nick'       => $nick,
				'avator'     => $avator,
				'ext'        => $ext,
			]);
			
			return $response;
		}
		
		
	}