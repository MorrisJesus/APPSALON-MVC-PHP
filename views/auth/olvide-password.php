<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiento tu email a continuacion</p>
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" method="POST" action="/olvide">
    
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email" />
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>
<div class="acciones">
    <a href="/">Ya tienes una cuenta? Inicia Sesion</a>
    <a href="/crear-cuenta">Aun no tiene una cuenta? Crear una</a>
</div>