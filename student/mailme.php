<?php 
$message=$message."PHP_SELF:$PHP_SELF\n";
$message=$message."_COOKIE['VISITOR']:".$_COOKIE["VISITOR"]."\n";
$message=$message."_SERVER['DOCUMENT_ROOT']:  ".$_SERVER["DOCUMENT_ROOT"]."\n";
$message=$message."_SERVER['HTTP_ACCEPT']:    ".$_SERVER["HTTP_ACCEPT"]."\n";
$message=$message."_SERVER['HTTP_CONNECTION']:".$_SERVER["HTTP_CONNECTION"]."\n";
$message=$message."_SERVER['HTTP_COOKIE']:    ".$_SERVER["HTTP_COOKIE"]."\n";
$message=$message."_SERVER['HTTP_HOST']:      ".$_SERVER["HTTP_HOST"]."\n";
$message=$message."_SERVER['HTTP_USER_AGENT']:".$_SERVER["HTTP_USER_AGENT"]."\n";
$message=$message."_SERVER['PATH']:           ".$_SERVER["PATH"]."\n";
$message=$message."_SERVER['REMOTE_ADDR']:    ".$_SERVER["REMOTE_ADDR"]."\n";
$message=$message."_SERVER['REMOTE_PORT']:    ".$_SERVER["REMOTE_PORT"]."\n";
$message=$message."_SERVER['SCRIPT_FILENAME']:".$_SERVER["SCRIPT_FILENAME"]."\n";
$message=$message."_SERVER['REQUEST_METHOD']: ".$_SERVER["REQUEST_METHOD"]."\n";
$message=$message."_SERVER['QUERY_STRING']:   ".$_SERVER["QUERY_STRING"]."\n";
$message=$message."_SERVER['REQUEST_URI']:    ".$_SERVER["REQUEST_URI"]."\n";
$message=$message."_SERVER['SCRIPT_NAME']:    ".$_SERVER["SCRIPT_NAME"]."\n";
$message=$message."_SERVER['PATH_TRANSLATED']:".$_SERVER["PATH_TRANSLATED"]."\n";
$message=$message."_SERVER['PHP_SELF']:       ".$_SERVER["PHP_SELF"]."\n";
$message=$message."_SERVER['argv']:           ".$_SERVER["argv"]."\n";


mail ("SOLVEITHITS@azimuth-interactive.com","MYSOLVEIT STUDENT PAGE",$message);

$a=stat($SCRIPT_FILENAME);
print "<br>last modified ";
print (date ("l dS of F Y h:i:s A",$a[10]));
 ?>

