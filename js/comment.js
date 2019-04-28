define(['jquery', 'formatTime'], function ($, Time) {
    $(function () {
        $textCom = $("#textCom");
        $subCom = $("#subCom");
        $subCom.on('click', function () {
            $.post('/Blog/commit', {
                    'userId': $(".userId").val(),
                    'content': $textCom.val(),
                    'time': Time,
                    'blogId': $(".blogId").val()
                }, function (data) {
                    if (data) {
                        console.log(data);
                    }
                }
                , 'text');
        })
    })
});