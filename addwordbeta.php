<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
<div align="center"> <h1>Add a new Word</h1> 
                            <form  action="addbeta" autocomplete="on" id="form-validate" method="post" enctype="multipart/form-data"> 
                               
                                  
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="">Word</label>
                                    <input id="usernamesignup" name="word" required="required" type="text" placeholder="abcd" />
                                </p>
<p> 
                                    <label for="usernamesignup" class="uname" data-icon="">Definition</label>
                                    <textarea id="nom" name="definition" required="required" type="text" placeholder="Definition" rows=10 cols=50>></Textarea>
                                </p>
<p> 
                                    <label for="usernamesignup" class="uname" data-icon="">Synonym</label>
                                    <input id="nom" name="synonyme" required="required" type="text" placeholder="abcd" />
                                </p>
<p> 
                                    <label for="usernamesignup" class="uname" data-icon="">Antonym</label>
                                    <input id="tel" name="antonyme" required="required" type="text" placeholder="abcd" />
                                </p>
<p> 
                                    <label for="usernamesignup" class="uname" data-icon="">Arabic</label>
                                    <input id="adresse" name="arabic" required="required" type="text" placeholder="عربي" />
                                </p>
                                
                                
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="">French</label>
                                    <input id="ville" name="french" required="required" type="text" placeholder="french" />
                                </p>
<p> 
                                    <label for="usernamesignup" class="usernamesignup" data-icon="">add Audio</label>
<input type="file" name="file" >
<p class="signin button">							<input class="signin button" type="submit" title="Search" value="Add"/></p>
</form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>