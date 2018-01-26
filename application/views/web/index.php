<!DOCUMENT html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>客友垂钓</title>
    <link href="<?php echo WEB_PUBLIC_TPL;?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link href="<?php echo WEB_PUBLIC_TPL; ?>/css/site.css" rel="stylesheet">
    <link href="<?php echo WEB_PUBLIC_TPL; ?>/css/check.css" rel="stylesheet">

</head>
<body>
<header>
    <div class="content-wrapper">
        <div class="float-left">
            <p class="site-title">客友钓具产品序列号认证</p>
        </div>
    </div>
</header>
<div id="app">
    <section class="featured">
        <div class="content-wrapper">
            <hgroup class="title">
                <h2>产品认证说明</h2>
            </hgroup>
            <p>
                感谢您购买我们【客友钓具】的产品，为了保障您的权益，请在下方输入产品的序列号，如为正品，系统将在下方显示产品的相关信息，谢谢！<br><br>
                注：因存在上传周期，最新序列号查询结果一个月内可正常显示，如有疑问可直接拨打027-51501988（工作日08:30-17:30）进行咨询。
            </p>
        </div>
    </section>

    <section class="content-wrapper main-content clear-fix">

        <h3>输入产品序列号：</h3>
        <div>
            <input type="text" name="serial" id="txtSerial" v-model="serial">
        </div>
        <div>
            <button id="btnCheck" type="button" @click="search">查询</button>
        </div>
        <div id="info" v-if="message">
            <span class="red-text">{{message}}</span>
        </div>

    </section>
</div>
<footer>
    <div class="content-wrapper">
        <div class="float-left">
            <p>
                © 2016 - 客友海比邻钓具版权所有
                备案号：<a href="http://www.keeufishing.com/">鄂ICP备11005839号-1</a>
            </p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var vm = new Vue({
        el:'#app',
        data:{message:'', serial:''},
        methods:{
            search:function () {
                var that = this;
                axios.get('/welcome/search').then(function(data){
                    that.message = data.data.msg;
                });
            }
        }

    });
</script>

</body>
</html>