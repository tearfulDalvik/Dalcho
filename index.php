<?php
/**
 * 由 Dalvik 书写的一套简洁风主题
 *
 * @package Dalcho
 * @author Dalvik
 * @version 1.0
 * @link https://www.ifengge.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <?php if ($this->options->logoPic): ?>
   <style>
   .header{
     	background-image: url(<?$this->options->logoPic();?>) !important
   }
   </style>
 <?php endif; ?>
 <div class="header">
	<div class="welcome">
		<h1 class="title"><?php $this->options->title() ?></h1>
		<p><?php $this->options->description() ?></p>
	</div>
</div>
<div id="body">
	<div class="container">
		<div class="row post-showcase">
			<div class="col-mb-12 col-12" id="main" role="main">
			<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
					<h2 class="post-title post-title-main" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<div class="post-content" itemprop="articleBody">
    				<?php $this->excerpt(95); ?>
          </div>
					<div class="post-meta">
						<div style="float:left;">
							<?php $this->category(' '); ?> &middot; 
							<script>
									var timeagoInstance = new timeago();
									var s = timeagoInstance.format('<?php $this->date('Y-m-d h:i:s' , $this->modified); ?>');
									document.write(s)
							</script>
						</div>
						<a style="float:right;margin-top:0px !important;" class="post-meta-a" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?></a>
					</div>
        </article>
        <hr/>
			<?php endwhile; ?>
	    <?php $this->pageNav('&laquo;', '&raquo;'); ?>
		</div><!-- end #row-->
		<?php $this->need('footer.php'); ?>
