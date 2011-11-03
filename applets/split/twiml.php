<?php
$choices = (array) AppletInstance::getDropZoneUrl('choices[]');
array_filter($choices);
shuffle($choices);
$next = array_shift($choices);

$response = new TwimlResponse;

if(!empty($next))
	$response->redirect($next);

$response->respond();
