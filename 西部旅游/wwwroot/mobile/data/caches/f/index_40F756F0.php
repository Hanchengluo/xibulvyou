<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:61:"D:/wwwroots/xbly/wwwroot/mobile/themes/ocailong_com/index.dwt";i:1;s:75:"D:/wwwroots/xbly/wwwroot/mobile/themes/ocailong_com/library/ad_position.lbi";i:2;s:78:"D:/wwwroots/xbly/wwwroot/mobile/themes/ocailong_com/library/recommend_best.lbi";i:3;s:73:"D:/wwwroots/xbly/wwwroot/mobile/themes/ocailong_com/library/cat_goods.lbi";i:4;s:75:"D:/wwwroots/xbly/wwwroot/mobile/themes/ocailong_com/library/page_footer.lbi";}s:7:"expires";i:1482306854;s:8:"maketime";i:1482303254;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>生鲜商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/ocailong_com/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/ocailong_com/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/ocailong_com/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/ocailong_com/js/TouchSlide.js"></script>
<script type="text/javascript" src="themes/ocailong_com/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/ocailong_com/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="themes/ocailong_com/js/ectouch.js"></script>
<script type="text/javascript">
  function getLocalTime(nS) {
    return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/, ' ');
  }
  function limitCount() {
    var a = limitCount.doms = limitCount.doms || $("#JS_limit_table div.JS_leaveTime");
    a.each(function() {
      var c = $(this);
      var b = c[0]._timeline = c[0]._timeline || c.data("timeline");
      c.html(limitFormatTime(b - limitCount.unixTime));
    });
  }
  function limitFormatTime(e) {
    if (e < 0) {
      e = 0;
    }
    var NowTime = new Date();
    var t = e * 1000 - NowTime.getTime();
    /*var d=Math.floor(t/1000/60/60/24);
        t-=d*(1000*60*60*24);
        var h=Math.floor(t/1000/60/60);
        t-=h*60*60*1000;
        var m=Math.floor(t/1000/60);
        t-=m*60*1000;
        var s=Math.floor(t/1000);*/
    var d = Math.floor(t / 1000 / 60 / 60 / 24);
    if (d<10){
       d = '0' + d;
    }
    var h = Math.floor(t / 1000 / 60 / 60 % 24);
    if (h<10){
       h = '0' + h;
    }
    var m = Math.floor(t / 1000 / 60 % 60);
    if (m<10){
       m = '0' + m;
    }
    var s = Math.floor(t / 1000 % 60);
    if (s<10){
       s = '0' + s;
    }
    if (t < 0) {
    return "活动结束";
    }
    return '<em>'+ d + '</em>天' + '<em>' + h + '</em>时<em>' + m + '</em>分<em>' + s + '</em>秒';
  }
  function _COMMON_UNIX_TIME() {
    limitCount.unixTime = 0;
    setInterval(limitCount, 1000);
  }
  _COMMON_UNIX_TIME();
</script>
 
<style>
*{outline:0;-webkit-tap-highlight-color:transparent;-webkit-box-sizing:border-box;box-sizing:border-box}
.user_top_goods {
height: 5rem;
overflow: hidden; 
background:#ffbf6b;
position:relative
}
.user_top_goods dt {
float: left;
margin: 0.8rem 0.8rem 0;
text-align: center;
position: relative;
width: 3.7rem;
height: 3.7rem;
border-radius: 3.7rem;
padding:0.15rem; background:#FFFFFF
}
.user_top_goods dt img {
width: 3.7rem;
height:3.7rem;
border-radius: 3.7rem;
}
.guanzhu {
background-color: #ffbf6b;
}
.guanzhu {
color: #fff;
border: 0;
height: 2.5rem;
line-height: 2.5rem;
width: 100%;
-webkit-box-flex: 1;
display: block;
-webkit-user-select: none;
font-size: 0.9rem;
}
#cover2 {
    background-color: #333333;
    display: none;
    left: 0;
    opacity: 0.8;
    position: absolute;
    top: 0;
    z-index: 1000;
}
#share_weixin, #share_qq {
    right: 10px;
    top: 2px;
    width: 260px;
}
#share_weixin, #share_qq, #share_qr {
    display: none;
    position: fixed;
    z-index: 3000;
}
#share_weixin img, #share_qq img {
    height: 165px;
    width: 260px;
}
		.button_3 {
    background-color: #EEEEEE;
    border: 1px solid #666666;
    color: #666666;
    font-size: 16px;
    line-height: 20px;
    padding: 10px 0;
    text-align: center;
}
#share_weixin button, #share_qq button {
    margin-top: 25px;
    width: 100%;
}
</style>
 
