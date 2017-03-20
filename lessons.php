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

$pdo = pdo();
$arr=$pdo->query('select * from settings ')->fetchAll();

?>
    <!DOCTYPE html>
    <html>
    <head>
        <link href="css/index.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="descriptions" content="<?php print_r ($arr['2']['meta_d']); ?>  ">
        <meta name="keywords" content=" <?php print_r ($arr['2']['meta_k']); ?> ">

        <title><?php print_r ($arr['2']['title']); ?></title>
    </head>
    <body>
    <table width="690" align="center" class="main_border">

        <tbody>
        <!-- Подключаем шапку сайта -->
        <?php include("blocks/header.php"); ?>
        <tr>
            <td>
                <table>
                    <tr>
                        <!-- Подключаем левый блог сайта -->
                        <?php include("blocks/lefttd.php") ?>
                        <td valign="top">
                            <p><?php print_r ($arr['2']['text']); ?></p>
							
							 <?php
								   
									$pdo = pdo();
									$arr=$pdo->query('select * from lessons ')->fetchAll();
								   $result = count($arr);
									$i=0;
								   foreach($arr as $mas){

									   printf(" <table align='center' class='lesson'
									   
											<tr>
												<td class='lesson_title'>
												<p class='lesson_name'><a href='view_lesson.php?id=%s'>%s</a></p> 
												<p class='lesson_adds'>Дата добавления: %s</p>
												<p class='lesson_adds'>Автор урока: %s</p></td>
										<tr>
                                    <td>%s</td>
                                </tr>
                                
								</table><br> <br>",$arr["$i"]["id"],$arr["$i"]["title"],$arr["$i"]["date"],$arr["$i"]["author"],$arr["$i"]["description"]);
									$i++;
									
									
							}
							
							
							?>
							
							
                        </td>
                    </tr>
                </table>
            </td>

        </tr>
        <!-- Подключаем нижний блок сайта -->
        <?php include("blocks/footer.php") ?>
        </tbody>
    </table>
    </body>
    </html>
