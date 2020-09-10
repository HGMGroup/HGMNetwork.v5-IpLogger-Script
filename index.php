<html>
  <head>
    <title>...</title>
  </head>
</html>

<?php

function HGMNetwork_IPKaydetme() {
     $HGMNetwork_IpKayit_TxT="HGMNetwork_IpLogger_Script_Logs.txt";

	 $HGMNetwork_IpKayiti = $_SERVER['REMOTE_ADDR'];;

     $HGMNetwork_IpKayit_Tarih=date ("m/d/Y");
     $HGMNetwork_IpKayitetme=fopen("$HGMNetwork_IpKayit_TxT", "a+");

     if (preg_match("/\\bhtm\\b/i", $HGMNetwork_IpKayit_TxT) || preg_match("/\\bhtml\\b/i", $HGMNetwork_IpKayit_TxT))
     {
          fputs($HGMNetwork_IpKayitetme, "[$HGMNetwork_IpKayit_Tarih<br>]");
     }
     else fputs($HGMNetwork_IpKayitetme, "[$HGMNetwork_IpKayit_Tarih] $HGMNetwork_IpKayiti
");

     fclose($HGMNetwork_IpKayitetme);
}

HGMNetwork_IPKaydetme();

?>