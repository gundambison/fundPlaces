<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
           
          <ul class="nav navbar-nav navbar-right">
<?php 
foreach($menus as $menu){
?>		  
            <li><a href="<?=$menu[0];?>"><?=$menu[1];?></a></li>
<?php 
}
?> 
            <li class="login">
				 
				<button type="button" class="btn btn-success">Login</button>
				 
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>