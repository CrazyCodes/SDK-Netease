<?php
	
	namespace Live\Services\Vod;
	
	use Live\Libs\HttpClient;
	
	/**
	 * 视频分类管理
	 * Class Type
	 * @package Live\Services\Vod
	 */
	class Type
	{
		/**
		 * 创建视频分类
		 *
		 * @param $typeName
		 * @param $description
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function create($typeName, $description)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/type/create', 'POST');
			
			$response = $client->send ([
				'typeName'    => $typeName,
				'description' => $description,
			]);
			
			return $response;
		}
		
		
		/**
		 * 获取视频分类
		 *
		 * @param $typeId
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function get($typeId)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/type/get', 'POST');
			
			$response = $client->send ([
				'typeId' => $typeId,
			]);
			
			return $response;
		}
		
		
		/**
		 * 获取视频分类列表
		 *
		 * @param $currentPage
		 * @param $pageSize
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function list($currentPage, $pageSize)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/type/list', 'POST');
			
			$response = $client->send ([
				'currentPage' => $currentPage,
				'pageSize'    => $pageSize,
			]);
			
			return $response;
		}
		
		
		/**
		 * 删除视频分类
		 *
		 * @param $typeId
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function delete($typeId)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/type/typeDelete', 'POST');
			
			$response = $client->send ([
				'typeId' => $typeId,
			]);
			
			return $response;
		}
		
		
		/**
		 * 设置视频的分类
		 *
		 * @param $vid
		 * @param $typeId
		 *
		 * @return \Psr\Http\Message\StreamInterface
		 */
		public function set($vid, $typeId)
		{
			$client = new HttpClient('https://vcloud.163.com/app/vod/type/set', 'POST');
			
			$response = $client->send ([
				'vid'    => $vid,
				'typeId' => $typeId,
			]);
			
			return $response;
		}
		
		
	}