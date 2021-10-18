<?php
setlocale(LC_ALL, "english");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');

define('COPYRIGHT', 'Веб-мастер');

$hour = (int)strftime('%H');
if($hour >= 0 && $hour <6 ){
    $welcome = 'Доброй ночи';
} elseif($hour > 6 || $hour <=12){
    $welcome = 'Доброе утро';
} elseif($hour > 12 || $hour <=18){
    $welcome = 'Добрый день';
} elseif($hour > 18 || $hour <=23){
    $welcome = 'Добрый вечер';
}else { $welcome = 'Доброй ночи';}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Наш сайт</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="header">
			<!-- Верхняя часть страницы -->
			<span class="slogan">Знания - сила</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1> <?php echo $welcome?> Гость!</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<h3>PHP</h3>
			<blockquote>
<?php
echo "Сегодня $day число, $mon месяц, $year год.";
?>
</blockquote>
			<p>
			PHP (англ. PHP: Hypertext Preprocessor — «PHP: препроцессор гипертекста»; первоначально Personal Home Page Tools — «Инструменты для создания персональных веб-страниц»; произносится пи-эйч-пи) — скриптовый язык программирования общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков программирования, применяющихся для создания динамических веб-сайтов.
			</p>
			<h3>Динамический веб-сайт</h3>
			<p>
			Динамический сайт — сайт, состоящий из динамичных страниц — шаблонов, контента, скриптов и прочего, в виде отдельных файлов. Страница сайта, показываемая в итоге браузеру пользователя, формируется на стороне сервера динамически, по запросу, из страницы-шаблона и отдельно хранимого содержимого (информации, скриптов и др.). 
			</p>
			<p>
			Как правило для отображения любого количества однотипных страниц используется одна страница-шаблон, в которую подгружается соответствующее содержимое, это позволяет единомоментно корректировать внешний вид сайта (множество всех его страниц), редактируя всего лишь один шаблон.
			</p>	
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<?php
		   $leftMenu = [
		   ['link'=>'Домой', 'href'=>'index.php'],
		   ['link'=>'О нас', 'href'=>'about.php'],
		   ['link'=>'Контакты', 'href'=>'contact.php'],
		   ];
            ?>
			<ul>
			<li><a href='<?= $leftMenu[0]['href']?>'><?= $leftMenu[0]['link']?></a></li>
            <li><a href='<?= $leftMenu[1]['href']?>'><?= $leftMenu[1]['link']?></a></li>
            <li><a href='<?= $leftMenu[2]['href']?>'><?= $leftMenu[2]['link']?></a></li>
			</ul>
			<!-- Меню -->
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<?php echo COPYRIGHT?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>