<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="qc:admins" content="23406061474621616137636" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>statics/hexi/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>statics/hexi/css/base.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h1 class="logo"><a href="/">和玺装饰</a></h1>
        <div class="contact fr">
            <div class="left">
                <i class="i-phone"></i>
            </div>
            <div class="right">
                <span class="label">24小时装修咨询热线</span><br/>
                <span class="n-phone">0411-84586967</span>
            </div>
        </div>
    </div>
</div>
<div class="navigator">
    <div class="container">
        <?php include template("common","nav"); ?>
    </div>
</div>