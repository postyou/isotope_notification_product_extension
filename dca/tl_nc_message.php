<?php

$GLOBALS['TL_DCA']['tl_nc_message']['palettes']['email'] = str_replace('{languages_legend},languages;', '{languages_legend},languages;{iso_legend},iso_product;', $GLOBALS['TL_DCA']['tl_nc_message']['palettes']['email']);


$GLOBALS['TL_DCA']['tl_nc_message']['fields']['iso_product'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_nc_message']['iso_product'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'select',
    'foreignKey'              => 'tl_iso_product.name',
    'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
    'sql'                     => "int(10) unsigned NOT NULL default '0'",
    'relation'                => array('type'=>'hasOne', 'load'=>'lazy'),
//    'save_callback' => array
//    (
//        // Save gateway_type
//        function($varValue, $dc) {
//            \Database::getInstance()->prepare("UPDATE tl_nc_message SET gateway_type=(SELECT type FROM tl_nc_gateway WHERE id=?) WHERE id=?")->execute($varValue, $dc->id);
//            \Database::getInstance()->prepare("UPDATE tl_nc_language SET gateway_type=(SELECT type FROM tl_nc_gateway WHERE id=?) WHERE pid=?")->execute($varValue, $dc->id);
//            return $varValue;
//        }
//    ),
);