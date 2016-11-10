<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-xs-12 col-tb-8 col-tb-offset-2 showbody notfound">

        <div class="error-page">
            <img src="<?php $this->options->themeUrl('src/img/profile-first-repo.png');?>" class="img-responsive"></img>
            <h2 class="post-title">404 - <?php _e('页面走丢啦'); ?></h2>
            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
            <form method="post">
                <p><input type="text" class="form-control" name="s" class="text" autofocus placeholder="搜索 <?php $this->options->siteUrl(); ?>"/></p>
                <p><button type="submit" class="submit btn"><?php _e('搜索'); ?></button></p>
            </form>
        </div>
      </div><!-- end #content-->
      <div style="height:100%;margin-bottom:-80px"></div>
	<?php $this->need('footer.php'); ?>
