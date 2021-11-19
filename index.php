<!DOCTYPE html>
<html lang="en">

<body>

    <main>

        <div class="contenedor__todo">
              <div class="caja__trasera">
                  <div class="caja__trasera-login">
                     <h3>¿Ya tienes cuenta?</h3> 
                     <p>Inicia sesión para entrar en la página</p>
                     <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                  </div>

                  <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3> 
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                 </div>
              </div>
        
              <div class="contenedor__login-register">
                  <form action="registro_cliente.php" method="POST" class="formulario__login">
                      <h2>Iniciar Sesión</h2>
                      <input type="text" placeholder="id" name="id">
                      <input type="password" placeholder="Contraseña" name="contrasena">
                      <button>Entrar</button>
        
                  </form>

                  <form action="usuario.php" method="POST" class="formulario__register">
                      <h2>Regístrarse</h2>
                      <input type="text" placeholder="Nombre" name="nombre">
                      <input type="text" placeholder="Apellido" name="apellido">
                      <input type="text" placeholder="Mail" name="mail">
                      <input type="text" placeholder="id" name="id">
                      <input type="password" placeholder="Contraseña" name="contrasena">
                      <button>Regístrarse</button>
                  </form>
        
              </div>
         </div>
        </main>
     </body>
</html>