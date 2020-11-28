<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-08 16:46:36
  from 'C:\laragon\www\TPs\TP3\templates\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa820ecddb199_31780883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f36cb97ebf949ba4fed71d62806c52d23ee6e55' => 
    array (
      0 => 'C:\\laragon\\www\\TPs\\TP3\\templates\\liste.tpl',
      1 => 1604853979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa820ecddb199_31780883 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
    </head>
    <body>
        <h1>liste</h1>
            <table>
            <tr><th>Artiste</th><th>Album</th><th>Date de sortie</th></tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste']->value, 'ligne');
$_smarty_tpl->tpl_vars['ligne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->do_else = false;
?>
                <tr>
                <td><a href='artiste/<?php echo $_smarty_tpl->tpl_vars['ligne']->value[3];?>
/<?php echo $_smarty_tpl->tpl_vars['ligne']->value[6];?>
'><?php echo $_smarty_tpl->tpl_vars['ligne']->value[6];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value[4];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
    </body>
</html>


<?php }
}
