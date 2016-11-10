<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <hr/>


    	<?php if($this->allow('comment')): ?>
          <button type="button" class="btn btn-outline-success" id="showcommit" onclick="this,style.display='none';" data-toggle="collapse"  data-target="#<?php $this->respondId(); ?>" aria-expanded="false" aria-controls="<?php $this->respondId(); ?>" style="margin-bottom: 15px;">新增评论</button>
    		<div id="<?php $this->respondId(); ?>" class="respond collapse"  class="collapse" aria-expanded="false" style="margin-bottom: 15px;">
        	<div class="cancel-comment-reply">
        	<?php $comments->cancelReply(); ?>
        </div>

    	<h3 id="response"  style="margin-top:0;"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
                <label for="author" class="required"><?php _e('称呼'); ?></label>
    			<input type="text" name="author" id="author" class="text form-control" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
    			<input type="email" name="mail" id="mail" class="text form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="text form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <label for="textarea" class="required"><?php _e('内容'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea form-control" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="submit btn"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('<div class="respond">评论已关闭</div>'); ?></h3>
    <?php endif; ?>

    <?php if ($comments->have()): ?>
    <div class="respond">
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>

    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  </div>
  <script>
  	var $btn = $('.comment-reply');
		$btn.on('click', function () {
		 	$('#<?php $this->respondId(); ?>').collapse('show');
		 	document.getElementById('showcommit').style.cssText="display:none;";
		})

  </script>

    <?php endif; ?>


</div>
