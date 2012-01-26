Requirements
=======================

* CodeIgniter 2.0.0+
* PHP 5.2.0+

Usage
=======================

copy file into correct directory.

    $ cp config/template.php application/config/
    $ cp libraries/template.php application/libraries/

modified your template configuration from application/config/template.php

Set default template layout, put layout into application/views directory

    $config['template_layout'] = 'template/layout';

load template library

    $this->load->library("template");

add css

    $this->template->add_css("http://xxxx/index.js", "screen");

add javascript (put the file on bottom if the second parameter is set true, default is false)

    $this->template->add_js("/asset/js/index.js", TRUE);

add meta tag

    $this->template->add_meta_tag("og:title", "Test Title", 'property');
    // it will output
    <meta property="og:title" content="Test Title" />
    $this->template->add_meta_tag("keywords", "some keywords");
    // it will output
    <meta name="keywords" content="some keywords" />

add title segment

    $this->template->add_title_segment("test");
    // it render output
    <title>test | your site title</title>

render output (return output data if the second parameter is set true)

    $this->template->render("index");


Copyright
=======================

Copyright (C) 2012 Bo-Yi Wu ( appleboy AT gmail.com )