</head>
<body>
<div id="page">
  <header id="header" >
    <div class="header_l"> <a class="ico_02" href="#menu"> 菜单栏 </a> </div>
    <h1> 生鲜商城 </h1>
    <div class="header_r"> <a class="ico_01" href="flow.php"> 购物车 </a> </div>
  </header>
</div>
 
<div id="focus" class="focus region">
  <div class="hd">
    <ul>
    </ul>
  </div>
  <div class="bd">
    
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"1";s:3:"num";s:1:"3";}554fcae493e564ee0dc75bdf2ebf94ca
  </div>
</div>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#focus",
	titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".bd ul", 
	effect:"leftLoop", 
	autoPlay:true,//自动播放
	autoPage:true //自动分页
});
</script>
<div id=content class="wrap">
  
  <header class=region>
    <div class=content>
      <div id=fake-search>
        <div class="fakeInput radius15">
          <button class="text" id="get_search_box" style="color:silver;">搜本站商品</button>
          <div class="search ico_03"> </div>
        </div>
      </div>
    </div>
  </header>
  
  <div class="region row row_category">
    <ul class="flex flex-f-row">
            <li class="flex_in"> <a href="cat_all.php" title="全部分类"> <div class="CarouselImg"><img src="data/item_pic/1443584338752549142.png" /></div> </a>
        <p> 全部分类 </p>
      </li>
                  <li class="flex_in"> <a href="article_cat.php?id=3" title="帮助中心"> <div class="CarouselImg"><img src="data/item_pic/1448075935109557161.png" /></div> </a>
        <p> 帮助中心 </p>
      </li>
                  <li class="flex_in"> <a href="user.php" title="个人中心"> <div class="CarouselImg"><img src="data/item_pic/1443584373727011961.png" /></div> </a>
        <p> 个人中心 </p>
      </li>
                  <li class="flex_in"> <a href="distribute.php" title="分销中心"> <div class="CarouselImg"><img src="data/item_pic/1443586488909704319.png" /></div> </a>
        <p> 分销中心 </p>
      </li>
            </ul><ul class="flex flex-f-row">
                  <li class="flex_in"> <a href="ectouch.php?act=contact" title="联系我们"> <div class="CarouselImg"><img src="data/item_pic/1443586300343329180.png" /></div> </a>
        <p> 联系我们 </p>
      </li>
                  <li class="flex_in"> <a href="group_buy.php" title="团购"> <div class="CarouselImg"><img src="data/item_pic/1443585779204202237.png" /></div> </a>
        <p> 团购 </p>
      </li>
                  <li class="flex_in"> <a href="exchange.php" title="积分商城"> <div class="CarouselImg"><img src="data/item_pic/1443586061863736586.png" /></div> </a>
        <p> 积分商城 </p>
      </li>
                  <li class="flex_in"> <a href="flow.php" title="购物车"> <div class="CarouselImg"><img src="data/item_pic/1443584408064043342.png" /></div> </a>
        <p> 购物车 </p>
      </li>
                </ul>
  </div>
  
  
<div class="blank2"></div>
<div class="mainCon">
  <dl class="wholeTime">
     <dt class="wholePoint surper clearfix">
        <span class="san fl"><i></i>特色市场</span>
     </dt>
     <dd>
     <div class="superBan clearfix">
       <div class="featurBan1 fl">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"2";}554fcae493e564ee0dc75bdf2ebf94ca
       </div>
       <div class="featurBan2 fl">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"3";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
       </div>
     </div>        
     </dd>
  </dl>
</div>
<div class="blank2"></div>
<div class="mainCon">
  <dl class="wholeTime">
    <dt class="wholePoint surper clearfix">
      <span class="san fl">
        <i>
        </i>
        热门市场
      </span>
    </dt>
    <dd>
      <div class="superBan brandWallBan clearfix">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"4";s:3:"num";s:1:"9";}554fcae493e564ee0dc75bdf2ebf94ca
      </div>
    </dd>
  </dl>
