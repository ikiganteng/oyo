<?php
function nama()
 {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	// $rand = json_decode($rnd_get, true);
	preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
	return $name[2][mt_rand(0, 14) ];
	}

//error_reporting(0);
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$android_id = generateRandomString(16);
echo "Choose Register Number? Indo = 1 & US = 2: ";
$type = trim(fgets(STDIN));
if($type == 1){
echo 'Enter Phone Number : '; 
$phone_number = trim(fgets(STDIN)); 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.oyorooms.com/api/v2/users/initiate_login?phone='.$phone_number.'&nod=4&intent=login&sms_auto_retrieval=true&android_version=23&country_code=%2B62&country_iso_code=ID&version=20279&partner_app_version=20279&android_id='.$android_id.'&idfa=bbd5b63f-1503-4401-adf0-e9b65320b7d9&sid=1573588258317');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Access_token: QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=';
$headers[] = 'Authorization: Basic QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=';
$headers[] = 'OYO_AB_CONFIG: 1573589100627|mwhp:1|pnna:2|srma:1|ndpp:0|rst2:1|wraa:1|pnni:0|srmi:1|wcta:1|popl:0|nhi2:1|sbma:1|plio:1|rae:1|prep:1|near:0|htab:1|hbna:1|gla:0|absb:0|rwil:1|sbmi:1|stb:0|sta:1|se5:0|ROI1:1|se7:0|se6:1|bcpw:1|lssa:1|rri:1|smrt:0|nhgl:1|hdab:1|slpr:1|lssi:1|lsba:1|lzpi:0|npfi:1|lsbi:1|csmp:1|nsls:1|hmva:1|tvti:0|dww2:0|deal:1|simh:1|pnpd:1|lhpi:1|hind:1|rcua:1|iae:1|hcru:1|gsti:1|sut:0|ncpa:0|nhit:0|lrce:0|hpc:1|clbn:1|otp4:1|urha:1|ppa:2|hmub:1|stc2:1|urhi:1|ppi:2|gsta:0|pyui:1|nlab:1|asa:1|nlp:1|mjo:1|kwa:1|wrai:1|onab:0|wtei:1|asi:1|asei:1|kwi:1|bsba:2|aca:1|wtib:3|OPHM:1|lyr:0|aci:0|npld:1|sraa:1|DWWS:1|nsri:1|a2hs:1|slua:1|ophm:1|rare:1|slui:1|pfri:0|ssbo:0|ltio:1|aprv:1|JAK1:0|test:0|aswp:1|shli:0|vna:1|debg:0|jak2:1|rcui:1|vni:1|idl:0|ltha:1|sbpa:0|CGK1:0|lthi:1|sbpi:0|sinc:1|shla:0|nglf:0|brea:1|idum:0|ngli:1|plpe:1|lpti:1|lsja:1|saak:1|ffab:1|LAVN:0|pst:1|stfi:2|mnlp:1|rwol:1|stft:2|omue:0|brei:1|hsei:1|hbsi:1|nbs1:1|apsm:0|stfa:1|stfb:1|pdc:0|home:0|laem:0|pfsb:1|otab:1|lsha:1|gsa:1|dwhp:0|hcua:1|hbsa:1|mrci:1|gse:0|lshi:1|pdn:1|wbe:1|gsi:1|locr:0|nhpi:0|nppa:1|hpra:1|obai:1|hopa:1|geon:1|dbad:1|nrca:1|otda:1|epa:2|nhpa:1|nrci:1|pnva:1|epi:0|gmmw:1|tbai:0|epn:2|mmla:1|rmo2:1|weng:0|shpa:1|hppl:1|lsji:1|shpi:1|irab:0|mum3:0|apei:1|mum2:1|mum1:0|lvci:0|hpcm:1|lmra:1|frms:1|gpwa:0|vsa:1|prpa:1|saet:1|nhba:1|lmri:1|gpwi:0|copi:1|nrfa:0|vsi:1|nbwa:0|prpi:0|lmaa:0|mhdp:1|cpbp:0|web:1|dpc:2|mtlp:0|lvca:1|chsa:1|saea:1|mrc:1|ragh:0|pdca:2|vct:0|phb:1|pdci:0|ihpo:1|rpea:1|cadd:1|amrc:0|nsfa:1|oban:1|copa:1|hpro:1|mwql:1|spc2:1|isec:0|sfni:2|fsad:0|rfdd:1|auto:1|uiab:1|rfda:1|sob:1|dbg2:0|ndlp:1|wtab:3|hmpi:1|high:1|bdpi:1|Disc:1|pbra:1|sos:2|WBNB:0|rera:1|logn:1|kol1:1|uaab:1|nhti:1|bdpa:1|pbri:1|nob2:1|swar:1|tooi:0|glpa:1|aowt:1|apid:0|pbab:1|del1:1|del2:1|nava:1|glpi:1|nmlp:0|trCl:1|nhbi:1|tba:0|nbwi:0|tooa:0|tyru:0|tsb:1|mv3a:0|lsc2:0|diei:1|rk01:1|INS:1|WTBL:0|cLog:0|dcr:0|dte:1|para:1|acsi:1|lsaa:1|hmaa:0|adum:0|LJPM:1|fipc:0|lsai:1|hmai:1|thth:0|mwen:1|wrni:0|efa:1|hpwa:0|fbb2:1|sra:2|reca:1|BnTc:0|mwep:2|ple:1|ngst:1|hpwi:1|pcva:1|vr11:0|reci:1|jbei:1|aimg:1|meal:1|pcuc:0|nhdp:1|ffib:1|mww2:1|ioab:0|hpfd:1|lohp:0|wrna:0|srz:1|plwc:1|gala:0';
$headers[] = 'Accept-Language: en';
$headers[] = 'Content-Type: application/json';
$headers[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; Redmi Note 4X MIUI/V10.2.1.0.MBFMIXM)';
$headers[] = 'Host: api.oyorooms.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$json = json_decode($result);
if($json->is_user_present == 1){
	echo "Nomor sudah terdaftar";
	die();
}
echo 'Enter OTP : '; 
$otp = trim(fgets(STDIN)); 
echo 'Enter refferal : '; 
$reff = trim(fgets(STDIN)); 
$nama = nama();
$email = strtolower(str_replace(" ", "", $nama) . mt_rand(100,999) . "@gmail.com");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.oyorooms.com/v2/users/new_sign_up?additional_fields=ab_service_data&handset=Xiaomi%2C%20Redmi%20Note%204X&version=20279&partner_app_version=20279&android_id='.$android_id.'&idfa=bbd5b63f-1503-4401-adf0-e9b65320b7d9&sid=1573588258317');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
	"device_web_token":"eyJhbGciOiJSUzI1NiIsIng1YyI6WyJNSUlGbERDQ0JIeWdBd0lCQWdJUkFNa2J6Mm9GaitnaUNBQUFBQUFWZGYwd0RRWUpLb1pJaHZjTkFRRUxCUUF3UWpFTE1Ba0dBMVVFQmhNQ1ZWTXhIakFjQmdOVkJBb1RGVWR2YjJkc1pTQlVjblZ6ZENCVFpYSjJhV05sY3pFVE1CRUdBMVVFQXhNS1IxUlRJRU5CSURGUE1UQWVGdzB4T1RBNU1qQXdOelUyTVRoYUZ3MHhPVEV5TVRrd056VTJNVGhhTUd3eEN6QUpCZ05WQkFZVEFsVlRNUk13RVFZRFZRUUlFd3BEWVd4cFptOXlibWxoTVJZd0ZBWURWUVFIRXcxTmIzVnVkR0ZwYmlCV2FXVjNNUk13RVFZRFZRUUtFd3BIYjI5bmJHVWdURXhETVJzd0dRWURWUVFERXhKaGRIUmxjM1F1WVc1a2NtOXBaQzVqYjIwd2dnRWlNQTBHQ1NxR1NJYjNEUUVCQVFVQUE0SUJEd0F3Z2dFS0FvSUJBUUNkcmtpWEgza2dMTGFSeGI0ZkYyaWV0QjltQjdmTDNyVzFVVyt1UGZ4dDBid2VVZXprV290RktrcVVJUGlReVhLejNNMVYxS1h6RHY2ZmNoNk41ODNRamg4allXZ0F2c3FHdmE1RmlqaFdYcWtkUERkOGRiaTdjb1NrTjlTWTlXNU8ycHN0RVQzY2RkS3p0cks2NEJPcU5SUGRDeEc2aFJwK29VUklXTzhDU01xV08yTVdSTnAwRlpOaFNLcGgvay9Md2pVN2lUY1ZVWWJuRHFLWmQ1WVFsclFYMTBKdkw2cENadUZOSzR2VlBJRXlGL094U2xJQzcvRmdoRGR3MEdMWHplZnF0V2owRFBha2tiSGRzTTNQS1hxdnpPdGpiLzZoeVRDcFZQbnM1L1ZXRjQ5S3E3Ui9SeTNwTkZhaDR2Tmhoam5td01vNmZQZ21LQ1NCNWlEL0FnTUJBQUdqZ2dKWk1JSUNWVEFPQmdOVkhROEJBZjhFQkFNQ0JhQXdFd1lEVlIwbEJBd3dDZ1lJS3dZQkJRVUhBd0V3REFZRFZSMFRBUUgvQkFJd0FEQWRCZ05WSFE0RUZnUVUzeXpXZk5QdXRlazR6REpJd2dUZWlEOGg1V1F3SHdZRFZSMGpCQmd3Rm9BVW1OSDRiaERyejV2c1lKOFlrQnVnNjMwSi9Tc3daQVlJS3dZQkJRVUhBUUVFV0RCV01DY0dDQ3NHQVFVRkJ6QUJoaHRvZEhSd09pOHZiMk56Y0M1d2Eya3VaMjl2Wnk5bmRITXhiekV3S3dZSUt3WUJCUVVITUFLR0gyaDBkSEE2THk5d2Eya3VaMjl2Wnk5bmMzSXlMMGRVVXpGUE1TNWpjblF3SFFZRFZSMFJCQll3RklJU1lYUjBaWE4wTG1GdVpISnZhV1F1WTI5dE1DRUdBMVVkSUFRYU1CZ3dDQVlHWjRFTUFRSUNNQXdHQ2lzR0FRUUIxbmtDQlFNd0x3WURWUjBmQkNnd0pqQWtvQ0tnSUlZZWFIUjBjRG92TDJOeWJDNXdhMmt1WjI5dlp5OUhWRk14VHpFdVkzSnNNSUlCQlFZS0t3WUJCQUhXZVFJRUFnU0I5Z1NCOHdEeEFIWUFZL0xiemVnN3pDelBDM0tFSjFkck02U05ZWGVQdlhXbU9MSEhhRlJMMkkwQUFBRnRUZUxuMHdBQUJBTUFSekJGQWlFQWluek1vN3J0UzJjLzNKQmdRdDJDSytoaGMvYzN0SVg5cUwyWW9xcTE1RVFDSUNaekN6RVFPME5YdWl4bSs2N2xUclkzcmFQN2t1K09CTlVua1FXV0Q5ZElBSGNBZEg3YWd6R3RNeENSSVp6T0pVOUNjTUsvL1Y1Q0lBakdOelY1NWhCN3pGWUFBQUZ0VGVMbjRBQUFCQU1BU0RCR0FpRUExRjRYN0pvSWZuTVJ5alVlU1pYZlArMnhhaGl3Q0R1V2FpQkVkYnJWMnJFQ0lRRFdYaStGUUFJMnBva2h1R2pDTXVkK1dMMmFFODcxRHVRQzdKdVJ6dGR1V3pBTkJna3Foa2lHOXcwQkFRc0ZBQU9DQVFFQVhHNUhxbUNSTzJCSjkxVGJZMEh3QWcyYzFHUVYzd1NWMnBPbDVSbjJrWjNsbHBHRHRselhTQTVhaEVHOWdWZ0xGSTc4S1ZxdVRmeldVOUZhMHllSjVJbFFSUFJOM0ZXcGFLN1RmMkc3bFZ1TytwUFMvMjV2UloyN3hzZ0gwMFh4blpmRVNvMGxhWXd0eml0UFVDWS9USkl6bmJ1SlE2Qm5xbGlCdk0xN0p1eGVWckg5MjZnUjRGMnpKbkhiY1dqRFo1c0JFQXo5bS9UMzZaOG95djR0eEEvT2xGQVJRUDNqc21FK2g2cEg1RENTSU83SXgwZ2VNenE2UlNiNTJtTTRsemRjREo5c1YwQlphVndQeE9lU2paWW82anl0RGhWLzF4T1ZlZVVaLzBEa2g1ZXViTnVZOWErNHFLTTNFSzYxZGpuZ2JvZWVzUUptSjdJUktveko0UT09IiwiTUlJRVNqQ0NBektnQXdJQkFnSU5BZU8wbXFHTmlxbUJKV2xRdURBTkJna3Foa2lHOXcwQkFRc0ZBREJNTVNBd0hnWURWUVFMRXhkSGJHOWlZV3hUYVdkdUlGSnZiM1FnUTBFZ0xTQlNNakVUTUJFR0ExVUVDaE1LUjJ4dlltRnNVMmxuYmpFVE1CRUdBMVVFQXhNS1IyeHZZbUZzVTJsbmJqQWVGdzB4TnpBMk1UVXdNREF3TkRKYUZ3MHlNVEV5TVRVd01EQXdOREphTUVJeEN6QUpCZ05WQkFZVEFsVlRNUjR3SEFZRFZRUUtFeFZIYjI5bmJHVWdWSEoxYzNRZ1UyVnlkbWxqWlhNeEV6QVJCZ05WQkFNVENrZFVVeUJEUVNBeFR6RXdnZ0VpTUEwR0NTcUdTSWIzRFFFQkFRVUFBNElCRHdBd2dnRUtBb0lCQVFEUUdNOUYxSXZOMDV6a1FPOSt0TjFwSVJ2Snp6eU9USFc1RHpFWmhEMmVQQ252VUEwUWsyOEZnSUNmS3FDOUVrc0M0VDJmV0JZay9qQ2ZDM1IzVlpNZFMvZE40WktDRVBaUnJBekRzaUtVRHpScm1CQko1d3VkZ3puZElNWWNMZS9SR0dGbDV5T0RJS2dqRXYvU0pIL1VMK2RFYWx0TjExQm1zSytlUW1NRisrQWN4R05ocjU5cU0vOWlsNzFJMmROOEZHZmNkZHd1YWVqNGJYaHAwTGNRQmJqeE1jSTdKUDBhTTNUNEkrRHNheG1LRnNianphVE5DOXV6cEZsZ09JZzdyUjI1eG95blV4djh2Tm1rcTd6ZFBHSFhreFdZN29HOWorSmtSeUJBQms3WHJKZm91Y0JaRXFGSkpTUGs3WEEwTEtXMFkzejVvejJEMGMxdEpLd0hBZ01CQUFHamdnRXpNSUlCTHpBT0JnTlZIUThCQWY4RUJBTUNBWVl3SFFZRFZSMGxCQll3RkFZSUt3WUJCUVVIQXdFR0NDc0dBUVVGQndNQ01CSUdBMVVkRXdFQi93UUlNQVlCQWY4Q0FRQXdIUVlEVlIwT0JCWUVGSmpSK0c0UTY4K2I3R0NmR0pBYm9PdDlDZjByTUI4R0ExVWRJd1FZTUJhQUZKdmlCMWRuSEI3QWFnYmVXYlNhTGQvY0dZWXVNRFVHQ0NzR0FRVUZCd0VCQkNrd0p6QWxCZ2dyQmdFRkJRY3dBWVlaYUhSMGNEb3ZMMjlqYzNBdWNHdHBMbWR2YjJjdlozTnlNakF5QmdOVkhSOEVLekFwTUNlZ0phQWpoaUZvZEhSd09pOHZZM0pzTG5CcmFTNW5iMjluTDJkemNqSXZaM055TWk1amNtd3dQd1lEVlIwZ0JEZ3dOakEwQmdabmdRd0JBZ0l3S2pBb0JnZ3JCZ0VGQlFjQ0FSWWNhSFIwY0hNNkx5OXdhMmt1WjI5dlp5OXlaWEJ2YzJsMGIzSjVMekFOQmdrcWhraUc5dzBCQVFzRkFBT0NBUUVBR29BK05ubjc4eTZwUmpkOVhsUVdOYTdIVGdpWi9yM1JOR2ttVW1ZSFBRcTZTY3RpOVBFYWp2d1JUMmlXVEhRcjAyZmVzcU9xQlkyRVRVd2daUStsbHRvTkZ2aHNPOXR2QkNPSWF6cHN3V0M5YUo5eGp1NHRXRFFIOE5WVTZZWlovWHRlRFNHVTlZekpxUGpZOHEzTUR4cnptcWVwQkNmNW84bXcvd0o0YTJHNnh6VXI2RmI2VDhNY0RPMjJQTFJMNnUzTTRUenMzQTJNMWo2YnlrSllpOHdXSVJkQXZLTFdadS9heEJWYnpZbXFtd2ttNXpMU0RXNW5JQUpiRUxDUUNad01INTZ0MkR2cW9meHM2QkJjQ0ZJWlVTcHh1Nng2dGQwVjdTdkpDQ29zaXJTbUlhdGovOWRTU1ZEUWliZXQ4cS83VUs0djRaVU44MGF0blp6MXlnPT0iXX0.eyJub25jZSI6IkNSSCt5VUJsdkNTOGRHa3U2T2Z0UzJCc0loa3hrTHF0T3FMYWVZd2JNWlk9IiwidGltZXN0YW1wTXMiOjE1NzM1ODgyNzc3MjksImFwa1BhY2thZ2VOYW1lIjoiY29tLm95by5jb25zdW1lciIsImFwa0RpZ2VzdFNoYTI1NiI6ImVTM25hYUt0TCs5a0tDb3pxVFVvQTVIeWxvVjIza0xFNDlNWWZpQmNJK0U9IiwiY3RzUHJvZmlsZU1hdGNoIjp0cnVlLCJhcGtDZXJ0aWZpY2F0ZURpZ2VzdFNoYTI1NiI6WyJYQlVqR0wxaG5mb1A0ZmI0ZXhqTmYvQ1BYUENlUzBiVHRkMHhvaTZxOS9nPSJdLCJiYXNpY0ludGVncml0eSI6dHJ1ZX0.YSaJ3NDssQDQAqL_t0q-BntgFiFEVvbiI-CWCCxkP39ziimjWtNEFREQoWXHJRFcvFwzUT-dfBC2SBRDyaXrpoBKW3U-KT2P1WUrA8mZIctcNNBNW_ippR3h4C7pJABIdxkQMN1SBArbPrLMG3_U_ZA-cp_hvXCnp3UaKT-EUWTu2YBFjn8lpzDaCSrriXXV459ynL3ZrwQyS8lZ7DQoBjTK4iv7ImYGgd3zOiWPSUFpxpeh9iS-JS6bbIH87b0Y2wzyID6Lm_qsuALF5eZARwSuyOc6K9bKiVLtO7PaGSHRyCzplXGfqgGe-01ZEV3QHWuZkTu6qkL7G890a9auPw",
	"is_user_verified_via_chatApp":false,
	"truecaller":false,
	"isValidated":false,
	"code": "'.$otp.'",
	"country_code": "+62",
	"country_iso_code":"ID",
	"device_id": "'.$android_id.'",
	"device_type": "android",
	"email": "'.$email.'",
	"id": 0,
	"idfa": "",
	"name": "'.$nama.'",
	"phone": "'.$phone_number.'",
	"push_type": "gcm",
	"referral_code": "'.$reff.'",
	"token":"eHIB17-9OhY:APA91bHrzVeeDqaTUW0xY6Ae_rApM53gbroRLBfc7simzkhocki29BzxFp2eit-m5sJ1wM7qJ96c7RmS_IaDQDbiy8a6u6FzRc3NixOR8qLYaGsMM3Z1NxpModa0Ojlom-8R713_0SM4",
	"updated_at": 0
}');
$headers = array();
$headers[] = 'Access_token: QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=';
$headers[] = 'Authorization: Basic QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=';
$headers[] = 'OYO_AB_CONFIG: 1573589100627|mwhp:1|pnna:2|srma:1|ndpp:0|rst2:1|wraa:1|pnni:0|srmi:1|wcta:1|popl:0|nhi2:1|sbma:1|plio:1|rae:1|prep:1|near:0|htab:1|hbna:1|gla:0|absb:0|rwil:1|sbmi:1|stb:0|sta:1|se5:0|ROI1:1|se7:0|se6:1|bcpw:1|lssa:1|rri:1|smrt:0|nhgl:1|hdab:1|slpr:1|lssi:1|lsba:1|lzpi:0|npfi:1|lsbi:1|csmp:1|nsls:1|hmva:1|tvti:0|dww2:0|deal:1|simh:1|pnpd:1|lhpi:1|hind:1|rcua:1|iae:1|hcru:1|gsti:1|sut:0|ncpa:0|nhit:0|lrce:0|hpc:1|clbn:1|otp4:1|urha:1|ppa:2|hmub:1|stc2:1|urhi:1|ppi:2|gsta:0|pyui:1|nlab:1|asa:1|nlp:1|mjo:1|kwa:1|wrai:1|onab:0|wtei:1|asi:1|asei:1|kwi:1|bsba:2|aca:1|wtib:3|OPHM:1|lyr:0|aci:0|npld:1|sraa:1|DWWS:1|nsri:1|a2hs:1|slua:1|ophm:1|rare:1|slui:1|pfri:0|ssbo:0|ltio:1|aprv:1|JAK1:0|test:0|aswp:1|shli:0|vna:1|debg:0|jak2:1|rcui:1|vni:1|idl:0|ltha:1|sbpa:0|CGK1:0|lthi:1|sbpi:0|sinc:1|shla:0|nglf:0|brea:1|idum:0|ngli:1|plpe:1|lpti:1|lsja:1|saak:1|ffab:1|LAVN:0|pst:1|stfi:2|mnlp:1|rwol:1|stft:2|omue:0|brei:1|hsei:1|hbsi:1|nbs1:1|apsm:0|stfa:1|stfb:1|pdc:0|home:0|laem:0|pfsb:1|otab:1|lsha:1|gsa:1|dwhp:0|hcua:1|hbsa:1|mrci:1|gse:0|lshi:1|pdn:1|wbe:1|gsi:1|locr:0|nhpi:0|nppa:1|hpra:1|obai:1|hopa:1|geon:1|dbad:1|nrca:1|otda:1|epa:2|nhpa:1|nrci:1|pnva:1|epi:0|gmmw:1|tbai:0|epn:2|mmla:1|rmo2:1|weng:0|shpa:1|hppl:1|lsji:1|shpi:1|irab:0|mum3:0|apei:1|mum2:1|mum1:0|lvci:0|hpcm:1|lmra:1|frms:1|gpwa:0|vsa:1|prpa:1|saet:1|nhba:1|lmri:1|gpwi:0|copi:1|nrfa:0|vsi:1|nbwa:0|prpi:0|lmaa:0|mhdp:1|cpbp:0|web:1|dpc:2|mtlp:0|lvca:1|chsa:1|saea:1|mrc:1|ragh:0|pdca:2|vct:0|phb:1|pdci:0|ihpo:1|rpea:1|cadd:1|amrc:0|nsfa:1|oban:1|copa:1|hpro:1|mwql:1|spc2:1|isec:0|sfni:2|fsad:0|rfdd:1|auto:1|uiab:1|rfda:1|sob:1|dbg2:0|ndlp:1|wtab:3|hmpi:1|high:1|bdpi:1|Disc:1|pbra:1|sos:2|WBNB:0|rera:1|logn:1|kol1:1|uaab:1|nhti:1|bdpa:1|pbri:1|nob2:1|swar:1|tooi:0|glpa:1|aowt:1|apid:0|pbab:1|del1:1|del2:1|nava:1|glpi:1|nmlp:0|trCl:1|nhbi:1|tba:0|nbwi:0|tooa:0|tyru:0|tsb:1|mv3a:0|lsc2:0|diei:1|rk01:1|INS:1|WTBL:0|cLog:0|dcr:0|dte:1|para:1|acsi:1|lsaa:1|hmaa:0|adum:0|LJPM:1|fipc:0|lsai:1|hmai:1|thth:0|mwen:1|wrni:0|efa:1|hpwa:0|fbb2:1|sra:2|reca:1|BnTc:0|mwep:2|ple:1|ngst:1|hpwi:1|pcva:1|vr11:0|reci:1|jbei:1|aimg:1|meal:1|pcuc:0|nhdp:1|ffib:1|mww2:1|ioab:0|hpfd:1|lohp:0|wrna:0|srz:1|plwc:1|gala:0';
$headers[] = 'Accept-Language: en';
$headers[] = 'Content-Type: application/json; charset=utf-8';
$headers[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; Redmi Note 4X MIUI/V10.2.1.0.MBFMIXM)';
$headers[] = 'Host: api.oyorooms.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$json = json_decode($result);

