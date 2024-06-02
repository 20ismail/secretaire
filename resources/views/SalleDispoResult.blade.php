<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salle Disponibilité Résultats</title>
    <link rel="stylesheet" href="path_to_your_css_file.css">
    <link rel="stylesheet" href="{{ asset('assets\css_secretaire\styDis.css') }}"> <!-- Link to your CSS file -->
   
</head>
<body>
    <h1>Disponibilité des Salles</h1>
    <p>Jeudi Matin Amphi: {{ $jeudiMatinAmphi }}</p>
    <p>Jeudi Après-midi Amphi: {{ $jeudiApresmidiAmphi }}</p>
    <!-- Display other data similarly -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- jQuery CDN -->
    <script src="{{ asset('js/scripts.js') }}"></script> <!-- Link to your JavaScript file -->

</body>
</html>
