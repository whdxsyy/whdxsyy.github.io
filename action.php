<?php
/**
 * Created by PhpStorm.
 * User: yysun
 * Date: 2017/7/21
 * Time: 17:42
 */
if(isset($_GET["name"])){
    echo  "<h2>".htmlspecialchars($_GET["name"])."</h2>";
}