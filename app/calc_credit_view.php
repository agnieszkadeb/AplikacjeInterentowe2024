{extends file="../templates/main.html"}

{block name=footerr}
  
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
  
{/block}

{block name=contentt}

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

			<form action="{$app_url}/app/calcw.php" method="post">
				<table>
				<tr>
				<td><label for="id_x">Kwota: </label></td>
				<td><input id="id_x" type="text" name="kwota" value="{$form['kwota']}" /></td>
				</tr><tr>
				<td><label for="id_y">Na ile lat: </label></td>
				<td><input id="id_y" type="text" name="czas" value="{$form['czas']}" /></td>
				</tr><tr>	
				<td><label for="id_op">Oprocentowanie: </label></td>
				<td><input id="id_op" type="text" name="oprocentowanie" value="{$form['oprocentowanie']}" /></td>
				</tr>
				<td><input type="submit" value="Oblicz" /></td>
				</table>
			</form>

						<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Wynik</h4>
	<p class="res">
	{$result}
	</p>
{/if}

</div>

</div> <!--KONIEC KONTENTU-->
</div>
       
    </section><!-- End Features Section -->

  </main><!-- End #main -->

{/block}