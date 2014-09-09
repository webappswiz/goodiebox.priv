<script type="text/javascript">
  $(document).ready(function() {
    $('#faqList').simpleFAQ();
  });
</script>

<nav>
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="process-1" class="rounded">
				<img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/shop.png" class="badge">
				<h1>Rendelés</h1>

				<div class="process-circles">
					<ul>
						<li>
							<div class="circle">1</div>
						</li>
						<li>
							<div class="circle-line c-grey"> . . . . . . . . . .</div>
						</li>
						<li>
							<div class="circle c-grey">2</div>
						</li>
						<li>
							<div class="circle-line c-grey">. . . . . . . . . .</div>
						</li>
						<li>
							<div class="circle c-grey">3</div>
						</li>
					</ul>

				</div>
 <div class="clear"></div>
				<h2>Válaszd ki </br>mekkora a kutyus!*</h2>
	 			<ul class="claim-option-list">
	 				<li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs1.jpg"><input type="radio" class="" > Icipici</li>
	 				<li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs2.jpg"><input type="radio" class=""> Éppen jó</li>
	 				<li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs3.jpg"><input type="radio" class=""> Igazi óriás</li>
	 			</ul>
 <div class="clear"></div>

 			<h2>Kinek veszed a Goodiebox-ot?</h2>
 			<div class="drop-down-form">
				<ul id="faqList">
					<li>
					<p class="question">+ Saját kutyusomnak</p>
					<div class="answer">
					<div class="claim-form2">
 				<form class="process-form">
 					<label for="">E-mail cím*</label>
					<input type="text" name="" class="rounded" id="">

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
						<input type="radio" class="" name="Igen"> Igen <input type="radio" class=""> Nem
					</div>

					<label for="last-name">Ha igen, mire?</label>
					<input type="text" name="" class="rounded" id="">

					<p style="padding-top:20px;">*Kötelező adatok</p>

				</form>
 			</div>
					</div>
					</li>

					<li>
					<p class="question">+ Barátom kutyusának</p>
					<div class="answer">
						<div class="process-form-container2">
							<form class="process-form">
								<div>
							        <label for="last-name">Barátod neve*</label>
							        <input id="last-name" type="text" value="" name="first-name" class="rounded">
							    </div>

							    <div>
							        <label for="first-name">Barátod e-mail címe*</label>
							        <input id="" type="text" value="" name="last-name" class="rounded">
							    </div>
							    <p style="padding-top:20px;">*Kötelező mezők adategyeztetés miatt</p>

							</form>
						</div>
					</div>
					</li>

					<li>
					<p class="question">+ Menhelyi kutyusnak</p>
					<div class="answer">
					<div class="process-form-container2">
					<form class="process-form">
						<div>
							<label for="">Menhely neve*</label>
							<select name="opntion-name" class="rounded option-name">
								<option value="name1">select1</option>
								<option value="name2">select2</option>
								<option value="name3">select3</option>
								<option value="name4">select4</option>
							</select>
						</div>
						<label for="">Kutyus neve*</label>
						<input type="text" name="" class="rounded" id="">

						<div class="radio-list">
							<label for="last-name">Kutyus neme*</label>
							<input type="radio" value="Kutyus neme" class=""> Lány <input type="radio" value="Kutyus neme" class=""> Fiú
						</div>
						<p style="padding-top:20px;">*Kötelező mezők adategyeztetés miatt</p>
					</form>
					</div>
					</li>
				</ul>
				<div class="claim-form-btn">
 					<input type="submit" value="TOVÁBB" class="claim-btn" style="margin-right:20px;">
				</div>
					<div class="clear"></div>
			</div>
			</div>
			</section>
