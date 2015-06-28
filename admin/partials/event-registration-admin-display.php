<?php
/**
 * Represents the view for the administration options page.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   wp-event-registration
 * @author    Tobias Fritz - www.e-colori.com
 * @license   GPL-2.0+
 * @link      http://www.e-colori.com
 * @copyright 2015 e-colori.com
 */

//set checkbox status
//var_dump($options);
$showbank_checked =    ( ( $options['showbank'] ) ? 'checked="checked"' : '' );
$askAddress_checked =  ( ( $options['askAddress'] ) ? 'checked="checked"' : '' );
$askPostcode_checked = ( ( $options['askPostcode'] ) ? 'checked="checked"' : '' );
$askCity_checked =     ( ( $options['askCity'] ) ? 'checked="checked"' : '' );
$askCountry_checked =  ( ( $options['askCountry'] ) ? 'checked="checked"' : '' );
$askPhone_checked =    ( ( $options['askPhone'] ) ? 'checked="checked"' : '' );
$askMessage_checked =  ( ( $options['askMessage'] ) ? 'checked="checked"' : '' );
$showCost_checked =    ( ( $options['showCost'] ) ? 'checked="checked"' : '' );
$checkTerms_checked =  ( ( $options['checkTerms'] ) ? 'checked="checked"' : '' );

