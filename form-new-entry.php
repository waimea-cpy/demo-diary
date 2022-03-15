<?php

    require_once 'common-top.php';

?>

<form method="POST" action="process-new-entry.php">

    <h2>Add a New Diary Entry</h2>

    <label>Date</label>
    <input name="date" type="date" required>

    <label>Notes</label>
    <textarea name="notes" required></textarea>

    <input type="submit" value="Add Entry">
    
</form>


<?php

    require_once 'common-bottom.php';

?>

