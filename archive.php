<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-12 archive" id="main" role="main">
        <h1 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
        <article class="post responsible-results" itemscope itemtype="http://schema.org/BlogPosting">
      <h2 class="post-title post-title-main" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>

              <div class="post-content" itemprop="articleBody">
            <?php $this->excerpt(95); ?>
              </div>

      <div class="post-meta">
        <div style="float:left;">
          <?php $this->category(' '); ?> &middot; <script>
              var timeagoInstance = new timeago();
              var s = timeagoInstance.format('2016-10-20 14:05:23', 'zh_CN');
              document.write(s)</script>
        </div>
        <a style="float:right;margin-top:0px !important;" class="post-meta-a" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?></a>
      </div>
    </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post responsible-results">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo;', '&raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('footer.php'); ?>
