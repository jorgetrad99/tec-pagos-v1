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
                Crea tu cuenta</div>
            <form action="#">
                <div class="field">
                    <input type="text" required>
                    <label>Nombre(s)</label>
                </div>
                <div class="field">
                    <input type="text" required>
                    <label>Apellido Paterno</label>
                </div>
                <div class="field">
                    <input type="text" required>
                    <label>Apellido Materno</label>
                </div>
                <div class="field">
                    <input type="number" min="0" max="99999999" required>
                    <label>Número de Control</label>
                </div>
                <div class="field">
                    <input type="email" required>
                    <label>Correo Institucional</label>
                </div>
                <div class="field">
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="field">
                    <input type="password" required>
                    <label>Repita la contraseña</label>
                </div>
                <div class="field">
                    <input type="submit" value="Crear Cuenta">
                </div>

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