<?php
	
	namespace Live\Services;
	
	use Live\Libs\HttpClient;
	
	/**
	 * 直播Api
	 * Class ChannelService
	 * @package Live
	 */
	class Channel
	{
		/**
		 * 创建频道
		 *
		 * @param $name
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function create($name)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channel/create', 'POST');
			
			$response = $client->send ([
				'name' => $name,
				'type' => 0,
			]);
			
			return $response;
		}
		
		/**
		 * 修改频道
		 *
		 * @param $name
		 * @param $cid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function update($name, $cid)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channel/update', 'POST');
			
			$response = $client->send ([
				'name' => $name,
				'cid'  => $cid,
				'type' => 0,
			]);
			
			return $response;
		}
		
		
		/**
		 * 删除频道
		 *
		 * @param $cid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function delete($cid)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channel/delete', 'POST');
			
			$response = $client->send ([
				'cid' => $cid,
			]);
			
			return $response;
		}
		
		
		/**
		 * 获取频道状态
		 *
		 * @param $cid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function channelStats($cid)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channelstats', 'POST');
			
			$response = $client->send ([
				'cid' => $cid,
			]);
			
			return $response;
		}
		
		
		/**
		 * @param $records 单页记录数，默认值为10
		 * @param $pnum    要取第几页，默认值为1
		 * @param $ofield  排序的域，支持的排序域为：ctime（默认）
		 * @param $sort    升序还是降序，1升序，0降序，默认为desc
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function channelList($records, $pnum, $ofield, $sort)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channellist', 'POST');
			
			$response = $client->send ([
				'records' => $records,
				'pnum'    => $pnum,
				'ofield'  => $ofield,
				'sort'    => $sort,
			]);
			
			return $response;
		}
		
		
		/**
		 * 重新获取推流地址
		 *
		 * @param $cid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function address($cid)
		{
			$client = new HttpClient('https://vcloud.163.com/app/address', 'POST');
			
			$response = $client->send ([
				'cid' => $cid,
			]);
			
			return $response;
		}
		
		
		/**
		 * 设置频道为录制状态
		 *
		 * @param $cid
		 * @param $needRecord
		 * @param $format
		 * @param $duration
		 * @param $filename
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function setAlwaysRecord($cid, $needRecord, $format, $duration, $filename)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channel/setAlwaysRecord', 'POST');
			
			$response = $client->send ([
				'cid'        => $cid,
				'needRecord' => $needRecord,
				'format'     => $format,
				'duration'   => $duration,
				'filename'   => $filename,
			]);
			
			return $response;
		}
		
		
		/**
		 * 禁用频道
		 *
		 * @param $cid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function pause($cid)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channel/pause', 'POST');
			
			$response = $client->send ([
				'cid' => $cid,
			]);
			
			return $response;
		}
		
		
		/**
		 * 批量禁用频道
		 *
		 * @param $cidList
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function listPause($cidList)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channel/pause', 'POST');
			
			$response = $client->send ([
				'cidList' => \GuzzleHttp\json_encode ($cidList),
			]);
			
			return $response;
		}
		
		
		/**
		 * 恢复频道 - 恢复用户被禁用的频道
		 *
		 * @param $cid
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function resume($cid)
		{
			$client = new HttpClient('https://vcloud.163.com/app/channel/resume', 'POST');
			
			$response = $client->send ([
				'cid' => $cid,
			]);
			
			return $response;
		}
		
		
		/**
		 * 获取录制视频文件列表
		 *
		 * @param $cid
		 * @param $records
		 * @param $pnum
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function videoList($cid, $records, $pnum)
		{
			$client = new HttpClient('https://vcloud.163.com/app/videolist', 'POST');
			
			$response = $client->send ([
				'cid'     => $cid,
				'records' => $records,
				'pnum'    => $pnum,
			]);
			
			return $response;
		}
		
		
		/**
		 * 获取某一时间范围的录制视频文件列表
		 *
		 * @param $cid
		 * @param $beginTime
		 * @param $endTime
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function vodVideoList($cid, $beginTime, $endTime)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vodvideolist', 'POST');
			
			$response = $client->send ([
				'cid'       => $cid,
				'beginTime' => $beginTime,
				'endTime'   => $endTime,
			]);
			
			return $response;
		}
		
		
		/**
		 * 设置视频录制回调地址
		 *
		 * @param $recordClk
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function setCallback($recordClk)
		{
			$client = new HttpClient('https://vcloud.163.com/app/record/setcallback', 'POST');
			
			$response = $client->send ([
				'recordClk' => $recordClk,
			]);
			
			return $response;
		}
		
		
		/**
		 * 设置回调的加签秘钥
		 *
		 * @param $signKey
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function setSignKey($signKey)
		{
			$client = new HttpClient('https://vcloud.163.com/app/callback/setSignKey', 'POST');
			
			$response = $client->send ([
				'signKey' => $signKey,
			]);
			
			return $response;
		}
		
		/**
		 * 录制文件合并
		 *
		 * @param $outputName
		 * @param $vidList
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function videoMerge($outputName, $vidList)
		{
			$client = new HttpClient('https://vcloud.163.com/app/video/merge', 'POST');
			
			$response = $client->send ([
				'outputName' => $outputName,
				'vidList'    => $vidList,
			]);
			
			return $response;
		}
	}