<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
    <meta http-equiv="content" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="/Public/Common/plane/css/main.css"/>
    <style type="text/css">
*{
    margin: 0;
    padding: 0;
}
#contentdiv{
    position: absolute;
    left: 500px;
}
#startdiv{
    width: 320px;
    height: 568px;
    background-image: url(/Public/Common/plane/image/ks.png);
}
button{
    outline: none;
}
#startdiv button{
    position: absolute;
    top: 500px;
    left: 82px;
    width: 150px;
    height: 30px;
    border: 1px solid black;
    border-radius: 30px;
    background-color: #c4c9ca;
}
#maindiv{
    width: 320px;
    height: 568px;
    background-image:url(/Public/Common/plane/image/background_1.png) ;
    display: none;
}
#maindiv img{
    position: absolute;
    z-index: 1;
}
#scorediv{
    font-size: 16px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    left: 10px;
    display: none;
}
#scorediv{
    font-size: 18px;
    font-weight: bold;
}
#suspenddiv{
    position: absolute;
    top: 210px;
    left: 82px;
    display: none;
    z-index: 2;
}
#suspenddiv button{
    width: 150px;
    height: 30px;
    margin-bottom: 20px;
    border: 1px solid black;
    border-radius: 30px;
    background-color: #c4c9ca;
}
#enddiv{
    position: absolute;
    top: 210px;
    left: 75px;
    border: 1px solid gray;
    border-radius: 5px;
    text-align: center;
    background-color:#d7ddde;
    display: none;
    z-index: 2;
}
.plantext{
    width: 160px;
    height: 30px;
    line-height: 30px;
    font-size: 16px;
    font-weight: bold;
}
#planscore{
    width: 160px;
    height: 80px;
    line-height: 80px;
    border-top: 1px solid gray;
    border-bottom: 1px solid gray;
    font-size: 16px;
    font-weight: bold;
}
#enddiv div{
    width: 160px;
    height: 50px;
}
#enddiv div button{
    margin-top:10px ;
    width: 90px;
    height: 30px;
    border: 1px solid gray;
    border-radius: 30px;
}

    </style>
</head>

<body>
<div id="contentdiv">
    <div id="startdiv">
        <button onclick="begin()">开始游戏</button>
    </div>
    <div id="maindiv">
        <div id="scorediv">
            <label>分数：</label>
            <label id="label">0</label>
        </div>
        <div id="suspenddiv">
            <button>继续</button><br/>
            <button>重新开始</button><br/>
            <button>回到主页</button>
        </div>
        <div id="enddiv">
            <p class="plantext">飞机大战分数</p>
            <p id="planscore">0</p>
            <div><button onclick="jixu()">继续</button></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/Public/Common/plane/js/main.js"></script>
<script type="text/javascript">
    
</script>
</body>
</html>