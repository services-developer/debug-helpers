
<?php /* ?>
<?php */ ?>

<!-- <p>Вывод всех определенных переменных</p> -->

<pre style="display: none">
	<?php print_r(get_defined_vars()); ?>
</pre>

<?php 
if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100'){
	echo "<p style='display: none;'>variable : " . $variable . "</p>";
}


if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100'){
	echo "<pre style='display: none;' alt='arResult'>";
	echo "<p>variable : " . $variable . "</p>";
	echo "</pre>";
}

		
die("777");
	
echo "<p>variable : $variable</p>";
echo "<p>variable : " . $variable . "</p>";
echo "variable : " . $variable . "\n";


if ($_SERVER['HTTP_X_FORWARDED_FOR'] == '192.168.150.100'){
	echo "<pre alt='arResult'>";
	print_r($_POST);
	echo "</pre>";
}

if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100'){
	echo "<pre style='display: none;' alt='arResult'>";
	print_r($_POST);
	echo "</pre>";
}

if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100' && $_GET["debug"]){
	echo "<pre style='display: none;' alt='arResult'>";
	print_r($_POST);
	echo "</pre>";
}



if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100'){
	$mail->AddAddress("ruslan-test89@yandex.ru", "");
} else {
	
}

mail("ruslan-test89@yandex.ru", "Test connection, проверка связи", "Text message, текст сообщения");


style='display: none; position: absolute; top: 0; background: #000; width: 100%; z-index: 111; color: #fff;'

print_r(debug_backtrace());


if ($_GET["debug"]){
	echo "<pre alt='arResult'>";
	print_r($_POST);
	echo "</pre>";
}

?>

<pre style="display: none; width: 500px;" alt="arResult">
	<?php print_r($arResult); ?>
</pre>


<? function debug($caption, $value, $isArray = true, $isDie = false, $isHidden = false){
	if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100'){
		$preStyle = $isHidden ? 'style="display: none;"' : "";
		
		ob_start(); ?>
		<? if($isArray){ ?>
			<pre <?= $preStyle ?> caption="<?= $caption ?>">
				<?php print_r($value); ?>
			</pre>
		<? } else { ?>
			<p><?= $caption ?> : <?= $value ?></p>
		<? } ?>

		<?php $out = ob_get_clean(); ?>
		<? if($isDie) die("777");
	 }
	 
	 return $out;
} ?>



<pre style="display: none;" alt="arResult">
	<?php print_r($arResult); ?>
</pre>

<pre style="display: none;" alt="product">
	{foreach from=$product item=item key=key}
		<p data-key="{$key}" data-item="{$item}"></p>
	{/foreach}
</pre>


<pre style="display: none;">
	{foreach from=$form_elements key=mainKey item=mainItem}
		<p data-key="{$mainKey}" data-item="{$mainItem}"></p>
		
		<pre style="display: none;" data-key="{$mainKey}">
			{foreach from=$mainItem key=innerKey item=innerItem}
				<p data-key="{$innerKey}" data-item="{$innerItem}"></p>
			{/foreach}
		</pre>
	{/foreach}
</pre>


{if $smarty.server.REMOTE_ADDR == '192.168.150.100'}debug{/if}

width: 500px; position: absolute; z-index: 111111; background: #fff; text-align: left;
position: fixed; background: #fff; text-align: left; top: 0; left: 0; width: 600px; height: 300px; overflow: auto;

position: fixed; background: #000; color: #fff; text-align: left; top: 0; left: 0; width: 600px; height: 480px; overflow: auto; z-index: 11111;



<?php if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100') { ?>
	<pre style="display: none;" alt="arResult">
		<?php print_r($arResult); ?>
	</pre>
<?php } ?>



<?php if ($_GET["debug"]) { ?>
	<pre>
		<?php print_r($arResult); ?>
	</pre>
<?php } ?>

<?php if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100') { ?>
	<pre style="display: none;" alt="arResult">
		<p>ElementID : <?= $ElementID ?></p>
	</pre>
<?php } ?>



