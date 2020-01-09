<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php 
if (!empty($_GET['l'])){
    $letter=$_GET['l'];
    $letter=preg_replace('/[^A-Za-z]/','',$letter);
}
else{
 echo "<script type='text/javascript'>alert('write something'); 
            window.location = 'index';
            </script>";
}
?>
<head>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <title>Home Dictionary</title>

    </head>
    <body>
        <div class="container">
   
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        
                        <div id="login" class="animate form">
<table><tr><td align="left"><a href="index" ><img src="home.png" width="26" height="26" title="Go To Home Page"/><a></td><td align="right"><a href="addwordbeta" ><img src="add.png" width="26" height="26" title="add Word"/><a></td></tr></table>
<div align="center"> <h1><?php echo $w;?></h1>
 <?php 
include("databasebeta.php");
// Creation et envoi de la requete

$sql = "select * from words where word='$w'" ;
// Recuperation des resultats	
$req=$conn->query($sql);
$words=$req->fetchAll();
if (count($words) == 0){echo"<h1>no informations added </h1><br/><b><a href=index>Go back </a></b>";}
else { foreach ($words as $data){?>

	<p><h2>Definition</h2></p><p><h3>
<?php echo htmlentities(trim($data['definition']));?></p></h3>
<p><h2>Synonym</h2></p><p><h3>
<?php echo htmlentities(trim($data['synonyme']));?></h3>
</p><p><h2>Antonym</h2></p><p><h3>
<?php echo htmlentities(trim($data['antonyme']));?></h3>
</p><p><h2>In Arabic</h2></p><p><h3>
<?php echo utf8_decode( $data['arabic'] ); ?></h3>
</p><p><h2>In French</h2></p><p><h3>
<?php echo htmlentities(trim($data['french']));?></h3>
</p><p><h2>Audio</h2></p><p>
<audio controls autoplay="autoplay">
  <source src="audio/<?php echo $data['audio']; ?>"  type="audio/mpeg">
Your browser does not support the audio element.
</audio>

	</p>
<?php
	 }} // end
?>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>