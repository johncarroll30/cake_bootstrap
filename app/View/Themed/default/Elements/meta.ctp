<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
    <?php echo $this->Html->charset(); ?>
    <?php echo $this->Html->charset('ISO-8859-1'); ?>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">
    <link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<title><?php if(isset($title_for_layout)) :  echo $title_for_layout; endif; ?> | <?php if(isset($website_title_for_layout)) :  echo $website_title_for_layout; endif; ?></title>
	<?php if(isset($description_for_layout)) : ?><meta name="description" content="<?php echo $description_for_layout; ?>"><?php endif; ?>
    <?php echo $this->Html->script('vendor/require',array('data-main'=>'/theme/default/js/main')); ?>
    <?php echo $this->Html->css(array('app')); ?>
</head>