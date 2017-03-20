<form action="add_lesson.php" method="POST">
    include("lock.php");
						   <p> 
								<label for="title" > 
								Введите название урока:<br>
								<input id="title" name="title"> <br>
							
							
								<label for="meta_d"> 
								Введите краткое описание урока:<br>
								<input id="meta_d" name="meta_d"><br>
								</label> 
								
								<label for="meta_k">
								Введите ключевые слова для урока:<br>
								<input id="meta_k" name="meta_k"><br>
								</label>
								
								<label for="date">
								Введите дату добавление урока:<br>
								<input id="date" value="2017-01-27" name="date"><br>
								</label>
								
								<label for="description">
								Введите краткое описание с тегами абзацев:<br>
								<textarea id="description" name="description" rows="5" cols="40" maxlength="255" >
								
								</textarea>
								</label><br>
								
								<label for="text" >
								Введите полный текст урока с тэгами:<br>
								<textarea id="text" rows="20" cols="40" maxlength="255" name="text">
								
								</textarea>
								</label><br>
								
								<label for="author" >
								Введите автора урока:<br>
								<input id="author" name="author"><br>
								</label>
								
								<input type="submit" value="Занести урок в базу" name="submit"> 
							</p>
						   </form>