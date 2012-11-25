<?php include 'header.php'; ?>

<div class="item entry">
<div class="itemhead">

<div class="pagetitle">
<h2><?php echo $post->title; ?></h2>
</div>
						
<p class="metadata"><?php if ( $loggedin ) { ?><a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a><?php } ?></p>

</div>

<div class="itemtext">
<?php echo $post->content_out; ?>
</div>

</div>

<hr />

</div>
<?php include 'sidebar.php'; ?>

</div>

<?php include 'footer.php'; ?>