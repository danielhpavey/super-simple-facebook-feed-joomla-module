<?php

include('helper.php');
//Param eg
$id = $params->get('id');


//Layout eg
require JModuleHelper::getLayoutPath('mod_facebook_page_feed', $params->get('layout', 'default'));

