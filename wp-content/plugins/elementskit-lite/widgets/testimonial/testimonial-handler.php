<?php
namespace ElementsKit;

class Elementskit_Widget_Testimonial_Handler extends Core\Handler_Widget{

    static function get_name() {
        return 'elementskit-testimonial';
    }

    static function get_title() {
        return esc_html__( 'Testimonial', 'elementskit' );
    }

    static function get_icon() {
        return 'ekit ekit-testimonial-grid ekit-widget-icon ';
    }

    static function get_categories() {
        return ['elementskit'];
    }

    static function get_dir() {
        return \ElementsKit::widget_dir() . 'testimonial/';
    }

    static function get_url() {
        return \ElementsKit::widget_url() . 'testimonial/';
    }

}