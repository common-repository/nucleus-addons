<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Nucleus Elementor Team Widget.
 *
 * Elementor widget that inserts heading into the page
 *
 * @since 1.0.0
 */
class Nucleus_Addons extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve heading  widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'nucleus-addons';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve heading widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Nucleus Addons', 'nucleus-addons' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve heading  widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-user-circle-o';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the heading widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'nucleus-addons-cat' ];
	}

	/**
	 * Register heading widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		// start of the Content tab section
	   $this->start_controls_section(
	       'content-section',
		    [
		        'label' => esc_html__('Content','nucleus-addons'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
	    );		

		// nucleus Image
		$this->add_control(
			'nucleus_image',
			[
				'label' => esc_html__( 'Choose Image', 'nucleus-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator' => 'before',
				'description' => 'Image size 400px x 420px would be best',
			]
		);

		// nucleus Name
		$this->add_control(
			'nucleus_name',
			[
				'label' => esc_html__( 'Type Name', 'nucleus-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'John Doe', 'nucleus-addons' ),
				'placeholder' => esc_html__( 'Type your name here', 'nucleus-addons' ),
				'separator' => 'before',
				'label_block' => true
			]
		);

		// nucleus Designation
		$this->add_control(
			'nucleus_designation',
			[
				'label' => esc_html__( 'Type Designtion', 'nucleus-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Developer', 'nucleus-addons' ),
				'placeholder' => esc_html__( 'Type your designation here', 'nucleus-addons' ),
				'separator' => 'before',
				'label_block' => true
			]
		);


		// nucleus fb url
		$this->add_control(
			'nucleus_fb_link', [
				'label' => esc_html__( 'Type Your Facebook Link', 'nucleus-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'nucleus-addons' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);


		// nucleus tw url
		$this->add_control(
			'nucleus_tw_link', [
				'label' => esc_html__( 'Type Your Twitter Link', 'nucleus-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'nucleus-addons' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);


		// nucleus ld url
		$this->add_control(
			'nucleus_ld_link', [
				'label' => esc_html__( 'Type Your Linkedin Link', 'nucleus-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'nucleus-addons' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		// nucleus ins url
		$this->add_control(
			'nucleus_ins_link', [
				'label' => esc_html__( 'Type Your instagram Link', 'nucleus-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'nucleus-addons' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

	
	$this->end_controls_section();
	}


	/**
	 * Render heading  widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();	
		$nucleus_image = $settings['nucleus_image'];
		$nucleus_name = $settings['nucleus_name'];
		$nucleus_designation = $settings['nucleus_designation'];
		$nucleus_fburl = $settings['nucleus_fb_link'];
		$nucleus_twurl = $settings['nucleus_tw_link'];
		$nucleus_insurl = $settings['nucleus_ins_link'];
		$nucleus_ldurl = $settings['nucleus_ld_link'];

		?>
	<!-- Start Nucleus Team Style Area -->
	<div class="team-area">
		<div class="team-style-2">
			<div class="thumbnail">
				<img src="<?php echo esc_url($nucleus_image["url"]); ?>" alt="<?php echo esc_attr($nucleus_name); ?>">
			</div>
			<div class="team-style-social">
				<ul>
				<li><a href="<?php echo esc_url($nucleus_fburl["url"]); ?>"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="<?php echo esc_url($nucleus_twurl["url"]); ?>"><i class="fab fa-twitter"></i></a></li>
				<li><a href="<?php echo esc_url($nucleus_insurl["url"]); ?>"><i class="fab fa-instagram"></i></a></li>
				<li><a href="<?php echo esc_url($nucleus_ldurl["url"]); ?>"><i class="fab fa-linkedin"></i></a></li>
				</ul>
			</div>
			<div class="content">
				<h3><?php echo esc_html($nucleus_name); ?></h3>
				<h4><?php echo esc_html($nucleus_designation); ?></h4>
			</div>
		</div>
	</div>
	<!-- End Nucleus Team Style Area -->
	<?php 
	}
}