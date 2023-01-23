<?php

class Page {
	public $page_name = false;
	public $template;
	public $page_title = false;
	public $parent_menu;
	public $include_file;
	public $printable = false;
	public $parent_template = "index.tpl";
	public $highlight_item = false;
	public $target = false;
	public $global_page = false;
	public $cache = false;
	public $force_ssl = false;
	public $prepend_template_name = false;
	public $no_right_column = false;
	public $meta_description = false;
	public $meta_keywords = false;
	public $canonical = false;
	
	/**
	 * Creates a new Page
	 * 
	 * @param string $template_file	The tpl file to load
	 * @param mixed $php_file	The include file, if any, to include. This file will contain most of the grunt work for the page
	 * @param string $page_title	The title of the page - displayed in the browser title bar
	 * @param mixed $parent_menu_name	The name of the parent menu
	 * ... @param mixed	$settings	Various page settings
	*/
	public function __construct($template_file, $php_file, $page_title = false, $parent_menu_name = false){
		$this->template = $template_file;
		$this->include_file = $php_file;
		$this->page_title = $page_title;
		$this->parent_menu = $parent_menu_name;
		$this->meta_description = defined('META_DESCRIPTION') ? META_DESCRIPTION : '';
		$this->meta_keywords = defined('META_KEYWORDS') ? META_KEYWORDS : '';
		
		// If there are more than 4 arguments, then there are some settings we need to parse
		if (func_num_args() > 4){
			for ($i = 4; $i <= func_num_args() - 1; $i++){
				$setting = func_get_arg($i);
				if (is_array($setting)){
					$this->parseSetting($setting[0], $setting[1]);	
				} else {
					$this->parseSetting($setting);
				}
			}
		}
	}
	
	/**
	 * Returns a page title formatted with the site name
	 * @return string	The page title
	*/
	public function getPageTitle(){

		// SEO requirement to use different page titles without repeating the SITE_NAME
		if (APPEND_SITE_NAME_TO_PAGE_TITLE) {
				return ($this->page_title) ? SITE_NAME . " - " . $this->page_title : SITE_NAME;
			} else {
				return ($this->page_title) ? $this->page_title : SITE_NAME;
		}
	}
	
	/**
	 * Returns a smarty formatted template name, used for caching purposes
	 * @return string	A smarty formatted template name
	 */
	public function getTemplateName(){
		if ($this->page_name) {
			return ($this->prepend_template_name) ? $this->prepend_template_name . "|" . $this->page_name : $this->page_name; 
		} else die("Page::page_name is not defined, cannot call Page::getTemplateName()");
	}
	
	/**
	 * Parses settings and updates variables accordingly
	 * @param int $setting	The setting we are changing
	 * @param mixed $value	The value, if applicable
	 */	
/*
	public function parseSetting($setting, $value = false){
		switch ($setting){
			case PAGE_PRINT:
				$this->parent_template = "print.tpl";
				$this->prepend_template_name = "print";
				$this->printable = true;
				break;
			case PAGE_TEMPLATE_NONE:
				$this->parent_template = $this->parent_template = ($value) ? $value : $this->template;
				break;
			case PAGE_TEMPLATE_BLANK:
				$this->parent_template = "no_template.tpl";
				$this->prepend_template_name = "notemplate";
				break;
			case PAGE_TARGET_NEW:
				$this->target = "_new";
				break;
			case PAGE_GLOBAL:
				$this->global_page = true;
				break;
			case PAGE_FORCE_SSL:
				if (! DEV_SERVER ) $this->force_ssl = true;
				break;
			case PAGE_CACHE:
				if (!($value && is_numeric($value))) die("The PAGE_CACHE setting requires a integer, in seconds, for when the cache expires");
				$this->cache = $value;
				break;
			case PAGE_NO_RIGHT_COLUMN:
				$this->no_right_column = true;
				break;
			case PAGE_META_DESCRIPTION:
				$this->meta_description = $value;
				break;				
			case PAGE_META_KEYWORDS:
				$this->meta_keywords = $value;
				break;
			case PAGE_TEMPLATE_MODAL:
				$this->parent_template = "no_template_modal.tpl";
				$this->prepend_template_name = "notemplatemodal";
				break;
			case PAGE_CANONICAL:
				$this->canonical = $value;
				break;
			case PAGE_TEMPLATE_EMPTY:
				$this->parent_template = "no_template_empty.tpl";
				$this->prepend_template_name = "notemplateempty";
				break;
			case PAGE_TEMPLATE_CSV:
				$this->parent_template = "template_csv.tpl";
				break;
			default:
				die("Invalid setting: " . $setting);
				break;
		}
	}
*/

}

?>