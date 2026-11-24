<?php 
$connect = new mysqli('localhost','root','','wodospady')
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wodospady</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2>Łowcy wodospadów</h2>
    </header>
    <main>
        <aside>
            <?php 
            $sqli ="SELECT idkontynent, nazwa from kontynenty;";
            $wynik = mysqli_query($connect, $sqli);
            while ($a = mysqli_fetch_array($wynik)){
                echo "<a href='index.php?idkontynent=$a[idkontynent]' $a[nazwa]</a>";
            }
            ?>
        </aside>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Identyfikator</th>
                        <th>Państwo</th>
                        <th>Nazwa wodospadu</th>
                        <th>Wysokość</th>
                    <tr>
                </thead>
                skrypt 2
            </table>
            <h4>Wpisz osiągnięcie do bazy</h4>
            <form method="post" action="">
                <label for="identyfikator">identyfikator wodospadu</label>
                <input type="number" name="identyfikator" id="identyfikator">
                <label for="lista">turysta</label>
                <select id="lista" name="lista">
                    skrypt 3
                </select>
                <button type="submit">Wpisz</button>
            </form>
        </section>
    </main>
    <article>
        <h3>Wodospady w Polsce</h3>
        <img src="kamienczyk.jpg" alt="wodospad">
        <img src="siklawica.jpg" alt="wodospad">
        <img src="siklawa.jpg" alt="wodospad">
        <img src="wilczki.jpg" alt="wodospad">
    </article>
    <footer>
        <p>Autor: Marcin</p>
    </footer>
</body>
</html>