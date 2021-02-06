<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<?php
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjJlNzRjMGY2LWM1OWEtNGU4Yi1hMThmLTc4MTIyM2JlYTczMyIsImlhdCI6MTYwNDIyMDE0OSwic3ViIjoiZGV2ZWxvcGVyL2ZjOTIzZWEyLWIwZDctZDViZC0zYTBhLTg5YTU2NmE5YjgxYyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjEwMy4yMTguMTcxLjEzNSIsIjE4NS4xNzYuNDMuMTAwIiwiMTg1LjE3Ni40My4xMDQiLCI4Mi4xOTcuMTMwLjUyIl0sInR5cGUiOiJjbGllbnQifV19.97_YJdQBxGGXMBxtl5cvZu4sIyb_bAlxqazRWAA5macFPOJL26uF9Uv0A6W0ykN8I--5TtR8Fsdq8tif1QHlQg";
$url = "https://api.clashofclans.com/v1/clans/%23JVUVCCLC";
$ch = curl_init($url);
$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HEADER, 1);
$res = curl_exec($ch);
$data = json_decode($res, true);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($res, 0, $header_size);
$body = substr($res, $header_size);
curl_close($ch);
header("Content-Type:text/html; charset=UTF-8");
echo $header;
?></head>
<body>

</body>
</html>