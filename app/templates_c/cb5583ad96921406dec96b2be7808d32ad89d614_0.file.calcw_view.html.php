<?php
/* Smarty version 3.1.34-dev-7
   */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_607056af6b0f76_29823496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb5583ad96921406dec96b2be7808d32ad89d614' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_5_proste_szablony_bootstprap_smarty\\app\\calcw_view.html',
      1 => 1617974928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607056af6b0f76_29823496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1027107670607056af699871_40406772', 'footerr');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_485103786607056af69d6f0_42880302', 'contentt');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footerr'} */
class Block_1027107670607056af699871_40406772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerr' => 
  array (
    0 => 'Block_1027107670607056af699871_40406772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
   <!-- ======= Footer ======= -->
 

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 footer-info">
            <h3>Dziekujemy !</h3>
            <p>Wkrótce pojawi się wiecej funkcji.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  
<?php
}
}
/* {/block 'footerr'} */
/* {block 'contentt'} */
class Block_485103786607056af69d6f0_42880302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contentt' => 
  array (
    0 => 'Block_485103786607056af69d6f0_42880302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <!-- ======= Hero No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h2>Witam w kalkulatorze oprocentowania</h2>
          <p>Dzięki temu kalkulatorowi możesz obliczyć jakie będą twoje miesięczne raty. Podaj kwotę, oprocentowanie i czas na jakich chcesz pożyczyć a kalkulator automatycznie obliczy wysokość spłaty. </p>
          <a onclick="location.href='#oblicz';" class="btn-get-started ">Oblicz !</a>
		  
        </div>
      </div>
    </div>
  </section><!-- End Hero No Slider Sectio -->
   <a id="oblicz"></a>
 

 <main id="main">


    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
		
        <div class="section-title">
          <h2>Kalkulator</h2>
        
        </div>

        <div class="row" data-aos="fade-up">

			<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calcw.php" method="post">
				<table>
				<tr>
				<td><label for="id_x">Kwota: </label></td>
				<td><input id="id_x" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" /></td>
				</tr><tr>
				<td><label for="id_y">Na ile lat: </label></td>
				<td><input id="id_y" type="text" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['czas'];?>
" /></td>
				</tr><tr>	
				<td><label for="id_op">Oprocentowanie: </label></td>
				<td><input id="id_op" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
" /></td>
				</tr>
				<td><input type="submit" value="Oblicz" /></td>
				</table>
			</form>

						<div class="messages">

<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

</div> <!--KONIEC KONTENTU-->
</div>
       
    </section><!-- End Features Section -->

  </main><!-- End #main -->

<?php
}
}
/* {/block 'contentt'} */
}