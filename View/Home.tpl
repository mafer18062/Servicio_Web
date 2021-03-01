{include file="Cabeceras/Header.tpl"}


      <body bgcolor="#d1c4e9 ">
      <div class="row">
      <nav class="blue lighten-4"></div>
      

    <div>  
     
      <h4 align="center"style="color:#7e57c2">INGRESE SUS DATOS</h4>  
    </div>

    <div class="row">  
     <div class="col s4">
        <img src="./Recursos/Logo.png">
    </div>

    <form class="col s4">
    <div class="row">  
    <div class="col s10 offset-s2 center-align">
        <div class="input-field col s8 offset-s1">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Email</label>
        </div>
    </div>
    <div class="row"> 
    <div class="col s10 offset-s2 center-align">  
        <div class="input-field col s8 offset-s1">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
        </div>
    </div>
    <div class="row">
        <!-- CHANGED THE DIV BELOW (Changed size to col s8 offset-s1 
        to match the divs above and added center-align -->
        <div class="col s10 offset-s1 center-align">
            <button class="btn waves-effect waves-light" type="Ingresar" name="action">
                Ingresar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
        </form>
  </div>
  </body>  


{include file="Cabeceras/Footer.tpl"}