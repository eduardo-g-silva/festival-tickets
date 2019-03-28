<?php
use yii\helpers\ArrayHelper;

$imageManagerClass  = 'usni\library\web\ImageManager';
$fileManagerClass   = 'usni\library\web\FileManager';
$videoManagerClass  = 'usni\library\web\VideoManager';
return ArrayHelper::merge(
                    require(USNI_PATH . '/library/config/common.php'), [
                                            'vendorPath'    => VENDOR_PATH,
                                            'installed'     => $installed,
                                            'name'          => $siteName,
                                            'version'       => '2.0.2',
                                            'poweredByName' => 'WhatACart',
                                            'poweredByUrl'  => 'http://whatacart.com',
                                            'modules'   => [
                                                'report'    =>  [
                                                    'class' => 'common\modules\report\Report',
                                                ]
                                            ],
                                            'environment'   => $environment,
                                            'components' => [
//                                                'urlManager' => array(
//                                                    'class' => 'UrlManager',
//                                                    'urlFormat' => 'path',
//                                                    'hostInfo' => $hostInfo,
//                                                    'secureHostInfo' => $secureHostInfo,
//                                                    'secureRoutes' => array(
//                                                        'site/login',   // site/login action
//                                                        'site/signup',  // site/signup action
//                                                        'settings',     // all actions of SettingsController
//                                                    ),
//                                                ),
                                                'authorizationManager' => ['class' => 'usni\library\modules\auth\business\AuthManager'],
                                                'cache' => [
                                                                'class'     => 'yii\caching\FileCache',
                                                                'keyPrefix' => 'whatacart', //This is very important as it differntiates application cache
                                                                'cachePath' => APPLICATION_PATH . '/runtime/cache'
                                                           ],
                                                'productWeightManager'      => ['class' => 'products\managers\ProductWeightManager'],
                                                'productDimensionManager'   => ['class' => 'products\managers\ProductDimensionManager'],
                                                'assetManager'      => [
                                                                            'resourcesPath' => APPLICATION_PATH . '/resources',
                                                                            'fileUploadPath' => APPLICATION_PATH . '/resources/files',
                                                                            'imageUploadPath' => APPLICATION_PATH . '/resources/images',
                                                                            'thumbUploadPath' => APPLICATION_PATH . '/resources/images/thumbs',
                                                                            'videoUploadPath' => APPLICATION_PATH . '/resources/videos',
                                                                            'imageManagerClass'  => $imageManagerClass,
                                                                            'fileManagerClass'   => $fileManagerClass,
                                                                            'videoManagerClass'  => $videoManagerClass
                                                                        ],
                                                 'moduleManager'      => ['class' => 'usni\library\components\ModuleManager',
                                                                            'modulePaths' => ['@usni/library/modules', '@common/modules', 
                                                                                       '@backend/modules', '@frontend/modules']],
                                            ],
                                            'as beforeRequest'  => ['class' => 'usni\library\web\BeforeRequestBehavior'],
                                            'as beforeAction'   => ['class' => 'backend\web\BeforeActionBehavior']
                                        ]
                );
