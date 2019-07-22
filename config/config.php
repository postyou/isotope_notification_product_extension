<?php

$GLOBALS['TL_HOOKS']['sendNotificationMessage'][] = array('postyou\IsotopeNotificationHooks', 'checkProductInMessage');

$GLOBALS['ISO_HOOKS']['preCheckout'][] = array('postyou\IsotopeNotificationHooks', 'setOrderToSession');