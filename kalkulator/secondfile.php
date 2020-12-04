<?php
if(isset($_POST["summa"]))
    if(is_numeric($_POST["f1"]) && is_numeric($_POST["f2"]) || is_double($_POST["f1"]) && is_double($_POST["f2"])){
        $first=$_POST["f1"];
        $two=$_POST["f2"];
        $rezult1=$first + $two;
        echo "Результат="."<br />".$rezult1;
    }
            else{
            unset($_POST["f1"]);
            unset($_POST["f2"]);
            echo "Вы ввели не целочисленное число или число с плавающей точкой."." Пожалуйста, вернитесь и исправте"." <a href='index.php'>   Исправить </a>"; 
        }

if(isset($_POST["minus"]))
    if(is_numeric($_POST["f1"]) && is_numeric($_POST["f2"]) || is_double($_POST["f1"]) && is_double($_POST["f2"])){
        $first=$_POST["f1"];
        $two=$_POST["f2"];
        $rezult1=$first - $two;
        echo "Результат="."<br />".$rezult1;
    }
            else{
            unset($_POST["f1"]);
            unset($_POST["f2"]);
            echo "Вы ввели не целочисленное число или число с плавающей точкой."." Пожалуйста, вернитесь и исправте"." <a href='index.php'>  Исправить </a>"; 
        }


if(isset($_POST["umn"]))
    if(is_numeric($_POST["f1"]) && is_numeric($_POST["f2"]) || is_double($_POST["f1"]) && is_double($_POST["f2"])){
        $first=$_POST["f1"];
        $two=$_POST["f2"];
        $rezult1=$first * $two;
        echo "Результат="."<br />".$rezult1;
    }
            else{
            unset($_POST["f1"]);
            unset($_POST["f2"]);
            echo "Вы ввели не целочисленное число или число с плавающей точкой."." Пожалуйста, вернитесь и исправте"." <a href='index.php'>  Исправить </a>"; 
        }

if(isset($_POST["del"]))
    if(is_numeric($_POST["f1"]) && is_numeric($_POST["f2"]) || is_double($_POST["f1"]) && is_double($_POST["f2"])){
        $first=$_POST["f1"];
        $two=$_POST["f2"];
        $rezult1=$first / $two;
        echo "Результат="."<br />".$rezult1;
    }
            else{
            unset($_POST["f1"]);
            unset($_POST["f2"]);
            echo "Вы ввели не целочисленное число или число с плавающей точкой."." Пожалуйста, вернитесь и исправте"." <a href='index.php'>  Исправить </a>"; 
        }
?>