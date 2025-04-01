<?php



$discsString = file_get_contents('./dischi.json');
$discs = json_decode($discsString, true);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script src=""></script>
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Jsont</title>
</head>

<body>

    <h1>Inserisci un nuovo disco</h1>
    <br>
    <form action="./server.php" method="post">
        <input type="text" name="titolo" id="titolo"><label for="titolo" required>Titolo</label>
        <input type="text" name="artista" id="artista"><label for="artista" required>Artista</label>
        <input type="text" name="genere" id="genere"><label for="genere">Genere</label>
        <input type="text" name="urlCover" id="urlCover" required><label for="urlCover">Copertina</label>
        <input type="date" name="annoPubblicazione" id="annoPubblicazione" required><label for="annoPubblicazione">Anno
            di
            Pubblicazione</label>
        <button type="submit">Inserisci Disco</button>
    </form>
    <br>
    <hr>
    <div class="container d-flex justify-content-between">
        <?php
        foreach ($discs as $disc) {
            ?>

            <div class="card">
                <img src="<?php echo $disc['urlCover'] ?>" class="card-img-top" alt="<?php echo $disc['urlCover'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $disc['titolo'] ?></h5>
                    <p class="card-text"><?php echo $disc['artista'] ?></p>
                    <p class="card-text"><?php echo $disc['annoPubblicazione'] ?></p>
                    <p class="card-text"><?php echo $disc['genere'] ?></p>
                </div>
            </div>

            <?php
        }
        ?>
    </div>
</body>

</html>