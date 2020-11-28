<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-10 08:39:44
  from 'C:\laragon\www\TPs\TP4\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5faa51d03c5ed0_02493347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c28beee93c1ae516fd354de1eb95a4b50b7f4361' => 
    array (
      0 => 'C:\\laragon\\www\\TPs\\TP4\\templates\\register.tpl',
      1 => 1604997165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa51d03c5ed0_02493347 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/register" method="POST">
    <p>
        <label for="">Nom</label>
        <input type="text" name="nom" value=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['nom']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>

    </p>
    <p>
        <label for="">Email</label>
        <input type="email" name="email" value=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
>
    </p>
        <p><label for="">Mot de passe</label>
        <input type="password" name="motdepasse">
    </p>
    <p><input type="submit"></p>
</form>
<?php }
}
