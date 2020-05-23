<?php
/* Smarty version 3.1.36, created on 2020-05-23 09:40:28
  from 'D:\Open\OpenServer\domains\mvc.loc\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec8c55c7e15b5_94078164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6388fb6e1191011823f17ea5d5b2b900ec06a763' => 
    array (
      0 => 'D:\\Open\\OpenServer\\domains\\mvc.loc\\views\\index.tpl',
      1 => 1590216026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/css/style.css' => 1,
  ),
),false)) {
function content_5ec8c55c7e15b5_94078164 (Smarty_Internal_Template $_smarty_tpl) {
?><style><?php $_smarty_tpl->_subTemplateRender("file:../static/css/style.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></style>
<form action="/books" method="POST">
    <div class="addBook">
        <div class="form">
            <h2>Добавление автора</h2>
            <input type="text" name="name" placeholder="Название книги"></br>
            <input type="text" name="author" placeholder="Автор"></br>
            <button class="btn">Создать</button>
        </div>

    </div>

</form>


<div class="txt">
    <ul class="listBooks">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
            <li ><?php echo $_smarty_tpl->tpl_vars['book']->value->author;?>
, "<?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
"
            <form action="/books/delete/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
" method="POST">
                <button class="btn_del_book">Delete</button>
            </form>

            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>


<?php }
}
