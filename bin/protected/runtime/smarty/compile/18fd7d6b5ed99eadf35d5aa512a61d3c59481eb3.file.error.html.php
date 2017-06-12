<?php /* Smarty version Smarty-3.1.3, created on 2017-05-10 07:24:27
         compiled from "/Users/Ren/GitHub/api/bin/protected/views/system/error.html" */ ?>
<?php /*%%SmartyHeaderCode:10334221935912c02ba8d7d2-88300013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18fd7d6b5ed99eadf35d5aa512a61d3c59481eb3' => 
    array (
      0 => '/Users/Ren/GitHub/api/bin/protected/views/system/error.html',
      1 => 1492861589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10334221935912c02ba8d7d2-88300013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5912c02baa8e1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5912c02baa8e1')) {function content_5912c02baa8e1($_smarty_tpl) {?>{extends "layout.html"}



{block name=main}
<div style="align:center;height:250px;" class="main-box">
    {$error.message|escape:'html'}dfsfdsf
</div>
{/block}
<?php }} ?>