</div>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=best">
        <span class="titico"></span>精品推荐<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=66">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/66_thumb_G_1482189733890.jpg" alt="香港 4 日自由行" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>2499</span> </span> 
                        <br>香港 4 日自由行            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=55">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/55_thumb_G_1482186797625.jpg" alt="云南昆明 + 普洱 + 西双版纳 + 野象谷 6 日 5 晚跟团游" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>2880</span> </span> 
                        <br>云南昆明 + 普洱 + ...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=59">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/59_thumb_G_1482187824098.jpg" alt="华东 - 黄山 - 千岛湖 - 周庄 - 乌镇双飞 8 日游" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>2499</span> </span> 
                        <br>华东 - 黄山 - 千岛...            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=2">
        <span class="titico"></span>主题旅游<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=15">
            深度玩法        </A>
                <A href="category.php?id=17">
            亲子游        </A>
                <A href="category.php?id=18">
            户外活动        </A>
                <A href="category.php?id=20">
            爸妈游        </A>
                <A href="category.php?id=21">
            蜜月游        </A>
                <A href="category.php?id=22">
            当季推荐        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=1">
        <span class="titico"></span>周边旅游<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=24">
            周边目的地        </A>
                <A href="category.php?id=25">
            游玩天数        </A>
                <A href="category.php?id=26">
            热门景点        </A>
                <A href="category.php?id=28">
            交通方式        </A>
                <A href="category.php?id=29">
            特色主题        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=5">
        <span class="titico"></span>西部旅游<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=57">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/57_thumb_G_1482187331478.jpg" alt="兰州 + 敦煌 + 嘉峪关 + 张掖 + 西宁 + 青海湖 8 日自由行 " />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>4499</span> </span> 
                        <br>兰州 + 敦煌 + 嘉峪...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=56">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/56_thumb_G_1482186959595.jpg" alt="广西桂林 + 阳朔 + 漓江 5 日 4 晚跟团" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>1999</span> </span> 
                        <br>广西桂林 + 阳朔 + ...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=55">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/55_thumb_G_1482186797625.jpg" alt="云南昆明 + 普洱 + 西双版纳 + 野象谷 6 日 5 晚跟团游" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>2880</span> </span> 
                        <br>云南昆明 + 普洱 + ...            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=54">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/54_thumb_G_1482186466229.jpg" alt="拉萨 - 日喀则双飞 5 日游" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>3699</span> </span> 
                        <br>拉萨 - 日喀则双飞 5...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=53">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/53_thumb_G_1482186325350.jpg" alt="贵州西江千户苗寨 - 黄果树瀑布 - 凯里文化宫双飞 4 日游" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>2229</span> </span> 
                        <br>贵州西江千户苗寨 - 黄...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=52">
                <img src="http://xbly.cdycdlxxjs.cn/images/201612/thumb_img/52_thumb_G_1482185885925.jpg" alt="九寨沟 - 熊猫乐园 - 牟尼沟 3 日游" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>689</span> </span> 
                        <br>九寨沟 - 熊猫乐园 -...            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=30">
            云南        </A>
                <A href="category.php?id=31">
            西藏        </A>
                <A href="category.php?id=32">
            甘肃        </A>
                <A href="category.php?id=33">
            贵州        </A>
                <A href="category.php?id=34">
            四川        </A>
                <A href="category.php?id=35">
            广西        </A>
                <A href="category.php?id=88">
            新疆        </A>
                <A href="category.php?id=92">
            陕西        </A>
                    </div>
</section>
</div>
 
<div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="搜索" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
  <p class="link region"> <a href="./"> 返回首页 </a> <a href="flow.php"> 购物车 </a> <a href="user.php"> 会员中心 </a> <a href="ectouch.php?act=contact"> 联系我们 </a> </p>
  <p class="region"> 
     
    &copy; 2005-2016 生鲜商城 版权所有，并保留所有权利。 </p>
  <div class="favLink region"> <a href="http://www.ocailong.com"> powered by O菜龙工作室 </a> </div>
</div>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
    <div class="global-nav__operate-wrap">
        <span class="global-nav__yhd-logo"></span>
        <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
    </div>
