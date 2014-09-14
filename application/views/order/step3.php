<script type="text/javascript">
  $(document).ready(function() {
    $('#faqList').simpleFAQ();
  });
</script>
<?php $session = Session::instance(); print_r($session->as_array());?>
<nav>
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="process-3" class="rounded">
				<img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/shop.png" class="badge">
				<h1>Rendelés</h1>

				<div class="process-circles">
					<ul>
						<li>
							<div class="circle">1</div>
						</li>
						<li>
							<div class="circle-line "> . . . . . . . . . .</div>
						</li>
						<li>
							<div class="circle">2</div>
						</li>
						<li>
							<div class="circle-line ">. . . . . . . . . .</div>
						</li>
						<li>
							<div class="circle ">3</div>
						</li>
					</ul>

				</div>
 <div class="clear"></div>
				<h2>Válaszd ki </br>milyen periódust szeretnél!</h2>
	 			<div class="claim-box1">
					<div class="box rounded">
						<p>Ha van kuponod, itt beválthatod. <span>KLIKK ide!</span></p>
						<img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-i.png">
					</div>
				</div> <!--End claim box1-->
				<div class="claim-form-container">
				<div class="claim-form">
					<h2>Számlázási adatok</h2>
					<p>Ország</p>
					<h4>Magyarország</h4>
					<form>
						<div style="margin-right:5px;" class="fl">
					        <label for="first-name">Vezetéknév*</label>
					        <input id="last-name" type="text" value="" name="first-name" class="rounded">
					    </div>

					    <div style="overflow:hidden;">
					        <label for="last-name">Keresztnév*</label>
					        <input id="" type="text" value="" name="last-name" class="rounded">
					    </div>
 <div class="clear"></div>
					    <div class="add">
						    <label for="address">Cím*</label>
							<input type="text" name="address" class="rounded" id="" placeholder="Utca, házszám, ajtó, emelet">
							<input type="text" name="" class="rounded" id="">
						</div>

						<div>
							<label for="zip">Irányítószám*</label>
							<input type="text" name="zip" class="rounded" id="">
						</div>
						<div class="add">
							<label for="">Város*</label>
							<input type="text" name="" class="rounded" id="">
						</div>
						<div class="fl" style="margin-right:5px;">
							<label for="">E-mail cím*</label>
							<input type="text" name="" class="rounded" id="">
						</div>
						<div>
							<label for="">Telefonszám*</label>
							<input type="text" name="" class="rounded" id="">
						</div>
						<p style="margin-top:15px;">E-mail cím és jelszó megadása szükséges ahhoz, hogy később bejelentkezhess a Goodiebox fiókodba, követhesd aktuális rendelésed, módosíthasd a már meglévő adataidat vagy ha nincs rá szükséged, törölhesd.</p>
						<div>
							<label for="last-name">Jelszó*</label>
							<input type="text" name="last-name" class="rounded" id="">
						</div>
						<div class="claim-message">
							<span>A szállítási cím nem egyezik?</span><input type="checkbox">
							<label for="message">Megjegyzés</label>
							<textarea name="message" class="rounded"></textarea>
						</div>
					</form>
				</div> <!--End claim form-->
			</div><!--End claim form container-->
			<div class="order-form">
				<h2>Rendelésem</h2>
				<div class="order-container rounded">
					<div class="inner">
						<div class="order-content-left">
							<div class="order-heading-left">
								<h3>Termék</h3>
							</div>
								<div class="order-text-left">
									<span>GOODIEBOX 1</span>hónapra</br>Választott kutyus méret: Icipici
									<p>Házhozszállítás</p>
								</div>
							<div class="order-heading-leftbottom">
								<h3>Összesen</h3>
							</div>
						</div>

						<div class="order-content-right">
							<div class="order-heading-right">
								<h3>Összeg</h3>
							</div>
								<div class="order-text-right">
										0000 Ft
									<p>Ingyenes</p>
								</div>
							<div class="order-heading-rightbottom">
								<h3>0000 Ft</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="claim-form-btn">
 				<span>Elolvastam és megértettem az ÁSZF-et</span><input type="checkbox">
 				<input type="submit" value="MEGRENDELEM" class="claim-btn">
			</div>
				<div class="clear"></div>
			</section>
