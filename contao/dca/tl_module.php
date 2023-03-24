<?php

/* Fields */
$GLOBALS['TL_DCA']['tl_module']['fields']['alias'] = [
    'search' => true,
    'inputType' => 'text',
    'eval' => ['mandatory' => false, 'unique' => true, 'tl_class' => 'w100 clr'],
    'sql' => ['type' => 'string', 'length' => 255, 'default' => ''],
];
