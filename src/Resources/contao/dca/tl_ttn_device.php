<?php

$GLOBALS['TL_DCA']['tl_ttn_device'] = [
    'config' => [
        'dataContainer' => 'Table',
        'switchToEdit' => true,
        'ctable' => ['tl_ttn_message'],
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
                'name'
            ],
            'panelLayout' => 'sort,filter,search,limit'
        ],
        'label' => [
            'fields' => [
                'name'
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
                'label' => &$GLOBALS['TL_LANG']['tl_ttn_device']['edit'],
                'href' => 'act=edit',
                'icon' => 'edit.gif'
            ],
            'copy' => [
                'label' => &$GLOBALS['TL_LANG']['tl_ttn_device']['copy'],
                'href' => 'act=copy',
                'icon' => 'copy.gif'
            ],
            'delete' => [
                'label' => &$GLOBALS['TL_LANG']['tl_ttn_device']['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ]
        ]
    ],
    'palettes' => [
        'default' => '{device_legend},applicationId,name;'
    ],
    'fields' => [
        'id' => [
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ],
        'tstamp' => [
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ],
        'name' => [
            'exclude' => true,
            'search' => true,
            'inputType' => 'text',
            'eval' => [
                'mandatory' => true,
                'tl_class' => 'w50',
                'maxlength' => 255
            ],
            'sql' => "varchar(255) NOT NULL default ''"
        ],
        'applicationId' => [
            'exclude' => true,
            'inputType' => 'select',
            'filter' => true,
            'foreignKey' => 'tl_ttn_application.name',
            'eval' => [
                'tl_class' => 'w50',
                'mandatory' => true
            ],
            'sql' => "int(10) unsigned NOT NULL default '0'",
            'relation' => [
                'type' => 'hasOne',
                'load' => 'eagerly'
            ]
        ],
    ]
];
