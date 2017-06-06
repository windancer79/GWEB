<?php
$out_json_pre = "{\"data\": [";
$out_json_end = "], \"totals\": 0}";
$out_json = "";
$query = $_POST["IP"];
for ($x=0; $x<=10; $x++) {
    if($query == "" || $query == "192.168.100.13$x")
      $out_json.= "{\"Name\": \"DBNode\",\"IP\": \"192.168.100.13$x\",\"Port\": \"8000\", \"Status\": \"running\", \"worker\": 1, \"executor\": 3, \"CPU\": \"0.4\", \"MaxMemory\": \"8G\" },";
}
$out_json = rtrim($out_json, ",");
echo $out_json_pre . $out_json . $out_json_end;
?>