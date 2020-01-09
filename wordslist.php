<!DOCTYPE html>
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
<div align="center"> <h1>Letter : "<?php echo $letter;?>"</h1>
 <?php 
include("databasebeta.php");
// Creation et envoi de la requete

$sql = "select word from words where word like '$letter%' order by word asc ";
// Recuperation des resultats	
$req=$conn->query($sql);
$words=$req->fetchAll();
if (count($words) == 0){echo'<h1>No word added </h1><br/><b><a href=index>Go back </a></b>';}
else { ?>
    <h2>Results :</h2><br/>
<table>
<tbody>
<?php
	foreach ($words as $data)
	{ $word=$data['word'];
?>
	<tr>
		<td><h3><a href="word?word=<?php echo $word; ?>">
<?php echo $word; ?></a></h3></td>
	</tr>
<?php
	} // end for
?>
</tbody>
</table><?php 
	} // end
?>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>