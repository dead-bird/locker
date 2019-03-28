<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

return [
  '*' => [
    'siteUrl' => 'https://locker.deadbird.dev',
    'defaultWeekStartDay' => 1,
    'omitScriptNameInUrls' => true,
    'cpTrigger' => 'manage',
    'securityKey' => getenv('SECURITY_KEY'),
    'useProjectConfigFile' => false,
  ],

  'dev' => [
    'devMode' => true,
    'siteUrl' => getenv('SITE_URL'),
  ],

  'staging' => [
  ],
];
