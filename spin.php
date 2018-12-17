<?php
require __DIR__ . '/config.php';
function asw($a, $no) {
                $n = rand(1,10);;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 
"35.237.87.84:8000/spin?device_id=xxxxxxxxxxxxxxx");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$headers = array ();
			$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
			$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-J320G Build/LMY47V)";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
};
for($a=0;$a<100;$a++){
sleep (3);
$oce = asw($a, $user);
echo "".$oce."\n";
}
?>

