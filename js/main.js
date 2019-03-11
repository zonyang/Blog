require(["jquery", "search"], function ($) {

    $(function () {
        let pageIndex = 0;
        const cateId = $($(".blog-cate>.active")[0]).data('id');
        const $loadImg = $("#loadImg");
        const $leftLoad = $("#leftLoad");
        const $blogs = $(".blog-list");
        if (pageIndex <= 0) {
            $leftLoad.attr("disabled", true);
        }
        $loadImg.on("click", function () {
            $leftLoad.attr("disabled", false);
            pageIndex++;
            $.get('welcome/load_img',
                {pageIndex: pageIndex, cateId: cateId}, function (data) {
                    if (!data.length) {
                        pageIndex--;
                        $loadImg.attr("disabled", true);
                    } else {
                        $blogs.empty();
                        let html = '';
                        for (let i = 0; i < data.length; i++) {
                            html += `<li class="blog"><a href="#"><img src="${data[i].img_url}" alt=""></a></li>`;
                        }
                        $blogs.append(html);
                    }
                }, 'json');
        });
        $leftLoad.on("click", function () {
            pageIndex--;
            $loadImg.attr("disabled", false);
            console.log(pageIndex);
            if (pageIndex <= 0) {
                $leftLoad.attr("disabled", true);
            }
            $.get('welcome/load_img',
                {pageIndex: pageIndex, cateId: cateId}, function (data) {
                    $blogs.empty();
                    let html = '';
                    for (let i = 0; i < data.length; i++) {
                        html += `<li class="blog"><a href="#"><img src="${data[i].img_url}" alt=""></a></li>`;
                    }
                    $blogs.append(html);
                }, 'json');

        });

    })
});