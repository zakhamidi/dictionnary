<!DOCTYPE html>
<?php 
$word=$_POST['word'];
require("databasebeta.php");
include("functions.php");
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
<div align="center"> <h2>Search</h2><br/><h1>You are looking for : "<?php echo $word;?>"</h1>
 <?php 
// Creation et envoi de la requete
//$word= new word();
//$word->getWord($word,$pdo);
    $word=preg_replace('/[^A-Za-z]/','',$word);
        $sql="select word from words where word like '$word%' order by word asc ";
        $req=$conn->query($sql);
        $words=$req->fetchAll();
// Recuperation des resultats
            if (count($words) == 0){echo"<h1>It doesn't exist </h1><br/><b><a href=index>Go back </a></b>";}
    else { ?>
    <h2>Results :</h2><br/>
<table>
<tbody>
<?php
	foreach($words as $data)
	{ $word=$data['word'];
?>
	<tr>
<?php		// pour chaque colonne (de la ligne)
		
?>		<td><h3><a href="word?word=<?php echo $word;?>">
<?php echo $word; ?></a></h3></td>
<?php	
?>
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