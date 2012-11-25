<div class="sb-module">
<h2>LATEST ENTRIES</h2>
<ul>
<?php
if ($recent_entries) {
foreach ($recent_entries as $entry) {
?>
<li><a href="<?php echo $entry->permalink; ?>" title="<?php echo strip_tags($entry->title); ?>" rel="bookmark"><?php echo $entry->title_out; ?></a></li>
<?php
}
} else {
?>
<li>There are currently no posts in this blog.</li>
<?php
}
?>
</ul>