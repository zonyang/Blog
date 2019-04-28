<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/8 0008
 * Time: 下午 7:32
 */
$log =  $user?"#":"/user/login";
$reg =  $user?"/user/logout":"/user/reg";
$name =  $user?$user->user_name:"[ 登录 ]";
$user_id =  $user?$user->user_id:"";
$out =  $user?"[ 退出 ]":"[ 注册 ]";
?>
<header id="header">
    <div id="logo">
        <a href="/">
            <img src="/img/logo.png" alt="logo">
        </a>
        <input type="hidden" value=<?php echo $user_id?>>
        <a class="user" href=<?php echo $log?> id="login"><?php echo $name?></a>
        <a class="user" href=<?php echo $reg?> id="reg"><?php echo $out?></a>
    </div>
    <div id="content">
        <nav id="small_nav" class="nav">
            <img src="/img/menu.png" alt="menu">
        </nav>
        <ul id="big_nav" class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="#">Sevices</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li id="search">
                <label for="search_input"></label><input type="text" class="search_text" id="search_input">
                <img src="/img/search.png" alt="search" id="search_btn">
            </li>
        </ul>
    </div>
</header>
