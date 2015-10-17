<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * default layout
 * Location: application/views/
 */
$config['template_layout'] = '../template/layout';

/**
 * default css
 */
$config['template_css'] = array(
    '/assets/css/index.css' => 'screen'
);

/**
 * default javascript
 * load javascript on header: FALSE
 * load javascript on footer: TRUE
 */
$config['template_js'] = array(
    'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' => FALSE,
    '/assets/js/index.js' => TRUE
);

/**
 * default meta
 */
$config['template_meta'] = array(
    array('key' => 'http-equiv', 'name' => 'Content-Type', 'content' => 'text/html; charset=utf-8'),
    array('key' => 'name', 'name' => 'author', 'content' => 'Example - Copyright (c) 2015'),
    array('key' => 'name', 'name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'),
    array('key' => 'name', 'name' => 'keywords', 'content' => 'example'),
    array('key' => 'name', 'name' => 'description', 'content' => 'example')
);

/**
 * default variable
 */
$config['template_vars'] = array();

/**
 * default site title
 */
$config['base_title'] = 'xxxxx';

/**
 * default title separator
 */
$config['title_separator'] = ' | ';
