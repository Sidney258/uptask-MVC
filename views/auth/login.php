<div class="contenedor login">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesion</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ?>

        <form action="/" method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email</label>
                <input
                    type="email"
                    placeholder="Tu Email"
                    name="email"
                    id="email">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input
                    type="password"
                    placeholder="Tu Password"
                    name="password"
                    id="password">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesion">
        </form>
        <div class="acciones">
            <a href="/crear">Aun no tienes una cuenta? obtener una</a>
            <a href="/olvide">Olvidaste tu cuenta?</a>
        </div>
    </div>
</div>