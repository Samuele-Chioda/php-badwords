<?php
// tag php e variabile paragrafo con stringa di testo
    $paragrafo = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,";
// strlen conta le lettere all'interno di una stringa
$numeroLettere = strlen($paragrafo);
// GET pesco e salvo in una variabile la parola inserita nel form dall'utente
$parola = $_GET['parola'];
// str_replace con il primo elemento da sostituire tra parentesi, il secondo elemento che è il sostituto e in fine la variabile interessata 
$paroleSost = str_replace($parola, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Badwords</title>
</head>

<body>
    <main>
        <!-- tag php con variabile paragrafo inserita nel template  -->
        <?php echo $paragrafo ?>
        <div class="Nlettere">
            <?php echo 'la lunghezza del paragrafo è di' . $numeroLettere . 'lettere'; ?>
        </div>
        <div class="Nlettere">
            <!-- action rimanda il dato alla pagina inserita / method tipologia di metodo per ottenimento dati -->
            <form action="./index.php" method="GET">
                <!-- name è il valore inserito dall'utente in questo caso parola che viene poi salvata in una variabile -->
                <input type="text" name="parola" placeholder="scrivi una parola da sost.">
                <button type="submit">Sent</button>
            </form>
        </div>
        <!-- tag php con variabile paragrafo inserita dopo la sostituzione delle parole inserite nel form -->
        <?php echo $paroleSost ?>
    </main>
</body>

</html>