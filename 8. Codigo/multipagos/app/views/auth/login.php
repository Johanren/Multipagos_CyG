<div class="login">
  <section class="login-marca login-marca-img">
    <img class="login-logo" src="<?= e(asset('img/logo.png')) ?>" alt="Multipagos C&amp;G" width="168" height="168">
    <h1>Sistema de<br><em>gestión operativa</em></h1>
    <p>Módulos de Parametrización, Ventas, Inventario, Caja, PyG y Reportes <br>centralizados en una sola herramienta.</p>
    <img class="login-modulos" src="<?= e(asset('img/login-modulos.jpg')) ?>" width="2000" height="1125"
         alt="Todo tu negocio en una sola herramienta: Parametrización, Ventas, Inventario, Caja, PyG y Reportes.">
  </section>

  <section class="login-form">
    <form method="post" action="<?= e(url('login')) ?>" class="tarjeta-login" autocomplete="on" novalidate data-envio-unico data-normal>
      <span class="sobre">Acceso del personal</span>
      <h2>Ingresar</h2>
      <p class="suave">Use el usuario asignado por el administrador.</p>

      <?php foreach ($avisos as $f): ?>
        <div class="aviso aviso-<?= e($f['tipo']) ?>"><?= icon('alert') ?><span><?= e($f['mensaje']) ?></span></div>
      <?php endforeach; ?>
      <?php if ($error): ?>
        <div class="aviso aviso-error" role="alert"><?= icon('x') ?><span><?= e($error) ?></span></div>
      <?php endif; ?>

      <?= Csrf::field() ?>
      <label class="campo">
        <span>Usuario</span>
        <input type="text" name="usuario" value="<?= e($usuario) ?>" maxlength="40" autocomplete="username"
               autocapitalize="none" spellcheck="false" required autofocus>
      </label>
      <label class="campo">
        <span>Contraseña</span>
        <span class="con-boton">
          <input type="password" name="clave" maxlength="128" autocomplete="current-password" required data-clave>
          <button type="button" class="ver-clave" data-ver-clave aria-label="Mostrar contraseña"><?= icon('eye') ?></button>
        </span>
      </label>
      <button class="btn btn-primario btn-bloque" type="submit"><?= icon('lock') ?>Ingresar</button>
      <p class="nota-seg"><?= icon('shield') ?>Conexión protegida. Tras 5 intentos fallidos la cuenta se bloquea 15 minutos.</p>
    </form>
  </section>
</div>
