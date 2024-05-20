<?php
require "data.php";
if($info["status"] == "work"){
	if(! empty ($info["countries"])){
		for($i=0;$i<100;$i++) {
			foreach ($info["countries"] as $country) {
				$res = $api->getNumber($country);
				if(empty ($res["Error"] )) {
					$num = $res["num"];
					$ident = $res["ident"];
					$code = $res["code"];
					$price = $res["price"];
					$region = $res["region"];
					$time = $res["time"];
					$id = $res["id"];
					if(empty ($num) || empty ($ident)) continue;
					$txxx  = "
☎️ | الرقم: `$code$num`
🆔 | ايدي العملية: `$ident`
🎛 | التطبيق: *واتساب*
💰 | السعر: `$$price`
🌍 | الدولة: `$region`
🆔 | معرف المشروع: `$id`";
					$bot->sendmessage ([
						"chat_id"=>$ch,
						"text"=>$txxx,
						"parse_mode"=>"markdown",
						"reply_markup"=>json_encode([
							"inline_keyboard"=>[
							[["text"=>trim($txt["فحص الرقم في الواتساب"]),"url"=>"wa.me/$code$num"]],
							[["text"=>trim($txt["طلب الكود"]),"callback_data"=>"getCode#$ident#$code$num"]],
							[["text"=>trim($txt["حظر الرقم"]),"callback_data"=>"ban#$ident#$code$num"]]
							]
						])
					]);
					usleep(100000);
				} else { continue; }
			}
		}
	} else { exit; }
} else { exit; }








