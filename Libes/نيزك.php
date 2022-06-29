<?php
#  : @ww210
ob_start();
define('API_KEY','5592352708:AAFumNbS3fTVXDZhpA7cle-KlTl52T2TOis ');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

if($text=="/start"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"hello",
	]);
	}


if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;

/*===== dev ~ @THTSS =====*/
 
 date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
$SAIEDRO = file_get_contents("SAIED/RO$SAIEDC.txt");

/*===== dev ~ @THTSS =====*/
$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."*➺*".$developers_infos."\n➖➖➖➖➖➖➖\n📨¦ الٱيـديـٱت :\n" ."*➺*`".$developers_info . "`";
// info mangers //
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
// info admins //
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
// info mmaz //
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
// info dogs //
$joksss = file_get_contents("data/jok/$chat_id.txt");
$jokid  = explode("\n",$joksss);
$jokl = file_get_contents("data/jok/$chat_id/jok.txt");
$jokll = explode ("\n",$jokl);
$jokv = file_get_contents("data/jok/$chat_id/joks.txt");
$jokss = explode ("\n",$jokv);
// info joks //
$dogsss = file_get_contents("data/dog/$chat_id.txt");
$dogid  = explode("\n",$dogsss);
$dogl = file_get_contents("data/dog/$chat_id/dog.txt");
$dogll = explode ("\n",$dogl);
$dogv = file_get_contents("data/dog/$chat_id/dogs.txt");
$dogss = explode ("\n",$dogv);
// folders auto //
mkdir("data");
mkdir("data/developers");
mkdir("data/dog");
mkdir("data/dog/$chat_id");
mkdir("data/jok");
mkdir("data/jok/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
if(!$re_user){
$usew = "$first_name";
}elseif($re_user){
$usew = "@$re_user";
}
// info mangers //
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
// info admins //
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
// info mmaz //
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
// folders auto //
mkdir("data");
mkdir("data/developers");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");

/*===== dev ~ @THTSS =====*/

if($text =="ايدي" | $text =="السورس" | $text =="/start" | $text =="تفعيل" | $text =="تعطيل" | $text =="الاعدادات" | $text =="سورس" | $text =="الاوامر" | $text =="م1" | $text =="م2" | $text =="م3" | $text =="م4" | $text =="م6"){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$alwsh&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️ ¦ مرحبا بگ عزيزي 🙇‍♂،
👾 ¦ لا يمڪنـك استخدام البوت ،
📟 ¦ عليك الإشتراگ في قناة البوت ،
🖲 ¦ القناة ~⪼ $alwsh ،
",
]);return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}


/*===== dev ~ @THTSS =====*/
if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في المجموعة 💂";
}elseif(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "من المطورين 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$username){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "$username";
}
/*===== dev ~ @THTSS =====*/
if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
			file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
			file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مطور
✓️

",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم رفعه مطور سابقا
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" || $text == "تنزيل المطور"  and in_array($re_id,$developer)){
	$re_id_info = file_get_contents("data/developers/$chat_id.txt");
	$devr = file_get_contents("data/developers/$chat_id/developer.txt");
	$devr1 = explode("             \n",$devr);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" - @" . $re_user . " » " . $re_id . "❉","",$devr1);
	file_put_contents("data/developers/developer.txt",$str);
			file_put_contents("data/developers/developers.txt",$str);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من مطور البوت
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل المطور" || $text == "تنزيل مطور" || $text == "تنزيل ورديسسس" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من المطورين بالفعل
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($re and $text == "رفع مطور اساسي" and $re_id !=$id_Bot and  in_array($from_id,$Dev)){
			file_put_contents("$re_id.txt",$re_id);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مطور اساسي
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}


if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور اساسي" || $text == "تنزيل مطور الاساسي"  and in_array($re_id,$Dev)){
			file_put_contents("$re_id.txt","");
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من المطورين الاساسين
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}

if($text == "مسح المطورين" and   in_array($from_id,$Dev)){
			file_put_contents("data/developers/developer.txt"," ");
			file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم مسح المطورين بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√

",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين"  and   in_array($from_id,$Dev) and $developers_info != NULL and $developers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*👨🏽‍💻¦ قائمه الـمـطـوريـن :*\n\n*➺* ❲* معرفك باليز *❳ *»* *❲* `$sudo` *❳*\n➖➖➖➖➖➖➖\n📨¦ الـمعرفـٱت :\n$list_developers\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين" and   in_array($from_id,$Dev) and $developers_info == NULL || $developers_info == " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*👨🏽‍💻¦ قائمه الـمـطـوريـن :*\n\n*➺* ❲* معرفك باليز *❳ *»* *❲* `$sudo` *❳*\n➖➖➖➖➖➖➖\n📨¦ لٱ يـوجد مطورين حٱليا",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "رتبتي" and in_array($from_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"🎫¦ رتبتك » مطور البوت 👨🏻‍",'reply_to_message_id'=>$message->message_id,
]);
}



if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع مدير" || $text == "رفع المدير"  and !in_array($re_id,$manger)){
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مدير
✓️
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته مدير سابقا
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المدراء" ){
			file_put_contents("data/manger/$chat_id.txt","");
			file_put_contents("data/manger/$chat_id.txt","");
			file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم  مسح المدراء بنجاح
🖲┇بواسطة »﹙$info﹚

√
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من رتبة مدير
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل منشئ" || $text == "تنزيل المنشئ" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من المدارء سابقا
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*📋¦ قائمه المدراء :*
$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*📋¦ قائمه المدراء :
📛| Not Director ~⪼ لا يوجد مدراء !*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع ادمن"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح ادمن
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع ادمن" || $text == "رفع ادمن" || $text == "رفع منشئ"  and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من الادمن 
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح الادمنيه" ){
			file_put_contents("data/admin_user/$chat_id.txt","");
			file_put_contents("data/admin_user/$chat_id.txt","");
			file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم مسح الادمنية بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من الادمنية
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من الادمنية سابقا
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and !in_array($re_id,$mmyaz)){
			file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مميز
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مميز"  and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته مميز سابقا
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المميزين" ){
			file_put_contents("data/mmyaz/$chat_id.txt","");
			file_put_contents("data/mmyaz/$chat_id.txt","");
			file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم مسح المميزين بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من المميزين
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من المميزين سابقا
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $mmyazs_info != NULL and $mmyazs_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*📋¦ قائمه المميزين :*
$mmyazs_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" ||  $text == "قائمه المميزين" and $mmyazs_info == NULL || $mmyazs_info == " " || $mmyazs_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*📋¦ قائمه المميزين :
📛| Not Director ~⪼ لا يوجد مميزين !*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if( $text =="الادمنية"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."l "."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
المالك  $owner | @$owner2
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎قائمة المشرفين
$msg
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎قائمة الادمنية بالبوت
$admin_users_infos
",
'reply_to_message_id'=>$message_id,

'parse_mode'=>"MarkDown",
 ]);
	}
}
if( $text =="المشرفين" or $text == "الادمنيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️❉ منشى المجموعة :-
❉ $owner ➻ @$owner2

👮🏽‍♂❉ الاداريين | المشرفين :-
$msg
",
'reply_to_message_id'=>$message_id,

'parse_mode'=>"MarkDown",
 ]);
	}
}

if( $text =="رفع الادمنيه" or $text == "رفع الادمنية"){
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم رفع { $cmsg } من الادمنية
🖲┇بواسطة » ﹙ $info ﹚

√
",
'reply_to_message_id'=>$message_id,
 ]);
	}
}

/*===== dev ~ @THTSS =====*/

