 <?php
  

function send_LINE($msg){
 $access_token = 'eZ+TI9dGwsH1oP/Tfke+83u7n7BMj3DPhcl5RnwYa8XKGDwIUxAIAO5FuAK55FGBEkJZEdipqdOiraUMyvekXm1C73gJM42SNDN1rrnjl9cSWMPaSIiyNa3a7e+UxpzHXVRyshVSeOH+V5bWwvue5AdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U1d1fceb0df73d29fd0f7267db05ed6f6',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $proxy = 'velodrome.usefixie.com:80';
      $proxyauth = 'fixie:sCOlYQgVj69AFz2';
      curl_setopt($ch, CURLOPT_PROXY, $proxy);
      curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
