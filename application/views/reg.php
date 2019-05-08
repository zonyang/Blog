<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/26 0026
 * Time: 上午 10:07
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
<form action="/user/checkReg" method="post" class="center">
    <div class="formCol" id="regTips">tish:</div>
    <div class="formCol">
        <label for="name">名字: </label><input type="text" name="name" id="name">
    </div>
    <div class="formCol">
        <label for="pwd">密码: </label><input type="text" name="pwd" id="pwd">
    </div>
    <div class="formCol">
        <label for="pwdAgain">确认密码: </label><input type="text" name="pwdAgain" id="pwdAgain">
    </div>
    <div class="formCol">
        <input type="submit" class="submit" value="登录">
    </div>
</form>
<script src="/js/require-2.1.11.js" data-main="/js/register.js"></script>
</body>
