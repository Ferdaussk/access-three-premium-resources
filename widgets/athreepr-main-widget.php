<?php
/**
 * 
 * @Start a new widget from here. The plugin is Access Three Premium Resources 
 * 
 */
namespace athreepr_main_namespace\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class AThreePR_Effective_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'AccessThreePremiumResources', 'access-three-premium-resources' );
	}

	public function get_title() {
		return esc_html__( 'Access Three Premium Resources', 'access-three-premium-resources' );
	}

	public function get_icon() {
		return 'athreepr-effective-icon eicon-check-circle-o';
	}

	public function get_categories() {
		return [ 'bwdthebest_general_category' ];
	}
	
	public function get_keywords() {
		return ['nav' , 'one page nav', 'menu' , 'animation' , 'nav menu'];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
			'athreepr_contentSection',
			[
				'label' => esc_html__( 'Access Three Premium Resources', 'access-three-premium-resources' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'athreepr_access_zone_style',
			[
				'label' => esc_html__( 'Select Style', 'access-three-premium-resources' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'access-three-premium-resources' ),
					'style2' => esc_html__( 'Style 2', 'access-three-premium-resources' ),
					'style3' => esc_html__( 'Style 3', 'access-three-premium-resources' ),
					'style4' => esc_html__( 'Style 4', 'access-three-premium-resources' ),
					'style5' => esc_html__( 'Style 5', 'access-three-premium-resources' ),
					'style6' => esc_html__( 'Style 6', 'access-three-premium-resources' ),
					'style7' => esc_html__( 'Style 7', 'access-three-premium-resources' ),
					'style8' => esc_html__( 'Style 8', 'access-three-premium-resources' ),
					'style9' => esc_html__( 'Style 9', 'access-three-premium-resources' ),
					'style10' => esc_html__( 'Style 10', 'access-three-premium-resources' ),
					'style11' => esc_html__( 'Style 11', 'access-three-premium-resources' ),
					'style12' => esc_html__( 'Style 12', 'access-three-premium-resources' ),
					'style13' => esc_html__( 'Style 13', 'access-three-premium-resources' ),
					'style14' => esc_html__( 'Style 14', 'access-three-premium-resources' ),
					'style15' => esc_html__( 'Style 15', 'access-three-premium-resources' ),
					'style16' => esc_html__( 'Style 16', 'access-three-premium-resources' ),
				],
			]
		);
		$this->add_control(
			'athreepr_separator_type',
			[
				'label'     => esc_html__( 'Select Access', 'access-three-premium-resources' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'login',
				'options'   => array(
					'login' => esc_html__( 'Login', 'access-three-premium-resources' ),
					'registration' => esc_html__( 'Registration', 'access-three-premium-resources' ),
					'subscribe' => esc_html__( 'Subscribe', 'access-three-premium-resources' ),
				),
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'athreepr_login_resources',
			[
				'label' => esc_html__( 'Login Resources', 'access-three-premium-resources' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'athreepr_separator_type' => 'login',
				],
			]
		);
		$this->add_control(
			'athreepr_login_username_text',
			[
				'label' => esc_html__( 'Username Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Username', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_login_pass_text',
			[
				'label' => esc_html__( 'Password Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Password', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_login_text',
			[
				'label' => esc_html__( 'Login Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Log In', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_reg_notice_text',
			[
				'label' => esc_html__( 'New Register', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Register', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_separator',
			[
				'label' => esc_html__( 'Separator', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( ' || ', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_remember_show_switcher',
			[
				'label' => esc_html__( 'Remember?', 'access-three-premium-resources' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'access-three-premium-resources' ),
				'label_off' => esc_html__( 'Hide', 'access-three-premium-resources' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'athreepr_remember_value_switcher',
			[
				'label' => esc_html__( 'Value?', 'access-three-premium-resources' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'access-three-premium-resources' ),
				'label_off' => esc_html__( 'No', 'access-three-premium-resources' ),
				'condition' => [
					'athreepr_remember_show_switcher' => 'yes',
				],
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'athreepr_remember_me_text',
			[
				'label' => esc_html__( 'Remember Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Remember Me', 'access-three-premium-resources' ),
				'condition' => [
					'athreepr_remember_show_switcher' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_forgotPass_text',
			[
				'label' => esc_html__( 'Lossed Password?', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Forgot Password?', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_loggedin_notice_text',
			[
				'label' => esc_html__( 'Logged in Notice', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'You are already logged in. ', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_logout_text',
			[
				'label' => esc_html__( 'Logout Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Log Out', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'athreepr_registered_resources',
			[
				'label' => esc_html__( 'Registered Resources', 'access-three-premium-resources' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'athreepr_separator_type' => 'registration',
				],
			]
		);
		$this->add_control(
			'athreepr_firstname_text',
			[
				'label' => esc_html__( 'First Name', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'First Name', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_lastname_text',
			[
				'label' => esc_html__( 'Last Name', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Last Name', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_reg_username_text',
			[
				'label' => esc_html__( 'Username Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Username', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_reg_pass_text',
			[
				'label' => esc_html__( 'Password Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Password', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_login_email_text',
			[
				'label' => esc_html__( 'Email Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Email', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_confirm_password_text',
			[
				'label' => esc_html__( 'Confirm Password Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Confirm Password', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_register_text',
			[
				'label' => esc_html__( 'Register Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Register', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_alRegNotice_text',
			[
				'label' => esc_html__( 'Notice', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'You are already registered.', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_reg_text',
			[
				'label' => esc_html__( 'Login Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Log In', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'athreepr_subscribe_resources',
			[
				'label' => esc_html__( 'Subscribe Resources', 'access-three-premium-resources' ),
				'tab' => Controls_Manager::TAB_CONTENT,
				'condition' => [
					'athreepr_separator_type' => 'subscribe',
				],
			]
		);
		$this->add_control(
			'athreepr_subs_email_text',
			[
				'label' => esc_html__( 'Email Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Email', 'access-three-premium-resources' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_subscribe_text',
			[
				'label' => esc_html__( 'Subscribe Label', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'subscribe', 'access-three-premium-resources' ),
				'condition' => [
					'athreepr_separator_type' => 'subscribe',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'athreepr_subscribe_notice_text',
			[
				'label' => esc_html__( 'Subscribe Notice', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Thank you for subscribing!', 'access-three-premium-resources' ),
				'condition' => [
					'athreepr_separator_type' => 'subscribe',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'athreepr_login_access_style',
			[
				'label' => esc_html__( 'Log In', 'access-three-premium-resources' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'athreepr_separator_type' => 'login',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'athreepr_login_title_style_access'
		);
		$this->start_controls_tab(
			'athreepr_login_title_normal_access',
			[
				'label' => esc_html__( 'Normal', 'access-three-premium-resources' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'athreepr_login_title_typography',
				'selector' => '{{WRAPPER}} .athreepr_login_access-title',
			]
		);
		$this->add_control(
			'athreepr_login_title_color',
			[
				'label' => esc_html__( 'Color', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'athreepr_login_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'athreepr_login_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'access-three-premium-resources' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'athreepr_login_title_hover_typography',
				'selector' => '{{WRAPPER}} .athreepr_login_access-title:hover',
			]
		);
		$this->add_control(
			'athreepr_login_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'athreepr_login_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'athreepr_login_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'athreepr_login_title_padding',
			[
				'label' => esc_html__('Padding', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'athreepr_login_title_margin',
			[
				'label' => esc_html__('Margin', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'athreepr_registration_access_style',
			[
				'label' => esc_html__( 'Registration', 'access-three-premium-resources' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'athreepr_separator_type' => 'registration',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'athreepr_registration_title_style_access'
		);
		$this->start_controls_tab(
			'athreepr_registration_title_normal_access',
			[
				'label' => esc_html__( 'Normal', 'access-three-premium-resources' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'athreepr_registration_title_typography',
				'selector' => '{{WRAPPER}} .athreepr_registration_access-title',
			]
		);
		$this->add_control(
			'athreepr_registration_title_color',
			[
				'label' => esc_html__( 'Color', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_registration_access-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'athreepr_registration_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'athreepr_registration_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'access-three-premium-resources' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'athreepr_registration_title_hover_typography',
				'selector' => '{{WRAPPER}} .athreepr_login_access-title:hover',
			]
		);
		$this->add_control(
			'athreepr_registration_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'athreepr_registration_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'athreepr_registration_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'athreepr_registration_title_padding',
			[
				'label' => esc_html__('Padding', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'athreepr_registration_title_margin',
			[
				'label' => esc_html__('Margin', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_login_access-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'athreepr_subscribe_access_style',
			[
				'label' => esc_html__( 'Subscribe', 'access-three-premium-resources' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'athreepr_separator_type' => 'subscribe',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'athreepr_subscribe_title_style_access'
		);
		$this->start_controls_tab(
			'athreepr_subscribe_title_normal_access',
			[
				'label' => esc_html__( 'Normal', 'access-three-premium-resources' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'athreepr_subscribe_title_typography',
				'selector' => '{{WRAPPER}} .athreepr_subscribe_access-title',
			]
		);
		$this->add_control(
			'athreepr_subscribe_title_color',
			[
				'label' => esc_html__( 'Color', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_subscribe_access-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'athreepr_subscribe_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_subscribe_access-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'athreepr_subscribe_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'access-three-premium-resources' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'athreepr_subscribe_title_hover_typography',
				'selector' => '{{WRAPPER}} .athreepr_subscribe_access-title:hover',
			]
		);
		$this->add_control(
			'athreepr_subscribe_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_subscribe_access-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'athreepr_subscribe_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_subscribe_access-title:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'athreepr_subscribe_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_subscribe_access-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'athreepr_subscribe_title_padding',
			[
				'label' => esc_html__('Padding', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_subscribe_access-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'athreepr_subscribe_title_margin',
			[
				'label' => esc_html__('Margin', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_subscribe_access-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'athreepr_wrap_access_style',
			[
				'label' => esc_html__( 'Wrapper', 'access-three-premium-resources' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'athreepr_wrap_title_style_access'
		);
		$this->start_controls_tab(
			'athreepr_wrap_title_normal_access',
			[
				'label' => esc_html__( 'Normal', 'access-three-premium-resources' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'athreepr_wrap_title_typography',
				'selector' => '{{WRAPPER}} .athreepr_wrap_cmn',
			]
		);
		$this->add_control(
			'athreepr_wrap_title_color',
			[
				'label' => esc_html__( 'Color', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_wrap_cmn' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'athreepr_wrap_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_wrap_cmn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'athreepr_wrap_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'access-three-premium-resources' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'athreepr_wrap_title_hover_typography',
				'selector' => '{{WRAPPER}} .athreepr_wrap_cmn:hover',
			]
		);
		$this->add_control(
			'athreepr_wrap_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_wrap_cmn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'athreepr_wrap_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'access-three-premium-resources' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .athreepr_wrap_cmn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'athreepr_wrap_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_wrap_cmn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'athreepr_wrap_title_padding',
			[
				'label' => esc_html__('Padding', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_wrap_cmn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'athreepr_wrap_title_margin',
			[
				'label' => esc_html__('Margin', 'access-three-premium-resources'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .athreepr_wrap_cmn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$display = $this->get_settings_for_display();
		echo '<div class="athreepr_wrap_cmn '.$display['athreepr_access_zone_style'].'">';
		if($display['athreepr_separator_type'] == 'login'){
			// For login form
			$the_args = array(
				'echo' => true,
				'redirect' => site_url( $_SERVER['REQUEST_URI'] ),
				'form_id' => 'loginform',
				'label_username' => $display['athreepr_login_username_text'],
				'label_password' => $display['athreepr_login_pass_text'],
				'label_remember' => $display['athreepr_remember_me_text'],
				'label_log_in' => $display['athreepr_login_text'],
				'id_username' => 'user_login',
				'id_password' => 'user_pass',
				'id_remember' => 'rememberme',
				'id_submit' => 'wp-submit',
				'remember' => $display['athreepr_remember_show_switcher'] == 'yes'?true:false,
				'value_username' => '',
				'value_remember' => $display['athreepr_remember_value_switcher'] == 'yes'?true:false
			);
			if(!is_user_logged_in()){
				echo wp_login_form($the_args);
				echo '<a href="'.wp_registration_url().'">'.$display['athreepr_reg_notice_text'].'</a>'.$display['athreepr_separator'].'<a href="'.wp_lostpassword_url().'">'.esc_html__($display['athreepr_forgotPass_text']).'</a>';
			} else{
				echo $display['athreepr_loggedin_notice_text']. '<a href="'.wp_logout_url( home_url() ).'">'.esc_html__($display['athreepr_logout_text']).'</a>';
			}
		} else if($display['athreepr_separator_type'] == 'registration'){
			// For registration form
			$reg_args = array(
				'echo' => true,
				'redirect' => site_url( $_SERVER['REQUEST_URI'] ),
				'form_id' => 'registerform',
				'label_username' => $display['athreepr_reg_username_text'],
				'label_password' => $display['athreepr_reg_pass_text'],
				'label_password_confirm' => $display['athreepr_confirm_password_text'],
				'label_email' => $display['athreepr_login_email_text'],
				'label_registration' => $display['athreepr_register_text'],
				'label_first_name' => $display['athreepr_firstname_text'],
				'label_last_name' => $display['athreepr_lastname_text'],
				'id_username' => 'user_login',
				'id_password' => 'user_pass',
				'id_password_confirm' => 'user_pass_confirm',
				'id_email' => 'user_email',
				'id_first_name' => 'first_name',
				'id_last_name' => 'last_name',
				'id_submit' => 'wp-submit',
				'value_username' => '',
				'value_email' => ''
			);
			echo '<div class="registration-form">';
				if ( !is_user_logged_in() ) {
					echo '<form method="post" action="' . site_url('wp-login.php?action=register') . '">' .
						wp_nonce_field( 'register_form', 'register_form_nonce' ) .
						'<label for="' . $reg_args['id_first_name'] . '">' . $reg_args['label_first_name'] . '</label>' .
						'<input type="text" name="' . $reg_args['id_first_name'] . '" id="' . $reg_args['id_first_name'] . '" required />' .
						'<label for="' . $reg_args['id_last_name'] . '">' . $reg_args['label_last_name'] . '</label>' .
						'<input type="text" name="' . $reg_args['id_last_name'] . '" id="' . $reg_args['id_last_name'] . '" required />' .
						'<label for="' . $reg_args['id_username'] . '">' . $reg_args['label_username'] . '</label>' .
						'<input type="text" name="' . $reg_args['id_username'] . '" id="' . $reg_args['id_username'] . '" value="' . $reg_args['value_username'] . '" required />' .
						'<label for="' . $reg_args['id_email'] . '">' . $reg_args['label_email'] . '</label>' .
						'<input type="email" name="' . $reg_args['id_email'] . '" id="' . $reg_args['id_email'] . '" value="' . $reg_args['value_email'] . '" required />' .
						'<label for="' . $reg_args['id_password'] . '">' . $reg_args['label_password'] . '</label>' .
						'<input type="password" name="' . $reg_args['id_password'] . '" id="' . $reg_args['id_password'] . '" required />' .
						'<label for="' . $reg_args['id_password_confirm'] . '">' . $reg_args['label_password_confirm'] . '</label>' .
						'<input type="password" name="' . $reg_args['id_password_confirm'] . '" id="' . $reg_args['id_password_confirm'] . '" required />' .
						'<input type="submit" name="' . $reg_args['id_submit'] . '" id="' . $reg_args['id_submit'] . '" value="' . $reg_args['label_registration'] . '" />' .
					'</form>';
				} else {
					echo '<div>' . esc_html__($display['athreepr_alRegNotice_text']) . '</div><a href="'.wp_login_url().'">'.$display['athreepr_reg_text'].'</a>';
				}
			echo '</div>';
		} else if($display['athreepr_separator_type'] == 'subscribe'){
			$subscribe_args = array(
				'echo'           => true,
				'id_email'       => 'subscriber_email',
				'id_submit'      => 'subscribe-submit',
				'label_email'    => $display['athreepr_subs_email_text'],
				'label_submit'   => $display['athreepr_subscribe_text'],
				'value_email'    => ''
			);
			if (isset($_POST['subscribe_form_nonce']) && wp_verify_nonce($_POST['subscribe_form_nonce'], 'subscribe_form')) {
				$email = sanitize_email($_POST[$subscribe_args['id_email']]);
				$user_id = email_exists($email);
				if (!$user_id) {
					$random_password = wp_generate_password();
					$user_id = wp_create_user($email, $random_password, $email);
					wp_update_user( array( 'ID' => $user_id, 'nickname' => $email ) );
					wp_new_user_notification($user_id, null, 'both');
				}
				echo '<div class="toaster-message">'.$display['athreepr_subscribe_notice_text'].'</div>';
			}
			echo '<div class="subscribe-form">';
				echo '<form method="post" action="' . site_url('wp-login.php?action=register') . '">' .
					wp_nonce_field('subscribe_form', 'subscribe_form_nonce') .
					'<label for="' . $subscribe_args['id_email'] . '">' . $subscribe_args['label_email'] . '</label>' .
					'<input type="email" name="' . $subscribe_args['id_email'] . '" id="' . $subscribe_args['id_email'] . '" value="' . $subscribe_args['value_email'] . '" required />' .
					'<input type="submit" name="' . $subscribe_args['id_submit'] . '" id="' . $subscribe_args['id_submit'] . '" value="' . $subscribe_args['label_submit'] . '" />' .
				'</form>';
			echo '</div>';
		}
		echo '</div>';
	}
}