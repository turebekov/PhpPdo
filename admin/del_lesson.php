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



?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
             <link href="css/index.css" rel="stylesheet">
        <title>Страница удаления нового новостей</title>
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
						
							<p>Выберите урок для удаления :</p>
                           <form action="drop_lesson.php" method="post">
						   <?php

						   
						   
							   $pdo=pdo();
						   $arr=$pdo->query("SELECT title,id FROM lessons")->fetchAll();
						   $i=0;
						   foreach($arr as $value)
						   {
								printf("<p><input name='id' type='radio' value='%s'><label>%s</label></p>",$arr["$i"]["id"],$arr["$i"]["title"]);
								$i++;
								
								
						   }
						   
							
							?>
							<p>
							 <input type="submit" name="submit" value="Удалить урок">
							 </p>
						   </form>
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
