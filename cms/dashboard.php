<center>
    <font color="blue"><h1>CMS</h1></font>
    <a href="/backend/logout.php">[X] Kilépés</a>
</center>

<font color="blue"><h2>Poszt létrehozása</h2></font>
<form method="post" action="/backend/postcreate.php">
    <input id="title" name="title" type="text" placeholder="Cím">
    <br>
    <textarea id="body" name="body" rows="10" cols="100" placeholder="Szöveg"></textarea>
    <br>
    <input type="submit" value="Kiírás">
</form>

<font color="blue"><h2>Posztok</h2></font>
<table width="20%" style="border: 1px solid blue;">

    <tbody>
    <tr>
        <td><font color='blue'>Szerző</font></td>
        <td><font color='blue'>Cím</font></td>
    </tr>
    <?php
    $posts = simplexml_load_file("db/posts.db");
    foreach ($posts->post as $post) {
        echo "<tr>";
        echo "<td><font color='blue'>" . $post->owner . "</font></td>";
        echo "<td><font color='blue'>" . $post->title . "</font></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<font color="blue"><h2>Instagram profil</h2></font>

