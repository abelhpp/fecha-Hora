<?php
// Obtén la fecha actual y la fecha del primero de enero
$fechaActual = new DateTime();
$primeroDeEnero = new DateTime(date('Y-01-01'));

// Calcula la diferencia entre las dos fechas
$intervalo =  $primeroDeEnero->diff($fechaActual);

// Obtiene los componentes de tiempo
$diasRestantes = $intervalo->format('%a');
$horasRestantes = $intervalo->format('%h');
$minutosRestantes = $intervalo->format('%i');
$segundosRestantes = $intervalo->format('%s');
?>
<header>  
    <div class="countdown">
        <h2>Cuenta regresiva para el primero de enero:</h2>
        <div id="countdown-timer">
            <span class="countdown-item" id="dias"><?php echo $diasRestantes; ?></span>
            <span class="countdown-label">Días</span>
            <span class="countdown-item" id="horas"><?php echo $horasRestantes; ?></span>
            <span class="countdown-label">Horas</span>
            <span class="countdown-item" id="minutos"><?php echo $minutosRestantes; ?></span>
            <span class="countdown-label">Minutos</span>
            <span class="countdown-item" id="segundos"><?php echo $segundosRestantes; ?></span>
            <span class="countdown-label">Segundos</span>
        </div>
    </div>
    <nav>
        <ul>
            <li><a class="btn btn-primary" href="http://localhost/fecha/index.php">Inicio</a></li>
            <li><a class="btn btn-primary" href="http://localhost/fecha/index.php?id=1">Hora España</a></li>
            <li><a class="btn btn-primary" href="http://localhost/fecha/index.php?id=2">Hora China</a></li>
            <li><a class="btn btn-primary" href="http://localhost/fecha/index.php?id=3">Hora Australia</a></li>
            
        </ul>
    </nav>
</header>
