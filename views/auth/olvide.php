<div class="contenedor olvide">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu Acceso UpTask</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ?>

        <form action="/olvide" method="POST" class="formulario">

            <div class="campo">
                <label for="email">Email</label>
                <input
                    type="email"
                    placeholder="Tu Email"
                    name="email"
                    id="email">
            </div>

            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>
        <div class="acciones">
            <a href="/">Ya tienes cuenta? Iniciar Sesion</a>
            <a href="/crear">Aun no tienes una cuenta? obtener una</a>
        </div>
    </div>
</div>