?>
<div class="wrap metabox-holder">
<div class="column column-left">
	<h2><?php _e( 'Settings › \'The Events Calendar Extension: Registration\'', 'wpecr' ); ?></h2>
	<h3><?php echo esc_html( get_admin_page_title() ); ?></h3>

	<form action="<?php echo admin_url( 'admin-post.php' ) ?>" method="POST">
		<input type="hidden" name="action" value="save_options">
		<?php wp_referer_field(1); ?>

		<h3 class="title"><?php _e( 'Email sender options', 'wpecr' ) ?></h3>
		<table class="form-table">
			<tbody>
			<tr>
				<th scope="row">
					<label for="name"><?php _e( '"From" Name', 'wpecr' ) ?></label>
				</th>
				<td>
					<input type="text" name="options[name]" id="name" class="regular-text" value="<?php echo $options['name']; ?>" >
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="email"><?php _e( '"From" Email Address', 'wpecr' ) ?></label>
				</th>
				<td>
					<input type="text" name="options[email]"  id="email" class="regular-text" value="<?php echo $options['email'] ?>" >
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="terms"><?php _e( 'Terms URL', 'wpecr' ) ?></label>
				</th>
				<td>
					<input type="text" name="options[terms]" id="terms" class="regular-text" value="<?php echo $options['terms'] ?>" >
					<span class="description"><?php _e( 'Create a page with your terms and conditions and instert the URL here.', 'wpecr' ) ?></span>
				</td>
			</tr>	
			<tr>
				<th scope="row">
					<?php _e( 'Email Footer Text', 'wpecr' ) ?>
				</th>
				<td>
					<label for="email_txt"><?php _e( 'Enter here the text and your contact details you want to show at the end of the registration email', 'wpecr' ) ?></label>
					<?php wp_editor( stripslashes( $options['email_txt'] ), 'email_txt', array( 'textarea_name' => 'options[email_txt]', 'media_buttons' => true, 'tinymce' => true)); ?>
				</td>
			</tr>	
			</tbody>
		</table>

		<h3 class="title"><?php _e( 'Registration fields', 'wpecr' ) ?></h3>
		<table class="form-table">
			<tbody>
			<tr>
				<th scope="row">
					<?php _e( 'Ask fields to users', 'wpecr' ) ?>
				</th>
				<td>
				<fieldset>
					<label for="askAddress">
						<input type="checkbox" name="options[askAddress]" id="askAddress" value="1" <?php echo $askAddress_checked ?> >
						<?php _e( 'Ask for Address', 'wpecr' ) ?>
					</label>
					<br>
					<label for="askPostcode">
						<input type="checkbox" name="options[askPostcode]" id="askPostcode" value="1" <?php echo $askPostcode_checked ?> >
						<?php _e( 'Ask for Postcode', 'wpecr' ) ?>
					</label>
					<br>
					<label for="askCity">
						<input type="checkbox" name="options[askCity]" id="askCity" value="1" <?php echo $askCity_checked ?> >
						<?php _e( 'Ask for City', 'wpecr' ) ?>
					</label>
					<br>
					<label for="askCountry">
						<input type="checkbox" name="options[askCountry]" id="askCountry" value="1" <?php echo $askCountry_checked ?> >
						<?php _e( 'Ask for Country', 'wpecr' ) ?>
					</label>
					<br>
					<label for="askPhone">
						<input type="checkbox" name="options[askPhone]" id="askPhone" value="1" <?php echo $askPhone_checked ?> >
						<?php _e( 'Ask for Phone', 'wpecr' ) ?>
					</label>
					<br>
					<label for="askMessage">
						<input type="checkbox" name="options[askMessage]" id="askMessage" value="1" <?php echo $askMessage_checked ?> >
						<?php _e( 'Ask for Message', 'wpecr' ) ?>
					</label>
					<br>
					<label for="showCost">
						<input type="checkbox" name="options[showCost]" id="showCost" value="1" <?php echo $showCost_checked ?> >
						<?php _e( 'Show Cost', 'wpecr' ) ?>
					</label>
					<br>
					<label for="checkTerms">
						<input type="checkbox" name="options[checkTerms]" id="checkTerms" value="1" <?php echo $checkTerms_checked ?> >
						<?php _e( 'Check Terms and Conditions', 'wpecr' ) ?>
					</label>
				</fieldset>
				</td>				
			</tr>
			</tbody>
		</table>

		<h3 class="title"><?php _e( 'Bank account details', 'wpecr' ) ?></h3>
		<table class="form-table">
			<tbody>
			<tr>
				<th scope="row">
					<label for="currency"><?php _e( 'Currency', 'wpecr' ) ?></label>
				</th>
				<td>
					<input type="text" name="options[currency]" id="currency" class="regular-text" value="<?php echo $options['currency'] ?>" >
				</td>
			</tr>
			<tr>
				<th scope="row">
					<?php _e( 'Visibility bank details', 'wpecr' ) ?>
				</th>
				<td>
				<fieldset>
					<label for="showbank">
					<input type="checkbox" name="options[showbank]" id="showbank" value="1" <?php echo $showbank_checked ?> >
					<?php _e( 'Show bank details in email', 'wpecr' ) ?>
					</label>
				</fieldset>
				</td>				
			</tr>
			<tr>
				<th scope="row">
					<?php _e( 'Payment Text', 'wpecr' ) ?>
				</th>
				<td>
					<label for="bank_txt"><?php _e( 'Enter here the text to explain how to pay before showing the bank details', 'wpecr' ) ?></label>
					<?php wp_editor( stripslashes( $options['bank_txt'] ), 'bank_txt', array( 'textarea_name' => 'options[bank_txt]', 'media_buttons' => false, 'teeny' => true, 'textarea_rows' => 4 )); ?>		
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="bank"><?php _e( 'Bank name', 'wpecr' ) ?></label>
				</th>
				<td>
					<input type="text" name="options[bank]" id="bank" class="regular-text" value="<?php echo $options['bank'] ?>" >
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="remittee"><?php _e( 'Remittee', 'wpecr' ) ?></label>
				</th>
				<td>
					<input type="text" name="options[remittee]" id="remittee" class="regular-text" value="<?php echo $options['remittee'] ?>" >
				</td>
			</tr>	
			<tr>
				<th scope="row">
					<label for="iban"><?php _e( 'IBAN', 'wpecr' ) ?></label>
				</th>
				<td>
					<input type="text" name="options[iban]" id="iban" class="regular-text" value="<?php echo $options['iban'] ?>" >
				</td>
			</tr>	
			<tr>
				<th scope="row">
					<label for="bic"><?php _e( 'Swift / BIC Code', 'wpecr' ) ?></label>
				</th>
				<td>
					<input type="text" name="options[bic]" id="bic" class="regular-text" value="<?php echo $options['bic'] ?>" >
				</td>
			</tr>		
			</tbody>
		</table>

		<button type="submit" class="button button-primary button-large"><?php _e( 'Save', 'wpecr' ) ?></button>

	</form>
	</div> <!-- end .column-left -->
	<div class="column column-right">
		<div class="wpecr_box">
			<img src="<?php echo plugins_url( 'img/e-colori-com_wordpress-plugins.png', dirname(__FILE__) ) ?>" alt="www.e-colori.com" width="290" height="168" class="wpecr_img" id="wpecr_e-colori" />
			<h2><?php _e( 'Need Help?', 'wpecr' ) ?></h2>
			<h3><?php _e( 'You have questions or a feature request for The Events Calendar Extension: Registration?', 'wpecr' ) ?></h3>
			<h3><a href="http://e-colori.com/wordpress-plugins/the-events-calendar-extension-registration"><?php _e( 'Visit the plugin page and see all posibilities', 'wpecr' ) ?></a></h3>
			<h2>Newsletter</h2>
			<p><a href="http://e-colori.us1.list-manage.com/subscribe?u=0097453b77253cc1b5e3522b0&id=81906d1138"><?php _e( 'Stay connected, subscribe for news!', 'wpecr' ) ?></a></p>
		</div>
	</div> <!-- end .column-right -->
</div>