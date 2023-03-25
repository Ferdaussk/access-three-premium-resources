<?php
namespace athreepr_main_namespace\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'athreepr_adpreloader_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'athreepr_adpreloader_register_document_controls' ] );
	}

	public function athreepr_adpreloader_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'Access Three Premium Resources', 'access-three-premium-resources' ) );
	}

	public function athreepr_adpreloader_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'athreepr_new_section',
			[
				'label' => esc_html__( 'Settings', 'access-three-premium-resources' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'athreepr_text',
			[
				'label' => esc_html__( 'Title', 'access-three-premium-resources' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'access-three-premium-resources' ),
			]
		);

		$document->end_controls_section();
	}
}
