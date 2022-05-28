<?php
class FCM {
    function __construct() {
    }
   /**
    * Sending Push Notification
   */
  public function send_notification($registatoin_ids, $notification,$device_type) {
    var_dump($fields);
    die();
      $url = 'https://fcm.googleapis.com/fcm/send';
      if($device_type == "Android"){
            $fields = array(
                'to' => $registatoin_ids,
                'data' => $notification
            );
           
      } else {
            $fields = array(
                'to' => $registatoin_ids,
                'notification' => $notification
            );
      }
      // Firebase API Key
      $headers = array('Authorization:key=AAAAtjIU31w:APA91bGmxSWBlMMkiSEL_MglD6no90sOoVD1_CYPSpxQ9bRcC-0ECZWotGuYcP9S26fS1td3-b7fFgpayiYqABWwIUXXBcefdX7GUk9RjRIPG1My7NFWl50B_CLBCmsOPANV0TDZDVFj','Content-Type:application/json');
     // Open connection
      $ch = curl_init();
      // Set the url, number of POST vars, POST data
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // Disabling SSL Certificate support temporarly
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
      $result = curl_exec($ch);
      if ($result === FALSE) {
          die('Curl failed: ' . curl_error($ch));
      }
      curl_close($ch);
  }
}   
?>