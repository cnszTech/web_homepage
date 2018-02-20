<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="format-detection" content="telephone=no, address=no, email=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<title>深圳市醒狮科技有限公司cnszTech</title>
<meta name="keywords" content="深圳市醒狮科技有限公司"/>
<meta name="description" content="深圳市醒狮科技有限公司"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="demo/css/public.css" type="text/css" rel="stylesheet" />
<script src="demo/js/jquery.js" type="text/javascript"></script>
<script src="demo/js/checkform.js" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css" />
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script>
		$(function() {
			$('.hua1_box li').click(function() {
				var index = $(this).index();
				$('.hua1_box li').removeClass('on').eq(index).addClass('on');
				$('.ru').removeClass('tab-on').eq(index).addClass('tab-on');
			})
		})
	</script>

</head>

<body>
	<style>
/*.nav {
width: 82%;
}*/
</style>
    <div class="header">
    <div class="fl" style="margin-left:7%;">
            <img src="images/logo.png"/>
            </div>
        <div class="wrap">
            <div class="logo fl" style="line-height:50px;margin-top:1.5%;">
            <a href="index.php"><img src="images/index1_01_03.png"/></a></div>
       <!-- 修改部分   --> 

<!--         <div class="mm1">
            <ul class="mm1_box">
                            <li><a href="login.php">登陆<a></li>
                <li>|</li>
                <li class="last"><a href="register.php">注册<a></li>
                                <div class="clear"></div>
            </ul>


        </div>  --> 
            <div class="gou">
                <a href="cart.php">
                    <i><img src="images/index5_03_03.png" /><em class="sum">0</em></i>
                    <span>我的购物车</span>
                </a>
            </div>
        	<div class="nav">
            	<ul class="nav_box">
                    <li><a href="index.php">首页</a></li>
                    <li><a href="about.php">关于醒狮</a></li>
                    <li><a href="pro.php">人才招聘</a></li>
                    <li><a href="service.php">服务支持</a></li>
                    <li><a href="news.php">新闻中心</a></li>
                    <li><a href="contact.php">联系我们</a></li>
                    <li class="last"><a href="shop.php">商店</a></li>
                
                	<div class="clear"></div>
                </ul>
                
                
                
    <!--  影藏的二级菜单     -->     
                
        <div class="wrap">
             <div class="nav2">   
            <div class="nav_img">
            	<div class="nav_icon"><a href="#"><img src="images/index1111-02_03.jpg"></a></div>
            </div>
           <div class="clear"></div>
            <ul class="nav_ul"  id="menus">
                 <li><a href="index.php">首页</a></li>
                    <li><a href="about.php">关于醒狮</a></li>
                    <li><a href="pro.php">产品中心</a></li>
                    <li><a href="service.php">服务支持</a></li>
                    <li><a href="news.php">新闻中心</a></li>
                    <li><a href="contact.php">联系我们</a></li>
                  <li class="kk"><a href="shop.php">商店</a> </li>              
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
           </div>
            
            
            </div>
        	
        
        	<div class="clear"></div>
        </div>

    </div>
	<div class="nymain">
		<div class="wrap">
			<div class="uy">
				<h2 class="shop_tit fl">商店  |  STORE</h2>
			    <div class="search  fr">
			        <form method="post" action="order_list.php">
			            <input type="text" class="text fl" placeholder="输入手机号码查询历史记录" name="phone" />
			            <input type="submit" class="submit fl" value="&nbsp;" />
			        </form>
			        <div class="clear"></div>
			    </div>
			    <div class="clear"></div>
			</div>
			<div class="groups">
				<div class="group">
					<div class="J_Row">
						<div class="head">
							<h4>
								<span class="title">所有分类：</span>
							</h4>
						</div>
						<div class="body">
							<div class="items">
							<a class="item  cur" href="?lm=">不限</a>
																<a class="item last" href="shop.php?lm=4">口腔护理产品</a>
															</div>
						</div>

					</div>
										<div class="J_Row">
						<div class="head">
							<h4>
								<span class="title">选择类型：</span>
							</h4>
						</div>
						<div class="body">
							<div class="items">
							<a class="item  cur" href="?style=">不限</a>
																<a class="item last" href="?style=2">冲牙器</a>
								
							</div>
						</div>

					</div>
										<div class="J_Row last">
						<div class="head">
							<h4>
								<span class="title">选择价格：</span>
							</h4>
						</div>
						<div class="body">
							<div class="items">
							<a class="item  cur" href="?price=">不限</a>
																<a class="item " href="?price=5">300~599元</a>
																<a class="item " href="?price=4">100~399元</a>
																<a class="item last" href="?price=3">0~99元</a>
															</div>
						</div>

					</div>

				</div>
			</div>
						<ul class="shop_list">
								<li><a href="pro_show.php?id=33">
					<div class="imgdiv"><img src="upimg/2017061717341199.jpg" alt="" /></div>
					<span>台式冲牙器</span>
				</a></li>
								<li><a href="pro_show.php?id=32">
					<div class="imgdiv"><img src="upimg/2017060821532599.jpg" alt="" /></div>
					<span>家用冲牙器FL0002</span>
				</a></li>
								<li><a href="pro_show.php?id=31">
					<div class="imgdiv"><img src="upimg/2017060821433868.jpg" alt="" /></div>
					<span>家用冲牙器FL0001</span>
				</a></li>
								<div class="clear"></div>
			</ul>
			<div class="page">
			<div class="papa">
     	<ul class="papa_box fr">
            <li class="current"><a>1</a></li></ul>
     	<div class="clear"></div>
     
     </div>
			</div>
			<div class="clear"></div>
		</div>

	</div>

</div>





</div>
 <div class="bottom">
    <div class="wrap">
            <div class="foot2"> 
              <div class="ft_2_r">
                  <img src="images/index555.jpg"/>
                  <span>手机商城</span>
                </div>
                <div class="foot3">
              <div class="ft2_l">
                  <ul class="ft2_box" >
                     <li><a href="index.php">首页</a></li>
                     <li>|</li>
                     <li><a href="about.php">关于醒狮</a></li>
                     <li>|</li>
                     <li><a href="pro.php">人才招聘</a></li>
                     <li class="pp2">|</li>
                     <li><a href="service.php">服务支持</a></li>
                     <li>|</li>
                     <li><a href="news.php">新闻中心</a></li>
                     <li>|</li>
                     <li><a href="contact.php">联系我们</a></li>
                     <li class="pp2">|</li>
                     <li><a href="shop.php">商店</a></li>
                
                  <div class="clear"></div>
                </ul>
                </div>
                 <div class="foot4"><p>网站备案号网站备案号网站备案号网站备案号网站备案号<a href="https://m.kuaidi100.com/" target="_blank"><span style="color:#FFFFFF;">快递查询</span></a> | <span> 网站建设：cnszTech.world</span></p></div>
            </div>
              <div class="clear"></div>
            
            
            </div>
           
            
            
           
        
        
        
        
        
        
        
        </div>
 
 
 
 
 </div><script type="text/javascript">
			// alert('jq');
			$(".nav_img").click(function() {
				$(this).parent().find(".nav_ul").slideToggle(1000);
			});
		</script>

	</body>

	</html>
