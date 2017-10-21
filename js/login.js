$(document).ready(function() {

    // 登录失败模态框
    $('#modal-failure').modal({
        dismissible: true,
    });

    // 登录成功模态框
    $('#modal-success').modal({
        dismissible: true,  // Modal can be dismissed by clicking outside of the modal
        complete: function() {
            window.location.href = 'sis.php/Article/view';
        }
    });


    // 登录按钮点击事件
    $("#submit-btn").click(function() {

        $.ajax({
            type: 'POST',
            url: 'sis.php/Login/check',
            data: {
                email: $('#email').val(),
                password: $('#password').val()
            },
            dataType: 'json',
            success: function(data) {

                if(data.result == 'failed') {
                    $('#modal-failure').modal('open');
                    $('#modal-failure h4').text('Error');
                    $('#modal-failure p').text(data.error);
                }
                
                if(data.result == 'succeeded') {
                    $('#modal-success').modal('open');
                    $('#modal-success h4').text('登录成功！');
                    $('#modal-success p').text('欢迎回来');
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                // ajax 执行错误提示
                $('#modal-failure').modal('open');
                $('#modal-failure h4').text('Ajax Error');
                $('#modal-failure p').text(
                    'ajax error' + "\n" +
                    'XMLHttpRequest.status: '+XMLHttpRequest.status + "\n" +
                    'XMLHttpRequest.readyState: '+XMLHttpRequest.readyState+ "\n" +
                    'textStatus: '+textStatus
                    );

            },
        });
        

        // 阻止表单提交
        return false;
        
    }); // .ajax({});

});
