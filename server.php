<?php
 
// DB table to use
$table = 'sensor';
 
// Table's primary key
$primaryKey = 'IdSensor';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'IdSensor', 'dt' => 0 ),
    array( 'db' => 'Temperatura',  'dt' => 1 ),
    array( 'db' => 'Humedad',   'dt' => 2 ),
    array( 'db' => 'Fechayhora','dt' => 3,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    )
   
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'ptsm',
    'pass' => 'ptsm2022',
    'db'   => 'ptsn_bd',
    'host' => 'mysql.face.ubiobio.cl'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'vendor/DataTables/server-side/scripts/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);