if($json->success == 0){
	echo $json->error->message;
	die();
}
echo $result;
echo $phone_number." Berhasil mendaftar OYO";
}else if($type == 2){
	echo 'Enter Phone Number : '; 
$phone_number = trim(fgets(STDIN)); 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.oyorooms.com/api/v2/users/initiate_login?phone='.$phone_number.'&nod=4&intent=login&sms_auto_retrieval=true&android_version=23&country_code=%2B1&country_iso_code=US&version=20279&partner_app_version=20279&android_id='.$android_id.'&idfa=bbd5b63f-1503-4401-adf0-e9b65320b7d9&sid=1573588258317');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Access_token: QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=';
$headers[] = 'Authorization: Basic QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=';
$headers[] = 'OYO_AB_CONFIG: 1573589100627|mwhp:1|pnna:2|srma:1|ndpp:0|rst2:1|wraa:1|pnni:0|srmi:1|wcta:1|popl:0|nhi2:1|sbma:1|plio:1|rae:1|prep:1|near:0|htab:1|hbna:1|gla:0|absb:0|rwil:1|sbmi:1|stb:0|sta:1|se5:0|ROI1:1|se7:0|se6:1|bcpw:1|lssa:1|rri:1|smrt:0|nhgl:1|hdab:1|slpr:1|lssi:1|lsba:1|lzpi:0|npfi:1|lsbi:1|csmp:1|nsls:1|hmva:1|tvti:0|dww2:0|deal:1|simh:1|pnpd:1|lhpi:1|hind:1|rcua:1|iae:1|hcru:1|gsti:1|sut:0|ncpa:0|nhit:0|lrce:0|hpc:1|clbn:1|otp4:1|urha:1|ppa:2|hmub:1|stc2:1|urhi:1|ppi:2|gsta:0|pyui:1|nlab:1|asa:1|nlp:1|mjo:1|kwa:1|wrai:1|onab:0|wtei:1|asi:1|asei:1|kwi:1|bsba:2|aca:1|wtib:3|OPHM:1|lyr:0|aci:0|npld:1|sraa:1|DWWS:1|nsri:1|a2hs:1|slua:1|ophm:1|rare:1|slui:1|pfri:0|ssbo:0|ltio:1|aprv:1|JAK1:0|test:0|aswp:1|shli:0|vna:1|debg:0|jak2:1|rcui:1|vni:1|idl:0|ltha:1|sbpa:0|CGK1:0|lthi:1|sbpi:0|sinc:1|shla:0|nglf:0|brea:1|idum:0|ngli:1|plpe:1|lpti:1|lsja:1|saak:1|ffab:1|LAVN:0|pst:1|stfi:2|mnlp:1|rwol:1|stft:2|omue:0|brei:1|hsei:1|hbsi:1|nbs1:1|apsm:0|stfa:1|stfb:1|pdc:0|home:0|laem:0|pfsb:1|otab:1|lsha:1|gsa:1|dwhp:0|hcua:1|hbsa:1|mrci:1|gse:0|lshi:1|pdn:1|wbe:1|gsi:1|locr:0|nhpi:0|nppa:1|hpra:1|obai:1|hopa:1|geon:1|dbad:1|nrca:1|otda:1|epa:2|nhpa:1|nrci:1|pnva:1|epi:0|gmmw:1|tbai:0|epn:2|mmla:1|rmo2:1|weng:0|shpa:1|hppl:1|lsji:1|shpi:1|irab:0|mum3:0|apei:1|mum2:1|mum1:0|lvci:0|hpcm:1|lmra:1|frms:1|gpwa:0|vsa:1|prpa:1|saet:1|nhba:1|lmri:1|gpwi:0|copi:1|nrfa:0|vsi:1|nbwa:0|prpi:0|lmaa:0|mhdp:1|cpbp:0|web:1|dpc:2|mtlp:0|lvca:1|chsa:1|saea:1|mrc:1|ragh:0|pdca:2|vct:0|phb:1|pdci:0|ihpo:1|rpea:1|cadd:1|amrc:0|nsfa:1|oban:1|copa:1|hpro:1|mwql:1|spc2:1|isec:0|sfni:2|fsad:0|rfdd:1|auto:1|uiab:1|rfda:1|sob:1|dbg2:0|ndlp:1|wtab:3|hmpi:1|high:1|bdpi:1|Disc:1|pbra:1|sos:2|WBNB:0|rera:1|logn:1|kol1:1|uaab:1|nhti:1|bdpa:1|pbri:1|nob2:1|swar:1|tooi:0|glpa:1|aowt:1|apid:0|pbab:1|del1:1|del2:1|nava:1|glpi:1|nmlp:0|trCl:1|nhbi:1|tba:0|nbwi:0|tooa:0|tyru:0|tsb:1|mv3a:0|lsc2:0|diei:1|rk01:1|INS:1|WTBL:0|cLog:0|dcr:0|dte:1|para:1|acsi:1|lsaa:1|hmaa:0|adum:0|LJPM:1|fipc:0|lsai:1|hmai:1|thth:0|mwen:1|wrni:0|efa:1|hpwa:0|fbb2:1|sra:2|reca:1|BnTc:0|mwep:2|ple:1|ngst:1|hpwi:1|pcva:1|vr11:0|reci:1|jbei:1|aimg:1|meal:1|pcuc:0|nhdp:1|ffib:1|mww2:1|ioab:0|hpfd:1|lohp:0|wrna:0|srz:1|plwc:1|gala:0';
$headers[] = 'Accept-Language: en';
$headers[] = 'Content-Type: application/json';
$headers[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; Redmi Note 4X MIUI/V10.2.1.0.MBFMIXM)';
$headers[] = 'Host: api.oyorooms.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$json = json_decode($result);
if($json->is_user_present == 1){
	echo "Nomor sudah terdaftar";
	die();
}
echo 'Enter OTP : '; 
$otp = trim(fgets(STDIN)); 
echo 'Enter refferal : '; 
$reff = trim(fgets(STDIN)); 
$nama = nama();
$email = strtolower(str_replace(" ", "", $nama) . mt_rand(100,999) . "@gmail.com");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.oyorooms.com/v2/users/new_sign_up?additional_fields=ab_service_data&handset=Xiaomi%2C%20Redmi%20Note%204X&version=20279&partner_app_version=20279&android_id='.$android_id.'&idfa=bbd5b63f-1503-4401-adf0-e9b65320b7d9&sid=1573588258317');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
	"device_web_token":"eyJhbGciOiJSUzI1NiIsIng1YyI6WyJNSUlGbERDQ0JIeWdBd0lCQWdJUkFNa2J6Mm9GaitnaUNBQUFBQUFWZGYwd0RRWUpLb1pJaHZjTkFRRUxCUUF3UWpFTE1Ba0dBMVVFQmhNQ1ZWTXhIakFjQmdOVkJBb1RGVWR2YjJkc1pTQlVjblZ6ZENCVFpYSjJhV05sY3pFVE1CRUdBMVVFQXhNS1IxUlRJRU5CSURGUE1UQWVGdzB4T1RBNU1qQXdOelUyTVRoYUZ3MHhPVEV5TVRrd056VTJNVGhhTUd3eEN6QUpCZ05WQkFZVEFsVlRNUk13RVFZRFZRUUlFd3BEWVd4cFptOXlibWxoTVJZd0ZBWURWUVFIRXcxTmIzVnVkR0ZwYmlCV2FXVjNNUk13RVFZRFZRUUtFd3BIYjI5bmJHVWdURXhETVJzd0dRWURWUVFERXhKaGRIUmxjM1F1WVc1a2NtOXBaQzVqYjIwd2dnRWlNQTBHQ1NxR1NJYjNEUUVCQVFVQUE0SUJEd0F3Z2dFS0FvSUJBUUNkcmtpWEgza2dMTGFSeGI0ZkYyaWV0QjltQjdmTDNyVzFVVyt1UGZ4dDBid2VVZXprV290RktrcVVJUGlReVhLejNNMVYxS1h6RHY2ZmNoNk41ODNRamg4allXZ0F2c3FHdmE1RmlqaFdYcWtkUERkOGRiaTdjb1NrTjlTWTlXNU8ycHN0RVQzY2RkS3p0cks2NEJPcU5SUGRDeEc2aFJwK29VUklXTzhDU01xV08yTVdSTnAwRlpOaFNLcGgvay9Md2pVN2lUY1ZVWWJuRHFLWmQ1WVFsclFYMTBKdkw2cENadUZOSzR2VlBJRXlGL094U2xJQzcvRmdoRGR3MEdMWHplZnF0V2owRFBha2tiSGRzTTNQS1hxdnpPdGpiLzZoeVRDcFZQbnM1L1ZXRjQ5S3E3Ui9SeTNwTkZhaDR2Tmhoam5td01vNmZQZ21LQ1NCNWlEL0FnTUJBQUdqZ2dKWk1JSUNWVEFPQmdOVkhROEJBZjhFQkFNQ0JhQXdFd1lEVlIwbEJBd3dDZ1lJS3dZQkJRVUhBd0V3REFZRFZSMFRBUUgvQkFJd0FEQWRCZ05WSFE0RUZnUVUzeXpXZk5QdXRlazR6REpJd2dUZWlEOGg1V1F3SHdZRFZSMGpCQmd3Rm9BVW1OSDRiaERyejV2c1lKOFlrQnVnNjMwSi9Tc3daQVlJS3dZQkJRVUhBUUVFV0RCV01DY0dDQ3NHQVFVRkJ6QUJoaHRvZEhSd09pOHZiMk56Y0M1d2Eya3VaMjl2Wnk5bmRITXhiekV3S3dZSUt3WUJCUVVITUFLR0gyaDBkSEE2THk5d2Eya3VaMjl2Wnk5bmMzSXlMMGRVVXpGUE1TNWpjblF3SFFZRFZSMFJCQll3RklJU1lYUjBaWE4wTG1GdVpISnZhV1F1WTI5dE1DRUdBMVVkSUFRYU1CZ3dDQVlHWjRFTUFRSUNNQXdHQ2lzR0FRUUIxbmtDQlFNd0x3WURWUjBmQkNnd0pqQWtvQ0tnSUlZZWFIUjBjRG92TDJOeWJDNXdhMmt1WjI5dlp5OUhWRk14VHpFdVkzSnNNSUlCQlFZS0t3WUJCQUhXZVFJRUFnU0I5Z1NCOHdEeEFIWUFZL0xiemVnN3pDelBDM0tFSjFkck02U05ZWGVQdlhXbU9MSEhhRlJMMkkwQUFBRnRUZUxuMHdBQUJBTUFSekJGQWlFQWluek1vN3J0UzJjLzNKQmdRdDJDSytoaGMvYzN0SVg5cUwyWW9xcTE1RVFDSUNaekN6RVFPME5YdWl4bSs2N2xUclkzcmFQN2t1K09CTlVua1FXV0Q5ZElBSGNBZEg3YWd6R3RNeENSSVp6T0pVOUNjTUsvL1Y1Q0lBakdOelY1NWhCN3pGWUFBQUZ0VGVMbjRBQUFCQU1BU0RCR0FpRUExRjRYN0pvSWZuTVJ5alVlU1pYZlArMnhhaGl3Q0R1V2FpQkVkYnJWMnJFQ0lRRFdYaStGUUFJMnBva2h1R2pDTXVkK1dMMmFFODcxRHVRQzdKdVJ6dGR1V3pBTkJna3Foa2lHOXcwQkFRc0ZBQU9DQVFFQVhHNUhxbUNSTzJCSjkxVGJZMEh3QWcyYzFHUVYzd1NWMnBPbDVSbjJrWjNsbHBHRHRselhTQTVhaEVHOWdWZ0xGSTc4S1ZxdVRmeldVOUZhMHllSjVJbFFSUFJOM0ZXcGFLN1RmMkc3bFZ1TytwUFMvMjV2UloyN3hzZ0gwMFh4blpmRVNvMGxhWXd0eml0UFVDWS9USkl6bmJ1SlE2Qm5xbGlCdk0xN0p1eGVWckg5MjZnUjRGMnpKbkhiY1dqRFo1c0JFQXo5bS9UMzZaOG95djR0eEEvT2xGQVJRUDNqc21FK2g2cEg1RENTSU83SXgwZ2VNenE2UlNiNTJtTTRsemRjREo5c1YwQlphVndQeE9lU2paWW82anl0RGhWLzF4T1ZlZVVaLzBEa2g1ZXViTnVZOWErNHFLTTNFSzYxZGpuZ2JvZWVzUUptSjdJUktveko0UT09IiwiTUlJRVNqQ0NBektnQXdJQkFnSU5BZU8wbXFHTmlxbUJKV2xRdURBTkJna3Foa2lHOXcwQkFRc0ZBREJNTVNBd0hnWURWUVFMRXhkSGJHOWlZV3hUYVdkdUlGSnZiM1FnUTBFZ0xTQlNNakVUTUJFR0ExVUVDaE1LUjJ4dlltRnNVMmxuYmpFVE1CRUdBMVVFQXhNS1IyeHZZbUZzVTJsbmJqQWVGdzB4TnpBMk1UVXdNREF3TkRKYUZ3MHlNVEV5TVRVd01EQXdOREphTUVJeEN6QUpCZ05WQkFZVEFsVlRNUjR3SEFZRFZRUUtFeFZIYjI5bmJHVWdWSEoxYzNRZ1UyVnlkbWxqWlhNeEV6QVJCZ05WQkFNVENrZFVVeUJEUVNBeFR6RXdnZ0VpTUEwR0NTcUdTSWIzRFFFQkFRVUFBNElCRHdBd2dnRUtBb0lCQVFEUUdNOUYxSXZOMDV6a1FPOSt0TjFwSVJ2Snp6eU9USFc1RHpFWmhEMmVQQ252VUEwUWsyOEZnSUNmS3FDOUVrc0M0VDJmV0JZay9qQ2ZDM1IzVlpNZFMvZE40WktDRVBaUnJBekRzaUtVRHpScm1CQko1d3VkZ3puZElNWWNMZS9SR0dGbDV5T0RJS2dqRXYvU0pIL1VMK2RFYWx0TjExQm1zSytlUW1NRisrQWN4R05ocjU5cU0vOWlsNzFJMmROOEZHZmNkZHd1YWVqNGJYaHAwTGNRQmJqeE1jSTdKUDBhTTNUNEkrRHNheG1LRnNianphVE5DOXV6cEZsZ09JZzdyUjI1eG95blV4djh2Tm1rcTd6ZFBHSFhreFdZN29HOWorSmtSeUJBQms3WHJKZm91Y0JaRXFGSkpTUGs3WEEwTEtXMFkzejVvejJEMGMxdEpLd0hBZ01CQUFHamdnRXpNSUlCTHpBT0JnTlZIUThCQWY4RUJBTUNBWVl3SFFZRFZSMGxCQll3RkFZSUt3WUJCUVVIQXdFR0NDc0dBUVVGQndNQ01CSUdBMVVkRXdFQi93UUlNQVlCQWY4Q0FRQXdIUVlEVlIwT0JCWUVGSmpSK0c0UTY4K2I3R0NmR0pBYm9PdDlDZjByTUI4R0ExVWRJd1FZTUJhQUZKdmlCMWRuSEI3QWFnYmVXYlNhTGQvY0dZWXVNRFVHQ0NzR0FRVUZCd0VCQkNrd0p6QWxCZ2dyQmdFRkJRY3dBWVlaYUhSMGNEb3ZMMjlqYzNBdWNHdHBMbWR2YjJjdlozTnlNakF5QmdOVkhSOEVLekFwTUNlZ0phQWpoaUZvZEhSd09pOHZZM0pzTG5CcmFTNW5iMjluTDJkemNqSXZaM055TWk1amNtd3dQd1lEVlIwZ0JEZ3dOakEwQmdabmdRd0JBZ0l3S2pBb0JnZ3JCZ0VGQlFjQ0FSWWNhSFIwY0hNNkx5OXdhMmt1WjI5dlp5OXlaWEJ2YzJsMGIzSjVMekFOQmdrcWhraUc5dzBCQVFzRkFBT0NBUUVBR29BK05ubjc4eTZwUmpkOVhsUVdOYTdIVGdpWi9yM1JOR2ttVW1ZSFBRcTZTY3RpOVBFYWp2d1JUMmlXVEhRcjAyZmVzcU9xQlkyRVRVd2daUStsbHRvTkZ2aHNPOXR2QkNPSWF6cHN3V0M5YUo5eGp1NHRXRFFIOE5WVTZZWlovWHRlRFNHVTlZekpxUGpZOHEzTUR4cnptcWVwQkNmNW84bXcvd0o0YTJHNnh6VXI2RmI2VDhNY0RPMjJQTFJMNnUzTTRUenMzQTJNMWo2YnlrSllpOHdXSVJkQXZLTFdadS9heEJWYnpZbXFtd2ttNXpMU0RXNW5JQUpiRUxDUUNad01INTZ0MkR2cW9meHM2QkJjQ0ZJWlVTcHh1Nng2dGQwVjdTdkpDQ29zaXJTbUlhdGovOWRTU1ZEUWliZXQ4cS83VUs0djRaVU44MGF0blp6MXlnPT0iXX0.eyJub25jZSI6IkNSSCt5VUJsdkNTOGRHa3U2T2Z0UzJCc0loa3hrTHF0T3FMYWVZd2JNWlk9IiwidGltZXN0YW1wTXMiOjE1NzM1ODgyNzc3MjksImFwa1BhY2thZ2VOYW1lIjoiY29tLm95by5jb25zdW1lciIsImFwa0RpZ2VzdFNoYTI1NiI6ImVTM25hYUt0TCs5a0tDb3pxVFVvQTVIeWxvVjIza0xFNDlNWWZpQmNJK0U9IiwiY3RzUHJvZmlsZU1hdGNoIjp0cnVlLCJhcGtDZXJ0aWZpY2F0ZURpZ2VzdFNoYTI1NiI6WyJYQlVqR0wxaG5mb1A0ZmI0ZXhqTmYvQ1BYUENlUzBiVHRkMHhvaTZxOS9nPSJdLCJiYXNpY0ludGVncml0eSI6dHJ1ZX0.YSaJ3NDssQDQAqL_t0q-BntgFiFEVvbiI-CWCCxkP39ziimjWtNEFREQoWXHJRFcvFwzUT-dfBC2SBRDyaXrpoBKW3U-KT2P1WUrA8mZIctcNNBNW_ippR3h4C7pJABIdxkQMN1SBArbPrLMG3_U_ZA-cp_hvXCnp3UaKT-EUWTu2YBFjn8lpzDaCSrriXXV459ynL3ZrwQyS8lZ7DQoBjTK4iv7ImYGgd3zOiWPSUFpxpeh9iS-JS6bbIH87b0Y2wzyID6Lm_qsuALF5eZARwSuyOc6K9bKiVLtO7PaGSHRyCzplXGfqgGe-01ZEV3QHWuZkTu6qkL7G890a9auPw",
	"is_user_verified_via_chatApp":false,
	"truecaller":false,
	"isValidated":false,
	"code": "'.$otp.'",
	"country_code": "+1",
	"country_iso_code":"US",
	"device_id": "'.$android_id.'",
	"device_type": "android",
	"email": "'.$email.'",
	"id": 0,
	"idfa": "",
	"name": "'.$nama.'",
	"phone": "'.$phone_number.'",
	"push_type": "gcm",
	"referral_code": "'.$reff.'",
	"token":"eHIB17-9OhY:APA91bHrzVeeDqaTUW0xY6Ae_rApM53gbroRLBfc7simzkhocki29BzxFp2eit-m5sJ1wM7qJ96c7RmS_IaDQDbiy8a6u6FzRc3NixOR8qLYaGsMM3Z1NxpModa0Ojlom-8R713_0SM4",
	"updated_at": 0
}');
$headers = array();
$headers[] = 'Access_token: QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=';
$headers[] = 'Authorization: Basic QmpDZlRxZWo2UkZ5M3pSeHZ5NW46bi13NHN0ZTV5V1I1aGpCUVVHOUM=';
$headers[] = 'OYO_AB_CONFIG: 1573589100627|mwhp:1|pnna:2|srma:1|ndpp:0|rst2:1|wraa:1|pnni:0|srmi:1|wcta:1|popl:0|nhi2:1|sbma:1|plio:1|rae:1|prep:1|near:0|htab:1|hbna:1|gla:0|absb:0|rwil:1|sbmi:1|stb:0|sta:1|se5:0|ROI1:1|se7:0|se6:1|bcpw:1|lssa:1|rri:1|smrt:0|nhgl:1|hdab:1|slpr:1|lssi:1|lsba:1|lzpi:0|npfi:1|lsbi:1|csmp:1|nsls:1|hmva:1|tvti:0|dww2:0|deal:1|simh:1|pnpd:1|lhpi:1|hind:1|rcua:1|iae:1|hcru:1|gsti:1|sut:0|ncpa:0|nhit:0|lrce:0|hpc:1|clbn:1|otp4:1|urha:1|ppa:2|hmub:1|stc2:1|urhi:1|ppi:2|gsta:0|pyui:1|nlab:1|asa:1|nlp:1|mjo:1|kwa:1|wrai:1|onab:0|wtei:1|asi:1|asei:1|kwi:1|bsba:2|aca:1|wtib:3|OPHM:1|lyr:0|aci:0|npld:1|sraa:1|DWWS:1|nsri:1|a2hs:1|slua:1|ophm:1|rare:1|slui:1|pfri:0|ssbo:0|ltio:1|aprv:1|JAK1:0|test:0|aswp:1|shli:0|vna:1|debg:0|jak2:1|rcui:1|vni:1|idl:0|ltha:1|sbpa:0|CGK1:0|lthi:1|sbpi:0|sinc:1|shla:0|nglf:0|brea:1|idum:0|ngli:1|plpe:1|lpti:1|lsja:1|saak:1|ffab:1|LAVN:0|pst:1|stfi:2|mnlp:1|rwol:1|stft:2|omue:0|brei:1|hsei:1|hbsi:1|nbs1:1|apsm:0|stfa:1|stfb:1|pdc:0|home:0|laem:0|pfsb:1|otab:1|lsha:1|gsa:1|dwhp:0|hcua:1|hbsa:1|mrci:1|gse:0|lshi:1|pdn:1|wbe:1|gsi:1|locr:0|nhpi:0|nppa:1|hpra:1|obai:1|hopa:1|geon:1|dbad:1|nrca:1|otda:1|epa:2|nhpa:1|nrci:1|pnva:1|epi:0|gmmw:1|tbai:0|epn:2|mmla:1|rmo2:1|weng:0|shpa:1|hppl:1|lsji:1|shpi:1|irab:0|mum3:0|apei:1|mum2:1|mum1:0|lvci:0|hpcm:1|lmra:1|frms:1|gpwa:0|vsa:1|prpa:1|saet:1|nhba:1|lmri:1|gpwi:0|copi:1|nrfa:0|vsi:1|nbwa:0|prpi:0|lmaa:0|mhdp:1|cpbp:0|web:1|dpc:2|mtlp:0|lvca:1|chsa:1|saea:1|mrc:1|ragh:0|pdca:2|vct:0|phb:1|pdci:0|ihpo:1|rpea:1|cadd:1|amrc:0|nsfa:1|oban:1|copa:1|hpro:1|mwql:1|spc2:1|isec:0|sfni:2|fsad:0|rfdd:1|auto:1|uiab:1|rfda:1|sob:1|dbg2:0|ndlp:1|wtab:3|hmpi:1|high:1|bdpi:1|Disc:1|pbra:1|sos:2|WBNB:0|rera:1|logn:1|kol1:1|uaab:1|nhti:1|bdpa:1|pbri:1|nob2:1|swar:1|tooi:0|glpa:1|aowt:1|apid:0|pbab:1|del1:1|del2:1|nava:1|glpi:1|nmlp:0|trCl:1|nhbi:1|tba:0|nbwi:0|tooa:0|tyru:0|tsb:1|mv3a:0|lsc2:0|diei:1|rk01:1|INS:1|WTBL:0|cLog:0|dcr:0|dte:1|para:1|acsi:1|lsaa:1|hmaa:0|adum:0|LJPM:1|fipc:0|lsai:1|hmai:1|thth:0|mwen:1|wrni:0|efa:1|hpwa:0|fbb2:1|sra:2|reca:1|BnTc:0|mwep:2|ple:1|ngst:1|hpwi:1|pcva:1|vr11:0|reci:1|jbei:1|aimg:1|meal:1|pcuc:0|nhdp:1|ffib:1|mww2:1|ioab:0|hpfd:1|lohp:0|wrna:0|srz:1|plwc:1|gala:0';
$headers[] = 'Accept-Language: en';
$headers[] = 'Content-Type: application/json; charset=utf-8';
$headers[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; Redmi Note 4X MIUI/V10.2.1.0.MBFMIXM)';
$headers[] = 'Host: api.oyorooms.com';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$json = json_decode($result);

if($json->success == 0){
	echo $json->error->message;
	die();
}
echo $result;
echo $phone_number." Berhasil mendaftar OYO";
}
