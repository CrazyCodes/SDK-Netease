<?php
	
	namespace Live\Services\Im;
	
	use Live\Libs\HttpClient;
	
	class History
	{
		
		/**
		 * 单聊云端历史消息查询
		 *
		 * @param $from
		 * @param $to
		 * @param $begintime
		 * @param $endtime
		 * @param $limit
		 * @param $reverse
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function querySessionMsg($from, $to, $begintime, $endtime, $limit, $reverse)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/history/querySessionMsg.action', 'POST');
			
			$response = $client->send ([
				'from'      => $from,
				'to'        => $to,
				'begintime' => $begintime,
				'endtime'   => $endtime,
				'limit'     => $limit,
				'reverse'   => $reverse,
			]);
			
			return $response;
		}
		
		
		/**
		 * 群聊云端历史消息查询
		 *
		 * @param $tid
		 * @param $accid
		 * @param $begintime
		 * @param $endtime
		 * @param $limit
		 * @param $reverse
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queryTeamMsg($tid, $accid, $begintime, $endtime, $limit, $reverse)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/history/queryTeamMsg.action', 'POST');
			
			$response = $client->send ([
				'tid'       => $tid,
				'accid'     => $accid,
				'begintime' => $begintime,
				'endtime'   => $endtime,
				'limit'     => $limit,
				'reverse'   => $reverse,
			]);
			
			return $response;
		}
		
		
		/**
		 * 聊天室云端历史消息查询
		 *
		 * @param $tid
		 * @param $accid
		 * @param $begintime
		 * @param $limit
		 * @param $reverse
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queryChatRoomMsg($tid, $accid, $begintime, $limit, $reverse)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/history/queryChatroomMsg.action', 'POST');
			
			$response = $client->send ([
				'roomid'  => $tid,
				'accid'   => $accid,
				'timetag' => $begintime,
				'limit'   => $limit,
				'reverse' => $reverse,
			]);
			
			return $response;
		}
		
		
		/**
		 * 用户登录登出事件记录查询
		 *
		 * @param $accid
		 * @param $begintime
		 * @param $endtime
		 * @param $limit
		 * @param $reverse
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function queryUserEvents($accid, $begintime, $endtime, $limit, $reverse)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/history/queryUserEvents.action', 'POST');
			
			$response = $client->send ([
				'accid'     => $accid,
				'begintime' => $begintime,
				'endtime'   => $endtime,
				'limit'     => $limit,
				'reverse'   => $reverse,
			]);
			
			return $response;
		}
		
		
		/**
		 * 删除音视频/白板服务器录制文件
		 *
		 * @param $channelid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function deleteMediaFile($channelid)
		{
			$client = new HttpClient('https://api.netease.im/nimserver/history/deleteMediaFile.action', 'POST');
			
			$response = $client->send ([
				'channelid' => $channelid,
			]);
			
			return $response;
		}
		
		
		
	}