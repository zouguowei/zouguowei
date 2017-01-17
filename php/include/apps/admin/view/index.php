<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$lang['cp_home']}</title>
<meta http-equiv="expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<link href="__ASSETS__/css/admincp.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="admin_header">
  <div id="admin_logo"><img src="__ASSETS__/images/topLogo.jpg" /></div>
  <div id="submenu-div">
    <ul>
      <li><a href="{url('logout')}">{$lang['signout']}</a></li>
      <li><a href="http://bbs.ecmoban.com" target="_blank">{$lang['help']}</a></li>
      <li><a href="{url('clearCache')}" target="mainFrame">{$lang['clear_cache']}</a></li>
      <li><a href="{url('demo')}" target="mainFrame">{$lang['preview']}</a></li>
      <li><a href="{url('modify')}" target="mainFrame">{$lang['profile']}</a></li>
      <li><a href="javascript:window.top.frames['mainFrame'].document.location.reload();">{$lang['refresh']}</a></li>
      <li style="border-left:none"><a href="{url('aboutus')}" target="mainFrame">{$lang['about']}</a></li>
    </ul>
  </div>
</div>
<div id="admin_menubar">
  <dl>
    <dt class="menu_title">全局设置</dt>
    <dd>
      <ul>
        <li><a href="{url('config/index')}" target="mainFrame">商店设置</a></li>
        <li><a href="{url('navigator/index')}" target="mainFrame">菜单管理</a></li>
        <li><a href="{url('category/index')}" target="mainFrame">分类图标</a></li>
        <li><a href="{url('brand/index')}" target="mainFrame">品牌管理</a></li>
        <li><a href="{url('payment/index')}" target="mainFrame">支付方式</a></li>
        <li><a href="{url('advert/index')}" target="mainFrame">广告管理</a></li>
        <li><a href="{url('favourable/index')}" target="mainFrame">优惠活动</a></li>
        <li><a href="{url('groupbuy/index')}" target="mainFrame">团购活动</a></li>
        <li><a href="{url('articlecat/index')}" target="mainFrame">文章分类</a></li>
        <li><a href="{url('authorization/index')}" target="mainFrame">授权管理</a></li>
        <li><a href="{url('template/index')}" target="mainFrame">模板设置</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
    <dt class="menu_title">微信通营销</dt>
    <dd>
      <ul>
      <li><a href="{url('wechat/index')}" target="mainFrame">我的公众号</a></li>
      <li><a href="{url('wechat/append')}" target="mainFrame">新增公众号</a></li>
      </ul>
    </dd>
  </dl>
</div>
<div id="admin_switchbar"><a href="javascript:toggleMenu();" style="position:fixed; top:50%;"><img src="__ASSETS__/images/arrow_left.gif" width="10" height="30" id="img" /></a></div>
<div id="admin_contont">
  <div id="x-content" style="height:100%;width:100%;">
    <div id="mainContainer" style="height:100%;float:left;width:100%;">
      <iframe src="{url('welcome')}" id="mainFrame" name="mainFrame" style="height:100%;visibility:inherit;width:100%;z-index:1;overflow:visible;" scrolling="yes" frameborder="no"></iframe>
    </div>
  </div>
</div>
<div id="admin_bottom" style="text-align:center; line-height:30px">Copyright &copy; <?php echo date('Y');?> 上海商创网络科技有限公司. All Rights Reserved.</div>
<div style="clear:both"></div>
<script src="__PUBLIC__/js/jquery.min.js" type="text/javascript"></script> 
<script type="text/javascript">
function toggleMenu(){
  imgArrow = $('#img');
  admin_menubar_width = 180;
  admin_menubar = $('#admin_menubar');

  if (admin_menubar.width() == admin_menubar_width){
    admin_menubar.width(0);
	$("#admin_switchbar").css('left', 0);
	$("#admin_contont").css('left', 10);
	imgArrow.attr('src', "__ASSETS__/images/arrow_right.gif");
  } else {
    admin_menubar.width(admin_menubar_width);
	$("#admin_switchbar").css('left', admin_menubar_width);
	$("#admin_contont").css('left', admin_menubar_width + 10);
	imgArrow.attr('src', "__ASSETS__/images/arrow_left.gif");
  }
}
</script>
</body>
</html>
