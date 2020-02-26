<?php
include 'TemplateEngine.php';

$template = new TemplateEngine();
$template->assign('username', 'Hasan');
$template->assign('title', 'My First Bootstrap Page');
$template->assign('subtitle', 'Resize this responsive page to see the effect!');

$template->render('MyTemplate');

?>