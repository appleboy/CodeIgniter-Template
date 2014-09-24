<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * default layout
 * Location: application/views/
 */
$config['template_layout'] = 'template/layout';

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
    'https://code.jquery.com/jquery-2.1.1.min.js' => FALSE,
    '/assets/js/index.js' => TRUE
);

/**
 * default variable
 */
$config['template_vars'] = array(
    'site_description' => 'xxxx',
    'site_keywords' => 'xxxx'
);

/**
 * default site title
 */
$config['base_title'] = 'xxxxx';

/**
 * default title separator
 */
$config['title_separator'] = ' | ';
