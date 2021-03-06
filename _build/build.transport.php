<?php
require_once 'build.class.php';
$resolvers = array(
    'providers',
    'addons',
    'rename_htaccess',
    'remove_changelog',
    'cache_options',
    'template',
    'tvs',
    'resources',
    'settings',
    'set_start_year',
    'fix_translit',
    'manager_customisation'
);
$addons = array(
    array('name' => '', 'packages' => array(
            'simpleUpdater' => '0.1.0-beta',
            'FormIt' => '2.2.10-pl',
            'autoRedirector' => '0.1.0-beta',
            'CKEditor' => '1.3.0-pl',
            'Collections' => '3.4.2-pl',
            'Console' => '2.1.0-beta',
            'MIGX' => '2.9.6-pl',
            'translit' => '1.0.0-beta',
            'VersionX' => '2.1.3-pl'
        )),
    array('name' => 'modstore.pro', 'packages' => array(
            'Ace' => '1.6.5-pl',
            'pdoTools' => '2.5.1-pl',
            'AjaxForm' => '1.1.5-pl',
            'MinifyX' => '1.4.4-pl',
            'phpThumbOn' => '1.3.1-pl',
            'tagElementPlugin' => '1.1.3-pl',
            'frontendManager' => '1.0.8-beta',
            'FastUploadTV' => '1.0.0-pl'
        )),
);
$builder = new siteBuilder('site', '1.3.1', 'beta', $resolvers, $addons);
$builder->build();
