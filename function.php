<?
function generatebutton($apikey,$secret,$hw,$style=NULL){
	if($style==""){
		$style=1;
	}
	$url="http://login.sharkwifi.com/rest-api.html?ukey=".$apikey."&skey=".$secret."&action=button&hw=".$hw."&style=".$style;

	$data= aksesurl($url);
	return $data;
}
function generateform($apikey,$secret,$username,$password){
	
	$url="http://login.sharkwifi.com/rest-api.html?ukey=".$apikey."&skey=".$secret."&action=loginmember&username=".$username."&password=".$password;

	$data= aksesurl($url);
	return $data;
}
function aksesurl($url){
	$curl = curl_init($url);
curl_setopt($curl, CURLOPT_FAILONERROR, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
$result = curl_exec($curl);
return $result; 
}
?>