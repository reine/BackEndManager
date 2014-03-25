<!DOCTYPE html>
<html lang="en">
<head>
	<?php print $this->bep_site->get_metatags(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php print $header.' | '.$this->preference->item('site_name')?></title>
	<?php print $this->bep_site->get_variables()?>
	<?php print $this->bep_assets->get_header_assets();?>
	<?php print $this->bep_site->get_js_blocks()?>
</head>

<body>
<div id="wrapper">
    <div id="header">
        <h1><?php print $this->preference->item('site_name')?></h1>
    </div>