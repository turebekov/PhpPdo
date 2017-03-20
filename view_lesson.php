<?php
include ("blocks/bd.php");
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}	

$result = mysql_query("SELECT * FROM lessons WHERE id='$id'",$db);
$myrow = mysql_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="descriptions" content="<?php  echo $myrow['meta_d']; ?>  ">
	<meta name="keywords" content=" <?php echo $myrow['meta_k']; ?> ">
    <link href="css/index.css" rel="stylesheet">
    <title><?php echo $myrow['title'];?></title>
</head>
<body>
    <table width="690" align="center" class="main_border">

        <tbody>
        <!-- Подключаем шапку сайта -->
            <?php include("blocks/header.php");?>
            <tr>
                    <td >
                        <table>
                            <tr>
                                <!-- Подключаем левый блог сайта -->
                                    <?php include ("blocks/lefttd.php")?>
                                <td valign="top">
									<p class="view_title"><?php echo $myrow['title']?></p>
									<p class="view_date">Дата добавления: <?php echo $myrow['date']?></p>
									<p class="view_date">Автор: <?php echo $myrow['author']?></p>
									
									
									<?php echo $myrow['text'];  ?>
                                   <p > После использования PHP функциональность нашего сайта резко возросла.
                                       Рассмотренный в данном уроке пример является лишь небольшой демонстрацией того, на что способен PHP.</p>
                                </td>
                            </tr>
                        </table>
                    </td>

            </tr>
                        <!-- Подключаем нижний блок сайта -->
            <?php include("blocks/footer.php")?>
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