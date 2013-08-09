<?php
//Check if resource has parent
if ($resource->get('parent')) {

	//Get ID of parent resource
	$currentParentId = $resource->get('parent');

	//Check if parent is in resource group
	if ($modx->getObject('modResourceGroupResource',array('document' => $currentParentId ))) {
		
		//Get resource group of parent
		$resourceGroup = $modx->getObject('modResourceGroupResource',array('document' => $currentParentId ));

		//Get ID of parent's resource group
		$resourceGroupId = $resourceGroup->get('document_group');

		//Join child resource to parent's resource group
		$resource->joinGroup($resourceGroupId);
	}

}