<?php

session_start();

// print_r() 函数用于打印变量，以更容易理解的形式展示。
// print_r($_SERVER);

$C = include_once 'config.php';
// 调用的函数
include_once 'function.php';
// 模型放上面
include_once 'father/Model.php';
// smarty放在父类控制器的上面
include_once 'father/smarty/Smarty.class.php';
include_once 'father/Control.php';
include_once 'father/Auth.php';

Control::run();

?>