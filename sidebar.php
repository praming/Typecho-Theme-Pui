<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
 <div class="search bar">
        <form>
            <input type="text" name="s" placeholder="search...">
            <button type="submit"><i class="icon" style="font-size: 20px; color: #FFFFFF;">&#xe615;</i> </button>
        </form>                        
    </div>	
<div class="list-aeticle text-small" >
	<h3 class="heading-bullet heading-line margin-line"><span>Tags</span></h3>
	<div class="column-1-2">
		<ul>
			<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
			<?php if($tags->have()): ?>
				
			<ul class="tags-list">
				
				<?php while ($tags->next()): ?>
			    <li><a href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?>（<?php $tags->count(); ?>）</a></li>
				<?php endwhile; ?>
				<?php else: ?>
			    <li><?php _e('没有任何标签'); ?></li>
			<?php endif; ?>
		</ul>
	</div>	
</div>		
<div class="list-aeticle text-small" >
	<ul>
		<h3 class="heading-bullet heading-line margin-line"><span>最新文章</span></h3>
		<?php $this->widget('Widget_Contents_Post_Recent')->to($recents); ?>
		<?php while($recents->next()): ?>
		<li><a href="<?php $recents->permalink(); ?>"><?php $recents->title(15); ?></a></li>
		<?php endwhile; ?>
	</ul>
</div>
<div class="list-aeticle text-small" >
	<ul>
		<h3 class="heading-bullet heading-line margin-line"><span>最新评论</span></h3>
	    <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
	    <?php while($comments->next()): ?>
	        <li><span class="text-orange"><?php $comments->author(false); ?></span>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(15, '[...]'); ?></a></li>
	    <?php endwhile; ?>
	</ul>
</div>
<div class="list-aeticle text-small" >
	<ul>
		<h3 class="heading-bullet heading-line margin-line"><span>Links</span></h3>
	    <li><a href="http://www.gukong.com" target= _blank>郑州网站建设</a></li>
	    <li><a href="http://www.ruilongcn.com" target= _blank>卷烟机配件</a></li>
	</ul>
</div>