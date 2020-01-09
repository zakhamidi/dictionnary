<?php
//connexion
require_once("databasebeta.php");
include("functions.php");
include("audiocheck.php");
$w=$_POST['word'];
$d = $_POST['definition'];
$s = $_POST['synonyme'];
$a = $_POST['antonyme'];
$ar = $_POST['arabic'];
$fr = $_POST['french'];
$w=stringonly($w);
$s=stringonly($s);
$a=stringonly($a);
$ar=stringonly($ar);
$fr=stringonly($fr);
$word= new word();
$word->addWord($w,$d,$s,$a,$ar,$fr,$audio,$conn);
$word->alert('your word is added'); 
?> 