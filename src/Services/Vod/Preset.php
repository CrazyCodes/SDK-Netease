<?php
	
	namespace Live\Services\Vod;
	
	use Live\Libs\HttpClient;
	
	/**
	 * 视频转码模板管理
	 * Class Preset
	 * @package Live\Services\Vod
	 */
	class Preset
	{
		
		/**
		 * 创建视频转码模板
		 *
		 * @param $presetName
		 * @param $sdMp4
		 * @param $hdMp4
		 * @param $shdMp4
		 * @param $sdFlv
		 * @param $hdFlv
		 * @param $shdFlv
		 * @param $sdHls
		 * @param $hdHls
		 * @param $shdHls
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function create($presetName, $sdMp4, $hdMp4, $shdMp4, $sdFlv, $hdFlv, $shdFlv, $sdHls, $hdHls, $shdHls)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/preset/create', 'POST');
			
			$response = $client->send ([
				'presetName' => $presetName,
				'sdMp4'      => $sdMp4,
				'hdMp4'      => $hdMp4,
				'shdMp4'     => $shdMp4,
				'sdFlv'      => $sdFlv,
				'hdFlv'      => $hdFlv,
				'shdFlv'     => $shdFlv,
				'sdHls'      => $sdHls,
				'hdHls'      => $hdHls,
				'shdHls'     => $shdHls,
			]);
			
			return $response;
		}
		
		
		/**
		 * 获取视频转码模板
		 *
		 * @param $presetId
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function get($presetId)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/preset/get', 'POST');
			
			$response = $client->send ([
				'presetId' => $presetId,
			]);
			
			return $response;
		}
		
		/**
		 * 获取视频转码模板列表
		 *
		 * @param $currentPage
		 * @param $pageSize
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function list($currentPage, $pageSize)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/preset/list', 'POST');
			
			$response = $client->send ([
				'currentPage' => $currentPage,
				'pageSize'    => $pageSize,
			]);
			
			return $response;
		}
		
		
		/**
		 * 修改视频转码模板
		 *
		 * @param $presetId
		 * @param $presetName
		 * @param $sdMp4
		 * @param $hdMp4
		 * @param $shdMp4
		 * @param $sdFlv
		 * @param $hdFlv
		 * @param $shdFlv
		 * @param $sdHls
		 * @param $hdHls
		 * @param $shdHls
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function update($presetId, $presetName, $sdMp4, $hdMp4, $shdMp4, $sdFlv, $hdFlv, $shdFlv, $sdHls, $hdHls, $shdHls)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/preset/update', 'POST');
			
			$response = $client->send ([
				'presetId'   => $presetId,
				'presetName' => $presetName,
				'sdMp4'      => $sdMp4,
				'hdMp4'      => $hdMp4,
				'shdMp4'     => $shdMp4,
				'sdFlv'      => $sdFlv,
				'hdFlv'      => $hdFlv,
				'shdFlv'     => $shdFlv,
				'sdHls'      => $sdHls,
				'hdHls'      => $hdHls,
				'shdHls'     => $shdHls,
			]);
			
			return $response;
			
		}
		
		
		/**
		 * 删除视频转码模板
		 * @param $presetId
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function delete($presetId)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/preset/presetDelete', 'POST');
			
			$response = $client->send ([
				'presetId' => $presetId,
			]);
			
			return $response;
		}
		
		
	}