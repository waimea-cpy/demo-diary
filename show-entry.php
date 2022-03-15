<?php

    require_once 'common-functions.php';
    require_once 'common-top.php';

    // showDebugInfo();

    // Make sure we have an ID in the URL
    if( !isset( $_GET['id'] ) || empty( $_GET['id'] ) ) showErrorAndDie( 'Missing ID' );

    // Get the ID from the URL
    $entryID = $_GET['id'];

    // Prepare a query to get the diary entry for this ID
    $sql='SELECT * FROM entries WHERE id=?';

    // Run the query - should only give one result
    $entries = getRecords( $sql, 'i', [$entryID] );

    // Did we get anything back?
    if( sizeof( $entries ) == 0 ) showErrorAndDie( 'Invalid ID' );

    // If we get here, we got an entry
    $entry = $entries[0];

    // Make the date more readable
    $date = new DateTime( $entry['date'] );
    $niceDate = $date->format('D, j M Y' );

?>

<div class="entry">

    <h2><?= $niceDate ?></h2>


    <p><?= nl2br( $entry['notes'] ) ?></p>

    <div class="controls">
        <a onclick="return confirm('Are you sure?');" href="delete-entry.php?id=<?= $entryID ?>"><img src="images/bin.svg"></a>
        <a href="form-edit-entry.php?id=<?= $entryID ?>"><img src="images/pencil.svg"></a>
    </div>

</div>


<?php

    require_once 'common-bottom.php';

?>
