<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die('Access denied.');

ExtensionManagementUtility::registerPageTSConfigFile(
    'vt12',
    'Configuration/TsConfig/Page/first_conf.tsconfig',
    'Default Backendlayouts');
