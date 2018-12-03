<?php
use usni\UsniAdaptor;
use common\modules\extension\models\Extension;
$tablePrefix = UsniAdaptor::tablePrefix();
$data = [
    'name' 				=> UsniAdaptor::t('payment', 'Stripe'),
    'author' 			=> 'WhatACart',
    'version' 			=> '1.0',
    'product_version'	=> ['2.0.0'],
	'category' 			=> 'payment',
	'code'	   			=> 'stripe', 
	'status'			=> Extension::STATUS_INACTIVE,
	'data'	  =>[
					'copyFolders'  => [
										[
											'sourceFolder'	=> 'protected/common/modules/payment/business/stripe',
											'targetFolder' 	=> '@common/modules/payment/business/stripe'
										],
										[
											'sourceFolder'	=> 'protected/common/modules/payment/config/stripe',
											'targetFolder' 	=> '@common/modules/payment/config/stripe'
										],
										[
											'sourceFolder'	=> 'protected/common/modules/payment/controllers/stripe',
											'targetFolder' 	=> '@common/modules/payment/controllers/stripe'
										],
										[
											'sourceFolder'	=> 'protected/common/modules/payment/db/stripe',
											'targetFolder' 	=> '@common/modules/payment/db/stripe'
										],
										[
											'sourceFolder'	=> 'protected/common/modules/payment/models/stripe',
											'targetFolder' 	=> '@common/modules/payment/models/stripe'
										],
										[
											'sourceFolder'	=> 'protected/common/modules/payment/views/stripe',
											'targetFolder' 	=> '@common/modules/payment/views/stripe'
										],
									],
					'copyFiles' => [
										[
											'sourceFile' 	=> 'protected/common/modules/payment/dto/StripeFormDTO.php', 
											'targetFolder'	=> '@common/modules/payment/dto/'
										],
										[
											'sourceFile' 	=> 'composer.json', 
											'targetFolder'	=> '@root'
										]
									],	
			]
];
return $data;
