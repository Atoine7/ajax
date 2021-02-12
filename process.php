<?php
    // echo "hello world";
    if(isset($_GET['name'])) {
        echo "GET:你的名字是".$_GET['name'];
    }else if (isset($_POST['name'])) {
        echo "GET:你的名字是".$_POST['name'];
    }
?>