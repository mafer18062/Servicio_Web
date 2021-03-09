{include file="Cabeceras/Header.tpl"}


  <body bgcolor="#bbdefb">
    <div class="row">
      <nav class="purple lighten-3">
        <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Registrarse</a>  
      </nav>
</div>

      <div>
          <h4 align="center"style="color:#7e57c2">INGRESE SUS DATOS</h4> 
      </div>

<div class="row">  
  <div class="col s3"></div>
    <div class="col s8 offset-s2 center-align">
        <img src="./Recursos/Implema.png" width="230">
   </div>
</div>
 

    <form class="col s5" method="post" action="?controller=User&method=BuscarUsuario">
    <div class="row">  
    <div class="col s7 offset-s3 center-align">
        <div class="input-field col s8 offset-s1">
            <input id="last_name" name="correo" type="text" class="validate">
            <label for="last_name">Email</label>
        </div>
    </div>
    <div class="row"> 
    <div class="col s7 offset-s3 center-align">  
        <div class="input-field col s8 offset-s1">
            <input id="password" type="password" name="pass" class="validate">
            <label for="password">Password</label>
        </div>
    </div>
    <div class="row" method="post" action="?controller=User&method=Bienvenidos">
        <!-- CHANGED THE DIV BELOW (Changed size to col s8 offset-s1 
        to match the divs above and added center-align -->
        <div class="col s10 offset-s1 center-align">
            <button class="btn waves-effect waves-light" type="Iniciar Sesión" name="action">
                Iniciar Sesión
                <i class="material-icons right">send</i>
            </button>
          </div>
       </div>
    </form>
    </div>
    </body>  
      
{include file="Cabeceras/Footer.tpl"}