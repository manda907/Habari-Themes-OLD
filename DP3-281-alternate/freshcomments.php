<!-- To customize this template, copy it to your currently active theme directory and edit it -->
<div id="recentcomments">
	<h2>Recent Comments</h2>
	<ul>
<?php foreach ($freshcomments as $post): ?>
		<li>
			<a href="<?php echo $post['post']->permalink; ?>" rel="bookmark" class="comment-entry-title"><?php echo $post['post']->title; ?></a>
			<a href="<?php echo $post['post']->permalink; ?>#comments" class="comment-count" title="<?php printf(_n('%1$d comment', '%1$d comments', $post['post']->comments->approved->comments->count), $post['post']->comments->approved->comments->count); ?>"><?php echo $post['post']->comments->approved->comments->count; ?></a>
			<ul class="comment-authors">
<?php foreach ($post['comments'] as $comment): ?>
				<li><a style="color:#0a9ee2;" href="<?php echo $comment['comment']->post->permalink; ?>#comment-<?php echo $comment['comment']->id; ?>" title="<?php printf(_t('Posted at %1$s'), date('g:m a \o\n F jS, Y', strtotime($comment['comment']->date))); ?>">&rarr; <?php echo $comment['comment']->name; ?></a></li>
<?php endforeach; ?>
			</ul>
		</li>
<?php endforeach; ?>
	</ul>
</div>