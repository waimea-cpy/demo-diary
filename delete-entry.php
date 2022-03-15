<?php

    require_once 'common-functions.php';
    require_once 'common-top.php';

    // Make sure we have an ID in the URL
    if( !isset( $_GET['id'] ) || empty( $_GET['id'] ) ) showErrorAndDie( 'Missing ID' );

    // Get the ID from the URL
    $entryID = $_GET['id'];

    // Prepare a query to delete the diary entry for this ID
    $sql='DELETE FROM entries WHERE id=?';

    // Run the query 
    modifyRecords( $sql, 'i', [$entryID] );

    // If we get here, it worked!
    showStatus( 'Entry deleted successfully' );
    addRedirect( 2000, 'index.php' );

    require_once 'common-bottom.php';
?>