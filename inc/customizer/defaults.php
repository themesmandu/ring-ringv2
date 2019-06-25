<?php
/**
 * Customizer default options
 *
 * @package Themesmandu
 * @subpackage ring-ring
 * @since ring-ring 1.0.0
 * @return array An array of default values
 */

if ( ! function_exists( 'ring_ring_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function ring_ring_get_default_theme_options() {

		$defaults = array();
		// slider section.
		$defaults['slider_heading']       = 'Buy A Toll <span>Free Number</span>';
		$defaults['slider_description']   = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.';
		$defaults['slider_button_text_1'] = 'KNOW MORE';
		$defaults['slider_button_link_1'] = home_url();
		$defaults['slider_button_text_2'] = 'ENQUIRY NOW';
		$defaults['slider_button_link_2'] = home_url();
		$defaults['slider_image_1']       = get_template_directory_uri() . '/assets/images/slider-one.jpg';
		$defaults['slider_image_2']       = get_template_directory_uri() . '/assets/images/footer.jpg';
		$defaults['slider_image_3']       = get_template_directory_uri() . '/assets/images/slider-one.jpg';
		$defaults['slider_image_4']       = get_template_directory_uri() . '/assets/images/footer.jpg';

		// promotion section.
		$defaults['promotion_heading']          = 'Make your phone go <span>Ring Ring</span>';
		$defaults['promotion_description']      = 'Ring Ring, LLC. provides companies with vanity toll free numbers; for the use of advertising and branding purposes. 

A company that would benefit most is either currently advertising, or plans on advertising on TV, Radio, Out-of-Home, Internet, or Print. They might even want a memorable phone number for their vehicles that are out on the streets, where thousands of people see them every day.
		
Vanity toll free phone numbers increase advertising response rates because they are simply more memorable. Brand yourself with a phone number that works for you and your customers. 
		
If you have a toll free number already and you want to reduce your rates, give us a call and we can help you';
		$defaults['promotion_background_image'] = get_template_directory_uri() . '/assets/images/calling.jpg';

		// advantages section.
		$defaults['advantages_heading']          = 'Advantages of <span>Toll Free Numbers</span>';
		$defaults['advantages_description']      = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
		$defaults['advantages_background_image'] = get_template_directory_uri() . '/assets/images/advantage.jpg';

		// opportunities section.
		$defaults['opportunities_heading'] = 'What other Business <span>Opportunities do</span> <span>WE OFFER</span>';
			// for about page.
		$defaults['about_opportunities_heading']  = 'What other Business <span>Opportunities do WE OFFER</span>';
		$defaults['opportunities_description']    = 'Vanity Toll Free Numbers increases advertising response rates because they are simply more memorable. 

Lorem ipsum dolor sit amet consectetur elitVanity Toll Free Numbers increases advertising response rates because they are simply more memorable. Lorem ipsum dolor sit amet consectetur elitLorem ipsum dolor sit amet consectetur elitVanity Toll Free Numbers increases adve.';
		$defaults['opportunities_heading_card_1'] = 'PARTNERSHIPS';
		$defaults['opportunities_heading_card_2'] = 'AD AGENCIES';
		$defaults['opportunities_heading_card_3'] = 'EMPLOYMENT';
		$defaults['opportunities_heading_card_4'] = 'INTERNSHIPS';
		for ( $i = 1; $i <= 4; $i++ ) {
			$defaults[ 'opportunoties_description_card_' . $i ] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .......';
		}

		// blog section.
		$defaults['blog_heading']     = 'Some Of Our Best <span>Blogs From The Ring Ring</span>';
		$defaults['blog_description'] = 'Lorem ipsum dolor sit amet, conse adipiscing elit, sed do eiusmod tempor incididun.Lorem ipsum dolor sit amet,';

		// asset section.
		$defaults['asset_heading']     = 'Our People Are Our <span>BIGGEST ASSETS</span>';
		$defaults['asset_description'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ';
		$defaults['asset_button_text'] = 'JOIN OUR TEAM';
		$defaults['asset_button_link'] = home_url();
		$defaults['asset_image']       = get_template_directory_uri() . '/assets/images/peoples.png';

		// footer widget section.
		$defaults['footer_widget_first']  = 'If you have a toll free number already and you want to reduce your rates, give us a call and we can help you. ';
		$defaults['footer_widget_second'] = 'Call : 866. Ring Ring';
		$defaults['footer_widget_third']  = 'Feel Free To Contact Us Anytime';

		// footer copyright section.
		$defaults['footer_copyright'] = 'Copyright © 2010 Ring Ring, LLC. All rights reserved.';

		// about page promotion section.
		$defaults['about_promotion_heading']          = 'Make your phone go <span>Ring Ring</span>';
		$defaults['about_promotion_description']      = 'Ring Ring, LLC. provides companies with vanity toll free numbers; for the use of advertising and branding purposes. 

A company that would benefit most is either currently advertising, or plans on advertising on TV, Radio, Out-of-Home, Internet, or Print. They might even want a memorable phone number for their vehicles that are out on the streets, where thousands of people see them every day.
		
Vanity toll free phone numbers increase advertising response rates because they are simply more memorable. Brand yourself with a phone number that works for you and your customers. 
		
If you have a toll free number already and you want to reduce your rates, give us a call and we can help you';

		// about page opportunities section.
		$defaults['about_opportunities_heading']  = 'What other Business <span>Opportunities do WE OFFER</span>';
		$defaults['about_opportunities_description']    = 'Vanity Toll Free Numbers increases advertising response rates because they are simply more memorable. 

Lorem ipsum dolor sit amet consectetur elitVanity Toll Free Numbers increases advertising response rates because they are simply more memorable. Lorem ipsum dolor sit amet consectetur elitLorem ipsum dolor sit amet consectetur elitVanity Toll Free Numbers increases adve.';
		$defaults['about_opportunities_heading_card_1'] = 'PARTNERSHIPS';
		$defaults['about_opportunities_heading_card_2'] = 'AD AGENCIES';
		$defaults['about_opportunities_heading_card_3'] = 'EMPLOYMENT';
		$defaults['about_opportunities_heading_card_4'] = 'INTERNSHIPS';
		for ( $i = 1; $i <= 4; $i++ ) {
			$defaults[ 'about_opportunoties_description_card_' . $i ] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .......';
		}

		// about page asset section.
		$defaults['about_asset_heading']     = 'Our People Are Our <span>BIGGEST ASSETS</span>';
		$defaults['about_asset_description'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ';
		$defaults['about_asset_button_text'] = 'JOIN OUR TEAM';
		$defaults['about_asset_button_link'] = home_url();
		$defaults['about_asset_image']       = get_template_directory_uri() . '/assets/images/peoples.png';

			// Pass through filter.
			$defaults = apply_filters( 'ring_ring_get_default_theme_options', $defaults );
			return $defaults;
	}

endif;




