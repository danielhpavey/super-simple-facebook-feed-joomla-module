<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1');

include('helper.php');
$pageid = $params->get('pageid');
$accesstoken = $params->get('accesstoken');


$facebookfeed = new facebookFeed( $pageid, $accesstoken );
$feed = $facebookfeed -> getFeed();


//Layout eg
require JModuleHelper::getLayoutPath('mod_facebook_page_feed', $params->get('layout', 'default'));

