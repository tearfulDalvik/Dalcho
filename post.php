<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php  $this->need('header.php'); ?>

<div id="body" class="showbody">
    <div class="container">
        <div class="row post-showcase">
<div class="col-mb-12 col-12" id="main" role="main">
    <article class="post markdown-body" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>

        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>

		<hr/>
		<div class="post-meta-copyright">
			<p>最后编辑时间为: <?php $this->date('F jS , Y \\a\t h:i a' , $this->modified);?>
          <?php
            if($this->options->default_license == 'all'):
          ?>
            <br>本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 创作，保留所有权利</p>
          <?php elseif($this->options->default_license == "no"):?>
    				<br>本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 创作，采用 <a target="_blank" href="https://creativecommons.org/publicdomain/zero/1.0/" rel="external nofollow">不保留权利<br>可自由转载、引用。</a> </p>
        <?php else:?>
					<br>本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 创作，采用 <a target="_blank" href="https://creativecommons.org/licenses/<?php echo $this->options->default_license()?>/4.0/" rel="external nofollow">知识共享署名 4.0 <?php echo strtoupper($this->options->default_license)?></a> 国际许可协议进行许可<br>可自由转载、引用，但需署名作者且注明文章出处</p>
        <?php endif;?>
			<p itemprop="keywords" class="tags"><?php _e('标签 : <span class="tag tag-default"> '); ?><?php $this->tags('</span>,<span class="tag tag-default"> ', true, '无标签'); ?></span></p>
		</div>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li class="last pull-left"><?php $this->thePrev('%s','<a href="#">没有了</a>'); ?></li>
        <li class="next pull-right"><?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
