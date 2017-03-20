<?php
include ("blocks/bd.php");

$result = mysql_query("SELECT title,meta_d,meta_k, text FROM settings WHERE page='contacts'",$db);

$myrow = mysql_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="descriptions" content="<?php echo $myrow['meta_d']; ?>">
	<meta name="keywords" content="<?php echo $myrow['meta_k'] ?>">
    <link href="css/index.css" rel="stylesheet">
    <title> <?php $myrow['title']; ?> </title>
</head>
<body>
    <table width="690" align="center" class="main_border">

        <tbody>
        <!-- Подключаем шапку сайта -->
            <?php include("blocks/header.php");?>
            <tr>
                    <td>
                        <table>
                            <tr>
                                <!-- Подключаем левый блог сайта -->
                                    <?php include ("blocks/lefttd.php")?>
                                <td>
									<?php echo $myrow['text']; ?>
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