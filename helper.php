<?php

class facebookFeed{

	private $pageid;
	private $accestoken;

	public function __construct ( $pageid, $accesstoken) {
		
		$this -> pageid = $pageid;
		$this -> accesstoken = $accesstoken;
		$this -> facebookurl = 'https://graph.facebook.com/' . $this -> pageid . '/posts?access_token=' . $this -> accesstoken;

	}

	public function getFeed(){

		 $facebook_json = @file_get_contents( $this -> facebookurl );
		 $facebook_data = json_decode ( $facebook_json );

		return $facebook_data;	

		
	}

	function __set($property, $value){

	$this->$property = $value;

	}

	function __get($property){

	if (isset($this->$property))
	return $this->$property;

	}

}
