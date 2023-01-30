<h2 class="dashboard__heading"> <?php echo $titulo; ?> </h2>

<main class="bloques">
    <div class="bloques__grid">

        <!-- Asistentes Registrados -->
        <div class="bloque">
            <h3 class="bloque__heading">Últimos Registros</h3>

            <?php foreach($registros as $registro): ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Ingresos obtenidos -->
        <div class="bloque">
            <h3 class="bloque__heading">Ingresos</h3>

            <p class="bloque__texto--cantidad">$ <?php echo $ingresos; ?> USD</p>
        </div>

        <!-- Eventos -->

        <!-- Con mayor afluencia -->
        <div class="bloque">
            <h3 class="bloque__heading">Eventos con Menos Lugares Disponibles</h3>
            <?php foreach($menos_disponibles as $evento): ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <?php echo $evento->nombre . " - " . $evento->disponibles . ' Disponibles'; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Con menor afluencia -->
        <div class="bloque">
            <h3 class="bloque__heading">Eventos con Más Lugares Disponibles</h3>
            <?php foreach($mas_disponibles as $evento): ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <?php echo $evento->nombre . " - " . $evento->disponibles . ' Disponibles'; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>