<?php $theme->display ('header'); ?>

	<div id="content">

		<div class="post" id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
		<h2><?php _e('Page:'); ?> <a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
			<div class="entry">
			<?php echo $post->content_out; ?>


			</div>
		</div>
<?php if ( $loggedin ) { ?>
	<a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a>
	<?php } ?>

	</div>

<?php $theme->display ('sidebar'); ?>

<?php $theme->display ( 'footer' ); ?>
