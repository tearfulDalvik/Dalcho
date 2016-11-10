<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="header-holder">
	<header id="header" class="navbar ng-scope ng-isolate-scope" ng-controller="NavbarCtrl" ui-scroll-back-fixed="" fixed="scrollBackFixedNavbar">
	  <div class="navbar-logo-container">
	    <a href="https://www.ifengge.cn/" target="_blank" class="logo icon-ic_dalvik_logo" aria-label="Dalvik Shen"></a>
	  </div>

	  <div class="navbar-title-container clearfix show">
	    <div class="titles">
	      <div class="subtitle ng-binding ng-scope"><a href="https://www.ifengge.me/"><?php $this->options->title() ?></a></div>
	      <div class="main-title ng-binding ng-scope"><?php $this->options->description() ?></div>
	    </div>
	  </div>

		</header>
	</div>
</div>

<div id="body" class="showbody">
    <div class="container">
        <div class="row post-showcase">
					<div class="col-mb-12 col-12" id="main" role="main">
					    <article class="post markdown-body" itemscope itemtype="http://schema.org/BlogPosting">
					        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
					        <div class="post-content" itemprop="articleBody">
					            <?php $this->content(); ?>
					        </div>
					    </article>
					    <?php $this->need('comments.php'); ?>
					</div><!-- end #main-->

					<?php $this->need('footer.php'); ?>
