<?php

defined('TYPO3') or die();

call_user_func(static function () {
    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'vt12',
        'Configuration/TypoScript/',
        'VT12 Sitepackage'
    );
});