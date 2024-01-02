<?php require ('partials/head.view.php') ?>

    <h1>Iniciar sesión</h1>

    <form action="/login" method="POST">
        <input style="margin-top: 10px;" type="text" name="email" placeholder="Introduce tu nombre">
        <input style="margin-top: 10px;" type="password" name="password" placeholder="Introduce tu password">
        <button style="margin-top: 10px;" type="submit">Entrar</button>
    </form>

<?php require ('partials/footer.view.php') ?>