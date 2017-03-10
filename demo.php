<?php
$image="http://img1.cache.netease.com/catchpic/3/34/34553E45C90A03C481EDF8B193B7738A.jpg";
$curl = curl_init();
curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api-cn.faceplusplus.com/facepp/v3/detect",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => array('image_url'=>$image, 
									'api_key'=>"a4mVAzThtkwXv1IocxnCtKXclnDDzIQw",
									'api_secret'=>"MZs3RBST6T68UXdRl_A_ahgdc_ayCC7g"),
		CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache",
		),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>