<head>
<style type="text/css">
<!--
.link {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; color: #FFFFFF; text-decoration: none}
.linkBlue { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; color: #003399; text-decoration: none }
-->
</style>
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="2" topmargin="2" marginwidth="2" marginheight="2">

  <table border=0 width="777" cellpadding="0" cellspacing="0" height="100%">
    <tr> 
      <td width="145" bgcolor="#003399" valign="top"> <html>
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <title>SolveIT! Student Files</title>
<!--
.link {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; color: #FFFFFF; text-decoration: none}
.linkBlue { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; color: #003399; text-decoration: none }
-->
</style>
<script language="JavaScript">
<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script></head><body bgcolor="#FFFFFF" marginwidth="2" marginheight="0" leftmargin="0" topmargin="0">
<form method="post" action="">
  <table width="145" border="0" cellspacing="0" cellpadding="0" height="100">
    <tr bgcolor="#003399"> 
      <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">&nbsp; 
        </font></td>
    </tr>
    </tr>
    <tr bgcolor="#003399"> 
      <td> 
        <div align="center"></div>
      </td>
    </tr>
    <tr bgcolor="#003399"> 
      <td>&nbsp;</td>
    </tr>

    <tr bgcolor="#003399"> 
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#003399"> 
      <td></td>
    </tr>
    <tr bgcolor="#003399"> 
      <td></td>
    </tr>
  </table>

</form>
</body>
</html>

 </td>
      <td width="2" rowspan="2"><img src="images/whitespacer.gif" width="4" height="4"></td>
      
    <td width="628" valign="top" rowspan="2"> 
      <form method="post" action="solveitview.php">
        <table width="628" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td> 
              <table border="0" cellspacing="0" cellpadding="0" width="628">

                <tr> 
                  <td colspan="2" valign="bottom"><font face="Verdana, Arial, Helvetica, sans-serif" size="4"><b>Download</b></font></td>
                  <td width="36%"><img src="http://azimuth-interactive.com/images/corporatesolutionsimage.gif" width="330" height="47"></td>
                </tr>
                <tr> 
                  <td colspan="3"><font face="Verdana, Arial, Helvetica, sans-serif" size="4"><img src="images/whitespacer.gif" width="10" height="2"></font></td>
                </tr>
                <tr bgcolor="#003399"> 
                  <td colspan="3"><img src="images/newbluespacer.gif" width="2" height="2"></td>
                </tr>

              </table>
            </td>
          </tr>
          <tr> 
            <td><img src="images/whitespacer.gif" width="10" height="10"></td>
          </tr>
          <tr> 
            <td> 
              <table width="698" border="0" cellpadding="0" cellspacing="0">
                <tr> 

<?php 
$word1=$_REQUEST['word1'];
$word2=$_REQUEST['word2'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$School=$_REQUEST['School'];
$email=$_REQUEST['email'];



 $c=strtoupper(substr($word1,0,1));
##print "c=$c<br>";

     if ($c=="B")
          { $RESULT="4.0";
            include ("Solveit_4_0_Student_Files.html");            
          }
else  if ($c=="C")
          { $RESULT="5.0";
            include ("Solveit_5_0_Student_Files.html");
          }
else  if ($c=="D")
          { $RESULT="6.0";
            include ("Solveit_6_0_Student_Files.html");
          }
else

  {

   if ($c=="A" )
  {
  $RESULT="3.1";

 ?>


Student Files for SolveIT! Version 3.1<br>
<br>
Zipped Version of files :<br>
<br>
<a href="solveitfiles/student_files_31_Access.zip">Access Files</a><br>
<a href="solveitfiles/student_files_31_Excel.zip">Excel Files</a><br>
<a href="solveitfiles/student_files_31_Web.zip">Web files</a><br>
<br>
Click on each link then chose "Save as.." to specify the location where you
want to save the files.<br>
<br>
These files are Zip files. Use 
<a href="http://www.winzip.com/">Winzip</a> to extract files.<br><br>
&copy;2005 Azimuth Interactive, Inc. (800) 416-6786 ext 14. All rights reserved.
<br>

<?php
   }
   else {   
            $RESULT="Error";
 
         ?> Error please Check the words entered and re-enter <?php 
   
   };  ## end of last else


 }; ?> 

</body>
</html>




          <tr> 
            <td bgcolor="#003399"><img src="images/newbluespacer.gif" width="2" height="2"></td>

          </tr>
          <tr> 
            <td> 
            </td>
          </tr>
          <tr> 
            <td><img src="images/whitespacer.gif" width="10" height="10"></td>
          </tr>
</table>
</body>
</html>

 </td>
          </tr>
        </table>
      </form>
    </td>
    </tr>
    <tr> 
      <td width="145" bgcolor="#003399" valign="top">&nbsp;</td>
    </tr>

  </table>


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
$message=$message."word1:           ".$word1."\n";
$message=$message."word2:           ".$word2."\n";
$message=$message."fname:           ".$fname."\n";
$message=$message."lname:           ".$lname."\n";
$message=$message."School:           ".$School."\n";
$message=$message."email:           ".$email."\n";


mail ("SOLVEITHITS@azimuth-interactive.com","MYSOLVEIT DOWNLOAD PAGE $RESULT",$message);

$a=stat($SCRIPT_FILENAME);
print "<br>last modified ";
print (date ("l dS of F Y h:i:s A",$a[10]));
 ?>
