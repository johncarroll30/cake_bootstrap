
<?php if($page) : ?>
<h2><?php echo $page['Page']['title']; ?></h2>
	<?php echo $page['Page']['content']; ?>
<?php else : ?>
<h2>Page could not be found</h2>
<p>We couldn't find the page you were looking for, it may have been removed or deactivated</p>
<?php endif; ?>