if($settings["lock"]["link"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if (strstr($text ,"t.me") == true or strstr($text ,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// lock photo
if($settings["lock"]["photo"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->photo){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
/*
كود حذف انلاين يعمل لبوتات الحماية
@Bots_Syria
*/
$inline = json_decode(file_get_contents('php://input'),true);
if($settings["lock"]["inline"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if(isset($inline['message']['reply_markup']['inline_keyboard'][0][0]['text'])){
bot('deleteMessage',[
'chat_id'=>$message->chat->id,
'message_id'=>$message->message_id
]);
}}}
// gif
if($settings["lock"]["gif"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// document
if($settings["lock"]["document"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// video
if($settings["lock"]["video"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->video){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
if ($settings["lock"]["ar"] == "مقفول️"){
if (strstr($text,"ض") == true  or strstr($text,"ص") == true or strstr($text,"ق") == true  or  strstr($text,"ف") == true   or strstr($text,"غ") == true or  strstr($text,"ع") == true  or strstr($text,"ه") == true or strstr($text,"خ") == true  or  strstr($text,"ح") == true   or strstr($text,"ج") == true or strstr($text,"ش") == true  or strstr($text,"س") == true or strstr($text,"ي") == true  or  strstr($text,"ب") == true   or strstr($text,"ل") == true or  strstr($text,"ا") == true  or strstr($text,"ت") == true or strstr($text,"ن") == true  or  strstr($text,"م") == true   or strstr($text,"ك") == true or strstr($text,"ظ") == true or strstr($text,"ط") == true  or  strstr($text,"ذ") == true   or strstr($text,"د") == true or  strstr($text,"ز") == true  or strstr($text,"ر") == true or strstr($text,"و") == true  or  strstr($text,"ة") == true   or strstr($text,"ث") == true or strstr($text,"ؤ") == true  or strstr($text,"ء") == true or strstr($text,"ى") == true  or  strstr($text,"ئ") == true   or strstr($text,"آ") == true or  strstr($text,"إ") == true  or strstr($text,"أ") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["en"] == "مقفول️"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// edit 
if($editgetsettings["lock"]["edit"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $mmyaz && $edit_for_id != $developer){
if ($update->edited_message->text){  
bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
  }
}
}

// contact
if ($settings["lock"]["contact"] == "مقفول"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
$edit_media  = $update->edited_message->message_id;
$edit_chat_id_media = $update->edited_message->chat->id;
$edit_medias  = $update->edited_message->text;
$video_media = $update->edited_message->video;
$voice_media = $update->edited_message->voice;
$photo_media = $update->edited_message->photo;
$document_media = $update->edited_message->document;
$audio_media = $update->edited_message->audio;
$location_media = $update->edited_message->location;

if ($editgetsettings["lock"]["editmd"] == "مقفول"){
	if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $mmyaz && $edit_for_id != $developer){
if(edit_medias || $photo_media || $document_media || $video_media || $voice_media || $audio_media || $location_media || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$edit_medias) ){
bot('deleteMessage',[
'chat_id'=>$edit_chat_id_media,
'message_id'=>$edit_media,
]);
}
}
}

// tag
if ($settings["lock"]["tag"] == "مقفول"){
if (strstr($text ,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}// username 
if ($settings["lock"]["username"] == "مقفول"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// audio
if ($settings["lock"]["audio"] == "مقفول"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// voice 
if ($settings["lock"]["voice"] == "مقفول"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}


if($settings["lock"]["bot"] == "مقفول"){
if ($message->new_chat_member->is_bot) {
$hardmodeboot = $settings["information"]["hardmodeboot"];
if($hardmodeboot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
  }
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}

if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}


if($settings["lock"]["bot"] == "مقفول"){
if ($message->new_chat_member->is_bot) {
$hardmodeboot = $settings["information"]["hardmodeboot"];
if($hardmodeboot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
  }
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}

// sticker is_sticker
if ($settings["lock"]["sticker"] == "مقفول"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["is_sticker"] == "مقفول"){
if($update->message->sticker->is_sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// forward
if ($settings["lock"]["forward"] == "مقفول"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// fosh 
if ($settings["lock"]["fosh"] == "مقفول"){
if (strstr($text ,"كس") == true  or strstr($text ,"ذب") == true or strstr($text ,"اير") == true  or  strstr($text ,"شرموطة") == true   or strstr($text ,"الاسد") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// muteall
if ($settings["lock"]["mute_all"] == "مقفول"){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
// replay
if ($settings["lock"]["reply"] == "مقفول"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "مقفول"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "مقفول"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "مقفول"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}



if($settings["information"]["add"] == "مقفول") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}

if($settings["information"]["add"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
            if($youadding < $setadd){
			if($addtext == false){
            bot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"
🙍‍♂╽❯ العضو [$from_id](tg://user?id=$from_id) 
📡╽❯ قم بإضافة ⊱ $setadd ⊰ للتكلم
➺",'parse_mode'=>"markdown",'disable_web_page_preview'=>true
            ]);
            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}


 

if($message){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}

 if($msgs['msgs'][$chat_id][$from_id]>100){
  $p_pppp = array(
    "5%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>150){
  $p_pppp = array(
    "10%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>200){
  $p_pppp = array(
    "15%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>250){
  $p_pppp = array(
    "23%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>300){
  $p_pppp = array(
    "29%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>350){
  $p_pppp = array(
    "35%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>400){
  $p_pppp = array(
    "42%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>450){
  $p_pppp = array(
    "52%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>500){
  $p_pppp = array(
    "58%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>550){
  $p_pppp = array(
    "63%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>600){
  $p_pppp = array(
    "66%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>650){
  $p_pppp = array(
    "69%");
  $markst = array_rand($p_pppp,1);}
    if($msgs['msgs'][$chat_id][$from_id]>800){
  $p_pppp = array(
    "75%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>1000){
  $p_pppp = array(
    "80%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>5000){
  $p_pppp = array(
    "92%");
  $markst = array_rand($p_pppp,1);}
  if($msgs['msgs'][$chat_id][$from_id]>10000){
  $p_pppp = array(
    "99.9%");
  $markst = array_rand($p_pppp,1);}
$photo = "https://t.me/$user";
if($text==""){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);}

$Free1 = array("ماشاء الله ، 😔😹","منور بالكروب ؟ ☹️💚","سبحان الله 😻💛","نورت الكون 😔😹","هذه صورتك 😔😹","صل على محمد 💗😔","اللهم بارك😻👌","ممكن بوسه💋💔","انتبه العيون👌💔 ","ياروعاتك حبيبي😣😻","حلوة جدا 🙊","انت عمري 😴💔","يووو والجمال🌜🧐","صورتك غيرها🖤🙃","ممكن نتصور 🤳😹","صورة مو حلوة ??","افضل صورة 💜","اعجبتني 😉","شكلك انيق 😽","والله قووووه 😎","Very Nice 😍","روووووعة 🤗","ذوقك حلو👌");
$Free2 = array_rand($Free1,1);
$mid = file_get_contents("mid.txt");
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] < 0 and $mid == null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✔"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
" ,
]);
}}}}}


if($file_id == NULL){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$ZZ_BB = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$ZZ_BB = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('غير متفاعل ✘', 'ضعيف 🥀 ',);
$ZZ_BB = array_rand($active,1);
}

 
if(!$rep && $text=="ايدي"){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
  var_dump(
bot("sendphoto",[
  "chat_id"=>$chat_id,
  "caption"=>"
🎭¦ صورتك ↫ $Free1[$Free2]
⚜¦ اسمك ↫ $first_name 
📟¦ معرفك ↫﹙[@$usr] ﹚
🎫¦ ايديك ↫ ﹙ `$from_id` ﹚
🛰¦ رتبتك ↫ ﹙ $info ﹚
🍁¦ تفاعلك ↫ ﹙ $active[$ZZ_BB] ﹚
🎦¦ عدد صورك ↫﹙ $count ﹚
📨¦ رسائلك ↫ ❲ ".$msgs[ msgs ][$chat_id][$from_id]." ❳
-----------------------",
"photo"=>"$file_id",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]));
  }
}

 
//  game
if($settings["lock"]["game"] == "مقفول"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// location
if ($settings["lock"]["location"] == "مقفول"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
function check_filter($str){
	global $filterget;
	foreach($filterget as $d){
		if (mb_strpos($str, $d) !== false) {
			return true;
		}
	}
}

// filter
if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$text");
if ($check == true) {
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    ]);
}
}
}

if( $text =="قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📌¦ قائمة کلمات الممنوعة في مجموعة
〰〰〰〰〰〰〰〰〰〰〰〰
$result",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "فلتر ") !== false or strpos($text , "امنع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text1 = str_replace(['فلتر ','امنع'],'',$text);
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📌┊❯ تم منع الكلمة ⊱ *$text1* ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text1";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔘┋لم يتم تفعيل البوت في مجموعتك⁉️┋ يرجى تفعيل البوت في المجموعة
☑️┋يمكنك تفعيل البوت مجانا م̷ـــِْن خلال ارسال كلمة { • تفعيل • }",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( strpos($text  , "الغاء فلتر") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$text1 = str_replace(['الغاء فلترة'],'',$text );
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📌┊❯ تم الغاء منع الكلمة ⊱ *$text1* ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text1,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif( $text =="مسح قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️ • تم مسح قائمة المنع • ✅
",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}


// setrules
if($settings["information"]["step"] == "setrules"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text ");
if($plus < 600) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📌┊❯ تم وضع ⊱ قوانين ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["rules"]="$text";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
❗️ لا يمكنك وضع اكثر من ⊱ *600* ⊰ حرف
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
// lock channel 
if($settings["information"]["lockchannel"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
			if($channeltext == false){
            bot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"
🙍‍♂╽❯ العضو [$from_id](tg://user?id=$from_id) 
📡╽❯ اشترك هنا للتحدث $usernamechannel
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
            ]);
            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($text  , '@') !== false) {
$plus = mb_strlen("$text ");
if($plus < 25) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📌┊❯ تم وضع ⊱ @$text ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
👮‍♂╽❯ انتبه للبوت ان يكون مشرف
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["setchannel"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⚠️┇خطا المعرف غير مسموح به",
  'reply_to_message_id'=>$message_id,
      
                     
               
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⚠️┇خطأ يجب ان تضع @ للمعرف  
🔰┇مثال • @$channel •√
",
  'reply_to_message_id'=>$message_id,
               
 ]);
}
}
}
}
// setwelcome
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text ");
if($plus < 200) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم وضع الترحيب بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺ 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️¦ يجب ان يكون العدد بين ⊱ *1* إلى *200* ⊰
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     
 ]);
}
}
}
}
// banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🛑 لقد تم حظرك م̷ـــِْن البوت

❇️ ارجو ان لٱ تقوم بارسال رسالة اخرى",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
		bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
      ]);
}
}
// sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($text  != "🔙 رجوع") {	
bot('ForwardMessage',[
'chat_id'=>$Dev[0],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
			bot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"✔️ تم ارسال اقتراحك شكرا لك",
	]);	
	}
	}


if($text  == "تفعيل الاعضاء" or $text  == "تفعيل اضافة الاعضاء" or $text  == "تفعيل لاعضاء"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تفعيل الاعضاء بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺ 
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}   
}
	}
}
elseif($text  == "تعطيل الاعضاء" or $text  == "تعطيل اضافة الاعضاء" or $text  == "تعطيل لاعضاء"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تعطيل الاعضاء بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
	}
}
elseif (strpos($text  , '/setadd ') !== false or strpos($text  , 'وضع الاعضاء') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setadd ','وضع الاعضاء'],'',$text );
if($code <= 20 && $code >= 1){
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم وضع *$code* بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺ 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️¦ يجب ان يكون العدد بين ⊱ *1* إلى *20* ⊰",
  'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);  
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
}
if($text =="قفل الروابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الروابط بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺ 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الروابط" or $text =="فتح روابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الروابط بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="قفل الانلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الانلاين بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["inline"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الانلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الانلاين بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["inline"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="قفل الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الانكليزيه بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الانكليزيه بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock photo
elseif($text =="قفل الصور" or $text =="قفل صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الصور بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الصور" or $text =="فتح صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الصور بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل الملصقات المتحركة" or $text =="قفل الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الملصقات المتحركه
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["is_sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح االملصقات المتحركة" or $text =="فتح الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الملصقات المتحركه
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["is_sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الردود" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تفعيل الردود بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل الردود" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تعطيل الردود بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// gif
elseif($text =="قفل المتحركة" or $text =="قفل المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل المتحركه بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺➺➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المتحركة" or $text =="فتح المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح المتحركه بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الماركدوان بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["markdown"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الماركداون بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdown"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل العربيه بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ar"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح العربيه بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// document
elseif($text =="قفل الملفات" or $text =="قفل ملفات،"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الملفات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الملفات" or $text =="فتح ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الملفات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video
elseif($text =="قفل الفيديو" or $text =="قفل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الفيديو بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الفيديو" or $text =="فتح فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الفيديو بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// edit
elseif($text =="قفل التعديل" or $text =="قفل تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل التعديل بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التعديل" or $text =="فتح تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح التعديل بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// game
elseif($text =="قفل الالعاب" or $text =="قفل العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الالعاب بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الالعاب" or $text =="فتح العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الالعاب بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// location
elseif($text =="قفل المواقع" or $text =="قفل الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل المواقع بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المواقع" or $text =="فتح الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح المواقع بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// contact
elseif($text =="قفل الجهات" or $text =="قفل جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الجهات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الجهات" or $text =="فتح جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الجهات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل تعديل الميديا
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح تعديل الميديا
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tag
elseif($text =="قفل التاك" or $text =="قفل الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل التاك بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التاك" or $text =="فتح الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح التاك بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// username 
elseif($text =="قفل المعرفات" or $text =="قفل المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل المعرفات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المعرفات" or $text =="فتح المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح المعرفات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// audio
elseif($text =="قفل الصوت" or $text =="قفل الموسيقى"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الموسيقى بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الصوت" or $text =="فتح صوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الموسيقى بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تعطيل الايدي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الايدي بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الايدي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تفعيل الايدي بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// replay
elseif($text =="قفل الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الرد بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}


elseif($text =="فتح الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الرد بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tgservic
elseif($text =="قفل الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الاشعارات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الاشعارات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video note
elseif($text =="قفل بصمة الفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل بصمة الفيديو
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح بصمة الفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح بصمة الفيديو
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock bots
elseif ($text  == "قفل البوتات" or $text  == "قفل بوتات" or $text  == "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل البوتات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($text  == "فتح البوتات" or $text  == "فتح بوتات"  or $text  == "فتح البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح البوتات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√ ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif ($text  == "قفل البوتات بالطرد" or $text  == "قفل بوتات" or $text  == "قفل البوت بالطرد") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل البوتات بالطرد
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($text  == "فتح البوتات بالطرد" or $text  == ""  or $text  == "") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح البوتات بالطرد
🖲┇بواسطة » ﹙ $info ﹚

√ ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

  if($text  == "تفعيل اشتراك الاجباري" or $text  == "/channel on" or $text  == "تفعيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تفعيل الاشتراك الاجباري
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif($text  == "/channel off" or $text  == "تعطيل اشتراك اجباري" or $text  == "تعطيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تعطيل الاشتراك الاجباري
🖲┇بواسطة » ﹙ $info ﹚

√ ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif ( strpos($text  , 'وضع قناة ') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['وضع قناة'],'',$text );
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم وضع القناة *$code* 
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setchannel"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }  
if($text =="قفل البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل البصمات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح البصمات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// sticker
elseif($text =="قفل الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الملصقات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الملصقات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// forward
elseif($text =="قفل التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل التوجيه بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح التوجيه بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// fosh
elseif($text =="قفل السيئات" or $text =="قفل الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل السيئات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح السيئات" or $text =="فتح الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح السيئات بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="قفل الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الكلايش بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="فتح الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الكلايش بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ( strpos($text  , "وضع كلايش") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	$num = str_replace(['وضع كلايش'],'',$text );
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
			  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم وضع *$startlock*بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// farsi
if( $text =="قفل الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الدردشه بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="فتح الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الدردشه بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif (strpos($text  , "/banall ") !== false or strpos($text  , "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/banall ','حظر عام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم حظر العضو [$id](tg://user?id=$id)
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif (strpos($text  , "/unbanall ") !== false or strpos($text  , "الغاء الحظر العام ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/unbanall ','الغاء الحظر العام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم إلغاء حظر [$id](tg://user?id=$id)
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $text  == "المحظورين عام") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$result",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
// lock character
// lock photo


 elseif($text  == "/silent"&& $rt or $text  == "silent" && $rt or $text  == "تقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true){
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تقييد العضو [$re_id](tg://user?id=$re_id)
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text  , "/silent ") !== false && $rt or strpos($text  , "تقييد مدة") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace(['/silent ','تقييد مدة'],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تقييد[$re_id](tg://user?id=$re_id)
⌚️┇لمدة *$we* دقيقة فقط
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($text  == "/unsilent" && $rt or $text  == "unsilent" && $rt or $text  == "الغاء التقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم الغاء تقييد[$re_id](tg://user?id=$re_id)
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text  == "قائمة المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$result
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif( $text  == "مسح المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"  
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم مسح المقيدين بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// promote
elseif($rt && $text =="رفع مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم ترقية [$re_id](tg://user?id=$re_id)بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
	}
}
elseif($rt && $text =="تنزيل مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تنزيل [$re_id](tg://user?id=$re_id) بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	}
}
// admin list

if ($settings["information"]["welcome"] == "مقفول"){
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = $settings["information"]["textwelcome"];
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$text1");
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}
}
// lock character
if($settings["lock"]["lockcharacter"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$plus = mb_strlen("$text ");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if ($text == "🤖 تعيين اسم للبوت 🤖" and in_array($from_id,$Dev)){
file_put_contents("setname.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل الاسم  للبوت 
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $setnamebot =="nam" and in_array($from_id,$Dev)){
file_put_contents("namebot.txt",$text); 
file_put_contents("setname.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "✓ تم اضافت اسم للبوت 🚀 
 -",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "بوت" || $text == "شسمك"){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اسمي $namebot 🌚🌸"
,'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id,
]);}}
$message = $update->message;
$arr = array('اجيت اجيت كافي لتصيح 🌚👌',
'اسويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑',
);
$arr1 = array_rand($arr,true);
if($message){

$get = file_get_contents("msg.txt")+1; 
file_put_contents("msg.txt",$get); 
if ($settings["lock"]["rdodsg"] == "مقفول️"){
if($get == "5" or $text == $namebot ){
if ($tc == 'group' | $tc == 'supergroup'){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>$arr[$arr1],
 'reply_to_message_id'=>$message_id,
]);
} 
}
}
}
$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "👮‍♂ تعيين كليشة مطور" and in_array($from_id,$Dev)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل كليشة المطور
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Dev)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "✓ تم اضافت كليشة المطور 🚀 
 -",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "المطور" ){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kdevelopers",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}


if( $text=="/start" &&  $tc == "private" or $text=="🔙  رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏
",
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🤖 تعيين اسم للبوت 🤖"],['text'=>"👮‍♂ تعيين كليشة مطور"]
],
[
['text'=>"🔊 اضف رد عام 🔊"],['text'=>"🔊 حذف رد عام 🔊♂"]
],
[
['text'=>"🔉 الردود العامة 🔉"]
],
[
['text'=>"🔉 مسح الردود 🔉"]
],
[
['text'=>"❗️حظر مجموعة❗️"],['text'=>"📊 الاحصائيات 📊"]
],
[
['text'=>"🔈 اذاعة بالمجموعات🔈"],['text'=>"🔈 اذاعة بالخاص🔈"]
],
[
['text'=>"🔊 توجيه بالمجموعات"],['text'=>"توجيه بالخاص 🔊"]                            
],
],
  'resize_keyboard'=>true
])
]);
}
}
if($text=="/start" &&  $tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🎭┇مرحبا بك عزيزي المدير - المنشئ 
⚙┇انا بوت« $namebot »لحماية المجموعات
🗃┇من الروابط والتوجيه والاعلانات المزعجة
📫┇اضفني الى مجموعتك وقم بترقيتي ادمن يستطيع »{ المنشئ او الادمن } تفعيلي فقط ارسل الامر ٠تفعيل٠

📮┇المطــور 💡↭ @$buyy
",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"▪️لـ شراء نسخة البوت ➿",'url'=>"t.me/ttpff"]],
]])
]);
}}
elseif($text =="❗️حظر مجموعة❗️" or $text =="اعدادات المجموعات" or $text =="اعدادات مجموعات"){
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦اهلا بك عزيزي المطور في قسم اعدادات المجموعات
➖➖➖➖
 قم بإختيار احد الاوامر✅",
         'reply_to_message_id'=>$message_id,
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"❗️ حظر مجموعة"]
	],
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
}
}
}
/* elseif($text =="📜 عرض المجموعات" ){
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
	bot('senddocument',[
	'chat_id'=>$chat_id,
	'document'=>new CURLFile("data/group.txt"),
	'caption'=>"🚥 قائمة المجموعات هي",
	'reply_to_message_id'=>$message_id,
	]);
}
}
} */ 
elseif($text =="❗️ حظر مجموعة" ){
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 
 📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل غادر + ايدي مجموعة
√
",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($text  , "غادر" ) !== false or strpos($text  , "/left " ) !== false) {
$text = str_replace(['/left ','غادر'],'',$text );
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم حظر المجموعة
$text

تم الخروج ✅",
  ]);
bot('LeaveChat',[
  'chat_id'=>$text,
  ]);
unlink("data/$text.json");
}
}
}
elseif($text =="📊 الاحصائيات 📊"){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"
🤖 الاحصائيات هي :

👥 عدد المجموعات: $group

👤 عدد المستخدمين: $users
",
                'hide_keyboard'=>true,
		]);
		}}
elseif ($text  == '🔈 اذاعة بالخاص🔈' && in_array($from_id,$Dev)) {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '🔈 اذاعة بالمجموعات🔈' && in_array($from_id,$Dev)) {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '🔊 توجيه بالمجموعات' && in_array($from_id,$Dev)) {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√
",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == 'توجيه بالخاص 🔊' && in_array($from_id,$Dev)) {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√
",
				  'reply_to_message_id'=>$message_id,
				   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
    		]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}


elseif ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال الرسالة بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>" تم ارسال الرسالة بنجاح✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     bot('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$text ",
        ]);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     bot('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$text ",
        ]);
}
}
}
$message_id = $update->message->message_id;
$user          = $update->message->from->username;

/*
الاوامر كتٱلي : 
- اضف رد ، مسح رد ، الردود ، مسح الردود 
- اضف رد عام ، مسح رد عام ، الردود العامه ، مسح الردود العامه
*/

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);



if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
if($text == "اضف رد"){
	
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$text);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 	$str = str_replace("- $text","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$text.txt");
     unlink("data/addrd/$chat_id/media/$text.txt");
     unlink("data/addrd/$chat_id/media/sticker/$text.txt");
     unlink("data/addrd/$chat_id/media/video/$text.txt");
     unlink("data/addrd/$chat_id/media/videonote/$text.txt");
     unlink("data/addrd/$chat_id/media/document/$text.txt");
     unlink("data/addrd/$chat_id/media/photo/$text.txt");
     unlink("data/addrd/$chat_id/media/audio/$text.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($text)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*💬¦ هذا الرد ليس مضاف في قائمه الردود 📛*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}


if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ ردود البوت في المجموعه  :

$get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*🚸¦ لا يوجد ردود مضافه حاليا 
❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if(in_array($from_id,$Dev)){
if($text == "اضف رد عام" || $text == "🔊 اضف رد عام 🔊"){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");

 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
 	file_put_contents("data/addrd/opption.txt","I_BADLZ");
     file_put_contents("data/addrd/mod.txt",$text);
     file_put_contents("data/addrd/media/media.txt",$text);
     file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 
 if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
  file_put_contents("data/addrd/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/mod.txt","");
   file_put_contents("data/addrd/media/media.txt","");
   file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد عام" || $text == "🔊 حذف رد عام 🔊♂" ){
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 	$str = str_replace("- $text","",$I_get_rd);
     file_put_contents("data/addrd/getrd.txt",$str);
      file_put_contents("data/addrd/from_id.txt","");
      file_put_contents("data/addrd/opption.txt","");
 	unlink("data/addrd/$text.txt");
     unlink("data/addrd/media/$text.txt");
     unlink("data/addrd/media/sticker/$text.txt");
     unlink("data/addrd/media/video/$text.txt");
     unlink("data/addrd/media/videonote/$text.txt");
     unlink("data/addrd/media/document/$text.txt");
     unlink("data/addrd/media/photo/$text.txt");
     unlink("data/addrd/media/audio/$text.txt");
     unlink("data/addrd/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($text)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 elseif(!file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
	file_put_contents("data/addrd/from_id.txt","");
    file_put_contents("data/addrd/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*🚸¦ لا يوجد ردود مضافه حاليا *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح الردود العامه" || $text == "🔉 مسح الردود 🔉"){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}


if($text == "الردود العامه" || $text == "🔉 الردود العامة 🔉" and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ الردود العامه في البوت :

$I_get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود العامه" || $text == "🔉 الردود العامة 🔉"and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🚸¦ لا يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}


if($message->text and file_exists("data/addrd/$text.txt")) {
    $MoStaFa = file_get_contents("data/addrd/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoStaFa,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$text.txt")) {
 $MoStaFa = file_get_contents("data/addrd/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoStaFa,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 //♥
 if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoStaFa = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoStaFa,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoStaFa = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoStaFa,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
}

if( $text =="الاعدادات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$locklink = $settings["lock"]["link"];
$markdown = $settings["lock"]["markdown"];
$editmd = $settings["lock"]["editmd"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$rdodsg = $settings["lock"]["rdodsg"];
$ar = $settings["lock"]["ar"];
$inline = $settings["lock"]["inline"];
$en = $settings["lock"]["en"];
$is_sticker = $settings["lock"]["is_sticker"]; 
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$iduser = $settings["lock"]["iduser"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"
]["pluscharacter"];
$lockboots = $settings["lock"]["bot"];
$endlockcharacter = $settings["information"]["downcharacter"];


$text = str_replace("| فعال |","","👮🏾¦ اعدادات المجموعه : 
🔅¦ـ➖➖➖➖➖
️⃣¦ التاك » { $locktag }
©¦ المعرفات » { $lockusername }
📝¦ التعديل » { $lockedit }
🔗¦ الروابط » { $locklink }
📹¦ المتحركه » { $lockgif }
📷¦ الصور » { $lockphoto }
🆔¦ الايدي » { $iduser }
➺
🔊¦ الموسيقى » { $lockaudio }
🔈¦ البصمات » { $lockvoice }
📑¦ الكلايش » { $lockcharacter }
🕹¦ الالعاب » { $lockgame }
🔂¦ التوجيه » { $lockforward }
🎮¦ الانلاين » { $inline }
®¦ السيئات » { $lockfosh }
⌦¦ الكلايش » { $lockcharacter }
➺
↩️¦ الرد » { $lockreply }
👤¦ الاشعارات » { $locktg }
📽¦ بصمة الفيديو » { $lockvideo_note }
🚩¦ الموقع » { $locklocation }
📑¦ الملفات » { $lockdocument }
👁‍🗨¦ الجهات » { $lockcontact }
⚜️¦ الماركدوان » { $markdown }
🔖¦ تعديل الميديا { $locklink }
🎑¦ الملصقات » { $locksticker }
🎑¦ الملصقات المتحركة » { $is_sticker }
➺
🅰¦ العربية » { $ar }
🈵¦ الاتجليزية » { $en }
💤¦ الدردشة » { $locktext }
🤖¦ البوتات » { $lockbots }
👾¦ البوتات بالطرد » { $lockbots }
☠¦ الردود » { $rdodsg }

🔅¦ـ➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ @$buyy
");
$text2 = str_replace("| غير مفعل |","","$text");
	bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
   ]);
}
}


if($text  == '/leave'  or $text  == 'leave'  or $text  == 'بوت غادر'){
if (in_array($from_id,$Dev) and in_array($from_id,$developer)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم  مغادرة المجموعة بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
bot('LeaveChat',[
  'chat_id'=>$chat_id,
  ]);
  }
}
  elseif($text  == 'تعطيل' ){
	  if (in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تعطيل البوت بنجاح
🖲┇بواسطة » ﹙ $info ﹚
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
unlink("data/$chat_id.json");
   }  
  }   
 // tools and cmd
 //rules
elseif( $text =="القوانين"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "مفتوح") {
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
$text
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }   
}
}
else
{
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
$text
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
elseif (strpos($text  , '/setrules ') !== false or strpos($text  , 'وضع قوانين') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setrules ','وضع قوانين'],'',$text );
$plus = mb_strlen("$code");
if($plus < 600) {
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم وضع القوانين بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇يجب ان يكون العدد بين 1 إلى 600 ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
elseif( $rt && $text =="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تثبيت الرساله بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif(  $text =="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم الغاء التثبيت بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

 elseif( $rt && $text == "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم حظر[$re_id](tg://user?id=$re_id) بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( $rt && $text == "الغاء الحظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم الغاء حظر[$re_id](tg://user?id=$re_id) بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني الغاء تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( strpos($text  ,"احظر") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$text1 = str_replace(['احظر'],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text1);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text1
      ]);
       bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"
📌┊❯ تم  حظر ⊱ [$id](tg://user?id=$id) ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);

}
}
 
   //del
elseif( $rt && $text  == "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$re_msgid
    ]);
	 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
 }
}
// rmsg
elseif ( strpos($text  , '/rmsg ') !== false or strpos($text  , 'تنظيف') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$num = str_replace(['/rmsg ','تنظيف'],'',$text );
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم حذف *$num* رساله  بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>$inlinebutton,
   ]);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
⁉️┇يجب ان يكون العدد بين 1 إلى 300 ",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
//  setname
elseif (  strpos($text  , 'ضع اسم') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$newname= str_replace(['ضع اسم '],'',$text );
 bot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم وضع اسم المجموعة بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}


// link
 elseif( $text =="الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🔖¦ رابـط الـمـجـمـوعة 💯
📌¦ $namegroup :

$getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
 }
else
{
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🔖¦ رابـط الـمـجـمـوعة 💯
📌¦ $namegroup :

$getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }

if($text  == "" ) {
if ( $status == 'creator' or $status == 'administrator'){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
        📌┊❯ تم تفعيل ⊱ المجموعة ⊰
👨‍✈️╽❯  بواسطة [$from_id](tg://user?id=$from_id) 
سابقا ➺
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
['text'=>"🎉تابع جديدنا",'url'=>"https://t.me/bots_Syria"],['text'=>"$dataadd",'callback_data'=>"text"]
	  ],
   ]
   ])
     ]); 
}
else
{
if($howmember >= 1){
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"📌┊❯ تم تفعيل ⊱ المجموعة ⊰
👨‍✈️╽❯  بواسطة [$from_id](tg://user?id=$from_id) 
➺
",
'reply_to_message_id'=>$message_id,
		
 ]); 
		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>" تم اضافة المجموعة إلى قائمة المجموعات ✅
➖➖➖➖➖
🚩معلومات المجموعة :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "audio": "مفتوح",
                "gif": "مفتوح",
"inline": "مفتوح",
"is_sticker": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"contact": "مفتوح",
				"location": "مفتوح",
				"game": "مفتوح",
				"editmd": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"add": "مفتوح",
			"rdodsg": "مقفول",
	        "markdown": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"en": "مفتوح",
				"ar": "مفتوح",
			"expire": "",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"📍 عدد الاعضاء قليل جدا
➖➖
📌ليس لديك مايكفي م̷ـــِْن الاعضاء على. الاقل عضو واحد 
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	 	[
['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/bots_syria"]
	  ],
   ]
   ])
     ]); 
}
}
}
}
}
//add
elseif ( $text  == "تفعيل") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تفعيل المجموعة بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"تم اضافة مجموعة جديدةبواسطة المشرف ✅
➖➖➖➖➖
🚩معلومات المجموعة  :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

