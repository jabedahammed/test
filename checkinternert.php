<?php 
/*$connected = @fsockopen("http://google.com/",80); 
                                        //website, port  (try 80 or 443)
    if ($connected){
        $is_conn = "connected"; //action when connected
        fclose($connected);
    }else{
        $is_conn = "notconnected"; //action in connection failure
    }
    echo $is_conn;*/


  function ipCIDRCheck ($IP, $CIDR) {
    list ($net, $mask) = split ("/", $CIDR);
   
    $ip_net = ip2long ($net);
    $ip_mask = ~((1 << (32 - $mask)) - 1);

    $ip_ip = ip2long ($IP);

    $ip_ip_net = $ip_ip & $ip_mask;

    return ($ip_ip_net == $ip_net);
  }
?>
<?php //echo ipCIDRCheck ("192.168.1.23", "192.168.1.0/24"); 
//echo connection_status();

 // $fp = fsockopen ("slashdot.org", 80);

 //    if ($fp) {
 //        fwrite($fp, "GET / HTTP/1.1\r\nHOST: slashdot.org\r\nACCEPT-ENCODING: gzip\r\n\r\n");

 //        while (!feof($fp)) {
 //            print fread($fp,256);
 //        }

 //        fclose ($fp);
 //    } else {
 //        print "Fatal error\n";
 //    }
?>

<?php 
   if(!$sock=@fsockopen('www.google.com',80,$num,$error,5))
   {

   	echo "offline";
   }
   else
   {
   	echo "ok";
   }
?>