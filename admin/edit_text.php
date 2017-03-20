<?php
require_once 'config.php';

function pdo()
{
	$dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" .DBCHARSET;
	$opt = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	);
	return new PDO ($dsn, DBUSER, DBPASSWORD, $opt);
}
include("lock.php");
include("blocks/bd.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

include("lock.php");
include("blocks/bd.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}



?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
             <link href="css/index.css" rel="stylesheet">
        <title>Страница изменения текстов</title>
    </head>
    <body>
    <table width="690" align="center" class="main_border">

        <tbody>
        
        <?php include("blocks/header.php"); ?>
        <tr>
            <td>
                <table>
                    <tr>
                        
                        <?php include("blocks/lefttd.php") ?>
                        <td valign="top">
                           
						   <p><strong>Выберите страницу для редактирование данных:</strong></p>
						   <?php

						   
						    if(!isset($id)){
							   $pdo = pdo();
							   $arr=$pdo->query("SELECT title,id FROM settings")->fetchAll();
							   
							   foreach($arr as $value)
							   {
									printf("<p><a href='edit_text.php?id=%s'>%s</a></p>",$value["id"],$value["title"]);
							   }
						   }
						   
						   else{
							 $pdo=pdo();
							 $arr=$pdo->query("SELECT * FROM settings WHERE id=$id")->fetchAll();
							foreach($arr as $val){   
						print <<<HERE
						
							 
						   
							 <form action="update_text.php" method="POST"> 
						   <p> 
								<label for="title" > 
								Введите название страницы(тэг title):<br>
								<input value="$val[title]" id="title" name="title"> <br>
							</p>
							<p>
								<label for="meta_d"> 
								Введите краткое описание страницы:<br>
								<input value="$val[meta_d]" id="meta_d" name="meta_d"><br>
								</label> 
							</p>	
							<p>
								<label for="meta_k">
								Введите ключевые слова для страницы:<br>
								<input value="$val[meta_k]" "id="meta_k" name="meta_k"><br>
								</label>
							</p>	
							
								
							<p>
								<label for="text" >
								Введите полный текст страницы с тэгами:<br>
								<textarea  id="text" rows="20" cols="40"  name="text">
								$val[text]
								</textarea>
								</label><br>
							</p>
								
								<input type="hidden" value="$val[id]" name="id">
								<p>
								<input type="submit" value="Сохранить изменения" name="submit"> 
							</p>
						   </form>
HERE;
							}
}?>
						   
                        </td>
                    </tr>
                </table>
            </td>

        </tr>
        
        <?php include("blocks/footer.php") ?>
        </tbody>
    </table>
    </body>
    </html>
