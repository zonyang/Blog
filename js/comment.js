define(['jquery', 'formatTime'], function ($, Time) {
    $(function () {
        $textCom = $("#textCom");
        $subCom = $("#subCom");
        $comments = $("#comments");
        $response = $("#response");
        $subCom.on('click', function () {
            $.post('/Blog/commit', {
                'userId': $(".userId").val(),
                'content': $textCom.val(),
                'time': Time,
                'blogId': $(".blogId").val()
            }, function (data) {
                if (data) {
                    let html = `<li class=comment><span>${data.name}</span> <span>${Time}</span><p>${$textCom.val()}</p></li>`;
                    $comments.prepend(html);
                    $response.html(`${data.comments}Responses`);
                }
            }, 'json');
        })
    })
});