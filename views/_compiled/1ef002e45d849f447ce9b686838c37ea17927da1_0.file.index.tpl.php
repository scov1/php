<?php
/* Smarty version 3.1.36, created on 2020-05-26 09:44:23
  from 'D:\Open\OpenServer\domains\todo.list3\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eccbac7cd0ab5_79555051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ef002e45d849f447ce9b686838c37ea17927da1' => 
    array (
      0 => 'D:\\Open\\OpenServer\\domains\\todo.list3\\views\\index.tpl',
      1 => 1590402051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:todo_list.tpl' => 1,
  ),
),false)) {
function content_5eccbac7cd0ab5_79555051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15847692255eccbac7cbd225_98661073', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/app.tpl");
}
/* {block "content"} */
class Block_15847692255eccbac7cbd225_98661073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15847692255eccbac7cbd225_98661073',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="card card-body">
        <form class="d-flex flex-row" method="post" action="/todos/store">
            <input class="form-control mr-3" type="text" name="name" placeholder="Новая задача...">
            <div class="custom-control custom-checkbox mt-2 mr-2">
                <input type="checkbox" class="custom-control-input" id="toggle-new" name="done">
                <label class="custom-control-label" for="toggle-new"></label>
            </div>
            <button class="btn btn-success">Создать</button>
        </form>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:todo_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
}
