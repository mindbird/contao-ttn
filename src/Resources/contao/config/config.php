<?php

$GLOBALS ['BE_MOD'] ['contao-ttn'] ['application'] = [
    'tables' => [
        'tl_ttn_application'
    ]
];

$GLOBALS ['BE_MOD'] ['contao-ttn'] ['device'] = [
    'tables' => [
        'tl_ttn_devices'
    ]
];

$GLOBALS['TL_MODELS']['tl_ttn_application'] = \Mindbird\Contao\TheThingsNetwork\Models\ApplicationModel::class;
$GLOBALS['TL_MODELS']['tl_ttn_device'] = \Mindbird\Contao\TheThingsNetwork\Models\DeviceModel::class;
$GLOBALS['TL_MODELS']['tl_ttn_message'] = \Mindbird\Contao\TheThingsNetwork\Models\MessageModel::class;
