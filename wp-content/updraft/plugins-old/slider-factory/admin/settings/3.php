<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;} // Exit if accessed directly ?>

<div class="p-3 sf-panel-setting">
	<div class="mb-3">
		<?php
		if ( isset( $slider['sf_3_width'] ) ) {
			$sf_3_width = $slider['sf_3_width'];
		} else {
			$sf_3_width = '100%';
		}
		?>
		<h5 for="sf-1-width" class="form-label sf-title"><?php esc_html_e( 'Width', 'slider-factory' ); ?></h5>
		<input type="text" class="form-control w-50" id="sf_3_width" name="sf_3_width" value="<?php echo esc_attr( $sf_3_width ); ?>" aria-describedby="sf-1-width-help">
		<div id="sf-1-width-help" class="form-text sf-tooltip"><?php esc_html_e( 'Define the slider width. You can use any unit you like: percent 0% to 100% OR pixels 200px/300px/500px etc.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3 col-md-6">
		<?php
		if ( isset( $slider['sf_3_height'] ) ) {
			$sf_3_height = $slider['sf_3_height'];
		} else {
			$sf_3_height = '500';
		}
		?>
		<h5 for="sf_3_height" class="form-label sf-title"><?php esc_html_e( 'Height', 'slider-factory' ); ?></h5>
		<input type="range" class="form-range" id="sf_3_height" min="100" max="1080" step="5" value="<?php echo esc_attr( $sf_3_height ); ?>" oninput="WpfrankSFprintRange(this.id, this.value);">
		<button class="btn btn-sm btn-secondary pl-2" id="sf_3_height-value"><?php echo esc_html( $sf_3_height ); ?></button> <?php esc_html_e( 'pixels', 'slider-factory' ); ?>
		<div id="sf_3_height-help" class="form-text sf-tooltip"><?php esc_html_e( 'Define the slider height.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3">
		<h5 for="sf_3_design_preset-1" class="form-label sf-title sf-title-disabled"><?php esc_html_e( 'Design Preset', 'slider-factory' ); ?> <sup><a class="badge rounded-pill bg-info  sf-buypro-link" href="https://wpfrank.com/wordpress-plugins/slider-factory-pro/" target="_blank"><span class="sf-pro-tag"></span></a></sup></h5>
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
			<input type="radio" class="btn-check" id="sf_3_design_preset-1" name="sf_3_design_preset" value="1" disabled>
			<label class="btn btn-outline-secondary" for="sf_3_design_preset-1"><?php esc_html_e( 'One', 'slider-factory' ); ?></label>
			
			<input type="radio" class="btn-check" id="sf_3_design_preset-2" name="sf_3_design_preset" value="2" disabled>
			<label class="btn btn-outline-secondary" for="sf_3_design_preset-2"><?php esc_html_e( 'Two', 'slider-factory' ); ?></label>
			
			<input type="radio" class="btn-check" id="sf_3_design_preset-3" name="sf_3_design_preset" value="3" disabled>
			<label class="btn btn-outline-secondary" for="sf_3_design_preset-3"><?php esc_html_e( 'Three', 'slider-factory' ); ?></label>
			
			<input type="radio" class="btn-check" id="sf_3_design_preset-4" name="sf_3_design_preset" value="4" checked disabled>
			<label class="btn btn-outline-secondary" for="sf_3_design_preset-4"><?php esc_html_e( 'Four', 'slider-factory' ); ?></label>
			
			<input type="radio" class="btn-check" id="sf_3_design_preset-5" name="sf_3_design_preset" value="5" disabled>
			<label class="btn btn-outline-secondary" for="sf_3_design_preset-5"><?php esc_html_e( 'Five', 'slider-factory' ); ?></label>
			
			<input type="radio" class="btn-check" id="sf_3_design_preset-6" name="sf_3_design_preset" value="6" disabled>
			<label class="btn btn-outline-secondary" for="sf_3_design_preset-6"><?php esc_html_e( 'Six', 'slider-factory' ); ?></label>
		</div>
		<div id="sf_3_design_preset-help" class="form-text sf-tooltip sf-tooltip-disabled"><?php esc_html_e( 'Select a predefined design for the slider.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3">
		<?php
		if ( isset( $slider['sf_3_auto_play'] ) ) {
			$sf_3_auto_play = $slider['sf_3_auto_play'];
		} else {
			$sf_3_auto_play = 'true';
		}
		?>
		<h5 for="sf_3_auto_play" class="form-label sf-title"><?php esc_html_e( 'Auto Play', 'slider-factory' ); ?></h5>
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
			<input type="radio" class="btn-check" id="sf_3_auto_play-1" name="sf_3_auto_play" value="true" <?php checked( $sf_3_auto_play, 'true' ); ?>>
			<label class="btn btn-outline-secondary" for="sf_3_auto_play-1"><?php esc_html_e( 'ON', 'slider-factory' ); ?></label>

			<input type="radio" class="btn-check" id="sf_3_auto_play-2" name="sf_3_auto_play" value="false" <?php checked( $sf_3_auto_play, 'false' ); ?>>
			<label class="btn btn-outline-secondary" for="sf_3_auto_play-2"><?php esc_html_e( 'OFF', 'slider-factory' ); ?></label>
		</div>
		<div id="sf_3_auto_play-help" class="form-text sf-tooltip"><?php esc_html_e( 'Enable or disable automatic slide show.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3 col-md-6">
		<h5 for="sf_3_auto_play_speed" class="form-label sf-title sf-title-disabled"><?php esc_html_e( 'Auto Play Speed', 'slider-factory' ); ?> <sup><a class="badge rounded-pill bg-info  sf-buypro-link" href="https://wpfrank.com/wordpress-plugins/slider-factory-pro/" target="_blank"><span class="sf-pro-tag"></span></a></sup></h5>
		<input type="range" class="form-range" id="sf_3_auto_play_speed-1" min="100" max="10000" step="100" value="3500" oninput="SFprintRange(this.id, this.value);" disabled>
		<button class="btn btn-sm btn-secondary pl-2" id="sf_3_auto_play_speed-1-value " disabled>3500</button> <?php esc_html_e( 'milliseconds', 'slider-factory' ); ?>
		<div id="sf_3_auto_play_speed-help" class="form-text sf-tooltip sf-tooltip-disabled"><?php esc_html_e( 'Set the automatically slide show speed.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3 col-md-6">
		<h5 for="sf_3_transition_speed" class="form-label sf-title sf-title-disabled"><?php esc_html_e( 'Transition Speed', 'slider-factory' ); ?> <sup><a class="badge rounded-pill bg-info  sf-buypro-link" href="https://wpfrank.com/wordpress-plugins/slider-factory-pro/" target="_blank"><span class="sf-pro-tag"></span></a></sup></h5>
		<input type="range" class="form-range" id="sf_3_transition_speed-1" min="100" max="10000" step="100" value="2500" oninput="SFprintRange(this.id, this.value);" disabled>
		<button class="btn btn-sm btn-secondary pl-2" id="sf_3_transition_speed-1-value" disabled>2500</button> <?php esc_html_e( 'milliseconds', 'slider-factory' ); ?>
		<div id="sf_3_transition_speed-help" class="form-text sf-tooltip sf-tooltip-disabled"><?php esc_html_e( 'Set the slide image changing effect speed.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3 col-md-6">
		<h5 for="sf_3_slide_gap" class="form-label sf-title sf-title-disabled"><?php esc_html_e( 'Gap Between Slides', 'slider-factory' ); ?> <sup><a class="badge rounded-pill bg-info  sf-buypro-link" href="https://wpfrank.com/wordpress-plugins/slider-factory-pro/" target="_blank"><span class="sf-pro-tag"></span></a></sup></h5>
		<input type="range" class="form-range" id="sf_3_slide_gap-1" min="0" max="100" step="1" value="5" oninput="SFprintRange(this.id, this.value);"disabled>
		<button class="btn btn-sm btn-secondary pl-2" id="sf_3_slide_gap-1-value" disabled>5</button> <?php esc_html_e( 'pixels', 'slider-factory' ); ?>
		<div id="sf_3_slide_gap-help" class="form-text sf-tooltip sf-tooltip-disabled"><?php esc_html_e( 'Set the space between image slides.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3">
		<h5 for="sf_3_navigation_arrow-1" class="form-label sf-title sf-title-disabled"><?php esc_html_e( 'Slider Navigation Arrow', 'slider-factory' ); ?> <sup><a class="badge rounded-pill bg-info  sf-buypro-link" href="https://wpfrank.com/wordpress-plugins/slider-factory-pro/" target="_blank"><span class="sf-pro-tag"></span></a></sup></h5>
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
			<input type="radio" class="btn-check" id="sf_3_navigation_arrow-1" name="sf_3_navigation_arrow" value="true" autocomplete="off" checked disabled>
			<label class="btn btn-outline-secondary" for="sf_3_navigation_arrow-1"><?php esc_html_e( 'ON', 'slider-factory' ); ?></label>

			<input type="radio" class="btn-check" id="sf_3_navigation_arrow-2" name="sf_3_navigation_arrow" value="false" autocomplete="off" disabled>
			<label class="btn btn-outline-secondary" for="sf_3_navigation_arrow-2"><?php esc_html_e( 'OFF', 'slider-factory' ); ?></label>
		</div>
		<div id="sf_3_navigation_arrow-help" class="form-text sf-tooltip sf-tooltip-disabled"><?php esc_html_e( 'Hide or display next and previous slide navigation arrow button over the slides.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3">
		<?php
		if ( isset( $slider['sf_3_sorting'] ) ) {
			$sf_3_sorting = $slider['sf_3_sorting'];
		} else {
			$sf_3_sorting = 0;
		}
		?>
		<h5 for="sf_3_sorting-1" class="form-label sf-title"><?php esc_html_e( 'Slide Order By', 'slider-factory' ); ?></h5>
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
			<input type="radio" class="btn-check" id="sf_3_sorting-0" name="sf_3_sorting" value="0" <?php checked( $sf_3_sorting, 0 ); ?>>
			<label class="btn btn-outline-secondary" for="sf_3_sorting-0"><?php esc_html_e( 'None', 'slider-factory' ); ?></label>
			
			<input type="radio" class="btn-check" id="sf_3_sorting-1" name="sf_3_sorting" value="1" <?php checked( $sf_3_sorting, 1 ); ?>>
			<label class="btn btn-outline-secondary" for="sf_3_sorting-1"><?php esc_html_e( 'Slide ID Ascending', 'slider-factory' ); ?></label>

			<input type="radio" class="btn-check" id="sf_3_sorting-2" name="sf_3_sorting" value="2" <?php checked( $sf_3_sorting, 2 ); ?>>
			<label class="btn btn-outline-secondary" for="sf_3_sorting-2"><?php esc_html_e( 'Slide ID Descending', 'slider-factory' ); ?></label>
			
			<input type="radio" class="btn-check" id="sf_3_sorting-3" name="sf_3_sorting" value="3" <?php checked( $sf_3_sorting, 3 ); ?> disabled>
			<label class="btn btn-outline-secondary sf-tooltip-disabled" for="sf_3_sorting-3"><?php esc_html_e( 'Slide ID Shuffle', 'slider-factory' ); ?></label>
		</div>
		<div id="sf_3_sorting-help" class="form-text sf-tooltip"><?php esc_html_e( 'Set slide loading order in slide show.', 'slider-factory' ); ?><br><strong><?php esc_html_e( 'Note', 'slider-factory' ); ?>:</strong> <?php esc_html_e( 'Select [None] to leave the order as it was at time of creation.', 'slider-factory' ); ?></div>
	</div>
	
	<div class="mb-3">
		<h5 for="sf_3_custom_css" class="form-label sf-title sf-title-disabled"><?php esc_html_e( 'Custom CSS', 'slider-factory' ); ?> <sup><a class="badge rounded-pill bg-info  sf-buypro-link" href="https://wpfrank.com/wordpress-plugins/slider-factory-pro/" target="_blank"><span class="sf-pro-tag"></span></a></sup></h5>
		<textarea type="text" class="form-control w-50" id="sf_3_custom_css" name="sf_3_custom_css" aria-describedby="sf-1-custom-css-help" disabled></textarea>
		<div id="sf_3_custom_css-help" class="form-text sf-tooltip sf-tooltip-disabled"><?php esc_html_e( 'Apply the custom design code to this slider.', 'slider-factory' ); ?></div>
	</div>
</div>
<script>
// save slider JS start
jQuery(document).ready(function () {
	jQuery('#sf-save-slider').click(function(){
		// show processing icon
		jQuery('button#sf-save-slider').addClass('d-none');
		jQuery('div#sf-slider-process').removeClass('d-none');
		
		//slider info
		var sf_slider_id = jQuery('#sf_slider_id').val();
		var sf_slider_layout = jQuery('#sf_slider_layout').val();
		var sf_slider_title = jQuery('#sf_slider_title').val();
		
		//slides
		var sf_slide_ids = jQuery('.sf_slide_id').serialize();
		var sf_slide_titles = jQuery('input:text.sf_slide_title').serialize();
		var sf_slide_descs = jQuery('.sf_slide_desc').serialize();

		//settings
		var sf_3_width = jQuery("#sf_3_width").val();
		var sf_3_height = jQuery("#sf_3_height").val();
		var sf_3_auto_play = jQuery("input[name='sf_3_auto_play']:checked").val();
		var sf_3_sorting = jQuery("input[name='sf_3_sorting']:checked").val();
		
		jQuery.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {
				'action': 'sf_save_slider', //this is the name of the AJAX method called in WordPress
				'nonce': "<?php echo esc_js( wp_create_nonce( 'save-slider' ) ); ?>",
				//slider info
				'sf_slider_id': sf_slider_id,
				'sf_slider_layout': sf_slider_layout,
				'sf_slider_title': sf_slider_title,
				
				//slides info
				'sf_slide_ids': sf_slide_ids,
				'sf_slide_titles': sf_slide_titles,
				'sf_slide_descs': sf_slide_descs,
				
				//slider settings
				'sf_3_width': sf_3_width,
				'sf_3_height': sf_3_height,
				'sf_3_auto_play': sf_3_auto_play,
				'sf_3_sorting': sf_3_sorting,
			}, 
			success: function (result) {
				//alert(result);
				jQuery(function() {
					// setTimeout() function will be fired after page is loaded
					// it will wait for 5 sec. and then will fire
					// $("#successMessage").hide() function
					setTimeout(function() {
						// hide processing icon and show button
						jQuery('button#sf-save-slider').removeClass('d-none');
						jQuery('div#sf-slider-process').addClass('d-none');
						// show shortcode
						jQuery("#sf-shortcode-content").removeClass('d-none').slideDown("slow");
					}, 1500);
				});
			},
			error: function () {
				//alert("error");
			}
		});
		
	});
});
// save slider JS end
</script>
