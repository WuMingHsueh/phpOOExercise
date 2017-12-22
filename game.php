<?php

include __DIR__ . "./vendor/autoload.php";

use OOExercise\Effort\Teacher;
use OOExercise\Effort\Student;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

$teacher = new Teacher("師傅", "複合大刀");
$student = new Student("徒弟", "神利");



$student->拳法();
$student->拔刀術("逆刃刀", "黑檀木", "fuck");
$student->獨孤九劍();
$student->收刀();

echo "<hr>";
echo $student->name;
echo "<br>";
echo $student->sword;
