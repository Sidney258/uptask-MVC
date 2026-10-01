<div class="contenedor crear">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu cuenta en UpTask</p>
        <?php include_once __DIR__ . '/../templates/alertas.php' ?>
        <form action="/crear" method="POST" class="formulario">

            <div class="campo">
                <label for="nombre">Nombre</label>
                <input
                    type="text"
                    placeholder="Tu Nombre"
                    name="nombre"
                    id="nombre"
                    value="<?= $usuario->nombre  ?>">
            </div>

            <div class="campo">
                <label for="email">Email</label>
                <input
                    type="email"
                    placeholder="Tu Email"
                    name="email"
                    id="email"
                    value="<?= $usuario->email ?>">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input
                    type="password"
                    placeholder="Tu Password"
                    name="password"
                    id="password">
            </div>

            <div class="campo">
                <label for="password2">Repetir Password</label>
                <input
                    type="password"
                    placeholder="Repite tu Password"
                    name="password2"
                    id="password2">
            </div>

            <input type="submit" class="boton" value="Crear Cuenta">
        </form>
        <div class="acciones">
            <a href="/">Ya tienes cuenta? Iniciar Sesion</a>
            <a href="/olvide">Olvidaste tu cuenta?</a>
        </div>
    </div>
</div>