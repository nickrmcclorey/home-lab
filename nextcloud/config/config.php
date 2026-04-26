<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'occ05bwbqvuk',
  'passwordsalt' => 'nFdagaCSY1mOsnjJhk1UHNS2XfZLJd',
  'config_is_read_only' => true,
  'trusted_domains' => 
  array (
    0 => 'nc.mcclorey.xyz',
  ),
  'trusted_proxies' => 
    array (
      0 => '172.16.0.10',
    ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '31.0.9.1',
  'overwrite.cli.url' => 'http://nc.mcclorey.xyz',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextclouddb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'dbpassword',
  'installed' => true,
  'maintenance' => false,
);
