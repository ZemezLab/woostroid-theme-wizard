<?php
/**
 * Verification Step template
 */
?>
<h2><?php esc_html_e( 'Install Theme', 'ws-theme-wizard' ); ?></h2>
<div class="desc"><?php
	esc_html_e( 'Please, enter your order ID to start installation:', 'ws-theme-wizard' );
?></div>
<div class="theme-wizard-form">
	<?php
		ws_theme_interface()->add_form_row( array(
			'label'       => esc_html__( 'Order ID:', 'ws-theme-wizard' ),
			'field'       => 'license_key',
			'placeholder' => esc_html__( 'Enter your order ID here...', 'ws-theme-wizard' ),
		) );
		ws_theme_interface()->button( array(
			'action' => 'start-install',
			'text'   => esc_html__( 'Start Install', 'ws-theme-wizard' ),
		) );
	?>
</div>