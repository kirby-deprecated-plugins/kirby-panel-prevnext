<?php
$page_obj = page($page->id());

if( $page_obj->siblings()->count() > 1 ) {
	if ( $page_obj->hasPrev() ) {
		$prev = $page_obj->prev();
	} else {
		$prev = $page_obj->siblings()->last();
	}

	if ( $page_obj->hasNext() ) {
		$next = $page_obj->next();
	} else {
		$next = $page_obj->siblings()->first();
	}
	?>

	<div class="plugin-prevnext">
		<a class="prev" href="<?php echo panel()->urls()->index() . '/pages/' . $prev->id() . '/edit'; ?>">
			<i class="fa fa-chevron-left" aria-hidden="true"></i>
			<?php echo $prev->title()->excerpt(50); ?>
		</a>

		<a class="next" href="<?php echo panel()->urls()->index() . '/pages/' . $next->id() . '/edit'; ?>">
			<?php echo $next->title()->excerpt(50); ?>
			<i class="fa fa-chevron-right" aria-hidden="true"></i>
		</a>
	</div>
<?php } else {
	?>
	<style>
	.field-name-prevnext {
		display: none;
	}
	</style>
	<?php
}
