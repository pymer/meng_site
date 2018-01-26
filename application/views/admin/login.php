<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>客友垂钓</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ADMIN_TPL; ?>plugins/iCheck/square/blue.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box" id="login-app">
    <div class="login-logo">
        <a href=""><b>客友垂钓</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="#" method="get">
            <div class="form-group has-feedback">
                <input type="text" name="mobile" v-model="mobile" class="form-control" placeholder="mobile">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" v-model="password"  class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="button" @click="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </div>
        </form>

        <a href="#">I forgot my password</a><br>
    </div>
</div>

<script src="<?php echo WEB_ADMIN_TPL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo WEB_ADMIN_TPL; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo WEB_ADMIN_TPL; ?>plugins/iCheck/icheck.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
    var vm = new Vue({
        el : '#login-app',
        data: {
            mobile:'',
            password:''
        },
        methods:{
            login:function () {
                axios({
                    url:'/m_admin/login',
                    method:'get',
                    dataType: 'json',
                    params: {mobile: this.mobile, password: this.password},
                }).then(function (response) {
                    console.log(response.data);
                });

            }
        }
    });
</script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
