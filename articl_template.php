<?php
include ("blocks/bd.php");

$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='index'",$db);
$myrow = mysql_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="descriptions" content="<?php  echo $myrow['meta_d']; ?>  ">
	<meta name="keywords" content=" <?php echo $myrow['meta_k']; ?> ">
    <link href="css/index.css" rel="stylesheet">
    <title>Шаблон</title>
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
									<?php echo $myrow['text'];  ?>
                                   <p > Как стать Лидером нового уровня</p>
								   <p align="center"><img src="articles/200217/leader/1.jpg" ></p>
								   <p>Опытные бизнесмены-практики, популярные тренеры и консультанты
								   делятся своим опытом с предпринимателями малого и среднего бизнеса в своих статьях рассказывают,
								   как достичь успеха в бизнесе.
									</p>
									<p>2. Китайские производители выгоднее любых других</p>
									<p align="center"><img src="articles/200217/leader/2.jpg" ></p>
									<p>Это философия окладной системы. Есть логика, не так ли? До этой логики, в конце концов, 
									доходят практически все сотрудники 
									с фиксированными окладами, которые работают исключительно за зарплату. И вам сказочно повезло, 
									если процент настоящих энтузиастов в вашем коллективе высок
									</p>
									<p align="center"><img src="articles/200217/leader/3.png" ></p>
									<p>После использования PHP функциональность нашего сайта резко возросла.
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