<p>ElementID : <?= $ElementID ?></p>

<?
$curPage = $APPLICATION->GetCurPage();


$arItem = $arResult["ITEMS"][0];
$db_props = CIBlockElement::GetProperty($arItem["IBLOCK_ID"], $arItem["ID"]);
?>

<div class="row new-collection-wrapper">
	<? $APPLICATION->IncludeComponent("bitrix:main.include", "", 
		array(
			"AREA_FILE_SHOW" => "file", 
			"PATH" => SITE_DIR."include/new_coll.php"
		), 
		false
	);?>
</div>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css"/>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>

<?php ob_start(); ?>
	<div class="debug">
	
	</div>
	
	<pre>
		<?php print_r($arResult); ?>
	</pre>
<?php $OUT = ob_get_clean(); ?>


<!-- IP адрес компьютера разработчика -->
<?php if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100') { ?>

	<p>Разметка или код который видит разработчик</p>
	
<?php } else { ?>

	<p>Разметка или код который видят пользователи</p>
	
<? } ?>

<?php if ($_SERVER['REMOTE_ADDR'] == '192.168.150.100') echo "<p>Current String</p>"; ?>



oncontextmenu="return false" 	запрет контекстного меню
oncopy="return false;" 
oncontextmenu="return false" 
onselectstart="return false;"


<?php
// PHP : Включить показ предупреждений и ошибок PHP

// Включение вывода всех ошибок и предупреждений в файле php.ini
error_reporting = E_ALL
display_errors = On
display_startup_errors = On

// Включение вывода всех ошибок и предупреждений в коде PHP-скриптов
// Включить вывод уведомлений и предупреждений можно, добавив в начало нужного .php файла следующие строки:
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$x = 7 / 0;

die("777");

header("Content-Type: text/html; charset=windows-1251");
header('Content-Type: text/html; charset=utf-8');

AddHandler application/x-httpd-php .php .html .htm


// Включение вывода всех ошибок и предупреждений в файле .htaccess
php_value display_errors 1
php_value display_startup_errors 1
php_value error_reporting E_ALL



<script src="jquery.1.7.2.js"></script>
<script>
var jquery_1_7_2 = jQuery;
</script>
<script src="jquery.1.3.2.js"></script>


jQuery(function($) {
	$(function(){
		$(".header div");
	});
});

?>


// console.clear();
console.log("pagination: ", test);






X-Debug Configuration new version
https://losst.ru/nastrojka-xdebug-v-phpstorm#2_%D0%9E%D1%82%D0%BB%D0%B0%D0%B4%D0%BA%D0%B0_Php_%D0%B2_Docker

php.ini

[xdebug]

xdebug.mode=debug
xdebug.start_with_request=trigger
xdebug.discover_client_host = false
xdebug.client_host = host.docker.internal
xdebug.client_port = 9000

==========================================================

https://blog.denisbondar.com/post/phpstorm_docker_xdebug

docker-compose.yml
laravel.accounting-visits-client.fpm:
  image: ruslandev89/php74-fpm-bitrix
  container_name: laravel.accounting-visits-client.fpm
  working_dir: /app
  volumes:
    - .:/app
    - ./.dev/php/php.ini:/etc/php/7.4/fpm/php.ini
    - ./.dev/php/php.ini:/etc/php/7.4/cli/php.ini
  environment:
    XDEBUG_CONFIG: "remote_host=host.docker.internal remote_enable=1"
    PHP_IDE_CONFIG: "serverName=Docker"
  networks:
    - default
    - mysql
    - memcached

php.ini
; This setting is on by default.
;report_zend_debug = 0

xdebug.mode=debug
xdebug.client_host="host.docker.internal"

nginx.conf

server {
  listen 80;
  server_name 127.0.0.1 localhost;

  root /app/public;
  index index.php;

  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }

  location ~ \.php$ {
    include fastcgi_params;
    fastcgi_pass laravel.accounting-visits-client.fpm:9000;
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    fastcgi_read_timeout 300;
  }
}



