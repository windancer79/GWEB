<?php
$out_json_pre = "[";
$out_json_end = "]";
$out_json = "";
for ($x=0; $x<=10; $x++) {
      $out_json.= "{\"Name\": \"SVR$x\",\"IP\": \"192.168.100.13$x\"},";
}
$out_json = rtrim($out_json, ",");
echo $out_json_pre . $out_json . $out_json_end;
?>