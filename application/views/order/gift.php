<nav>
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="claim-gift" class="rounded">
				<img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/gift-mark.png" class="badge">
				<h1>Ajándékom van!</h1>
				<h2>Kérlek, add meg az adataid!</h2>

				<div class="claim-box1">
					<div class="box rounded">
						<p>Ha már van regisztrált Goodiebox felhasználói fiókod, jelentkezz be! <span>KLIKK ide!</span></p>
						<img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-i.png">
					</div>
					<div class="login">
							<form>
								E-mail cím <input type="text" name="e-mail" class="rounded" id="">
								Jelszó <input type="text" name="password" class="rounded" id="">
								<input type="submit" value="OK" class="box-btn rounded">
							</form>
						</div>
				</div> <!--End claim box1-->
				<div class="claim-box2">
					<div class="box rounded">
						<p>Ha már van regisztrált Goodiebox felhasználói fiókod, jelentkezz be! <span>KLIKK ide!</span></p>
						<img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-i.png">
					</div>
					<div class="login">
							<form>
								Ajándékkupon kódom <input type="text" name="e-mail" class="rounded" id="">
								<input type="submit" value="OK" class="box-btn rounded">
							</form>
						</div>
				</div> <!--End claim box2-->
				<div class="claim-form-container">
				<div class="claim-form">
					<h2>Szállítási adatok</h2>
					<p>Ország</p>
					<h4>Magyarország</h4>
					<form>
						<div style="margin-right:5px;" class="fl">
					        <label for="last-name">Vezetéknév*</label>
					        <input id="last-name" type="text" value="" name="first-name" class="rounded">
					    </div>

					    <div style="overflow:hidden;">
					        <label for="first-name">Keresztnév*</label>
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
							<label for="message">Megjegyzés</label>
							<textarea name="message" class="rounded"></textarea>
						</div>
						<p style="padding-top:20px;">*Az adatok megadása kötelező!</p>

					</form>
				</div> <!--End claim form-->
			</div><!--End claim orm container-->
 <div class="clear"></div>
 			<h2>Válaszd ki </br>mekkora a kutyus!*</h2>
 			<ul class="claim-option-list">
 				<li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs1.jpg"><p> Icipici<input type="radio" value="radio"class="" ></p></li>
 				<li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs2.jpg"> Éppen jó<input type="radio" value="radio" class="" ></li>
 				<li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs3.jpg"> Igazi óriás<input type="radio" value="radio" class="" ></li>
 			</ul>
 <div class="clear"></div>
 			<div class="claim-form2">
 				<form>
					<label for="">Kutyus neve</label>
					<input type="text" name="" class="rounded" id="">

					<div class="radio-list">
						<label for="last-name">Kutyus neme*</label>
						<input type="radio" class=""> Lány <input type="radio" class=""> Fiú
					</div>

					<label for="last-name">Kutyus születésnapja*</label>
					<div class="text-shor1 fl">
						<input type="text" name=""  id=""> év
					</div>
					<div class="text-shor2">
						<input type="text" name=""  id=""> hónap
					</div>

					<div class="radio-list">
						<label for="Igen">Allergiás a kutyusod?*</label>
						<input type="radio" class="styled" name="Igen"> Igen <input type="radio" class="styled"> Nem
					</div>

					<label for="last-name">Ha igen, mire?</label>
					<input type="text" name="" class="rounded" id="">

					<p style="padding-top:20px;">*Kötelező adatok</p>

				</form>
 			</div>
 			<div class="claim-form-btn">
 				<span>Elolvastam és megértettem az ÁSZF-et</span><input type="checkbox">
 				<input type="submit" value="KÉREM MOST" class="claim-btn">
			</div>
			<div class="clear"></div>
			</section>
