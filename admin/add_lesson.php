<?php
require_once 'config.php';

function pdo()
{
    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET;
    $opt = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    return new PDO($dsn, DBUSER, DBPASSWORD, $opt);
}
include("lock.php");
include("blocks/bd.php");
  if(isset($_POST['title'])){
	  $title=$_POST['title'];
		if($title ==''){
		unset($title);
		}
  }
   if(isset($_POST['meta_d'])){
	  $meta_d=$_POST['meta_d'];
		if($meta_d ==''){
		unset($meta_d);
		}
  }
   if(isset($_POST['meta_k'])){
	  $meta_k=$_POST['meta_k'];
		if($meta_k ==''){
		unset($meta_k);
		}
  }
   if(isset($_POST['date'])){
	  $date=$_POST['date'];
		if($date ==''){
		unset($date);
		}
  }
   if(isset($_POST['description'])){
	  $description=$_POST['description'];
		if($description ==''){
		unset($description);
		}
  }
   if(isset($_POST['text'])){
	  $text=$_POST['text'];
		if($text ==''){
		unset($text);
		}
  }
   if(isset($_POST['author'])){
	  $author=$_POST['author'];
		if($author ==''){
		unset($author);
		}
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
                        
                        <?php include("blocks/lefttd.php") ?>
                        <td valign="top">
                           
						   <?php
						   if(isset($title) && isset($meta_d) && isset($meta_k) && isset($date) && isset($description) && isset($text) && isset($author)){
							   $pdo = pdo();
							$arr=$pdo->query("INSERT INTO lessons(title,meta_d,meta_k,date,description,text,author) VALUES ('$title','$meta_d','$meta_k','$date','$description',
							   '$text','$author') " );
							  
							   if(isset($arr)){
									echo "<p>Ваш урок успешно добавлен!</p>";
							   }
							   else{ 
								   ("<p>Ваш урок не добавлен!)</p>");
							   }
						   }
						   else{
							   echo "<p>Вы ввели не всю информацию, поэтому урок в базу не может быть добавлен.</p>";
						   }
							   
						   ?>
						   
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
<?php
/**
 * Created by PhpStorm.
 * User: arman
 * Date: 17.02.2017
 * Time: 13:26
 */