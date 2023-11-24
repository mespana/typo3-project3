<?php
namespace Deployer;

require 'recipe/typo3.php';

// Project name
set('application', 'typo3-project3');

// Project repository
set('repository', 'https://github.com/mespana/typo3-project3.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// To solve this issue: Cant't detect http user name. Please set up the 'http_user' config parameter.
set('http_user', 'www-data');
set('writable_mode', 'chmod');
set('use_relative_symlink', '0');


// Hosts

host('ftp109730-2622751@marianaespana.com')
    ->set('deploy_path', '~/www/marianaespana/proyectos/typo3-project3/');

//DocumentRoot / WebRoot for the TYPO3 automaticInstallation
set('typo3_webroot', 'public');


/**
 * Main TYPO3 task  
 */
desc('Deploys your project');
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'deploy:publish',
]);

/**
 * Shared directories
 */
set('shared_dirs', [
  '{{typo3_webroot}}/fileadmin',
  '{{typo3_webroot}}/typo3temp',
  '{{typo3_webroot}}/uploads'
]);

/**
 * Shared files
 */
set('shared_files', [
  '{{typo3_webroot}}/.htaccess'
]);

/** 
 * Writable dirs by web server
 */ 
set('writable_dirs', [
  'config',
  'var',
  '{{typo3_webroot}}/fileadmin',
  '{{typo3_webroot}}/typo3temp',
  '{{typo3_webroot}}/typo3conf',
  '{{typo3_webroot}}/uploads'
]);

// Tasks
desc('Prepares a new release');
task('deploy:prepare', [
    'deploy:info',
    'deploy:setup',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
]);

desc('Publishes the release');
task('deploy:publish', [
    'deploy:symlink',
    'deploy:unlock',
    'deploy:cleanup',
    'deploy:success',
]); 

// Hooks
after('deploy:failed', 'deploy:unlock');
