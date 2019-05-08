define(['jquery'], function ($) {
    $(function () {
        $name = $("#name");
        $pwd = $("#pwd");
        $pwdAgain = $("#pwdAgain");
        $form = $(".center");
        $regTips = $("#regTips")
        $pwdAgain.on('blur', function () {
            if ($pwd.val() !== $pwdAgain.val()) {
                $regTips.html('两次输入密码需一致')
            }
        });
        $name.on('blur', function () {
            $.get('/User/checkUserName', {'name': $name.val()}, function (data) {
                if(data.trim()==='fail'){
                    $regTips.html('用户已存在');
                }else {
                    $regTips.html('');
                }
            }, 'text');
        });
    })
});