<html>
<head>
    <script type="text/javascript" src="/assets/insta.js"></script>
</head>
<body bgcolor="black" background="/assets/starbg.gif">
<?php
error_reporting(-1);
ini_set('display_errors', 'On');
session_start();
require 'views/title.php';
require 'views/menu.php';

$param = explode('/', $_SERVER['REQUEST_URI']);
if (empty($param[1])) {
    header("Location: /kezdolap");
}
require 'views/' . $param[1] . '.php';
?>
</body>
</html>