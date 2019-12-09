<?php
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
use usni\UsniAdaptor;

$title          = UsniAdaptor::t('users', 'Register to Championship');
$this->bodyClass = 'registration championship';
$this->title    = $title;
$this->params['breadcrumbs'] = [    
                                    [
                                        'label' => UsniAdaptor::t('customer', 'My Account'),
                                        'url'   => ['/customer/site/my-account']
                                    ],
                                    [
                                        'label' => UsniAdaptor::t('users', 'Register to Championship')
                                    ]
                               ];
echo $this->render('/front/_formchampionship', ['formDTO' => $formDTO]);