<?php

    require_once 'common-top.php';

?>

<form method="GET" action="process-search.php">

    <h2>Search Diary Entries</h2>

    <label>Search for...</label>
    <input name="search" type="text" required>

    <input type="submit" value="Search">
    
</form>


<?php

    require_once 'common-bottom.php';

?>

