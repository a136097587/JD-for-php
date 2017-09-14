<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>京西商城</title>
	<link rel="stylesheet" href="/Public/Home/style/base.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/style/global.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/style/header.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/style/index.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/style/bottomnav.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/style/footer.css" type="text/css">

	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/header.js"></script>
	<script type="text/javascript" src="/Public/Home/js/index.js"></script>
</head>
<body>
	<!-- 顶部导航 start -->
	<div class="topnav">
		<div class="topnav_bd w1210 bc">
			<div class="topnav_left">
				
			</div>
			<div class="topnav_right fr">
				<ul>
				<?php if(session('memid') == null ): ?><li>您好，欢迎来到京西！[<a href="<?php echo U('Member/login');?>">登录</a>] &emsp;[<a href="<?php echo U('Member/register');?>">免费注册</a>] </li>
				<?php else: ?>
					<li>您好<?php echo (session('memname')); ?>欢迎来到京西&emsp;[<a href="<?php echo U('Member/logout');?>">退出</a>] </li><?php endif; ?>
					<li class="line">|</li>
					<li>我的订单</li>
					<li class="line">|</li>
					<li>客户服务</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 顶部导航 end -->
	
	<div style="clear:both;"></div>

	<!-- 头部 start -->
	<div class="header w1210 bc mt15">
		<!-- 头部上半部分 start 包括 logo、搜索、用户中心和购物车结算 -->
		<div class="logo w1210">
			<h1 class="fl"><a href="<?php echo U('Index/index');?>"><img src="/Public/Home/images/logo.png" alt="京西商城"></a></h1>
			<!-- 头部搜索 start -->
			<div class="search fl">
				<div class="search_form">
					<div class="form_left fl"></div>
					<form action="<?php echo U('search');?>" name="serarch" method="get" class="fl">
						<input type="text" name='name' class="txt" value="请输入商品关键字" /><input type="submit" class="btn" value="搜索" />
					</form>
					<div class="form_right fl"></div>
				</div>
				
				<div style="clear:both;"></div>

				<div class="hot_search">
					<strong>热门搜索:</strong>
					<a href="">D-Link无线路由</a>
					<a href="">休闲男鞋</a>
					<a href="">TCL空调</a>
					<a href="">耐克篮球鞋</a>
				</div>
			</div>
			<!-- 头部搜索 end -->

			<!-- 用户中心 start-->
			<div class="user fl">
				<dl>
					<dt>
						<em></em>
						<a href="">用户中心</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt">
						<?php if(session('memid') == null ): ?>您好，请<a href="<?php echo U('Member/login');?>">登录</a>			
						<?php else: ?>
							欢迎<?php echo (session('memname')); endif; ?>
						</div>
						<div class="uclist mt10">
						<?php if(session('memid') == null ): ?><div align='center'>请先登录</div>
						<?php else: ?>
							<ul class="list1 fl">
								<li><a href="<?php echo U('member/user');?>">用户信息></a></li>
								<li><a href="">我的订单></a></li>
								<li><a href="<?php echo U('member/address');?>">收货地址></a></li>
								<li><a href="">我的收藏></a></li>
							</ul>
							<ul class="fl">
								<li><a href="">我的留言></a></li>
								<li><a href="">我的红包></a></li>
								<li><a href="">我的评论></a></li>
								<li><a href="">资金管理></a></li>
							</ul><?php endif; ?>
						</div>
						<div style="clear:both;"></div>
						<div class="viewlist mt10">
							<h3>最近浏览的商品：</h3>
							<ul>
								<li><a href=""><img src="/Public/Home/images/view_list1.jpg" alt="" /></a></li>
								<li><a href=""><img src="/Public/Home/images/view_list2.jpg" alt="" /></a></li>
								<li><a href=""><img src="/Public/Home/images/view_list3.jpg" alt="" /></a></li>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			<!-- 用户中心 end-->

			<!-- 购物车 start -->
			<div class="cart fl">
				<dl>
					<dt>
						<a href="<?php echo U('cart/flow1');?>">去购物车结算</a>
						<b></b>
					</dt>
					<dd>
					<?php if($cart_header == null): ?><div class="prompt">
							购物车中还没有商品，赶紧选购吧！
						</div>
					<?php else: ?>					
					<?php if(is_array($cart_header)): foreach($cart_header as $key=>$vo): ?><div class="prompt">
							<?php echo ($vo["goods_name"]); ?>
						</div><?php endforeach; endif; endif; ?>
					</dd>
				</dl>
			</div>
			<!-- 购物车 end -->
		</div>
		<!-- 头部上半部分 end -->
		
		<div style="clear:both;"></div>

		<!-- 导航条部分 start -->
		<div class="nav w1210 bc mt10">
			<!--  商品分类部分 start-->
		<?php if($ac == 'Index-index'): ?><div class="category fl"> <!-- 非首页，需要添加cat1类 -->
				<div class="cat_hd">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，鼠标滑过时展开菜单则将off类换成on类 -->
					<h2>全部商品分类</h2>
					<em></em>
				</div>
		<?php else: ?>
			<div class="category fl cat1"> <!-- 非首页，需要添加cat1类 -->
				<div class="cat_hd off">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，鼠标滑过时展开菜单则将off类换成on类 -->
					<h2>全部商品分类</h2>
					<em></em>
				</div><?php endif; ?>	
				<?php if($ac == 'Index-index' ): ?><div class="cat_bd">
				<?php else: ?>
					<div class="cat_bd none"><?php endif; ?>									
					<?php if(is_array($cateA)): foreach($cateA as $key=>$level1): ?><div class="cat item1">
						<h3><a href="<?php echo U('getGoodsBycateid','level='.$level1[level].'&cate_id='.$level1[cate_id]);?>"><?php echo ($level1["cate_name"]); ?></a> <b></b></h3>
						<div class="cat_detail">
						<?php if(is_array($cateB)): foreach($cateB as $key=>$level2): if($level2["cate_pid"] == $level1["cate_id"] ): ?><dl class="dl_1st">
								<dt><a href="<?php echo U('getGoodsBycateid','level='.$level2[level].'&cate_id='.$level2[cate_id]);?>"><?php echo ($level2["cate_name"]); ?></a></dt>
								<dd>
								<?php if(is_array($cateC)): foreach($cateC as $key=>$level3): if($level3["cate_pid"] == $level2["cate_id"] ): ?><a href="<?php echo U('getGoodsBycateid','level='.$level3[level].'&cate_id='.$level3[cate_id]);?>"><?php echo ($level3["cate_name"]); ?></a><?php endif; endforeach; endif; ?>
								</dd>
							</dl><?php endif; endforeach; endif; ?>
						</div>
						
					</div><?php endforeach; endif; ?>
				</div>
			</div>
			<!--  商品分类部分 end--> 

			<div class="navitems fl">
				<ul class="fl">
					<li class="current"><a href="">首页</a></li>
					<li><a href="">电脑频道</a></li>
					<li><a href="">家用电器</a></li>
					<li><a href="">品牌大全</a></li>
					<li><a href="">团购</a></li>
					<li><a href="">积分商城</a></li>
					<li><a href="">夺宝奇兵</a></li>
				</ul>
				<div class="right_corner fl"></div>
			</div>
		</div>
		<!-- 导航条部分 end -->
	</div>
	<!-- 头部 end-->
