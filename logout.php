<?
session_start();
session_unset();
session_destroy();

header("location:http://www.speaktofortune.com/niche/");
exit();
?>
