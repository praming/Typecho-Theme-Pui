<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container" style="padding:20px 20px 0px 20px;">
    <div class="page-line">
        <div class="text-title"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
        <div class="text-sub">由 &nbsp;&nbsp;<?php $this->author(); ?>&nbsp;&nbsp;撰写于&nbsp;&nbsp;<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>&nbsp;&nbsp;浏览:<?php get_post_view($this) ?>&nbsp;&nbsp;评论:<?php $this->commentsNum('%d'); ?></div>
        <div class="page-content box-shadow-medium"><?php $this->content(); ?></div>
    </div>
    <?php $this->need('comments.php'); ?>
	<?php $this->need('footer.php'); ?>
</div>

