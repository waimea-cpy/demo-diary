<?php
    require_once "common-functions.php";
    require_once "common-top.php";

    // showDebugInfo();

    echo '<h2>Processing...</h2>';

    $id    = $_POST['id'];
    $date  = $_POST['date'];
    $notes = $_POST['notes'];

    echo '<h2>Connecting to server...</h2>';

    $sql = 'UPDATE entries 
            SET date=?, notes=?
            WHERE id=?';

    modifyRecords( $sql, 'ssi', [$date, $notes, $id] );

    echo '<h2>Diary entry updated!</h2>';

    addRedirect( 2000, 'index.php' );
    
    require_once "common-bottom.php";
?>