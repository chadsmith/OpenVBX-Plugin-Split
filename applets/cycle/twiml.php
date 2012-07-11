<?php
$choices = (array) AppletInstance::getDropZoneUrl('choices[]');
$instanceId = AppletInstance::getInstanceId();
$position = intval(PluginData::get($instanceId));

array_filter($choices);

if(!$choices[$position])
  $position = 0;

$next = $choices[$position];
$response = new TwimlResponse;

PluginData::set($instanceId, ++$position);

if(!empty($next))
	$response->redirect($next);

$response->respond();
