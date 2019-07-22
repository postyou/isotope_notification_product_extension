<?php

namespace postyou;

class IsotopeNotificationHooks extends \Backend {

    public function checkProductInMessage($objMessage, $arrTokens, $language, $objGatewayModel ) {

        if (!empty($objMessage->iso_product)) {

            $returnVal = true;
            foreach ($_SESSION['products'] as $product) {
                if ($product['product_id'] == $objMessage->iso_product) {
                    return true;
                }
            }
            return false;
        }

        return true;


    }

    public function setOrderToSession($objOrder, $objModule) {
        $objResult = \Database::getInstance()->prepare("SELECT * FROM tl_iso_product_collection_item where pid=?")->execute($objOrder->source_collection_id);
        $_SESSION['products'] = $objResult->fetchAllAssoc();

        return true;
    }

}