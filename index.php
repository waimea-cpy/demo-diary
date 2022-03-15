<?php

    require_once 'common-functions.php';
    require_once 'common-top.php';

    // The query to get all the diary entries
    $sql = 'SELECT id, date, notes 
            FROM entries
            ORDER BY date DESC';

    // Run the query on the server to get data
    $entries = getRecords( $sql );


    echo '<ol id="diary-entries">';

    foreach( $entries as $entry ) {

        $date = new DateTime($entry['date']);
        $niceDate = $date->format('D, j M Y' );

        echo '<li class="entry">';
        echo   '<a href="show-entry.php?id='.$entry['id'].'">';
        echo     '<h2>'.$niceDate.'</h2>';
        echo     '<p>'.nl2br($entry['notes']).'</p>';
        echo   '</a>';
        echo '</li>';
    }

    echo '</ol>';
?>

        <a href="form-new-entry.php" id="add-new">
            <img src="images/plus.svg">
        </a>

<?php

    require_once 'common-bottom.php';

?>