<?php defined('ABSPATH') || exit;

class jk_wp_custom_authorization
{

    public function authorization_handler()
    {

        die();

    }

    public function registration_handler()
    {

        die();

    }

    public function ajax_init()
    {

        add_action('wp_ajax_nopriv_jk_authorization', [$this, 'authorization_handler']);

        add_action('wp_ajax_jk_authorization', [$this, 'authorization_handler']);

        add_action('wp_ajax_nopriv_jk_registration', [$this, 'registration_handler']);

        add_action('wp_ajax_jk_registration', [$this, 'registration_handler']);

    }

}
