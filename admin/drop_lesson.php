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

  if(isset($_POST['id'])){
	  $id=$_POST['id'];
  }
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
             <link href="css/index.css" rel="stylesheet">
        <title>Обработчик</title>
    </head>
    <body>
    <table width="690" align="center" class="main_border">

        <tbody>
        
        <?php include("blocks/header.php"); ?>
        <tr>
            <td>
                <table>
                    <tr>
                        
                        <?php include("blocks/lefttd.php"); ?>
                        <td valign="top">
                           
						   <?php
						   if(isset($id)){
							   $pdo=pdo();
							   $arr=$pdo->query(" DELETE FROM lessons WHERE id='$id' " );
							   if(isset($arr)){
									echo "<p>Ваш урок успешно удален!</p>";
							   }
							   else{ 
								   ("<p>Ваш урок не удален!)</p>");
							   }
						   }
						   else{
							   echo "<p>Вы запустили данный файл без параметра id и поэтому, удалить урок не возможно!(Скорее всего вы не выбрали новости в радиокнопке)</p>";
						   }
							   
						   ?>
						   
                        </td>
                    </tr>
                </table>
            </td>

        </tr>
        
        <?php include("blocks/footer.php"); ?>
        </tbody>
    </table>
    </body>
    </html>
	