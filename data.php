<?php
$info = json_decode(file_get_contents("info.json"),1);
function save(){
	global $info;
	if(! empty ($info)) 
	file_put_contents("info.json",json_encode($info,448));
}
$token = "7179779615:AAFoFfen1WJTWaRRKbeUek1xI8Bz7VWerVE" ; 
$ch = -1002117097543; //ايدي قناة الصيد
$admin = 6090158249; //الادمن حق البوت
$api_key = ! empty ($info["keey"])?$info["keey"]: null; //api key حق حسابك
require "class.php";
require "Telegram.php";
$bot = new Telegram ($token);
$api = new MainClass($api_key);
/*
النصوص التالية بامكانك التعديل عليها
لكن انتبه من حذف اي كلمة موجوده داخل 
__الكلمة__
مثل 
__number__
لان هذه الكلمة سيتم استبدالها بقيمة معينة
*/
//ملف الصيد
$txt["رسالة الصيد"] =
"
☎️ | الرقم: `+$code$num`
🆔 | ايدي العملية: `$ident`
🎛 | التطبيق: *واتساب*
💰 | السعر: `$$price`
🌍 | الدولة: `$region`
🆔 | معرف المشروع: `$id`
";
$txt["حظر الرقم"] = "
 | إلغاء 🚫
"
;
$txt["طلب الكود"]="
 | تحديث ♻️
";

$txt["فحص الرقم في الواتساب"]="
☆| فحص الرقم في الواتساب -
";
#--------------------------------
//ملف التحكم
$txt["القائمة الرئيسية"]="
❤️ | مرحبا بك مطوري 

☑️ | تحكم في البوت عبر الازرار بلاسفل ⬇️


/work لجعل البوت يبدا الصيد
/stop لجعل البوت يتوقف عن الصيد
";

$txt["| تشغيل الصيد 🔛"] ="
تم تشغيل الصيد
";
$txt["| إيقاف الصيد 🛑"] ="
تم ايقاف الصيد
";


$txt["الكود"]="
تم وصول الكود بنجاح
num: `$ex[2]`
code: `code`

";






