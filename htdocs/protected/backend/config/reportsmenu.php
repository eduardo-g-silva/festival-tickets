<?php
use usni\library\utils\MenuUtil;
use usni\UsniAdaptor;

$subItems = [
                [
                    'label'     => MenuUtil::wrapLabel(UsniAdaptor::t('order', 'Dancers')),
                    'url'       => ['/report/default/dancers'],
                    'visible'   => UsniAdaptor::app()->user->can('access.report'),
                ],
                [
                    'label'     => MenuUtil::wrapLabel(UsniAdaptor::t('order', 'Workshops Registration')),
                    'url'       => ['/report/default/workshops'],
                    'visible'   => UsniAdaptor::app()->user->can('access.report'),
                ],
                [
                    'label'     => MenuUtil::wrapLabel(UsniAdaptor::t('order', 'Workshops: Godoy & Berra')),
                    'url'       => ['/report/default/wgodoy'],
                    'visible'   => UsniAdaptor::app()->user->can('access.report'),
                ],
                [
                    'label'     => MenuUtil::wrapLabel(UsniAdaptor::t('order', 'Workshops: Duran & Sanchez')),
                    'url'       => ['/report/default/wduran'],
                    'visible'   => UsniAdaptor::app()->user->can('access.report'),
                ],
                [
                    'label'     => MenuUtil::wrapLabel(UsniAdaptor::t('order', 'Workshops: Bogado & Zuccarino')),
                    'url'       => ['/report/default/wbogado'],
                    'visible'   => UsniAdaptor::app()->user->can('access.report'),
                ],
                [
                    'label'     => MenuUtil::wrapLabel(UsniAdaptor::t('order', 'Workshops: Juan & Stephania')),
                    'url'       => ['/report/default/wjuan'],
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

