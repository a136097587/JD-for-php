<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/Public/Admin/js/jquery.js"></script>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">表单</a></li>
        </ul>
    </div>
    <div class="formbody">
        <div class="formtitle"><span>基本信息</span></div>
        <form action="<?php echo U('addOk');?>" method="post">
            <ul class="forminfo">
                <li>
                    <label>管理员账号</label>
                    <input name="name" placeholder="请输入账号" type="text" class="dfinput" /><i>名称不能超过20个字符</i></li>
                <li>
                    <label>管理员密码</label>
                    <input name="passwd" placeholder="请输入密码" type="password" class="dfinput" /><i></i></li>
                <li>
                    <label>密码确认</label>
                    <input name="re-passwd" placeholder="请再次输入密码" type="password" class="dfinput" />
                </li>               
                <li><label>账号状态</label><cite><input name="status" type="radio" value="启用" checked="checked" />启用&nbsp;&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="禁用" />禁用</cite></li>
                <li>
                    <label>&nbsp;</label>
                    <input name="" id="btnSubmit" type="submit" class="btn" value="确认保存" />
                </li>
            </ul>
        </form>
    </div>
</body>
<script type="text/javascript">
    /*$btn=document.getElementById('btnSubmit');
    $btn.onclick=function(){

    }*/
</script>
</html>