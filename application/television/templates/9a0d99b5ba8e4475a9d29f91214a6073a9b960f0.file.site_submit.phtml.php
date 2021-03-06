<?php /* Smarty version Smarty-3.1.8, created on 2012-06-19 16:14:42
         compiled from "/home/www/inu5/application/television/views/scripts/etc/page/site_submit.phtml" */ ?>
<?php /*%%SmartyHeaderCode:17822425424fe034f26f8986-91721321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0d99b5ba8e4475a9d29f91214a6073a9b960f0' => 
    array (
      0 => '/home/www/inu5/application/television/views/scripts/etc/page/site_submit.phtml',
      1 => 1338191380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17822425424fe034f26f8986-91721321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe034f2704a48_21497181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe034f2704a48_21497181')) {function content_4fe034f2704a48_21497181($_smarty_tpl) {?><style>
#site_submit{
	margin-top:20px;
	padding:30px;
	line-height:2em;
	width:800px;
	margin:auto;
}
#site_submit h1{
	text-align:center;
}
#site_submit h2{
	margin:10px 0;
}
#site_submit textarea{
	width:100%;
	height:250px;
	font-size:12px;
}
#site_submit table{
	border-collapse: collapse;
}
#site_submit table td,
#site_submit table th{
	border:1px solid;
	padding:0px 5px;
	vertical-align: top;
}
#site_submit #crawl_site_form td{
	padding:5px;
}
</style>
<div id="site_submit">
	<h1>新站提交</h1>
	<h2>提交您的网站，inu5.com为你做什么?</h2>
	<p>inu5.com是一个专门搜集影视链接资源的网站，将您的网站提交到inu5.com以后。您的页面被用户浏览的同时，该影视的链接信息会被inu5.com抓取，并显示在inu5.com的相关页面中。用户在inu5.com上会点击你的链接跳转到你的网站。</p>
	<h2>如何将你的网站信息提交到inu5.com</h2>
	<p>复制如下代码,将代码放到您详细页面的结尾部份，即您要跟踪的详细页面的标记&lt;/body&gt; 之前。如果您的网站有动态内容，则可以使用常用的包含功能或模板。</p>
	<textarea>
<!-- 以下为自定义内容，可以删除 -->
<script type="text/javascript">
	var inu5_movie_name		= '';
	var inu5_movie_img_url		= '';
	var inu5_movie_starring		= '';
	var inu5_movie_director		= '';
	var inu5_movie_release_date	= '';
	var inu5_movie_category		= '';
	var inu5_movie_link		= '';
	var inu5_movie_link_type	= '';
	var inu5_movie_description	= '';
	var inu5_movie_area		= '';
	var inu5_movie_language		= '';
</script>
<!-- 以上为自定义内容，可以删除 -->
<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/television/crawl.js" type="text/javaScript"></script>
	</textarea>
	<p>
		<table>
			<tr>
				<th colspan="4">参数说明</th>
			</tr>
			<tr>
				<th>参数</th>
				<th>说明</th>
				<th>默认值</th>
				<th>重要信息</th>
			</tr>
			<tr>
				<td>inu5_movie_name</td>
				<td>片名</td>
				<td>页面meta标记中的title</td>
				<td></td>
			</tr>
			<tr>
				<td>inu5_movie_img_url</td>
				<td>图片url</td>
				<td>默认为页面中第一个图片url地址</td>
				<td></td>
			</tr>
			<tr>
				<td>inu5_movie_starring</td>
				<td>主要演员</td>
				<td>空</td>
				<td>如果多个主要演员请用符号 "&" 间隔</td>
			</tr>
			<tr>
				<td>inu5_movie_director</td>
				<td>导演</td>
				<td>空</td>
				<td>如果多个主要演员请用符号 "&" 间隔</td>
			</tr>
			<tr>
				<td>inu5_movie_release_date</td>
				<td>上映日期</td>
				<td>空</td>
				<td>日期格式为1970-01-01</td>
			</tr>
			<tr>
				<td>inu5_movie_category</td>
				<td>影片分类</td>
				<td>”01“</td>
				<td>分类对照信息如下：<br/>
 					“01”电影,	“01001”动作片,	“01002”喜剧片,	“01003”科幻片，	“01004”爱情片，	“01005”恐怖片，	“01006”战争片，	“01007”剧情片<br/>
 					“02”电视剧,	“02001”港台剧，	“02002”大陆剧，	“02003”日韩剧，	“02004”欧美剧，	“02005”海外剧<br/>
					“03”综艺，	“03001”综艺<br/>
 					“04”动漫，	“04001”动漫<br/>
 					“05”纪录片，	“05001"纪录片<br/>
 				</td>
 			</tr>
 			<tr>
				<td>inu5_movie_link</td>
				<td>影片链接URL</td>
				<td>当前页面url</td>
				<td>格式为http://yourdomain/path</td>
			</tr>
			<tr>
				<td>inu5_movie_link_type</td>
				<td>url类型</td>
				<td>ONLINE</td>
				<td>有两种类型:在线观看类型“ONLINE”和资源下载类型“DOWNLOAD”</td>
			</tr>
			<tr>
				<td>inu5_movie_description</td>
				<td>影片介绍</td>
				<td>页面meta标记中的description</td>
				<td></td>
			</tr>
			<tr>
				<td>inu5_movie_area</td>
				<td>影片地区</td>
				<td>空</td>
				<td></td>
			</tr>
			<tr>
				<td>inu5_movie_language</td>
				<td>影片语言</td>
				<td>空</td>
				<td></td>
			</tr>
		</table>
	</p>
	<h2>如果两个不同url，使用的是相同的页面，请设置inu5_movie_link参数。</h2>
	<p>例如你有两个URL，http://example.com/movie_name.html和http://www.example.com/movie_name.html,它们使用相同的页面。请将inu5_movie_link设置为其中一个。</p>
	<h2>留下你的联系方法，和网站域名。</h2>
	<p>为了在本功能更新、完善的时候，可以及时通知您。请提交如下表单：(网站域名必填，4种联系方式至少填写一个。)</p>
	<p>
		<form name="crawl_site_form" action="/television/crawl/join-crawl-site" method="POST">
			<table id="crawl_site_form">
				<tr>
					<td>网站名称:</td>
					<td><input type="text" name="website_name"></td>
				</tr>
				<tr>
					<td>网站域名:</td>
					<td><input type="text" name="website_url"></td>
				</tr>
				<tr>
					<td>QQ:</td>
					<td><input type="text" name="crawl_site_qq"></td>
				</tr>
				<tr>
					<td>MSN:</td>
					<td><input type="text" name="crawl_site_msn"></td>
				</tr>
				<tr>
					<td>E-mail:</td>
					<td><input type="text" name="crawl_site_email"></td>
				</tr>
				<tr>
					<td>电话:</td>
					<td><input type="text" name="crawl_site_phone"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="提交" /></td>
				</tr>
			</table>
		</form>
	</p>
	<h2>希望您可以为本站做好友情链接。谢谢!</h2>
	<p>&lt;a href="http://www.inu5.com" target="_blank" title="最新影视剧片导航"&gt;由我影视导航&lt;/a&gt;</p>
</div><?php }} ?>