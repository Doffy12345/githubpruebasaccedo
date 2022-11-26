<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PokeAPI</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<body>
    <?php
$pokemon = '2';

$api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
curl_setopt($api, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($api);
curl_close($api);

$json = json_decode($response);

echo "<h2>Nombre Pokémon:</h2>";
echo $json->forms[0]->name;

echo '<h2>Habilidades</h2>';
foreach($json->abilities as $k => $v) {
    echo $v->ability->name.'<br>';
}

echo '<h2>Tipo</h2>';
echo $json->types[0]->type->name;

echo '<h2>Fotos</h2>';
echo '<img src="'.$json->sprites->back_default.'" width="200">';
echo '<img src="'.$json->sprites->front_default.'" width="200">';
?>
</body>
</html>
