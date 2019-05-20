<br><br><br><br>
<center>
<?php
$posts = simplexml_load_file("db/posts.db");

foreach ($posts->post as $post) {
    echo '<table width="60%" style="border: 1px solid blue;">';
    echo '<tbody>';
    echo '<tr>';
    echo '<td align="left"><font color="blue">Szerző: <b>' . $post->owner . '</b></font></td>';
    echo '<td align="center"><font color="blue"><h1>' . $post->title . '</h1></font></td>';
    echo '<td align="right"><font color="blue">' . $post->date . '</font></td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
    echo '<table width="60%" style="border: 1px solid blue;">';
    echo '<tbody>';
    echo '<tr>';
    echo '<td align="justify"><font color="blue">' . $post->body . '</font></td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table><br><br><br>';
}

?>
</center>