<?php 
// Activar tipos estrictos.
declare(strict_types=1);

function render_template(string $template, array $data = []) {
    //extraer los datos
    extract($data);

    // incluir el archivo de la plantilla
    require "templates/$template.php";
}
?>

<?php render_template("head", $data = [])?>
<?php render_template("body", $data = [])?>


