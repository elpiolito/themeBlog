<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
    <meta charset="<?php $plxShow->charset('min'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <title><?php $plxShow->pageTitle(); ?></title>
    <?php $plxShow->meta('description') ?>
    <?php $plxShow->meta('keywords') ?>
    <?php $plxShow->meta('author') ?>
    <link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
    <!--	<link rel="stylesheet" href="--><?php //$plxShow->template(); ?><!--/css/plucss.css" media="screen"/>-->
    <!--	<link rel="stylesheet" href="--><?php //$plxShow->template(); ?><!--/css/theme.css" media="screen"/>-->
    <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/font-awesome.min.css" media="screen"/>
    <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/style.css" media="screen"/>
    <?php $plxShow->templateCss() ?>
    <?php $plxShow->pluginsCss() ?>
    <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top">

<div id="page" class="hfeed site">

    <div class="navigation-bar clear" role="navigation"
    <div class="navigation-block">
        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><i class="fa fa-bars"></i><span class="screen-reader-text"><?php $plxShow->lang('MENU'); ?></span></button>
<!--            --><?php //$plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
            <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>

            <div class="menu-default-menu-container">
                <ul id="menu-default-menu" class="menu nav-menu" aria-expanded="false">
<!--                    --><?php //$plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
<!--                    --><?php //$plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status menu-item" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
                </ul>
            </div>

        </nav><!-- #site-navigation -->
    </div>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <h1 class="site-title"><?php $plxShow->mainTitle('link'); ?></h1>
            <h2 class="site-description"><?php $plxShow->subTitle(); ?></h2>
        </div>
    </header>



