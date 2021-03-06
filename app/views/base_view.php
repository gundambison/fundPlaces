<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url().'assets/';?>ico/favicon.png" />
    <title><?php echo $title;?></title>
    <!-- Bootstrap core CSS -->
    <!--link href="<?=base_url().'assets/';?>css/bootstrapBlue.css" rel="stylesheet" /-->
<?php 

if(isset($js_scripts)){?>
	<script>var siteUrl="<?=base_url();?>";</script>
<?php 
}

if(isset($css_scripts)){?>
	<?php 
	if(is_array($css_scripts)){
		foreach($css_scripts as $script){?>
	<link href="<?=base_url().'assets/css/'.$script;?>.css" rel="stylesheet" /><?php 
		}
	}
	else{ ?>
	<link href="<?=base_url().'assets/css/'.$css_scripts;?>.css" rel="stylesheet" /><?php 	
	} 
}	
?>
	<link href="<?=base_url().'assets/';?>css/style.css" rel="stylesheet" />

    <!-- Custom styles for this template >
    <link href="justified-nav.css" rel="stylesheet" -->	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=base_url().'assets/';?>js/html5shiv.js"></script>
      <script src="<?=base_url().'assets/';?>js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body><div class='transBG'></div>
<?php 
if(!isset($menu)) $menu=array();
	$this->load->view('menu_view',$menu ); ?>  
	
<div class='container body' style='margin-top:20px'>
	<div class='row'>
	<?php 
		$this->load->view($body."_view");	
	?>
	</div>
</div>
<div id='footer'>
<div class='container' style='margin-top:20px'>
	<div class="footer">
    <?php 
		$this->load->view( "footer_view");	
	?>    
	
    </div>
</div>
</div>	
<?php 
if(isset($js_scripts)){?>
	<script>var siteUrl="<?=base_url();?>";</script>
	<?php 
	if(is_array($js_scripts)){
		foreach($js_scripts as $script){?>
	<script src="<?=base_url().'assets/js/'.$script;?>.js"> </script><?php 
		}
	}
	else{ ?>
		<script src="<?=base_url().'assets/js/'.$js_scripts;?>.js"></script><?php 	
	} 
}	
?>
  </body>
</html>