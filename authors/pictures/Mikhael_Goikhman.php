<?php
//--------------------------------------------------------------------
//-  File          : template.php_
//-  Project       : FVWM Home Page
//--------------------------------------------------------------------

// Usage:
// ls *jpg | grep -v small | sed 's+.jpg++;s+.*+sed "s/Mikhael Goikhman/&/g" template.php_ > &.php+' | sh


if(!isset($rel_path)) $rel_path = "./../..";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "Mikhael Goikhman";
$heading        = "Mikhael Goikhman";
$link_name      = "Mikhael Goikhman";
$link_picture   = "pictures/icons/home";
$parent_site    = "top";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "authors";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
  $site_has_been_loaded = "true";
  include(sec_filename($layout_file));
  exit();
}

decoration_window_start("Mikhael Goikhman"); 
?>

<a href="<?php echo conv_link_target('./index.php'); ?>">Back to image overview.</a><br>
<img src="Mikhael_Goikhman.jpg" border="0" hspace="10" vspace="10"><br>

<a href="http://migo.sixbit.org/">Personal Website</a>

<?php 
decoration_window_end(); 
?> 
