<?php
 
// DB table to use
$table = 'Usuario';
 
// Table's primary key
$primaryKey = 'Usuario_Id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'Usuario_Id', 'dt' => 0 ),
    array( 'db' => 'Usuario_Correo',  'dt' => 1 ),
    array( 'db' => 'Usuario_Pass',   'dt' => 2 ),
    array( 'db' => 'Tipo_Usuario_Id','dt' => 3)
   
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'ptsnbd',
    'pass' => 'ptsn2022',
    'db'   => 'ptsnbd',
    'host' => 'db4free.net'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'vendor/DataTables/server-side/scripts/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);