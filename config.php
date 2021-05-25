<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-3-234-85-177.compute-1.amazonaws.com');
$CFG->dbname    = getenv('deetvsj6vsvuc4');
$CFG->dbuser    = getenv('vyrxxdbdihaoby');
$CFG->dbpass    = getenv('24951e33b2ed9d0dce579dfbe003d6df150a02df8b053a3d8c1ce4c4f564ff9e');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('https://fiofanana.herokuapp.com/');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
