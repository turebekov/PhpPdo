<?php
include("lock.php");
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
             <link href="css/index.css" rel="stylesheet">
        <title>Страница добавление нового новостей</title>
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
                           <form action="add_lesson.php" method="POST"> 
						   <p> 
								<label for="title" > 
								Введите название урока:<br>
								<input id="title" name="title"> <br>
							</p>
								<p>
								<label for="meta_d"> 
								Введите краткое описание урока:<br>
								<input id="meta_d" name="meta_d"><br>
								</label> 
								</p>
								<p>
								<label for="meta_k">
								Введите ключевые слова для урока:<br>
								<input id="meta_k" name="meta_k"><br>
								</label>
								</p>
								<p>
								<label for="date">
								Введите дату добавление урока:<br>
								<input id="date" value="2017-01-27" name="date"><br>
								</label>
								</p>
								<p>
							
								<label for="description">
								Введите краткое описание с тегами абзацев:<br>
								<textarea id="description" name="description" rows="5" cols="40" maxlength="255" >
								
								</textarea>
								</label><br>
								</p>
								<p>
								<label for="text" >
								Введите полный текст урока с тэгами:<br>
								<textarea id="text" rows="20" cols="40" maxlength="255" name="text">
								
								</textarea>
								</label><br>
								</p>
								<p>
								<label for="author" >
								Введите автора урока:<br>
								<input id="author" name="author"><br>
								</label>
								</p>
								<p>
								<input type="submit" value="Занести урок в базу" name="submit"> 
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
<?php
/**
 * Created by PhpStorm.
 * User: arman
 * Date: 17.02.2017
 * Time: 13:26
 */