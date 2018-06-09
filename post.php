<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container"  style="padding: 20px;">
    <div class="page-line">
        <div class="text-title"><span class="text-orange"><?php $this->title() ?></span></div>
        <div class="text-sub">
        	由 &nbsp;&nbsp;<?php $this->author(); ?>&nbsp;&nbsp;撰写于&nbsp;&nbsp;<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>&nbsp;&nbsp;浏览:<?php get_post_view($this) ?>&nbsp;&nbsp;评论:<?php $this->commentsNum('%d'); ?>&nbsp;&nbsp;<?php _e('Tags: '); ?><?php $this->tags(', ', true, 'none'); ?>
        </div>
		<div class="post-content">
			<?php $this->content(); ?>
		</div>       
   </div>
    <?php $this->need('comments.php'); ?>
	<?php $this->need('footer.php'); ?>
</div>