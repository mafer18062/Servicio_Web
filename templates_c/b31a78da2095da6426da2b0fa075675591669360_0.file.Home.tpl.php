<?php
/* Smarty version 3.1.38, created on 2021-03-02 14:04:49
  from 'C:\xampp\htdocs\Servicio_Web\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603e37f1e8a044_58107217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b31a78da2095da6426da2b0fa075675591669360' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Servicio_Web\\View\\Home.tpl',
      1 => 1614689855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_603e37f1e8a044_58107217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
        <img src="./Recursos/Implema.png" width="300">
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
            <button class="btn waves-effect waves-light" type="Ingresar" name="action">
                Ingresar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
        </form>
  </div>
  </body>  


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
