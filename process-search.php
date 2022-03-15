<?php

    require_once 'common-functions.php';
    require_once 'common-top.php';

    // Make sure we have search term in the URL
    if( !isset( $_GET['search'] ) || empty( $_GET['search'] ) ) showErrorAndDie( 'Missing search term' );

    // Get the search from the URL
    $search = $_GET['search'];

    echo '<h2>Search Results</h2>';
    echo '<p>Searching diary for <strong>'.$search.'</strong>... ';

    // Make it a wildcard search
    $search = '%'.$search.'%';

    // Prepare a query to get the diary entry for this ID
    $sql='SELECT * FROM entries WHERE notes LIKE ?';

    // Run the query - should only give one result
    $entries = getRecords( $sql, 's', [$search] );

    // Did we get anything back?
    if( sizeof( $entries ) == 0 ) showErrorAndDie( 'No matches found!' );

    // Yes, so show the results
    echo '<strong>'.sizeof( $entries ).' matches</strong> found</p>';


    echo '<ol id="diary-entries">';

    foreach( $entries as $entry ) {

        $date = new DateTime($entry['date']);
        $niceDate = $date->format('D, j M Y' );

        echo '<li>';
        echo   '<a href="show-entry.php?id='.$entry['id'].'">';
        echo     '<h2>'.$niceDate.'</h2>';
        echo     '<p>'.nl2br($entry['notes']).'</p>';
        echo   '</a>';
        echo '</li>';
    }

    echo '</ol>';

    require_once 'common-bottom.php';

?>