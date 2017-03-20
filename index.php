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
        <meta charset="utf-8">
        <meta name="descriptions" content="<?php print_r ($arr['0']['meta_d']); ?> ">
        <meta name="keywords" content="<?php print_r($arr['0']['meta_k']); ?> " ?>
        <link href="css/index.css" rel="stylesheet">
        <title><?php print_r($arr['0']['title']); ?></title>
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
                            //print_r("������");
                            print_r($arr['0']['text']);
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
