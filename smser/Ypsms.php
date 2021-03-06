<?php
	
	namespace zyj\smser;

	use Yii;
	use yii\base\InvalidConfigException;
	/**
	 * 	云片短信平台
	 * 	
	 * 	@author zyj
	 */
	class Ypsms extends Smser
	{
		/**
		 * 	请求地址
		 * 
		 * 	@var string
		 */
		public $url = 'http://yunpian.com/v1/sms/send.json';


		/**
		 * 发送短信
		 * 
		 * 	@var string $mobile  例如"13861248964;150519888";
		 *	@var string $content 
		 *	@return boolean
		 */
		public 	function sendSms($mobile,$content)
		{
			$data = [
				'apikey'=>$this->apikey,
				'mobile'=>$mobile,
				'text'=>$content
			];
			$res = $this->postRequire($data);
			$result = json_decode($res);
			$result_code = $result->code;

			$result_msg = $result->msg;
			if($result_code == 0){
				$this->state = true;
				$this->message = '发送成功';
			}else{
				$this->state = false;
				$this->message = $result_msg;
			}

			return $this->state;
		}

		
	}
?>