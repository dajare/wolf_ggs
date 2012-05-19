<!-- START INLINE NAV -->
<?php $post = $this->find('articles'); ?>
<?php $all_posts = $post->archive->archivesByMonth(); ?>

    <p>
    <?php if ($this->level() != 0) { echo $this->parent->link($this->parent->title()).' &#8592; '; } ?>
        <?php echo $this->title(); ?> 
        <?php if (count($this->children()) > 0 && $this->title() != 'Articles') {
            echo ' &#8594; ';
            foreach($this->children() as $inlineMenu):
            echo ''.$inlineMenu->link($inlineMenu->title, (in_array($inlineMenu->slug, explode('/', $this->url)) ? ' class="current"': null)).'&nbsp;| ';
            endforeach;
        };
    if ($this->children() > 0 && $this->slug() == 'articles') {
	echo '&#8594; ';
	foreach ($all_posts as $post_date):
	echo '<a href="'.$this->url.'/'.$post_date.URL_SUFFIX.'"> '.strftime('%B %Y', strtotime(strtr($post_date, '/', '-'))).'</a>&nbsp;| ';
	endforeach;
    }
    ?>
    </p>
<!-- END INLINE NAV -->