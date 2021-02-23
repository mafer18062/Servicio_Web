<?php
/* Smarty version 3.1.38, created on 2021-02-23 17:06:54
  from 'C:\xampp\htdocs\Servicio_Web\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6035281e48efa3_65867234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b31a78da2095da6426da2b0fa075675591669360' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Servicio_Web\\View\\Home.tpl',
      1 => 1614096403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6035281e48efa3_65867234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <ul class="collection with-header">
        <li class="collection-header"><h4 align="center">INGRESE SUS DATOS</h4></li>

 <div class="row">
 <form class="col s4">
 <div class="row">
        <div class="input-field col s12" align="center">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

       <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
        


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
