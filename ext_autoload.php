<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2011-09-29 20:28

$extensionPath = t3lib_extMgm::extPath('menu_balancer');
$extensionClassesPath = t3lib_extMgm::extPath('menu_balancer') . 'Classes/';
return array(
	'tx_menubalancer_renderer' => $extensionClassesPath . 'Renderer.php',
	'tx_menubalancer_model_abstractcollection' => $extensionClassesPath . 'Model/AbstractCollection.php',
	'tx_menubalancer_model_balancedpartcollection' => $extensionClassesPath . 'Model/BalancedPartCollection.php',
	'tx_menubalancer_model_configuration' => $extensionClassesPath . 'Model/Configuration.php',
	'tx_menubalancer_model_part' => $extensionClassesPath . 'Model/Part.php',
	'tx_menubalancer_model_partcollection' => $extensionClassesPath . 'Model/PartCollection.php',
	'tx_menubalancer_service_balancer' => $extensionClassesPath . 'Service/Balancer.php',
	'tx_menubalancer_service_splitter' => $extensionClassesPath . 'Service/Splitter.php',
);
?>