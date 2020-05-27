<?php
/* Smarty version 3.1.36, created on 2020-05-26 09:44:23
  from 'D:\Open\OpenServer\domains\todo.list3\views\todo_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eccbac7db7269_46631193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6e1f2dc1276c572d07a7e148159af4d5293dec' => 
    array (
      0 => 'D:\\Open\\OpenServer\\domains\\todo.list3\\views\\todo_list.tpl',
      1 => 1590401985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eccbac7db7269_46631193 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todos']->value, 'todo');
$_smarty_tpl->tpl_vars['todo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['todo']->value) {
$_smarty_tpl->tpl_vars['todo']->do_else = false;
?>
                <li class="list-group-item d-flex align-items-center">

                        <div class="toggle-checkbox custom-control custom-checkbox mr-3" data-target="toggle-form-<?php echo $_smarty_tpl->tpl_vars['todo']->value->id;?>
">
                                <input type="checkbox" class="custom-control-input" id="toggle-<?php echo $_smarty_tpl->tpl_vars['todo']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['todo']->value->done) {?>checked<?php }?>>
                                <label class="custom-control-label" for="toggle-<?php echo $_smarty_tpl->tpl_vars['todo']->value->id;?>
"></label>
                        </div>

                        <form id="toggle-form-<?php echo $_smarty_tpl->tpl_vars['todo']->value->id;?>
" action="/todos/toggle/<?php echo $_smarty_tpl->tpl_vars['todo']->value->id;?>
" method="POST"></form>

                        <input type="text" class="pl-0 border-0 shadow-none update-todo form-control mr-3"
                               value="<?php echo $_smarty_tpl->tpl_vars['todo']->value->name;?>
" required placeholder="Пусто..."
                                <?php if ($_smarty_tpl->tpl_vars['todo']->value->done) {?> style="text-decoration: line-through" <?php }?>>

                        <form action="/todos/update/<?php echo $_smarty_tpl->tpl_vars['todo']->value->id;?>
" method="POST">
                                <input class="update-input" type="hidden" name="name" value="" required>
                                <button class="update-btn btn btn-secondary mr-3" disabled>
                                        Обновить
                                </button>
                        </form>

                        <form class="ml-auto" action="/todos/delete/<?php echo $_smarty_tpl->tpl_vars['todo']->value->id;?>
" method="POST">
                                <button class="btn btn-danger">
                                        Удалить
                                </button>
                        </form>
                </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php echo '<script'; ?>
>
        $('.update-todo').on('input', function () {
                $(this)
                        .closest('li')
                        .find('.update-btn')
                        .removeClass('btn-secondary')
                        .addClass('btn-info')
                        .attr('disabled', false);
                let input = $(this)
                        .closest('li')
                        .find('.update-input')[0];
                input.value = this.value;
        });
        $('.toggle-checkbox').on('click', function () {
                let target = this.dataset.target;
                document.getElementById(target).submit();
        });
<?php echo '</script'; ?>
><?php }
}
