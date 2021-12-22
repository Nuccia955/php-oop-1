<?php
require_once __DIR__ . '/scripts/classes.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1: Movies</title>
</head>
<body>
    <ul class="movielist">
        <?php 
        $movie1 = new Movie('Spiderman-3', 'Film/Adventure/Fantasy', "La vita è meravigliosa per Peter Parker: ama, ricambiato, Mary Jane Watson, è idolatrato dalla popolazione e dalla stampa, nessun cattivo sembra resistergli. Le cose cambiano quando da un meteorite caduto nei pressi di New York, emerge un parassita che si insinua nel suo costume: lo sgradito ospite ha la capacità di scavare nell'animo dell'eroe e di fargli mostrare il suo lato peggiore. Intanto, nuovi e vecchi nemici si dimostrano più pericolosi del previsto ed anche Mary Jane, delusa dal comportamento del 'nuovo' Peter lo abbandona....Riuscirà Spiderman a sconfiggere gli avversari e riconquistare il cuore della sua amata?")
        ?>
        <li class="movie">
            <h3 class="movie-title"><?php echo $movie1->title ?></h3>
            <h4 class="movie-genre"><?php echo $movie1->genre ?></h4>
            <p class="movie-weft"><?php echo $movie1->weft ?></p>
        </li>
        <?php 
        $movie2 = new Movie('Una poltrona per due', 'Film/Commedia', 'Randolph e Mortimer Duke sono due finanzieri di Filadelfia. Louis Winthorpe III (Aykroyd) è il loro delfino, e promesso sposo della loro nipote. Billy Ray Valentine (Murphy) è un poveraccio che si finge cieco per intascare qualche elemosina. Per una scommessa tra i due Duke Valentine entra nella stanza dei bottoni, Louis finisce tra i barboni. Winthorpe rischia il suicidio, ma lo salva Ophelia (Curtis) una caritatevole prostituta. Valentine, intanto, ha un grande successo nel mondo dell’alta finanza…')
        ?>
        <li class="movie">
            <h3 class="movie-title"><?php echo $movie2->title ?></h3>
            <h4 class="movie-genre"><?php echo $movie2->genre ?></h4>
            <p class="movie-weft"><?php echo $movie2->weft ?></p>
        </li>
    </ul>
</body>
</html>