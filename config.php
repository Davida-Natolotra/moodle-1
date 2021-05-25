<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-3-212-75-25.compute-1.amazonaws.com';
$CFG->dbname    = 'd2cc0gndojds6p';
$CFG->dbuser    = 'klooeletpnrgqp';
$CFG->dbpass    = '2668e3447914bd576a7d74f4ca479db72fdde645465b2b4a6e74ae983efe0dcc';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://fiofananamg.herokuapp.com';
$CFG->dataroot  = '/tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
