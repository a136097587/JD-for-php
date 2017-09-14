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
        <form action="<?php echo U('modify');?>" method="post">
            <ul class="forminfo">
                <li>
                    <label>父分类</label>
                    <select name="cate_pid" class="dfinput">
                        <option value="0">--请选择--</option>
                        <?php if(is_array($cate_list)): foreach($cate_list as $key=>$ov): if($ov["cate_id"] == $cate_info["cate_pid"] ): ?><option value="<?php echo ($ov["cate_id"]); ?>" selected="selected">
                            <?php echo (str_repeat("&emsp;&emsp;",$ov["level"])); echo ($ov["cate_name"]); ?>
                            </option>
                        <?php else: ?>  
                            <option value="<?php echo ($ov["cate_id"]); ?>">
                            <?php echo (str_repeat("&emsp;&emsp;",$ov["level"])); echo ($ov["cate_name"]); ?>
                            </option><?php endif; endforeach; endif; ?>
                    </select>
                    </select>
                    <i></i>
                </li>
                <input type="hidden" name="cate_id" value="<?php echo ($cate_info["cate_id"]); ?>" />
                <li>
                    <label>分类名称</label>
                    <input name="cate_name" placeholder="请输入分类名称" type="text" class="dfinput" value="<?php echo ($cate_info["cate_name"]); ?>"  />
                </li>
                <li>
                    <label>&nbsp;</label>
                    <input name="" id="btnSubmit" type="button" class="btn" value="确认保存" />
                </li>
            </ul>
        </form>
    </div>
</body>
<script type="text/javascript">
//jQuery代码
$(function(){
    //给btnsubmit绑定点击事件
    $('#btnSubmit').on('click',function(){
        //表单提交
        $('form').submit();
    })
});
</script>
</html>