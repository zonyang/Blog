<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/7 0007
 * Time: 下午 8:47
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
<?php include 'header.php' ?>
<div class="comment-wrapper">
    <h3><?php echo $blogs->blog_name ?></h3>
    <img src="<?php echo $blogs->img_url ?>" alt="">
    <p><?php echo '<li>' . $blogs->content . '</li>' ?></p>
    <h3 id="response"><?php echo count($blogs->comments) ?>Responses</h3>
    <ul class="comments" id="comments">
        <?php foreach ($blogs->comments as $comment){?>
            <li class="comment">
                <span><?php echo $comment->user_name ?></span>
                <span><?php echo $comment->create_time ?></span>
                <p><?php echo $comment->content ?></p>
            </li>
        <?php } ?>
    </ul>
    <h3>leave a comment</h3>
    <input class="userId" type="hidden" value=<?php echo $user_id?>>
    <input class="blogId" type="hidden" value=<?php echo $blogs->blog_id?>>
    <textarea name="content" id="textCom" cols="30" rows="10"></textarea><br>
    <input type="button" id="subCom" value="发表">
</div>
<script src="/js/require-2.1.11.js" data-main="/js/main.js"></script>
<script>

</script>
</body>
</html>