<?php
session_start();

define("IN_SITE", true);

require_once('includes/libs/Smarty.class.php');
require_once('includes/Page.php');
require_once('includes/global_variables.php');
require_once('includes/db_conn.php');
include_once('includes/analyticstracking.php');



// Determine which page to load
$load_page = (isset($_GET['page'])) ? strtolower($_GET['page']) : "default";

// Initialize these and populate them in the switch.
// Page is created afterwards.
$tpl = false;
$php = false;
$title = false;
$parent_menu_item = false;
$settings = array();

switch ($load_page){
	case "404": {
		$title = "Page Not Found";
		$tpl = "404.tpl";
		$php = false;
		$load_page = '404';
		break;
	}
    case "admin": {
        $title = 'Night Admin';
        $tpl = 'admin.tpl';
        $php = 'admin.php';
        $load_page = 'admin';
        break;
    }
	case "login": {       
        $title = 'Login';
        $tpl = 'login.tpl';
        $php = 'login.php';
        $load_page = 'login';
        break;
    }
    case "live": {       
        $title = 'Live';
        $tpl = 'live.tpl';
        $php = 'live.php';
        $load_page = 'live';
        break;
    }
    default: {
	    $title = ': N I G H T :';
	    $tpl = 'default.tpl';
	    $php = 'default.php';
	    $load_page = "default";
	    break;
    }
}

// Create the page from arguments assembled above
$page = new Page(
    $tpl,
    $php,
    $title,
    $parent_menu_item
);

// Parse each page setting separately
/*
if (is_array($settings) && count($settings) > 0) {
    
    foreach ($settings as $setting => $value) {
        
        $page->parseSetting($setting, $value);
    }
}
*/

$page->page_name = $load_page;

$smarty = new Smarty;
$smarty->error_reporting = E_ALL & ~E_NOTICE; 
$smarty->use_sub_dirs = true;
$smarty->template_dir = 'templates';
$smarty->config_dir = 'smarty/config';
$smarty->cache_dir = 'smarty/cache';
$smarty->compile_dir = 'smarty/compiled_templates';

if (isset($_GET['reloadcache'])) $smarty->clearCache($page->parent_template, $page->getTemplateName());	// Manual method to clear cache

// Cache the page if necessary
if ($page->cache){
	$smarty->caching = Smarty::CACHING_LIFETIME_SAVED;
	$smarty->cache_lifetime = $page->cache;
}

// Only include the page if the template is not cached
if (!$smarty->isCached($page->parent_template, $page->getTemplateName())){
	
	if ($page->include_file) {
		
		require_once('pages/' . $page->include_file);
	}
}

// Assign variables and display template
$smarty->assign('SITE_URL', SITE_URL);
$smarty->assign('IMG_PATH', IMG_PATH);
$smarty->assign('META_DESCRIPTION', META_DESCRIPTION);
$smarty->assign('META_KEYWORDS', META_KEYWORDS);
$smarty->assign('CONTACT_EMAIL', CONTACT_EMAIL);
$smarty->assign("page", $page);
$smarty->display($page->parent_template, $page->getTemplateName());

?>