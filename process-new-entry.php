<?php
    require_once "common-functions.php";
    require_once "common-top.php";

    echo '<h2>Processing...</h2>';

    $date  = $_POST['date'];
    $notes = $_POST['notes'];

    echo '<h2>Connecting to server...</h2>';

    $sql = 'INSERT INTO entries (date, notes)
            VALUES (?,?)';

    $DEBUG = $sql;

    modifyRecords( $sql, 'ss', [$date, $notes] );

    echo '<h2>New diary entry added!</h2>';

    addRedirect( 2000, 'index.php' );
    
    require_once "common-bottom.php";
?>