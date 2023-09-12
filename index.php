<?php include 'view/partiales/head.php'; ?>

<?php include 'view/partiales/header.php'; ?>


<?php
// Define un arreglo con las zonas horarias y nombres de países correspondientes
$zonasHorarias = [
    'America/Argentina/Buenos_Aires' => 'Argentina',
    'Europe/Madrid' => 'España',
    'Asia/Shanghai' => 'China',
    'Australia/Sydney' => 'Australia'
];

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Verifica si $id está dentro del rango de índices válidos en $zonasHorarias
if ($id >= 0 && $id < count($zonasHorarias)) {
    $zonaHoraria = array_keys($zonasHorarias)[$id];
    $pais = $zonasHorarias[$zonaHoraria];
} else {
    // Si $id no es válido, utiliza Argentina como predeterminado
    $zonaHoraria = 'America/Argentina/Buenos_Aires';
    $pais = 'Argentina';
}

// Crea una instancia de DateTime con la zona horaria seleccionada
date_default_timezone_set($zonaHoraria);
$hora = date('H:i:s');

// Obtiene la hora formateada
//$horaFormateada = $hora->format('H:i:s');

?>

<main>
    <div class="reloj">
        <h1>Reloj en <?= $pais ?></h1>
        <div id="hora">
            <?= $hora ?>
        </div>
    </div>
</main>


<?php include 'view/partiales/footer.php'; ?>