</div>
<div id="toTop" class="toTop">
  <img alt="" src="themes/ocailong_com/images/scropTop.png">
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}
	var offset = $("#toTop").offset();		
	var bottom = $("#toTop").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#toTop").fadeIn(800);
			
			if(isIe6)
			{			
				$("#toTop").css("position","absolute")	
				$("#toTop").css("bottom",bottom)
			}
		}
		else
		{
			$("#toTop").fadeOut(500);
		}
		
	});
	
	$("#toTop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
})
</script>
<script type="text/javascript" src="themes/ocailong_com/js/zepto.min.js"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script> 
<nav id="menu" style="display:None">
  <ul>
        <li> <a href="category.php?id=2"> 主题旅游 </a>
      <ul>
                <li> <a href="category.php?id=15"> 深度玩法 </a>
          <ul>
                        <li> <a href="category.php?id=66"> 自然探索 </a> </li>
                        <li> <a href="category.php?id=67"> 深度摄影 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=17"> 亲子游 </a>
          <ul>
                        <li> <a href="category.php?id=70"> 上海迪士尼 </a> </li>
                        <li> <a href="category.php?id=71"> 游乐园 </a> </li>
                        <li> <a href="category.php?id=72"> 感受名校 </a> </li>
                        <li> <a href="category.php?id=73"> 海洋公园 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=18"> 户外活动 </a>
          <ul>
                        <li> <a href="category.php?id=74"> 高空项目 </a> </li>
                        <li> <a href="category.php?id=75"> 骑行 </a> </li>
                        <li> <a href="category.php?id=76"> 滑雪 </a> </li>
                        <li> <a href="category.php?id=77"> 潜水 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=20"> 爸妈游 </a>
          <ul>
                        <li> <a href="category.php?id=16"> 红色之旅 </a> </li>
                        <li> <a href="category.php?id=19"> 祈福拜佛 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=21"> 蜜月游 </a>
          <ul>
                        <li> <a href="category.php?id=68"> 浪漫海岛 </a> </li>
                        <li> <a href="category.php?id=69"> 购物血拼 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=22"> 当季推荐 </a>
          <ul>
                        <li> <a href="category.php?id=64"> 徒步 </a> </li>
                        <li> <a href="category.php?id=65"> 体育赛事 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=1"> 周边旅游 </a>
      <ul>
                <li> <a href="category.php?id=24"> 周边目的地 </a>
          <ul>
                        <li> <a href="category.php?id=79"> 成都 </a> </li>
                        <li> <a href="category.php?id=80"> 雅安 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=25"> 游玩天数 </a>
          <ul>
                        <li> <a href="category.php?id=83"> 一天游 </a> </li>
                        <li> <a href="category.php?id=84"> 两天游 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=26"> 热门景点 </a>
          <ul>
                        <li> <a href="category.php?id=27"> 九寨沟 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=28"> 交通方式 </a>
          <ul>
                        <li> <a href="category.php?id=23"> 火车游 </a> </li>
                        <li> <a href="category.php?id=78"> 巴士游 </a> </li>
                        <li> <a href="category.php?id=85"> 飞机游 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=29"> 特色主题 </a>
          <ul>
                        <li> <a href="category.php?id=81"> 看大熊猫 </a> </li>
                        <li> <a href="category.php?id=82"> 温泉 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=5"> 西部旅游 </a>
      <ul>
                <li> <a href="category.php?id=30"> 云南 </a>
          <ul>
                        <li> <a href="category.php?id=90"> 西双版纳 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=31"> 西藏 </a>
          <ul>
                        <li> <a href="category.php?id=93"> 布达拉宫 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=32"> 甘肃 </a>
          <ul>
                        <li> <a href="category.php?id=94"> 莫高窟 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=33"> 贵州 </a>
          <ul>
                        <li> <a href="category.php?id=87"> 黄果树瀑布 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=34"> 四川 </a>
          <ul>
                        <li> <a href="category.php?id=91"> 九寨沟 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=35"> 广西 </a>
          <ul>
                        <li> <a href="category.php?id=89"> 桂林 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=88"> 新疆 </a>
          <ul>
                        <li> <a href="category.php?id=95"> 天山 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=92"> 陕西 </a>
          <ul>
                        <li> <a href="category.php?id=86"> 兵马俑 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=11"> 国内其他 </a>
      <ul>
                <li> <a href="category.php?id=41"> 海南 </a>
          <ul>
                        <li> <a href="category.php?id=96"> 三亚 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=42"> 河南 </a>
          <ul>
                        <li> <a href="category.php?id=99"> 少林寺 </a> </li>
                        <li> <a href="category.php?id=100"> 洛阳 </a> </li>
                        <li> <a href="category.php?id=101"> 龙门石窟 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=43"> 华东 </a>
          <ul>
                        <li> <a href="category.php?id=102"> 周庄 </a> </li>
                        <li> <a href="category.php?id=103"> 西湖 </a> </li>
                        <li> <a href="category.php?id=104"> 普陀山 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=44"> 东北 </a>
          <ul>
                        <li> <a href="category.php?id=105"> 金石滩 </a> </li>
                        <li> <a href="category.php?id=106"> 五大连地 </a> </li>
                        <li> <a href="category.php?id=107"> 长白山 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=97"> 湖南 </a>
          <ul>
                        <li> <a href="category.php?id=98"> 天门山 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=9"> 香港澳门 </a>
      <ul>
                <li> <a href="category.php?id=36"> 热门景点 </a>
          <ul>
                        <li> <a href="category.php?id=109"> 澳门大三巴牌坊 </a> </li>
                        <li> <a href="category.php?id=110"> 香港海洋公园 </a> </li>
                        <li> <a href="category.php?id=112"> 香港迪士尼乐园 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=39"> 游玩方式 </a>
          <ul>
                        <li> <a href="category.php?id=122"> 跟团游 </a> </li>
                        <li> <a href="category.php?id=123"> 半自助 </a> </li>
                        <li> <a href="category.php?id=124"> 自由行 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=40"> 热门目的地 </a>
          <ul>
                        <li> <a href="category.php?id=125"> 香港一地 </a> </li>
                        <li> <a href="category.php?id=128"> 港澳连游 </a> </li>
                        <li> <a href="category.php?id=129"> 澳门一地 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=12"> 台湾地区 </a>
      <ul>
                <li> <a href="category.php?id=45"> 热门目的地 </a>
          <ul>
                        <li> <a href="category.php?id=130"> 台北 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=48"> 热门景点 </a>
          <ul>
                        <li> <a href="category.php?id=131"> 台北故宫 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=49"> 热门玩法 </a>
          <ul>
                        <li> <a href="category.php?id=132"> 台北+高雄+垦丁 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=6"> 其他地区 </a>
      <ul>
              </ul>
    </li>
      </ul>
