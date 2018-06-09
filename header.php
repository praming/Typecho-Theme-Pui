<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html lang="zh-cn">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/common.css'); ?>"/>
		<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
         <?php $this->header('generator=&template=&wlw=&xmlrpc='); ?>
	</head>
		<!--[if lt IE 9]>
			<script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
			<script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
		<![endif]-->	
	<body>
		<div class="container">
			
			<div class="header">
				<div class="logo">
					<?php if ($this->options->logoUrl): ?>
		                <a href="<?php $this->options->siteUrl(); ?>">
		                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
		                </a>
		            <?php else: ?>
		                <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
		            <?php endif; ?>
				</div>
				<input id="nav-btn" type="checkbox">
				<label class="nav-btn" for="nav-btn"></label>
				<ul class="nav">
					<li><a class="nav-li" href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a><span></span></li>
					<!--调取分类-->	
					<?php $this->widget('Widget_Metas_Category_List')->to($recent); ?>
					<?php  while($recent->next()):?>
						<li><a class="nav-li" href="<?php $recent->permalink(); ?>" title="<?php $recent->name(); ?>"><?php $recent->name(); ?></a><span></span></li>
					<?php endwhile; ?>					
					<!--调取页面-->
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                	<li><a class="nav-li" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a><?php endwhile; ?><span></span></li>
				</ul>
			</div>
		</div>
		<hr class="two"/>
