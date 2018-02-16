<?php
/* Smarty version 3.1.30, created on 2017-12-12 12:37:54
  from "/home/maharajan/Inquiry/smarty/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2f4f12ac9836_95661699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a0acf15e7909d09c7f562aa3b6be5bd623c1e2' => 
    array (
      0 => '/home/maharajan/Inquiry/smarty/templates/admin/index.tpl',
      1 => 1512785479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2f4f12ac9836_95661699 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<body>
	<h1>管理画面</h1>
	<form action="./login.php" method="post">
		<fieldset class="form-group">
			<label for="formGroupExampleInput">ID</label>
			<input type="text" class="form-control" id="formGroupExampleInput" placeholder="user name" name="id">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput2">password</label>
			<input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
		</fieldset>
		<button>login</button>
	</form>
</body>
</html>
<?php }
}
