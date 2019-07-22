<?php

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'postyou',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Hooks
    'postyou\IsotopeNotificationHooks'                     => 'system/modules/isotope_notification_extension/hooks/IsotopeNotificationHooks.php',

));