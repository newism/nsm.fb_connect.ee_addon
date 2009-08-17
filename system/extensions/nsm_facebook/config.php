<?php

return array(

	"developer_key"		=> "NSM",
	"addon_key"			=> "Facebook",
	"author"  			=> "Leevi Graham",
	"author_url"		=> "http://leevigraham.com",
	"company_url"		=> "http://newism.com.au",
	"description"		=> "Facebook connect integration",
	"docs_url"			=> "http://newism.com.au/docs/",
	"version" 			=> "0.0.2",

	"components" => array(
		"extensions" => array("Nsm_facebook_ext")
	),

	// LG Addon Updater support
	"versions_xml_url"	=> "http://newism.com.au/versions/",
	
	// Javascript promos
	"promos"			=> array(
		"script_url"		=> "http://leevigraham.com/promos/ee.php"
	),

	// Donate button
	"paypal" 			=>  array(
		"account"				=> "sales@newism.com.au",
		"donations_accepted"	=> TRUE,
		"donation_amount"		=> "20.00",
		"currency_code"			=> "USD",
		"return_url"			=> "http://leevigraham.com/donate/thanks/",
		"cancel_url"			=> "http://leevigraham.com/donate/cancel/"
	)
);