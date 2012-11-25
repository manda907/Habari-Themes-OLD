<?php $theme->display( 'header'); ?>
<div class="sleeve_main">

<section>
	<h2>
		<a class="rss" href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>">RSS</a>
		
	</h2>

<?php foreach ( $posts as $post ) { ?>
<article>
<ul id="postlist-<?php echo $post->id; ?>">

    <li id="prologue-<?php echo $post->id; ?>" class="post user_id_<?php echo $post->id; ?>">
		<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
	    <h4>

		    <span class="meta">
		        <?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?>
			    
			    <span class="actions">

			        
			        <?php if ( $loggedin ) { ?>
			            <a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a>
			        <?php } ?><?php $theme->comments_link($post); ?> 
					
					<?php if ( count( $post->tags ) > 0 ) { ?>
				 <span class="entry-tags"><?php echo $post->tags_out; ?></span>
			    </span>
			    <br />
			    
<?php } ?>
		    </span>
	    </h4>
	    <div class="postcontent" id="content-<?php echo $post->id; ?>">
	        <?php echo $post->content_out; ?>
	    </div> <!-- // postcontent -->
        <div class="bottom_of_entry">&nbsp;</div>
	   
     

    </li>
</ul>
</article>
<?php } ?>
<?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?>
</section> <!-- main -->
</div> <!-- sleeve -->

<?php $theme->display( 'footer'); ?>