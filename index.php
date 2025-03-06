<?php

require_once 'scripts/render.php';
require_once 'classes/ApiClient.php';

$apiClient = new ApiClient('https://rickandmortyapi.com/api/');
$data = $apiClient->fetchData();

// Extraer URLs específicas de los personajes, localizaciones y episodios.
$charactersUrl = $data['characters'] ?? ''; // si es null se mostrará ?? y si es tá vacío se mostrará ''
$locationsUrl = $data['locations'] ?? '';
$episodesUrl = $data['episodes'] ?? '';

// Obtener datos de personajes
$apiClientCharacters = new ApiClient($charactersUrl);
$charactersData = $apiClientCharacters->fetchData();
// Verificar el contenido de $charactersData
//var_dump($charactersData);
// Obtener datos de api/characters

?>

<!doctype html>
<html lang="en">
<?php render_template("head", $charactersData) ?>
<?php render_template("body", $charactersData) ?>
</html>
