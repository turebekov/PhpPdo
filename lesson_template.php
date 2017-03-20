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
                                   <p > 1. Бизнес на товарах из Китая – реально ли начать своё дело с нуля</p>
								   <p align="center"><img src="lessons/180217/firstSite/1.jpg" ></p>
								   <p>По сути, схема работы с Китаем сводится к трём пунктам: 
								   <ul>
								   <li>1)найти товар в Китае максимально дешево; </li>
								   <li>2)доставить его в РФ; </li>
								   <li>3)продать с наценкой.<l/i>
									</ul>
									</p>
									<p>2. Китайские производители выгоднее любых других</p>
									<p align="center"><img src="lessons/180217/firstSite/2.jpg" ></p>
									<p>Интерес российского бизнеса к китайским товарам стабильно растёт. 
									В КНР производят всё, без чего сложно представить жизнь современного человека:
									одежду, косметику, аксессуары, бытовую технику, гаджеты. 
									Наверняка в вашей квартире полно вещей с маркировкой «Made in China».
									</p>
									<p align="center"><img src="lessons/180217/firstSite/3.jpg" ></p>
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