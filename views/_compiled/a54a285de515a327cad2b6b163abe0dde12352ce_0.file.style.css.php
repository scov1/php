<?php
/* Smarty version 3.1.36, created on 2020-05-23 09:40:28
  from 'D:\Open\OpenServer\domains\mvc.loc\static\css\style.css' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec8c55c7f8cc7_86752995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a54a285de515a327cad2b6b163abe0dde12352ce' => 
    array (
      0 => 'D:\\Open\\OpenServer\\domains\\mvc.loc\\static\\css\\style.css',
      1 => 1590215891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8c55c7f8cc7_86752995 (Smarty_Internal_Template $_smarty_tpl) {
?>@import url(https://fonts.googleapis.com/css?family=Roboto:300);

body{
    background: #2c3949;
}

.addBook {
    width: 360px;
    padding: 2% 0 0;
    margin: auto;
}
.form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 5px;
}
.form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}

h2{
    font-size: 20px;
    color: #4b4b4b;
}
.btn {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}
.btn:hover,.btn:active,.btn:focus {
    background: #43A047;
}

.btn_del_book:hover,.btn_del_book:active,.btn_del_book:focus {
    background: #780412;
}


.txt {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin: 30px;
}


.listBooks{
    list-style-type: none;
    color: #5c4d49;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-size: 12px;
}

.listBooks li {
    padding: 2%;
    margin-top: 1%;
    background: #ebe7e6;
    transition: .3s ease-out;
}

.listBooks li:hover,li:active,li:focus {
    background:#d4cecd;
}


.btn_del_book{
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #990315;
    width: 10%;
    border: 0;
    padding: 15px;
    color: white;
    font-size: 14px;
    cursor: pointer;
    margin-top:1%;
    font-weight: lighter;
}



<?php }
}
