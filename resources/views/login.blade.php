<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yamaha | CMU</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('css/fonts/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('css/plugin/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="form login_form">
            <section class="login_content">
                <form method="post" action="{{url('auth/login')}}" id="login-form">
                    <h1>Login Form</h1>
                    <ul class="alert alert-danger hidden" id="error-login-message" style="list-style-type: none">

                    </ul>
                    <div>
                        {{csrf_field()}}
                        <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
                    </div>
                    <div>
                        <button class="btn btn-success submit">Log in</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <h1><i class="fa fa-paw"></i> CV. Cipta Mitra Usaha</h1>
                        <p>©2018 All Rights Reserved. Cipta Mitra Usaha</p>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $('#login-form').on('submit', function (e) {
        e.preventDefault();
        var _ = $(this);
        _.find('.btn').prop('disabled',true);
        var alert = $('#error-login-message');
        $.ajax({
            type: 'post',
            url: _.attr('action'),
            data: _.serializeArray(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                _.find('.btn').prop('disabled', false).html('Sign in');
                alert.removeClass('hidden').empty();
                var errors = $.parseJSON(data.responseText);
                $.each(errors, function (index, value) {
                    alert.append('<li>' + value + '</li>')
                });
            }
        })
    })
</script>
</html>
