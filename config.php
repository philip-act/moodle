<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-54-155-254-112.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('d9cvieemhpbfag');
$CFG->dbuser    = getenv('jtsibxgeeylxui');
$CFG->dbpass    = getenv('9eb5e93122bf7c765db9fc198849d7c33b8292e84766138205d0e334ee8a50de');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://actdigischool.heroku.com');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
