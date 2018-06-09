<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container">
	<div class="row">
		<div class="page-main">
			<div class="page-main-text"><h3><?php $this->archiveTitle(array(
            'category'  =>  _t('分类<span class="text-orange"> %s </span>下的文章'),
            'search'    =>  _t('包含关键字<span class="text-orange">  %s </span>的文章'),
            'tag'       =>  _t('标签<span class="text-orange">  %s </span>下的文章'),
            'author'    =>  _t('<span class="text-orange"> %s </span>发布的文章')
        ), '', ''); ?></h3></div><hr />		
			<?php while($this->next()): ?>
				<div class="row box-shadow-hover-large">
					<div class="page-main-text">
						<div class="text-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
						<div class="text-sub">由 &nbsp;&nbsp;<?php $this->author(); ?>&nbsp;&nbsp;撰写于&nbsp;&nbsp;<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>&nbsp;&nbsp;浏览:<?php get_post_view($this) ?>&nbsp;&nbsp;评论:<?php $this->commentsNum('%d'); ?></div>
						<div class="index-content">
							<?php $this->excerpt(180, '[...]'); ?>
						</div>
					</div>
					<div class="page-main-img">
						<a class="page-main-img-avatar" href="<?php $this->permalink() ?>">
							<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
<?php else: ?>
<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
<?php else: ?>
<img src="<?php showThumbnail($this); ?>">
        <?php endif; ?>
        <?php endif; ?>
						</a>			 
					</div>
				</div>
				<hr class="two"/>
			<?php endwhile; ?>	
			<!--分页-->			
			
			<div class="page-nav">
				<?php $this->pageNav('<i class="icon">&#xe603;</i>', '<i class="icon">&#xe602;</i>',2,'...',array('wrapTag' => 'ul', 'wrapClass' => 'pagination','itemTag' => 'li','currentClass' => 'active',)); ?>
			</div>		 
		</div>
		<div class="page-sub">			
			<div class="row">
				<div class="page-sub-img">
					<img src="<?php $this->options->themeUrl('img/avatar.png'); ?>"/> 
				</div>
				<div class="page-sub-text">
					<span style="color: #FF5722;">praming.cn</span><br />守得云开见月明
				</div>				
			</div>
			<hr/>
			<div class="text-small column-1-3 column-divider text-center text-gray" style="line-height: 1.5;">
				<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
				<li>文章<br /><?php $stat->publishedPostsNum() ?></li><br />				
				<li>评论<br /><?php $stat->publishedCommentsNum() ?></li><br />	
				<li>分类<br /><?php $stat->categoriesNum() ?></li><br />			
				<li>标签<br /><?php $stat->publishedPostsNum() ?></li><br />
				<li>页面<br /><?php $stat->publishedPagesNum() ?></li><br />
				<li>浏览<br /><?php $stat->publishedPostsNum() ?></li><br />
			</div>
			<hr/>
			<?php $this->need('sidebar.php'); ?>
		</div>
	<?php $this->need('footer.php'); ?>	
	</div>
</div>