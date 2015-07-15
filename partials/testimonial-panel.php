<?php $backgroundimage = get_field('testimonial_panel_background_image'); ?>

<div class="testimonial-panel align-<?php the_field('testimonial_panel_text_alignment'); ?>" style="background-image: url(<?php echo $backgroundimage[sizes][hero]; ?>);">
	<div class="container">
		<div class="testimonial-panel__inner">
			<div class="testimonial-panel__content">
				<div class="testimonial-panel__quote"><?php the_field('testimonial_panel_quote'); ?></div>
				<div class="testimonial-panel__name"><?php the_field('testimonial_panel_name'); ?></div>
				<div class="testimonial-panel__title"><?php the_field('testimonial_panel_title'); ?></div>
			</div>
		</div>
	</div><!-- .container -->
</div><!-- .testimonial-panel -->
