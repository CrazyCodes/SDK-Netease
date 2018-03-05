<?php
	
	namespace Live\Libs;
	
	use GuzzleHttp\Client;
	
	class HttpClient
	{
		protected $appKey = "2b7244426da35b5bc786d266c26b4760";
		protected $appSecret = "346091cc5527";
		protected $nonce;
		protected $curTime;
		protected $checkSum;
		protected $url;
		protected $method;
		
		
		public function __construct($url, $method)
		{
			$this->nonce    = mt_rand (100000, 999999);
			$this->curTime  = time ();
			$this->checkSum = Sign::getCheckSum ($this->appSecret, $this->nonce, $this->curTime);
			$this->url      = $url;
			$this->method   = $method;
			
		}
		
		public function send($params)
		{
			$client = new Client();
			
			$response = $client->request ($this->method, $this->url,
				['headers'     =>
					 [
						 'Content-Type' => 'application/x-www-form-urlencoded;charset=utf-8',
						 'AppKey'         => $this->appKey,
						 'Nonce'          => $this->nonce,
						 'CurTime'        => $this->curTime,
						 'CheckSum'       => $this->checkSum,
					 ],
				 'form_params' => $params,
				]
			);
			
			return $response->getBody ();
		}
		
		
	}