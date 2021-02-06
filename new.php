<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<?php
//Clash of Clans Official API Integration on PHP
//Refer : http://sivasankar.in/

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_URL, 'https://api.clashofclans.com/v1/clans/%23JVUVCCLC'); //Clan Tag
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjJlNzRjMGY2LWM1OWEtNGU4Yi1hMThmLTc4MTIyM2JlYTczMyIsImlhdCI6MTYwNDIyMDE0OSwic3ViIjoiZGV2ZWxvcGVyL2ZjOTIzZWEyLWIwZDctZDViZC0zYTBhLTg5YTU2NmE5YjgxYyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjEwMy4yMTguMTcxLjEzNSIsIjE4NS4xNzYuNDMuMTAwIiwiMTg1LjE3Ni40My4xMDQiLCI4Mi4xOTcuMTMwLjUyIl0sInR5cGUiOiJjbGllbnQifV19.97_YJdQBxGGXMBxtl5cvZu4sIyb_bAlxqazRWAA5macFPOJL26uF9Uv0A6W0ykN8I--5TtR8Fsdq8tif1QHlQg'
)); // Clash of Clans API Token
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$api = curl_exec($curl);
curl_close($curl);
$coc = json_decode($api,true);

// $res = curl_exec($ch);
// $data = json_decode($res, true);
// curl_close($ch);
if (isset($coc["reason"])) {
  $errormsg = true;
}
$members = $coc["name"];
var_dump($members); // Print Output
?>
</head>
<body>
<?php echo $coc["name"]; ?>
</body>
</html>