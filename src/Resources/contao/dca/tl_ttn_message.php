<?php

$GLOBALS['TL_DCA']['tl_ttn_message'] = [
    'config' => [
        'dataContainer' => 'Table',
        'switchToEdit' => true,
        'enableVersioning' => true,
        'sql' => [
            'keys' => [
                'id' => 'primary'
            ]
        ]
    ],
    'list' => [
        'sorting' => [
            'mode' => 1,
            'flag' => 1,
            'fields' => [
                'deviceId'
            ],
            'panelLayout' => 'sort,filter,search,limit'
        ],
        'label' => [
            'fields' => [
                'deviceId'
            ],
            'format' => '%s'
        ],
        'global_operations' => [
            'all' => [
                'label' => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset();"'
            ]
        ],
        'operations' => [
            'edit' => [
                'label' => &$GLOBALS['TL_LANG']['tl_ttn_message']['edit'],
                'href' => 'act=edit',
                'icon' => 'edit.gif'
            ],
            'copy' => [
                'label' => &$GLOBALS['TL_LANG']['tl_ttn_message']['copy'],
                'href' => 'act=copy',
                'icon' => 'copy.gif'
            ],
            'delete' => [
                'label' => &$GLOBALS['TL_LANG']['tl_ttn_message']['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ]
        ]
    ],
    'palettes' => [
        'default' => '{message_legend},deviceId,message;'
    ],
    'fields' => [
        'id' => [
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ],
        'tstamp' => [
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ],
        'deviceId' => [
            'exclude' => true,
            'inputType' => 'select',
            'filter' => true,
            'foreignKey' => 'tl_ttn_device.name',
            'eval' => array(
                'tl_class' => 'w50',
                'mandatory' => true
            ),
            'sql' => "int(10) unsigned NOT NULL default '0'",
            'relation' => array(
                'type' => 'hasOne',
                'load' => 'eagerly'
            )
        ],
        'message' => [
            'exclude' => true,
            'search' => true,
            'inputType' => 'textarea',
            'eval' => [
            ],
            'sql' => "TEXT default ''"
        ],
    ]
];
