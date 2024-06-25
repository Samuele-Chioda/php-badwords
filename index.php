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
        <?php
        $paragrafo = "Nel mezzo del cammin di nostra vita
                mi ritrovai per una selva oscura,
                ché la diritta via era smarrita.
                Ahi quanto a dir qual era è cosa dura
                esta selva selvaggia e aspra e forte
                che nel pensier rinova la paura!
                Tant’è amara che poco è più morte;
                ma per trattar del ben ch’i’ vi trovai,
                dirò de l’altre cose ch’i’ v’ ho scorte.
                Io non so ben ridir com’i’ v’intrai,
                tant’era pien di sonno a quel punto
                che la verace via abbandonai. Nel mezzo del cammin di nostra vita
                mi ritrovai per una selva oscura,
                ché la diritta via era smarrita.
                Ahi quanto a dir qual era è cosa dura
                esta selva selvaggia e aspra e forte
                che nel pensier rinova la paura!
                Tant’è amara che poco è più morte;
                ma per trattar del ben ch’i’ vi trovai,
                dirò de l’altre cose ch’i’ v’ ho scorte.
                Io non so ben ridir com’i’ v’intrai,
                tant’era pien di sonno a quel punto
                che la verace via abbandonai. Nel mezzo del cammin di nostra vita
                mi ritrovai per una selva oscura,
                ché la diritta via era smarrita.
                Ahi quanto a dir qual era è cosa dura
                esta selva selvaggia e aspra e forte
                che nel pensier rinova la paura!
                Tant’è amara che poco è più morte;
                ma per trattar del ben ch’i’ vi trovai,
                dirò de l’altre cose ch’i’ v’ ho scorte.
                Io non so ben ridir com’i’ v’intrai,
                tant’era pien di sonno a quel punto
                che la verace via abbandonai.";
                $paragrafo = str_replace('selva', '***', $paragrafo);
        echo $paragrafo;
        ?>
    </main>
</body>

</html>