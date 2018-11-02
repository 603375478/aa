<?php
header('Access-Control-Allow-Origin:*');
require_once __DIR__ . "/SmsSenderUtil.php";
require_once __DIR__ . "/SmsSingleSender.php";
require_once __DIR__ . "/SmsMultiSender.php";
require_once __DIR__ . "/SmsStatusPuller.php";
require_once __DIR__ . "/SmsMobileStatusPuller.php";
require_once __DIR__ . "/SmsVoicePromptSender.php";
require_once __DIR__ . "/SmsVoiceVerifyCodeSender.php";

require_once __DIR__ . "/VoiceFileUploader.php";
require_once __DIR__ . "/FileVoiceSender.php";
require_once __DIR__ . "/TtsVoiceSender.php";
use Qcloud\Sms\SmsSingleSender;
use Qcloud\Sms\SmsMultiSender;
use Qcloud\Sms\SmsVoiceVerifyCodeSender;
use Qcloud\Sms\SmsVoicePromptSender;
use Qcloud\Sms\SmsStatusPuller;
use Qcloud\Sms\SmsMobileStatusPuller;

use Qcloud\Sms\VoiceFileUploader;
use Qcloud\Sms\FileVoiceSender;
use Qcloud\Sms\TtsVoiceSender;


// 短信应用SDK AppID
$appid = 1400152467; // 1400开头

// 短信应用SDK AppKey
$appkey = "35ee66e3c5b470ea2c29913e0eb0079a";

// 需要发送短信的手机号码
//$phoneNumbers = ["17858767730"];
$phoneNumbers = [$_GET['phone']];

// 短信模板ID，需要在短信应用中申请
$templateId = 210920;  // NOTE: 这里的模板ID`7839`只是一个示例，真实的模板ID需要在短信控制台中申请

// 签名
$smsSign = "邢黎的web笔记"; // NOTE: 这里的签名只是示例，请使用真实的已申请的签名，签名参数使用的是`签名内容`，而不是`签名ID`
// 单发短信
$checkCode=rand(1000,9999);
try {
    $ssender = new SmsSingleSender($appid, $appkey);
    $result = $ssender->send(0, "86", $phoneNumbers[0],
        "{$checkCode}为您的登录验证码，请于{1}分钟内填写。如非本人操作，请忽略本短信。", "", "");
    $rsp = json_decode($result);
    echo $result;
} catch(\Exception $e) {
    echo var_dump($e);
}
echo $checkCode;