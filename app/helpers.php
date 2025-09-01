<?php

if (!function_exists('six_digit_code')) {
    function six_digit_code()
    {
        return str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
    }
}

// 알리고 SMS 발송
if (!function_exists('send_sms')) {
    function send_sms($number, $message)
    {
        $sms_url = config('services.aligo.sms_url'); // 전송요청 URL
        $host_info = explode("/", $sms_url);
        $port = $host_info[0] == 'https:' ? 443 : 80;

        $sms['user_id'] = config('services.aligo.user_id'); // SMS 아이디
        $sms['key'] = config('services.aligo.key'); //인증키

        $sms['msg'] = stripslashes($message);
        $sms['receiver'] = $number;
        // $sms['destination'] = $_POST['destination'];
        $sms['sender'] = config('services.aligo.sender');
        // $sms['rdate'] = $_POST['rdate'];
        // $sms['rtime'] = $_POST['rtime'];
        $sms['testmode_yn'] = config('services.aligo.testmode_yn');
        // $sms['title'] = $_POST['subject']; // SMS 에서는 불필요
        $sms['msg_type'] = config('services.aligo.msg_type');

        $oCurl = curl_init();
        curl_setopt($oCurl, CURLOPT_PORT, $port);
        curl_setopt($oCurl, CURLOPT_URL, $sms_url);
        curl_setopt($oCurl, CURLOPT_POST, 1);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($oCurl, CURLOPT_POSTFIELDS, $sms);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
        $ret = curl_exec($oCurl);
        curl_close($oCurl);

        // echo $ret;
        $retArr = json_decode($ret); // 결과배열

        return $retArr;
    }
}
