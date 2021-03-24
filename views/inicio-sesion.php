<?php
include '../layouts/header.php';
?>
<!-- Main Site Section -->
<link rel="stylesheet" href="../css/formulario.css">
<main>


    <!-- ---------- Site Content ---------- -->
    <section class="site-title">
        <div class="wrapper">
            <div class="title">
                Inicio de Sesión</div>
            <form action="#">
                <div class="field">
                    <input type="number" min="0" max="99999999" required>
                    <label>Número de Control</label>
                </div>
                <div class="field">
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Recuerdame</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <div class="field">
                    <input type="submit" value="Iniciar sesión">
                </div>
                <div class="signup-link">
                    ¿No tienes cuenta? <a href="./registro.php">Crear cuenta</a></div>
            </form>
        </div>
    </section>
    <!-- -----x----- Site Content -----x----- -->

</main>

<!-- Jquery Library File -->
<script src="../js/jquery3.5.1.min.js"></script>
<script src="../js/main.js"></script>
</body>
<!-- ----x--- Main Site Section ---x---- -->
<?
include '../layouts/footer.php';