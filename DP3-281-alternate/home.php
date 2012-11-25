<?php include 'header.php'; ?>

<?php foreach ( $posts as $post ) { ?>

<div class="item entry">
<div class="itemhead">

<h3><a href="<?php echo $post->permalink; ?>"title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h3>

<p class="metadata"><?php echo $post->pubdate->text_format('{d} {M}, {Y}'); ?> <?php if ( is_array( $post->tags ) ) :?><br/>tagged: <?php echo $post->tags_out;?>, <?php endif; ?>with <span class="commentslink"><a href="<?php echo $post->permalink; ?>#comments" title="Comments to this post"><?php echo $post->comments->approved->count; ?> <?php echo _n( 'Comment', 'Comments', $post->comments->approved->count ); ?></a></span> <?php if ( $loggedin ) { ?><a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a><?php } ?>
</p>
</div>

<div class="itemtext"><?php echo $post->content_out; ?></div>

</div>

<?php } ?>

<hr /><div class="navigation"><div class="left"><?php $theme->next_page_link('&laquo; Previous Entries'); ?></div><div class="right"><?php $theme->prev_page_link('Next Entries &raquo;'); ?></div><div class="clear"></div></div><hr />
</div>
<?php include 'sidebar.php'; ?>

</div>

<?php include 'footer.php'; ?>