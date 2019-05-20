<?php
session_start();

$title = $_POST['title'];
$body = $_POST['body'];
$date = date("Y-m-d H:i:s");

$posts = simplexml_load_file("../db/posts.db");

$newpost = $posts->addChild("post");
$newpost->addChild("title", $title);
$newpost->addChild("owner", $_SESSION['username']);
$newpost->addChild("body", $body);
$newpost->addChild("date", $date);

/** Save formatted XML */
$dom = new DOMDocument("1.0", 'utf-8');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($posts->asXML());
$dom->save("../db/posts.db");

header("Location: /admin");
exit();