<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<?php if (!empty($this->options->ux) && in_array('showRocket', $this->options->ux) && ($this->is('page') || $this->is('post'))): ?>
<a data-scroll id="rocket" href="#" title="返回顶部" class="show"><i></i></a>
<?php endif; ?>
<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
    <div class="pull-right" style="width:45%;text-align:right;"><?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?> | Theme Dalcho by <a href="https://www.ifengge.cn/">Dalvik</a><?php if ($this->options->linkAbout): ?> | <a href="<?php $this->options->linkAbout();?>">关于</a><?php endif; ?></div>
</footer><!-- end #footer -->
<div class="loading">
	<img src="<?php $this->options->themeUrl('src/img/puff.svg'); ?>" style="position: relative;top: 45%;"></img>
</div>

<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('src/js/pjax/pjax.js'); ?>"></script>
<script>
		hljs.initHighlightingOnLoad();
		<?php if (!empty($this->options->ux) && in_array('usePjax', $this->options->ux)): ?>
			new Pjax({
			  elements: "a", // default is "a[href], form[action]"
			  selectors: ["title", "body"]
			})
			$(document).on("click", $(".loading").fadeIn());
			$(document).on("pjax:complete", $(".loading").fadeOut());
		<?php endif; ?>
    smoothScroll.init();
</script>
</body>
</html>
