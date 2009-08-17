<?php

class Nsm_facebook_ext extends Morphine_Addon_Extension {

	protected $developer_key 	= "NSM";
	protected $addon_key 		= "Facebook";

	public $name 				= "NSM Facebook";
	public $description 		= "Master extension for NSM Facebook";

	public $settings_exist		= 'y';
	
	private $show_demo_fields	= TRUE;

	// these are overridden by $this->build_default_settings()
	protected $default_settings		= array(
									"enabled" => TRUE,
									"check_for_updates" => TRUE
								);

	protected $hooks = array(
		'lg_addon_update_register_source',
		'lg_addon_update_register_addon',
		'sessions_end' => array("priority" => "-999")
	);
	
	function __construct()
	{
		parent::__construct();
	}
	
	function enable()
	{
		global $DB;
		$col_exists_query = $DB->query("SHOW COLUMNS FROM `exp_members` WHERE `Field` = 'fbid'");
		if($col_exists_query->num_rows == 0)
		{
			$DB->query("ALTER TABLE  `exp_members` ADD  `fbid` BIGINT UNSIGNED NOT NULL AFTER  `member_id`");
		}
	}
	
	function sessions_end()
	{
		require_once(PATH_LIB . "facebook-platform/php/facebook.php");
		$FB = new Facebook('58e131b52928d145f2f6f42146c17feb','2de88d50a8c3f51ab26b5bd239726a5e'); //start a new instance of the facebook object
		$FB_UID = $FB->get_loggedin_user();
		print_r($FB->user);
	}
}