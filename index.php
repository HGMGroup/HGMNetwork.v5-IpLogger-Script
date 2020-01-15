<html>
<head>
<title>...</title>
</head>
</html>

<?php

function logIP()
{
     $ipLog="HGMNetwork_IpLogger_Script_Logs.txt";



     $register_globals = (bool) ini_get('register_gobals');
     if ($register_globals) $ip = getenv(REMOTE_ADDR);
     else $ip = $_SERVER['REMOTE_ADDR'];

     $date=date ("m/d/Y");
     $log=fopen("$ipLog", "a+");

     if (preg_match("/\\bhtm\\b/i", $ipLog) || preg_match("/\\bhtml\\b/i", $ipLog))
     {
          fputs($log, "[$date<br>]");
     }
     else fputs($log, "[$date] $ip
");

     fclose($log);
}
logIp();


?>
