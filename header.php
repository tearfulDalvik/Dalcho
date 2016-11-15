<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

	<!-- 使用url函数转换相关路径 -->
	<?php if($this->options->favIcon):?><link rel="shortcut icon" href="<?php $this->options->favIcon(); ?>">
	<link rel="apple-touch-icon-precomposed" href="<?php $this->options->favIcon(); ?>"/><?php  endif; ?>
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('src/css/markdown.css');?>">
	<script src="https://static.ifengge.cn/js/timeago.js/dist/timeago.min.js"></script>
  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
	<script src="<?php $this->options->themeUrl('src/js/audiojs/audio.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('src/js/smooth-scroll.min.js'); ?>"></script>
	
	<?php if (!empty($this->options->ux) && in_array('smoothScroll', $this->options->ux)): ?>
	<script src="<?php $this->options->themeUrl('src/js/smooth-scroll.js'); ?>"></script>
	<?php endif; ?>
	
	<!--Highlight-->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/styles/default.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
	
	<script>
		audiojs.events.ready(function() {
			var as = audiojs.createAll();
		});
		console.log("\n %c Dalcho By Dalvik %c https://www.ifengge.cn/ \n\n","color: #fadfa3; background: #030307; padding:5px 0;","background: #fadfa3; padding:5px 0;");
	</script>

<?php if ($this->options->logoText): ?>
  <style>
  .icon-ic_dalvik_logo:before{
    	content: "<?$this->options->logoText();?>"
  }
  </style>
<?php endif; ?>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<?php if(!$this->is('index')):?>
<div id="header-holder">
	<header id="header" class="navbar ng-scope ng-isolate-scope" ng-controller="NavbarCtrl" ui-scroll-back-fixed="" fixed="scrollBackFixedNavbar">
	  <div class="navbar-logo-container">
	    <a href="<?php $this->options->logoUrl();?>" target="_blank" class="logo icon-ic_dalvik_logo" aria-label="Dalvik Shen"></a>
	  </div>

	  <div class="navbar-title-container clearfix show">
	    <div class="titles">
	      <div class="subtitle ng-binding ng-scope"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></div>
	      <div class="main-title ng-binding ng-scope"><?php $this->options->description() ?></div>
	    </div>
	  </div>

		</header>
	</div>
</div>
<?endif;?>
