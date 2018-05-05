<?php
/**
 * Register meta box(es).
 */
function wpdocs_register_meta_boxes() {
    add_meta_box('client-position', __( 'Client position', 'understrap' ), 'position_field', 'Comments');
}
	add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes' );

/**
 * Meta box display callback.
 * @param WP_Post $post Current post object.
 */

	function position_field( $post ) {
		$position_value= get_post_meta($post->ID, 'position');
		?>
		<label for="position">Set client position</label>
		<input type="text" id="position" name="position" value="<?=$position_value[0]?>">
	<?php }

/**
 * Save meta box content.
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box($post_id) {
    global $post;
    $position_value = $_POST['position'];
    update_post_meta($post->ID, 'position', $position_value);
}

add_action('save_post', 'wpdocs_save_meta_box');















