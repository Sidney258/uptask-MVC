<div class="contenedor reestablecer">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu nuevo Password</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ?>

        <?php if ($mostrar) { ?>

            <form method="POST" class="formulario">

                <div class="campo">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        placeholder="Tu Password"
                        name="password"
                        id="password">
                </div>

                <input type="submit" class="boton" value="Guardar Password">
            </form>
        <?php } ?>
        <div class="acciones">
            <a href="/">Ya tienes cuenta? Iniciar Sesion</a>
            <a href="/crear">Aun no tienes una cuenta? obtener una</a>
        </div>
    </div>
</div>