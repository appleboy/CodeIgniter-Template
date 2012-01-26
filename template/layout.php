<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--><html class="no-js" lang="zh-tw"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<title><?php echo $site_title; ?></title>
<meta name="description" content="<?php echo $site_description;?>" />
<meta name="keywords" content="<?php echo $site_keywords; ?>" />
<?php echo $meta_tag; ?>
<?php echo $styles; ?>
<!-- JS -->
<?php echo $scripts_header; ?>
</head>
<body>
    <div id="content">
        <?php echo $content; ?>
    </div>
    <?php echo $scripts_footer; ?>
</body>
</html>

