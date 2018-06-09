<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<hr />
	<div class="text-footer">
		<span class="link-orange">&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.<br />
		Theme is Ice by <a href="http://www.praming.cn">Praming.</a><br /></span>		
		<span class="link-gray">
			<a href="<?php $this->options->feedUrl(); ?>">Entries (RSS)</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php $this->options->commentsFeedUrl(); ?>">Comments (RSS)</a>
		</span>
	</div>	
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/jquery.min.js"></script>
<?php $this->footer(); ?>
</body>
</html>