<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-08 17:04:34
  from 'C:\laragon\www\TPs\TP3\templates\artiste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa82522204025_12412047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b41648509f0ee0abef479d77a07f789f3065041' => 
    array (
      0 => 'C:\\laragon\\www\\TPs\\TP3\\templates\\artiste.tpl',
      1 => 1604855069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa82522204025_12412047 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
    </head>
    <body>
        <h1>artiste</h1>
        <table>
            <tr><h1>Album</h1></tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste']->value, 'ligne');
$_smarty_tpl->tpl_vars['ligne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
    </body>
</html><?php }
}
