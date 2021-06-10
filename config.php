<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-52-5-1-20.compute-1.amazonaws.com';
$CFG->dbname    = 'df9l9cqbsalacl';
$CFG->dbuser    = 'zkeokuwualvykc';
$CFG->dbpass    = 'e64d492cf23a59e8fdc52d70f6db16712c47ac9b014b2125294820db9b737c83';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '5432',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://fiofanana.herokuapp.com';
$CFG->dataroot  = '/tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