</nav>
<div id="main-search" class="main-search">
<div class="hd"> <span class="ico_08 close"> 关闭 </span> </div>
<div class="bd">
  <div class="search_box">
    <form action="search.php" method="post" id="searchForm" name="searchForm">
      <div class="content">
        <input class="text" type="search" name="keywords" id="keywordBox" autofocus />
        <button class="ico_07" type="submit" value="搜 索" onclick="return check('keywordBox')"></button>
      </div>
    </form>
  </div>
</div>
</div>
<script type="text/javascript">
window.onload = function(){
  $('#menu').css('display','');
}
$(function() {
	$('nav#menu').mmenu();
	$('#get_search_box').click(function(){
		$(".mm-page").children('div').hide();
		$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
		//$('#keywordBox').focus();
	})
	$("#main-search .close").click(function(){
		$(".mm-page").children('div').show();
		$("#main-search").hide();
	})
});
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: false,
    appId: '',
    timestamp: 1482303255,
    nonceStr: 'PHqwvMd7uxmjTZXO',
    signature: 'ac49906b2315f1518c2c3c3421cc1038abb85773',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage' 
    ]
  });
 wx.ready(function () {
	//模板之家监听“分享给朋友”
    wx.onMenuShareAppMessage({
      title: '',
      desc: '',
      link: '',
      imgUrl: '',
      trigger: function (res) {
		
				alert('糟糕，需要分销商登录才能获得提成哦！');
				
      },
      success: function (res) {
		      },
      cancel: function (res) {
        alert('很遗憾，您已取消分享');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
	//分享到朋友圈模板之家
    wx.onMenuShareTimeline({
      title: '',
      link: '',
      imgUrl: '',
      trigger: function (res) {
			
        			alert('糟糕，需要分销商登录才能获得提成哦！');
		      },
      success: function (res) {
       	      },
      cancel: function (res) {
         alert('很遗憾，您已取消分享');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
});
</script>
</body>
</html>