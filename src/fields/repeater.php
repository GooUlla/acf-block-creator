<?php if ( have_rows( '{name}' ) ) : ?>
	<?php while ( have_rows( '{name}' ) ) : the_row(); ?>

{subfields}

	<?php endwhile; ?>
<?php endif; ?>
