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
?>



<form method="POST" action="process-edit-entry.php">

    <h2>Edit Diary Entry</h2>

    <input name="id" type="hidden" value="<?= $entryID ?>">

    <label>Date</label>
    <input name="date" type="date" value="<?= $entry['date'] ?>" required>

    <label>Notes</label>
    <textarea name="notes" required><?= $entry['notes'] ?></textarea>

    <input type="submit" value="Update Entry">
    
</form>


<?php

    require_once 'common-bottom.php';

?>