<div style="clear:both;"></div>


	<div style="clear:both;"></div>
<link rel="stylesheet" href="/Public/Home/style/home.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/style/address.css" type="text/css">
<script type="text/javascript" src="/Public/Home/js/home.js"></script>
	<!-- 页面主体 start -->
	<div class="main w1210 bc mt10">
		<div class="crumb w1210">
			<h2><strong>我的XX </strong><span>> 我的订单</span></h2>
		</div>
		
		<!-- 左侧导航菜单 start -->
		<div class="menu fl">
			<h3>我的XX</h3>
			<div class="menu_wrap">
				<dl>
					<dt>订单中心 <b></b></dt>
					<dd><b>.</b><a href="">我的订单</a></dd>
					<dd><b>.</b><a href="">我的关注</a></dd>
					<dd><b>.</b><a href="">浏览历史</a></dd>
					<dd><b>.</b><a href="">我的团购</a></dd>
				</dl>

				<dl>
					<dt>账户中心 <b></b></dt>
					<dd class="cur"><b>.</b><a href="">账户信息</a></dd>
					<dd><b>.</b><a href="">账户余额</a></dd>
					<dd><b>.</b><a href="">消费记录</a></dd>
					<dd><b>.</b><a href="">我的积分</a></dd>
					<dd><b>.</b><a href="">收货地址</a></dd>
				</dl>

				<dl>
					<dt>订单中心 <b></b></dt>
					<dd><b>.</b><a href="">返修/退换货</a></dd>
					<dd><b>.</b><a href="">取消订单记录</a></dd>
					<dd><b>.</b><a href="">我的投诉</a></dd>
				</dl>
			</div>
		</div>
		<!-- 左侧导航菜单 end -->

		<!-- 右侧内容区域 start -->
		<div class="content fl ml10">
			<div class="address_hd">
				<h3>收货地址薄</h3>
				<dl>
					<dt>1.王超平 北京市 昌平区 建材城西路金燕龙办公楼一层 13555555555 </dt>
					<dd>
						<a href="">修改</a>
						<a href="">删除</a>
						<a href="">设为默认地址</a>
					</dd>
				</dl>
				<dl class="last"> <!-- 最后一个dl 加类last -->
					<dt>2.王超平 湖北省 武汉市 武昌 关山光谷软件园1号201 13333333333 </dt>
					<dd>
						<a href="">修改</a>
						<a href="">删除</a>
						<a href="">设为默认地址</a>
					</dd>
				</dl>

			</div>

			<div class="address_bd mt10">
				<h4>新增/修改收货地址</h4>
				<form action="" name="address_form">
						<ul>
							<li>
								<label for=""><span>*</span>收 货 人：</label>
								<input type="text" name="" class="txt" />
							</li>
							<li>
								<label for=""><span>*</span>所在地区：</label>
								<select name="" id="">
									<option value="">请选择</option>
									<option value="">北京</option>
									<option value="">上海</option>
									<option value="">天津</option>
									<option value="">重庆</option>
									<option value="">武汉</option>
								</select>

								<select name="" id="">
									<option value="">请选择</option>
									<option value="">朝阳区</option>
									<option value="">东城区</option>
									<option value="">西城区</option>
									<option value="">海淀区</option>
									<option value="">昌平区</option>
								</select>

								<select name="" id="">
									<option value="">请选择</option>
									<option value="">西二旗</option>
									<option value="">西三旗</option>
									<option value="">三环以内</option>
								</select>
							</li>
							<li>
								<label for=""><span>*</span>详细地址：</label>
								<input type="text" name="" class="txt address"  />
							</li>
							<li>
								<label for=""><span>*</span>手机号码：</label>
								<input type="text" name="" class="txt" />
							</li>
							<li>
								<label for="">&nbsp;</label>
								<input type="checkbox" name="" class="check" />设为默认地址
							</li>
							<li>
								<label for="">&nbsp;</label>
								<input type="submit" name="" class="btn" value="保存" />
							</li>
						</ul>
					</form>
			</div>	

		</div>
		<!-- 右侧内容区域 end -->
	</div>
	<!-- 页面主体 end-->

	<div style="clear:both;"></div>

	<!-- 底部导航 start -->
	<div class="bottomnav w1210 bc mt20">
		<div class="bnav1">
			<h3><b></b> <em>购物指南</em></h3>
			<ul>
				<li><a href="">购物流程</a></li>
				<li><a href="">会员介绍</a></li>
				<li><a href="">团购/机票/充值/点卡</a></li>
				<li><a href="">常见问题</a></li>
				<li><a href="">大家电</a></li>
				<li><a href="">联系客服</a></li>
			</ul>
		</div>
		
		<div class="bnav2">
			<h3><b></b> <em>配送方式</em></h3>
			<ul>
				<li><a href="">上门自提</a></li>
				<li><a href="">快速运输</a></li>
				<li><a href="">特快专递（EMS）</a></li>
				<li><a href="">如何送礼</a></li>
				<li><a href="">海外购物</a></li>
			</ul>
		</div>

		
		<div class="bnav3">
			<h3><b></b> <em>支付方式</em></h3>
			<ul>
				<li><a href="">货到付款</a></li>
				<li><a href="">在线支付</a></li>
				<li><a href="">分期付款</a></li>
				<li><a href="">邮局汇款</a></li>
				<li><a href="">公司转账</a></li>
			</ul>
		</div>

		<div class="bnav4">
			<h3><b></b> <em>售后服务</em></h3>
			<ul>
				<li><a href="">退换货政策</a></li>
				<li><a href="">退换货流程</a></li>
				<li><a href="">价格保护</a></li>
				<li><a href="">退款说明</a></li>
				<li><a href="">返修/退换货</a></li>
				<li><a href="">退款申请</a></li>
			</ul>
		</div>

		<div class="bnav5">
			<h3><b></b> <em>特色服务</em></h3>
			<ul>
				<li><a href="">夺宝岛</a></li>
				<li><a href="">DIY装机</a></li>
				<li><a href="">延保服务</a></li>
				<li><a href="">家电下乡</a></li>
				<li><a href="">京东礼品卡</a></li>
				<li><a href="">能效补贴</a></li>
			</ul>
		</div>
	</div>
	<div style="clear:both;"></div>
	<!-- 底部版权 start -->
	<div class="footer w1210 bc mt10">
		<p class="links">
			<a href="">关于我们</a> |
			<a href="">联系我们</a> |
			<a href="">人才招聘</a> |
			<a href="">商家入驻</a> |
			<a href="">千寻网</a> |
			<a href="">奢侈品网</a> |
			<a href="">广告服务</a> |
			<a href="">移动终端</a> |
			<a href="">友情链接</a> |
			<a href="">销售联盟</a> |
			<a href="">京西论坛</a>
		</p>
		<p class="copyright">
			 © 2005-2013 京东网上商城 版权所有，并保留所有权利。  ICP备案证书号:京ICP证070359号 
		</p>
		<p class="auth">
			<a href=""><img src="images/xin.png" alt="" /></a>
			<a href=""><img src="images/kexin.jpg" alt="" /></a>
			<a href=""><img src="images/police.jpg" alt="" /></a>
			<a href=""><img src="images/beian.gif" alt="" /></a>
		</p>
	</div>
	<!-- 底部版权 end -->
</body>
</html>