🔖توسط : [ @$username ] 
", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "audio": "مفتوح",
                "iduser": "مقفول",
                "gif": "مفتوح",
"is_sticker": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "inline": "مفتوح",
                "forward": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"rdodsg": "مقفول",
				"location": "مفتوح",
				"game": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"add": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تفعيل المجموعة بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
//automatic
elseif ($text  == "قفل الكل"  or $text  == "automatic" or $text  == "قفل كل") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الكل بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
		$settings["lock"]["link"]="مقفول";
		$settings["lock"]["username"]="مقفول";
		$settings["lock"]["bot"]="مقفول";
		$settings["lock"]["forward"]="مقفول";
		$settings["lock"]["tgservices"]="مقفول";
		$settings["lock"]["contact"]="مقفول";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}

elseif( $text =="unmute all" or $text =="فتح الكل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الكل بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="مفتوح";
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

// setwelcome
if (strpos($text  , "وضع ترحيب ") !== false  ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['وضع ترحيب '],'',$text );
$plus = mb_strlen("$we");
if($plus < 600) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم وضع ترحيب بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
elseif ($text == "الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text
",  'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
// welcome enbale and disable
elseif ( $text  == "تفعيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تفعيل الترحيب بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text  == "تعطيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم تعطيل الترحيب بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

if($text =="الاوامر" or $text =="مساعدة" or $text =="مساعده"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
🔘¦ مـسـآرت آلآوآمـر آلعآمـهہ‌‏

🔐¦ آوآمـر آلـقـفـل ↜م1↝
👮‍♂¦ آوآمـر آلآدآرهہ‌‏ ↜م2↝
⚙¦ آوآمـر آلاعدآدآت ↜م3↝
📟¦ آوآمـر آلرفع وآلتنزيل ↜م4↝
💤¦ اوامر اعدادات الردود↜م5↝
🛡¦ آوآمـر آلطرد والتقييد‌‏ ↜م6↝
👮‍♂¦ آوآمـر آلمطور‌‏ ↜م المطور↝

🔅¦ـ➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ @$buyy
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text =="م1" ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
⚡️ اوامر حماية المجموعه ⚡️
🗯¦ـ➖➖➖➖
🗯¦️ قفل «» فتح •⊱ البصمات
🗯¦ قفل «» فتح •⊱ الموسيقى
🗯¦ قفل «» فتح •⊱ الفيديو
🗯¦ قفل «» فتح •⊱ الـصــور
🗯¦ قفل «» فتح •⊱ الملصقات 

🗯¦ قفل «» فتح •⊱ الالعاب
🗯¦ قفل «» فتح •⊱ العربيه
🗯¦ قفل «» فتح •⊱ الانكليزيه
🗯¦ قفل «» فتح •⊱ المتحركه
🗯¦ قفل «» فتح •⊱ الدردشه 
🗯¦ قفل «» فتح •⊱ الانلاين

🗯¦ قفل «» فتح •⊱ الروابط 
🗯¦ ️قفل «» فتح •⊱ المعرفات
🗯¦ قفل «» فتح •⊱ البوتات 
🗯¦ قفل «» فتح •⊱ الكلايش 
🗯¦ قفل «» فتح •⊱ التوجيه 
🗯¦ قفل «» فتح •⊱ الماركداون 

🗯¦ قفل «» فتح •⊱ الايموجي
🗯¦ قفل «» فتح •⊱ الجهــات
🗯¦ قفل «» فتح •⊱ التعديل
🗯¦ قفل «» فتح •⊱ الايدي
🗯¦ قفل «» فتح •⊱ الــكـــل

🗯¦ قفل «» فتح •⊱ الرد
🗯¦ قفل «» فتح •⊱ التاك
🗯¦ قفل «» فتح •⊱ المواقع
🗯¦ قفل «» فتح •⊱ الاشعارات
🗯¦ قفل «» فتح •⊱ السيئات 
🗯¦ قفل «» فتح •⊱ التكرار
🗯¦ قفل «» فتح •⊱ الدردشة 
لمدة + الوقت

🔅¦ـ➖➖➖➖➖
🗨¦ تفعيل «» تعطيل •⊱  الاشتراك 
🗨¦ تفعيل «» تعطيل •⊱  الترحيب 
🗯¦ تفعيل «» تعطيل •⊱ التحقق 
🗯¦ تفعيل «» تعطيل •⊱  الردود 
🗨¦ تفعيل «» تعطيل •⊱  اطردني 
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ @$buyy
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text =="م2"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
- اوامـر الأعدادات المتقدمة
🗯¦ـ➖➖➖➖➖
🖲¦ تفعيل الترحيب للتفعيل
🖲¦ تعطيل الترحيب للالغاء
🔰¦ وضع ترحيب + نص لعرضه
👨‍🎤¦ الترحيب لعرض الترحيب

🖲¦ تفعيل الاشتراك الاجباري 
🖲¦ تعطيل الاشتراك الاجباري
⚠️¦ وضع قناة + المعرف 

🚸¦ تقييد بالرد لتقيد العضو
🚸¦ تقييد/كتم + المدة
🚸¦ الغاء تقييد بالرد للالغاء 
🚸¦ قائمة المقيدين لعرض القائمة
🚸¦ مسح المقيدين  لمسح المقيدين

🚸¦ حظر بالرد او الايدي او بالمعرف 
🚸¦ الغاء الحظر بالرد او الايدي 
🚸¦ المحظورين لعرض المحظورين 
🚸¦ مسح المحظورين لمسح المحظورين

🔅¦ـ➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ @$buyy
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م3"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
- اوامر الاعدادات 
🍁¦ـ➖➖➖➖➖
📝¦ وضع قوانين + نص للوضع 
📝¦ وضع الاعضاء + العدد للتحديد
📝¦ وضع كلايش + العدد  ⊱ للتحديد 

🔞¦ فلتر+ الكلمة لمنع ارسالها
🔞¦ الغاء فلتر + الكلمة لالغاء منعها  
🔞¦ قائمة المنع ⊱ لاظهار الممنوعات 
🔞¦ مسح قائمة المنع ⊱ للحذف

📌¦ تثبيت بالرد للتثبيت
📌¦ الغاء التثبيت لالغاء التثبيت

👮‍♂¦ رفع مشرف بالرد للترقية
👮‍♂¦ تنزيل مشرف بالرد لتنزيله
👮‍♂¦ الادمنية ⊱ لإظهار الأدمنية

🔅¦ـ➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ @$buyy
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م4"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
📋 اوامر الرفع والتنزيل 
🚫¦ـ➖➖➖➖➖
📋¦ قوانين  ⊱ لعرض القوانين 
〽️¦ الادمنية ⊱ لعرض الادمنية  
〽️¦ المدراء  ⊱ لعرض المدراء  
〽️¦ المميزين  ⊱ لعرض المميزين  
〽️¦ المكتومين ⊱ لعرض المكتومين
〽️¦ المقيدين ⊱ لعرض المقيدين
〽️¦ المطرودين ⊱ لعرض المطرودين
〽️¦ عرض الكل ⊱ لعرض الكل 

➺
🗑¦ مسح المدراء  ⊱ لمسح المدراء 
🗑¦ مسح الادمنيه ⊱ لمسح الادمنية 
🗑¦ مسح المميزين ⊱ لمسح المميزين 
🗑¦ مسح المكتومين ⊱ لمسح المكتومين
🗑¦ مسح المطرودين ⊱ لمسح المطرودين
➺
💢¦ رفع ادمن ⊱ لرفع العضو ادمن 
💢¦ تنزيل ادمن ⊱ لتنزيله من الادمن
💢¦ رفع منشى ⊱ لرفع العضو منشى 
💢¦ تنزيل منشى ⊱ لتنزيله من الانشاء
💢¦ رفع مدير ⊱ لرفعه مدير في البوت
💢¦ تنزيل مدير ⊱ لتنزيله من المدراء  
💢¦ رفع مميز ⊱ لرفعه مميز في البوت  
💢¦ تنزيل مميز ⊱ لتنزيله مميز

💯¦ مسح + العدد لمسح عدد رسايل
💯¦ حذف بالرد على رسالة للمسح
💯¦ الاعدادات ⊱ لعرض الاعدادات

🔅¦ـ➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ @$buyy
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م5"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
- اوامر الردود للبوت 
♨️¦ـ➖➖➖➖➖
📛¦ تفعيل الردود  ⊱ لتفعيل الردود 
📛¦ تعطيل الردود ⊱ لتعطيل الردود 
📛¦ مسح الردود  ⊱ لمسح الردود 
📛¦ الردود  ⊱ لعرض الردود
➺
💬¦ اضف رد لاضافة الرد بالميديا
💬¦ حذف الرد لحذف رد معين 
🔅¦ـ➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ @$buyy
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م6"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
⚡️ اوامر الطرد والتقييد⚡️
🗯¦ـ➖➖➖➖
🗯¦️ قفل «» فتح الروابط بالتقييد
🗯¦️ قفل «» فتح التوجيه بالتقييد
🗯¦️ قفل «» فتح المعرفات بالتقييد
🗯¦️ قفل «» فتح المتحركه بالتقييد

🗯¦️ قفل «» فتح الروابط بالطرد
🗯¦️ قفل «» فتح البوتات بالطرد

🔅¦ـ➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ $boyy
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

$mdev = file_get_contents("mdev.txt");
if($text =="م المطور" || $text == "اوامر المطور" and $mdev == null){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك مطوري 🙋🏽‍♂
🔘❉ اليك اوامرك الخاصة بالسورس
🔅¦ـ➖➖➖➖➖
• تفعيل/تعطيل المجموعات
• وضع شرط التفعيل
• تفعيل البوت خدمي
• تفعيل البوت للمطور
• تغيير اسم للبوت
٠ تحديث السورس

٠ اذاعه خاص/ عام/ توجيه
٠ حظر عام / تقييد/ كتم
٠ توقيت الاوامر بالوقت
• رفع/تنزيل مطور اساسي
• المطورين / مسح المطورين
• رفع منشئ / مدير/ مميز / ادمن
• بقيه الاوامر في كيبورد البوت في الخاص
• تستطيع التحكم بها هنا ايضا
🔅¦ـ➖➖➖➖➖
👨🏻‍💻¦ للاستفسار 💡↭ $boyy
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text =="م المطور" || $text == "اوامر المطور" and $mdev != null){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$mdev
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

$user          = $update->message->from->username;
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];


mkdir("banduser");
$get_Busers = file_get_contents("banduser/$chat_id.txt");
$get_Buser = explode("\n",$get_Busers);

$kick = explode(" " ,$text);

if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($kick[0] == "طرد" || $kick[0] == "حظر" and isset($kick[1])){
$text = str_replace(['حظر ','طرد '],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($text != $sudo && $text != $buyy && !in_array($text,$Dev) and !in_array($text,$manger) and !in_array($text,$developer) and !in_array($text,$mmyaz) and !in_array($text,$admin_user) and !in_array($text,$Dev)){
if(strpos($text ,"@") !== false and !in_array($text,$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . $text ."\n" , FILE_APPEND);}
if($stat !== false and !in_array("@$username",$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . "@$username" ."\n" , FILE_APPEND);}

bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
  ]);
bot('sendmessage', [
 'chat_id' => $chat_id,
 'text'=>"
💬┇العضو ~⪼ *$text*
☑┇تم حظره بنجاح
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
}
}
}


if(in_array("@$user",$get_Buser)){
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}


if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($kick[0] == "الغاء" and $kick[1] == "حظر" and isset($kick[2])){
$text = str_replace('الغاء حظر ','',$text);

$stat = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($stat != false and in_array("@$username",$get_Buser)){
$str2 = str_replace("@$username",'',$get_Busers);
$ex2 = explode("\n",$str2);
file_put_contents("banduser/$chat_id.txt",$ex2);}

if(strpos($text ,"@") !== false and in_array($text,$get_Buser)){
$str = str_replace("$text",'',$get_Busers);
$ex = explode("\n",$str);
file_put_contents("banduser/$chat_id.txt",$ex);}

bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'can_send_messages'=>true,
  ]);
bot('sendmessage', [
 'chat_id' => $chat_id,
 'text'=>"
💬┇العضو ~⪼ $text
☑┇تم الغاء حظره بنجاح
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
}
if($text == "مسح المحظورين"){
file_put_contents("banduser/$chat_id.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌤¦ تم مسحّ قائمه المحظورين ،🦄'",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}


if($text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"☑️¦ قائمه الاعضاء المحظورين :
[$get_Busers]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🔰¦ لٱيوجد محظورين ،💘💘''",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ⸨ رابط حذف التلكرام ⸩ 🗑
➧  https://telegram.org/deactivate
⸺⸺⸺⸺⸺⸺⸺
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if( !in_array($from_id,$admin_user) and !in_array($from_id,$manger) and  !in_array($from_id,$developer)  and !in_array($from_id,$mmyaz) ){
if($text=="رتبتي" ){
if (in_array($from_id,$Dev) ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » مطور اساسي 🎖",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if( !in_array($from_id,$Dev) and !in_array($from_id,$admin_user) and  !in_array($from_id,$developer)  and !in_array($from_id,$mmyaz) ){
if($text=="رتبتي" ){
if ( $status == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » المنشئ 🎖",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if( !in_array($from_id,$Dev) and !in_array($from_id,$admin_user) and  !in_array($from_id,$developer)  and !in_array($from_id,$mmyaz) ){
if($text=="رتبتي" ){
if ( in_array($from_id,$manger)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » مدير في البوت 🎖",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if( !in_array($from_id,$Dev) and !in_array($from_id,$developer) and  !in_array($from_id,$admin_user) and !in_array($from_id,$manger) and !in_array($from_id,$mmyaz) ){
if($text=="رتبتي" ){
if ($status == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » مشرف 🎖",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if( !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$mmyaz) ){
if($text=="رتبتي" ){
if ( in_array($from_id,$admin_user)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » ادمن في البوت 🎖",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if( !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user) and !in_array($from_id,$mmyaz) ){
if($text=="رتبتي" and  $status == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » فقط عضو 🙍🏼‍♂️",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if( !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user) ){
if($text=="رتبتي" ){
if (in_array($from_id,$mmyaz)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » عضو مميز 🙍🏼‍♂️",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
 
 
if($text == " مـَسّـِآء الـخّـيًــر" || $text == " مَـــسُأُء أَلَــوّورّد " || $text == "مساء الخير" || $text == "مسا الخير"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>"https://t.me/shehad2/8036",
 'reply_to_message_id'=>$message_id,
]);}}}
$rand = array('مزاج 🚶','في مانع 😒','صنافه','مدري لَيــِْ♡̷̴̬̩̃̊ـِْش😹😔','خلاص دامك ماتعرف اسكت لٱ تسئل 😹🐸');
$ra = array_rand($rand, 1);
if($text ==  "ليش"or $text =="لَيــِْ♡̷̴̬̩̃̊ـِْش "){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('انَـَY̷ ̜̩̐̌̋O̷ ̜̩̐̌̋U̷ ̜̩̐̌̋ـَتَ الاجمل👍🌷','كـ جمالك حب 😘','مثلك 😍');
$ra = array_rand($rand, 1);
if($text == 'جميل'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('شو تسويها🙁','يله خلينا نشوف');
$ra = array_rand($rand, 1);
if($text == 'اسويها'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if(preg_match('/^(.*)(م̷ـــِْن امس|من امس|امس |قبل يومين )(.*)/',$text) ){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
حاول الان حب لاتيئس ☹",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($text == "ضابح" or $text == "ضايج"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"روح انتحر🌚🌷",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "🚶‍♂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ع وين😉",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "😂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لف اسنانك😚فضحتنا بين الأجانب😢",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "طمام"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي زحاوق😋لرجع وماهي جاهزه😒😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if(preg_match('/^(.*)(ملف ردود|بوت ردود|ردود|ملف بوت ردود)(.*)/',$text) ){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ها حب تريد ملفي 😔رح اعطيك تَعاّإاّإلّ خاص 🚶
بس ارسل الملف", 
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
$rand = array('احسن 😌مو لآزٍمٍ تدري بكل جديد','كلشي انت متعرفه اصلا 😴','م̷ـــِْن مِِـتــ ؟؟! ـى عرفت شي انت بدون ماعلمك 😔😹','عمرك لادريت ☹');
$ra = array_rand($rand, 1);

if($text == 'مدري'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
if($text == "مالك"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مدري🤷‍♂سئل نفسك",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "وش"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي الدقل. خل نسمع الاخبار📻😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "فهمت"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اكييد😌",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "ممكن طلب"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اتفظل بس لاتطلب حسابات🙂",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "😏"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وش فْيَگ روح اقرب عياده استلم علاجك😬",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array('بويش تفكر شاركنا 🚶','لٱ تروح بعيد خلك معنا 🐸','شو مافهمت 🙄');
$ra = array_rand($rand, 1);

if($text == '🤔'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('معك حب شو تريد🙂','موجود ماتشوفني يعني 😕','مشغولين حب 😔بقي انت ماعندك شغل');
$ra = array_rand($rand, 1);

if($text == 'وينكم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}}}
if($text == "تعال"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجيك خاص😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "تعال خاص"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🤭😐😑",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array(' دِْۈۈۈۈم/يّارٌب ماتفارقك العافيه 😘ْ','يستاهل الحمد🙌','❤️');
$ra = array_rand($rand, 1);

if($text == 'الحمد لله'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('ع الجميع 🌹','علينا وعليكم 
اكثرو م̷ـــِْن الصلاة ع النبي واله 💐','اغنم حبي ودعي ليـّۓ معاك 🌺');
$ra = array_rand($rand, 1);

if($text == 'جمعه مباركه'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('هاا گـّيَفْ الـّحـّال ٱن شـْاءِ اللـٌہ بَخـّيَرٌ 🙂','وينك مغيب غلا 😉');
$ra = array_rand($rand, 1);

if($text == 'وعليكم السلام'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('🌺⌣{يـّـٌدِْۈۈ/عّزٌگ-ۈنَبْضّ قَلبْگ/ۈۈمْ}⌣ 🍂','تدوم العافيه عليك غلا 🤓');
$ra = array_rand($rand, 1);

if($text == 'دووم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}}}
$rand = array('الْحٍمَدٍ للـّہ🌹
     وانت??','بخيـــ😃ــر دامـّگ بـْخـّيرٌ يـّٱلـّغـٌالـّے 🌾');
$ra = array_rand($rand, 1);

if($text == 'كيفك'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
 
 

if($text == "سورس" || $text == "ياسورس" || $text == "السورس"){
		bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📮┋مرحبا بك [$from_id](tg://user?id=$from_id) 
🖇┋سورس النيزك قيد التطوير 
📥┋لشراء النسخة المدفوعة راسلني 
📯┋تطوير لـ [علي محمد](T.ME/TTPFF)
┉ ┉ ┉ ┉ ┉ ┉ ┉
⏰┇ $date $aa
",
    'disable_web_page_preview'=>true,
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	 ]);
	 }
 
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info != NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
┄─┅═ـ═┅─┄
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
┄─┅═ـ═┅─┄
👮🏽‍♂❉ المدراء :-
$mangers_infos
┄─┅═ـ═┅─┄
👨‍🔧❉ الادمنية :-
$admin_users_infos
┄─┅═ـ═┅─┄
👨‍🎤❉ المميزين :-
$mmyazs_infos
┄─┅═ـ═┅─┄
📮❉ للاستفسار » $boyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info != NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
┄─┅═ـ═┅─┄
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
┄─┅═ـ═┅─┄
👮🏽‍♂❉ المدراء :-
$mangers_infos
┄─┅═ـ═┅─┄
👨‍🔧❉ الادمنية :-
$admin_users_infos
┄─┅═ـ═┅─┄
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
┄─┅═ـ═┅─┄
📮❉ للاستفسار » $boyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info == NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
┄─┅═ـ═┅─┄
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
┄─┅═ـ═┅─┄
👮🏽‍♂❉ المدراء :-
$mangers_infos
┄─┅═ـ═┅─┄
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
┄─┅═ـ═┅─┄
👨‍🎤❉ المميزين :-
$mmyazs_infos
┄─┅═ـ═┅─┄
📮❉ للاستفسار » $boyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info != NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
┄─┅═ـ═┅─┄
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
┄─┅═ـ═┅─┄
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
┄─┅═ـ═┅─┄
👨‍🔧❉ الادمنية :-
$admin_user_infos
┄─┅═ـ═┅─┄
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
┄─┅═ـ═┅─┄
📮❉ للاستفسار » $boyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info == NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
┄─┅═ـ═┅─┄
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
┄─┅═ـ═┅─┄
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
┄─┅═ـ═┅─┄
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
┄─┅═ـ═┅─┄
👨‍🎤❉ المميزين :-
$mmyazs_infos
┄─┅═ـ═┅─┄
📮❉ للاستفسار » $boyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}

if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info == NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
┄─┅═ـ═┅─┄
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
┄─┅═ـ═┅─┄
👮🏽‍♂❉ المدراء :-
$mangers_infos
┄─┅═ـ═┅─┄
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
┄─┅═ـ═┅─┄
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
┄─┅═ـ═┅─┄
📮❉ للاستفسار » $boyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info != NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
┄─┅═ـ═┅─┄
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
┄─┅═ـ═┅─┄
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
┄─┅═ـ═┅─┄
👨‍🔧❉ الادمنية :-
$admin_users_infos
┄─┅═ـ═┅─┄
👨‍🎤❉ المميزين :-
$mmyazs_infos
┄─┅═ـ═┅─┄
📮❉ للاستفسار » $boyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info == NULL and $mangers_infos == NULL ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
??❉ اهلا بك عزيزي المنشئ
┄─┅═ـ═┅─┄
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
┄─┅═ـ═┅─┄
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
┄─┅═ـ═┅─┄
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
┄─┅═ـ═┅─┄
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
┄─┅═ـ═┅─┄
📮❉ للاستفسار » $boyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
 
if($text == "تحديث السورس"  || $text == "تحديث" || $text == "• تحديث السورس ؛ ♻️" || $text == "تحديث سورس" and in_array($from_id,$Dev)){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%
Open Games.php ...
• Updateing ...',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%
• Updateing ...
Open kickme.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%
• Updateing ...
Open Orders.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(10);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%
• Updateing ...
Open bot.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%
• Updateing ...
Open id.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%
• Updateing ...
Open photoshop.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%
• Updateing ...
Open Hello.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%
• Updateing ...
Open welcome.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%
• Updateing ...
Open replys.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%
• Updateing ...
Open fun.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
-',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(2);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
- -',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(3);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
- - -',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(4);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>
 "*👨‍✈️ ❉ تم تحديث السورس 🔱*
 
• لديك اخر اصدار من السورس ، 🙌",
  'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message->message_id, 

 ]);
 } 

 
if (strpos($text , "قفل الدردشه لمدة ") !== false or strpos($text , "قفل الدردشة لمدة ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$developer)) {
	$num = str_replace(['قفل الدردشه لمدة ','قفل الدردشة لمدة'],'',$text);
	$add = $settings["information"]["added"];
if ($add == true) {
	if ($num <= 100000 && $num >= 1){
		date_default_timezone_set('Asia/baghdaf');
        $date1 = date("h:i:s");
        $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
        $next_date = date('h:i:s', strtotime($date2 ."+$num Minutes"));
			  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الدردشة لمدة 
$num دقيقة
🖲┇بواسطة » ﹙ $info 
⏱┇الوقت الان ، $date1 🕑 •
⏱┇وقت فتح الدردشة ، $next_date 

√
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["mute_all_time"]="$next_date";
$settings["lock"]["mute_all_time"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
   }else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا ⚠️
➖➖➖➖➖➖
- تستطيع فقط الاختيار من دقيقة الى 1000 دقيقة ، ❌ •
$date1
$nextdata",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ($settings["lock"]["mute_all_time"] == "مقفول"){
$locktime = $settings["information"]["mute_all_time"];
date_default_timezone_set('Asia/baghdad');
$date1 = date("h:i:s");
if($date1 < $locktime){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
else
{
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}



$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="المطرودين" and $frokick != null and $frokicked != null){
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
$ckic = explode("\n",$frokick);
$ckick = count($ckic);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ الاعضاء الذين طردتهم :-
• عددهم » $ckick
*----------*
$frokicked
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="المطرودين" and $frokick == null and $frokicked == null){
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
$ckic = explode("\n",$frokick);
$ckick = count($ckic);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
لم يتم طرد احد •
┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="مسح المطرودين" and $frokick != null and $frokicked != null){
file_put_contents("data/kickme/$chat_id.txt","");
file_put_contents("data/kickmelist/$chat_id.txt","");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم مسح المطرودين بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√ ",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="مسح المطرودين" and $frokick == null and $frokicked == null){
file_put_contents("data/kickme/$chat_id.txt","");
file_put_contents("data/kickmelist/$chat_id.txt","");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇ لايوجد مطرودين ✓ ",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}


 
elseif (strpos($text  , "كتم لمدة ") !== false && $rt or strpos($text  , "تقييد لمدة ") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace(['كتم لمدة ',' تقييد لمدة'],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم كتمه لمدة $we دقيقه
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($text  == "الغاء تقييد" && $rt or $text  == "الغاء كتم" && $rt or $text  == "الغاء التقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم الغاء كتمه/تقييده
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text  == "المقيدين" or $text == "المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛❉ قائمة المكتومين/المقيدين :-
┄─┅═ـ═┅─┄

$result
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif( $text  == "" or $text == "مسح المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"  
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم مسح المكتومين بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
 

if($text== "قفل التكرار" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🚸┇تم بنجاح قفل التكرار ✓
📬┇بواسطة » $info ➺
••• قم بوضع تكرار الان •••
••• وضع التكرار + عدد •••
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح التكرار بنجاح
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}

/*===== dev ~ @THTSS =====*/

if($text== "قفل التوجيه بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل التوجيه بالتقييد
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح التوجيه بالتقييد 
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}

if($text== "قفل الروابط بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الروابط بالتقييد
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الروابط بالتقييد
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المعرفات بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل المعرفات بالتقييد
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المعرفات بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح المعرفات بالتقييد
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
//-------//
if($text== "قفل البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}

if($text== "قفل الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم قفل الروابط بالطرد 
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 🙋🏼‍♂┇اهلا بك عزيزي 
📬┇تم فتح الروابط بالطرد
🖲┇بواسطة » ﹙ $info ﹚

√
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($settings["lock"]["farse"] == "مقفول️"){
	if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
$uo = json_decode(file_get_contents("https://api.telegram.org/bot$token/getchat?chat_id=$from_id"))->result;
$io = $uo->first_name;
$word = json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/detect?key=trnsl.1.1.20170725T151635Z.31fe7a5603917164.915fed1f5a9aaebef43860694075516e7af7aa47&text=".urlencode($io)))->lang;
$new = $update->message->new_chat_member; 
if($new and $word !="ar" and $word !="en"){
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️┇ ممنوع دخول الفارسية هنا  [$io](tg://user?id=$from_id)"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}
}
}



$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$can_change_info= $statjson['result']['can_change_info'];
$can_delete_messages =  $statjson['result']['can_delete_messages'];
$can_restrict_members = $statjson['result']['can_restrict_members'];
$can_invite_users = $statjson['result']['can_invite_users'];
$can_pin_messages = $statjson['result']['can_pin_messages'];
$can_promote_members = $statjson['result']['can_promote_members'];
if($can_change_info == 1){ 
$canchangeinfo1 = "✓";
}else{
$canchangeinfo1 = "✗";
}
if($can_delete_messages == 1){ 
$candeletemessages1 = "✓";
}else{
$candeletemessages1 = "✗";
}
if($can_restrict_members == 1){ 
$canrestrictmembers1 = "✓";
}else{
$canrestrictmembers1 = "✗";
}
if($can_invite_users == 1){ 
$caninviteusers1 = "✓";
}else{
$caninviteusers1 = "✗";
}
if($can_pin_messages == 1){ 
$canpinmessages1 = "✓";
}else{
$canpinmessages1 = "✗";
}
if($can_promote_members == 1){ 
$canpromotemembers1 = "✓";
}else{
$canpromotemembers1 = "✗";
}

if($from_id == $sudo){
$info = "📮❉ صلاحياتك :-

📮❉ مطور البوت 👨‍✈️
";
}elseif($status == "creator"){
$info = "
📮❉ صلاحياتك :-

📮❉ منشئ الجروب 👨‍✈️
";
}elseif($status == "administrator"){
$info = "
📮❉ صلاحياتك :-
ـــ  ــــ  ـــ  ـــ  ـــ
علامة {✓} تعني انه يمتلك الصلاحيه
علامة {✗} تعني انه لايمتلك الصلاحيه
ـــ  ــــ  ـــ  ـــ  ـــ   
📮❉ ارسال رسائل » • { $candeletemessages1 } •
📮❉ دعوة مستخدمين » • { $caninviteusers1 } •
📮❉ حظر مستخدمين » • { $canrestrictmembers1 } •
📮❉ تثبيت رسائل » • { $candeletemessages1 } •
📮❉تغيير المعلومات » • { $canchangeinfo1 } •
📮❉ رفع مشرفين جدد » • { $canpromotemembers1 } •
ـــ  ــــ  ـــ  ـــ  ـــ
";
}elseif(in_array($from_id,$admin_user) ){
$info = "📮❉ صلاحياتك :-

📮❉ ادمن في البوت وليس المجموعه 👨‍✈️
";
}elseif(in_array($from_id,$manger) ){
$info = "📮❉ صلاحياتك :-

📮❉ مدير في البوت وليس المجموعه 👨‍✈️
";
}elseif(in_array($from_id,$mmyaz) ){
$info = "
📮❉ صلاحياتك :-

📮❉ عضو مميز في البوت 👨‍✈️
";
}elseif(in_array($from_id,$developer) ){
$info = "📮❉ صلاحياتك :-

📮❉ من مطورين البوت 👨‍✈️
";
}elseif($status == "member" ){
$info = "
📮❉ صلاحياتك :-

📮❉ عضو فقط ليس لديك صلاحيات ✗
";
}
if($text == "صلاحياتي"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
$info
",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$buyy         = "[$boyy]"; // حط معرفك
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$id   = $message->from->id; 
$_user = $message->from->username; 
$user = "[$_user]";
$name = $message->from->first_name; 
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
if($message){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);}
if($text == "موقعي" || $text =="معلوماتي" and $from_id == $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ مطور اساسي 👨🏻‍✈️  ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "موقعي" || $text =="معلوماتي" and in_array($from_id,$dev)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ مطور البوت 👨🏻‍  ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($from_id != $sudo and !in_array($from_id,$dev)){
if($text=="موقعي" || $text =="معلوماتي" and $JJ117 == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ المنشئ 🏌🏾‍♂ ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "موقعي" || $text =="معلوماتي" and  $JJ117 == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ ادمن البوت 🤺 ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "موقعي" || $text =="معلوماتي" and  $JJ117 == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ عضو فقط 👶🏻 ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}

$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
mkdir("LONELY");
$link1      = $ex[6];
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$name= $update->message->from->first_name;
$user= $update->message->from->username;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$get_kick     = file_get_contents("LONELY/kick.txt");
$kick            = explode("\n",$get_kick);
if($text == "تفعيل اطردني" and $JJ117 !="member"){
 file_put_contents("LONELY/kick.txt",$chat_id);
 bot("Sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*✡⁞ تم تفعيل امَر اطردني . *",
 'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($text == "تعطيل اطردني" and $JJ117 !="member"){
 file_put_contents("LONELY/kick.txt", " ");
 bot("Sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*✡⁞ تم تعطيل امَر اطردني . *",
 'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
 ]);
 }

if($text =="اطردني" and  $JJ117 == "member" and $from_id != $sudo and in_array($chat_id,$kick)){
 $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('KickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
        ]);
        bot('UnbanChatmember',[
            'chat_id'=>$chat_id,
            'user_id'=>$from_id,
            ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*لقد تم طردك بنجاح بأمر منك , ارسلت لك رابط المجموعه في الخاص اذا وصلت لك تستطيع الرجوع متى شئت ،🖤🖤*",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>"
*🌟| اهلا عزيزي , لقد تم طردك من المجموعه بامر منك ،
🔖| اذا كان هذا بالخطأ او اردت الرجوع للمجموعه : *
*-*$l *.🖤*",
'parse_mode'=>"MARKDOWN",
]);
}

if($JJ117 == "creator" or $JJ117 == "administrator" or $from_id == $sudo)
if($text == "اطردني"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*✡⁞ لا استطيع طرد المشرفين ، المنشئين ، المطورين . *",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="اطردني" and  $JJ117 == "member" and $from_id != $sudo and !in_array($chat_id,$kick)){
 bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*✡⁞ امر اطردني معطَل . *",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
        ]);
        }
 

 
$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;

if($reply and $text == "كشف" || $text == "معلوماتك"){
if($re_id == $sudo)
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مطور اساسي 👨🏻‍⚕
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text == "كشف" || $text == "معلوماتك"){
if(in_array($re_id,$dev))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مطور البوت 👨🏻‍⚕
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text == "كشف" || $text == "معلومانك"){
if(in_array($re_id,$manger) and !in_array($re_id,$dev))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مدير البوت 👨🏿‍✈️
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text ==  "كشف" || $text == "معلوماتك"){
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh } 
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » المنشىء 👷
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text ==  "كشف" || $text == "معلومانك"){
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh } 
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » ادمن في البوت 👨🏼‍🎓
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text ==  "كشف" || $text == "معلوماتك"){
if(in_array($re_id,$getCCmember) and !in_array($re_id,$manger) and !in_array($re_id,$dev) and $re_rou != "administrator")
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » عضو مميز 🍨
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}
if($reply and $text ==  "كشف" || $text == "معلوماتك"){
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » فقط عضو 🙍🏼‍♂️
🕵🏻‍♂¦ نوع الكشف » بالرد
➖",'reply_to_message_id'=>$message->message_id,]);}



$betr = str_replace("كشف ","$betr",$text); 
if($text == "كشف $betr"){
$dets = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$betr"));
$ali4 =$dets->result->first_name;
$ali2 =$dets->result->id;
$ali3 =$dets->result->username;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$betr);
$Alsh = json_decode($get, true);
$re_ru = $Alsh['result']['status'];
$result = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$betr"),true); 
$file_id = $result["result"]["photos"][0][0]["file_id"]; 
$count = $result["result"]["total_count"];
if(in_array($betr,$dev)){
$Alsh = "مطور اساسي 👷.";
}elseif($re_ru == "creator"){
$Alsh = "منشى المجموعة 🕵.";
}elseif($re_ru == "administrator"){
$Alsh = "مشرف المجموعة 👮.";
}elseif($re_ru == "member" ){
$Alsh = "عضو فقط 😷.";}
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
📛¦ الاسم » ❲ $ali4 ❳
🎫¦ ايديه » ❲ $ali2 ❳
📌¦ المعرف » ❲ @$ali3 ❳
🔬¦ عدد صورة » ❲ $count ❳
📮¦ الرتبه » ❲ $Alsh ❳
📌¦ نوع الكشف » بالايدي",
'reply_to_message_id'=>$message->message_id,
]);
}

  
echo "Errors No found";