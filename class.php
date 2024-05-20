<?php


class MainClass
{
	private $key;
	private $link = 'https://smscode.biz/smsapi/handler/';
	public function __construct($key) {
		$this->key = $key;
		return true;
	}
	public function returnLinkWithMethodAndMainData($method) {
		return $this->link . $method .  '?apiKey=' . $this->key;
	}
	
	// get number
	public function getNumber($countryCode) {
		$get = json_decode(file_get_contents($this->returnLinkWithMethodAndMainData("getPhoneV2") . "&lang=en&service=WhatsApp&channel=any&price=103.95&country=$countryCode"));
		if ($get->code == 0) {
		    $phone = $data['data']['phone'];
			$num = $get->data->phone;
			$ident = $get->data->orderNumber;
			$code = $get->data->code;
			$price = $get->data->price;
			$region = $get->data->region;
			$time = $get->data->time;
			$id = $get->data->id;
			if (empty($num))
				return array(
					'Error' => 'empty number'
				);
			else
				return array(
					'Error' => null,
					'num' => $num,
					'ident' => $ident,
					'price' => $price,
					'region' => $region,
					'time' => $time,
					'id' => $id,
					'code' => $code
			);
		} else {
			return array(
				'Error' => $get->msg
			);
		}
	}
	public function getCode($ident) {
		$get = json_decode(file_get_contents($this->returnLinkWithMethodAndMainData("getCode") . "&lang=en&orderNumber=$ident"));
		if ($get->code ==0) {
			$code = $get->data;
			$sms = $get->data;
			if (empty($code))
				return array(
					'Error' => 'empty code'
				);
			else
				return array(
					'Error' => null,
					'code' => $code,
					'sms' => $sms
				);
		} else {
			return array(
				'Error' => $get->msg
			);
		}
	}
	public function banNum($ident) {
		$get = json_decode(file_get_contents($this->returnLinkWithMethodAndMainData("back") . "&lang=en&orderNumber=$ident&status=5"));
		return $get->msg;
	}
}