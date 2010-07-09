<?php
$choices = (array) AppletInstance::getDropZoneUrl('choices[]');

array_filter($choices);
shuffle($choices);

$choice = array_shift($choices);

$response = new Response();

if(!empty($choice))
	$response->addRedirect($choice);

$response->Respond();