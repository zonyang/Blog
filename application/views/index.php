<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/7 0007
 * Time: 下午 8:47
 */
$cateId = $this->input->get('categoryId');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        window.addEventListener('load', function () {
            setTimeout(hideUrlBar, 0);
        }, false);

        function hideUrlBar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
<?php include 'header.php' ?>
<div class="blog-wrapper">
    <div class="blog-nav">
        <h3>Latest Works</h3>
        <ul class="blog-cate">
            <?php
            $class = $cateId ? "" : "active";
            echo ' <li class="cate ' . $class . '"><a href="/">ALL</a></li>';
            foreach ($categories as $category) {
                $class = $category->category_id === $cateId ? "active" : "";
                echo '<li class="cate ' . $class . '" data-id="'.$category->category_id.'"><a href="?categoryId=' . $category->category_id . '">' . $category->name . '</a></li>';
            } ?>
        </ul>
    </div>
    <ul class="blog-list">
        <?php
        foreach ($blogs as $blog) {
            echo '<li class="blog"><a href="#"><img src="' . $blog->img_url . '"alt=""></a></li>';
        }
        ?>
    </ul>
    <button id="leftLoad">></button>
    <button id="loadImg">></button>
</div>
<script src="/js/require-2.1.11.js" data-main="/js/main.js"></script>

</body>
</html>
