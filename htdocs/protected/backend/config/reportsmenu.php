<?php
use usni\library\utils\MenuUtil;
use usni\UsniAdaptor;

$subItems = [    
                [
                    'label'     => MenuUtil::wrapLabel(UsniAdaptor::t('order', 'Workshops')),
                    'url'       => ['/report/default/index'],
                    'visible'   => UsniAdaptor::app()->user->can('access.report'),
                ]
            ];
return [
            'label'       => MenuUtil::getSidebarMenuIcon('bar-chart') .
                                     MenuUtil::wrapLabel(UsniAdaptor::t('application', 'Reports')),
            'url'         => '#',
            'itemOptions' => ['class' => 'navblock-header'],
            'items' => $subItems
        ];

