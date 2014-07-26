<?php

global $project;
$project = 'mysite';

global $database;
$database = '(databasename)';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');
Director::setBaseURL('https://phoned-c9-marcz.c9.io/');