<?php
/* Smarty version 3.1.36, created on 2020-05-21 17:18:22
  from 'C:\OPServer\OpenServer\domains\todo.list\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec68dae3b4223_90560900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65e164966c2836b8477f609bdadf2beb6c94504' => 
    array (
      0 => 'C:\\OPServer\\OpenServer\\domains\\todo.list\\views\\index.tpl',
      1 => 1590070699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:todo_list.tpl' => 1,
  ),
),false)) {
function content_5ec68dae3b4223_90560900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17188527985ec68dae3a1415_25747621', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/app.tpl");
}
/* {block "content"} */
class Block_17188527985ec68dae3a1415_25747621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17188527985ec68dae3a1415_25747621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <div class="card card-body mb-3">

        <form method="POST" action="/todos/store">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Новая задача...">
            </div>
            <button class="btn btn-success">Создать</button>
        </form>



    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:todo_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block "content"} */
}
