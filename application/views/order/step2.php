<script type="text/javascript">
	$(document).ready(function () {
		$('#selected_box').val($('input[type="radio"]:checked').val());
		$('input:radio').on('click', function () {
			$('#selected_box').val($(this).val());
		});
		$('#next').on('click', function () {
			$('form').submit();
		});
		$('.tooltips').on('mouseover', function () {
			$('span', '.tooltips').show();
		});
		$('.tooltips').on('mouseout', function () {
			$('span', '.tooltips').hide();
		});
		if ($('#box_smart').is(':checked')) {
			$('.step2-text').html('<?php echo __('<p>A <span style="color:red"><b>Goodiebox Smart</b></span> dobozt választottad! Ha kutyusod játékos és szereti a hasát, akkor ez a doboz biztosan nagy örömöt okoz majd nektek!</p>'); ?>'
				+ '<?php echo __('<p>Tartalom: 3-5 termék (értékfüggő)! Biztosan találsz a dobozban jutalomfalatot és játékot, mert tudjuk, hogy ezek a legfontosabbak, ha szuper ajándékkal szeretnéd meglepni kis kedvencedet!</p>'); ?>'
				+ '<?php echo __('<p>Már csak egy lépésnyire vagy a megrendelés befejezésétől! Ha ennél a meglepidoboznál maradsz, akkor nincs más dolgod, csak kattints a Tovább gombra és add meg a személyes adataidat!</p>'); ?>');
		}
		if ($('#box_plus').is(':checked')) {
			$('.step2-text').html('<?php echo __('<p>A <span style="color:red"><b>Goodiebox Plus</b></span> dobozt választottad! Ha kutyusod játékos, szereti a hasát és az extra meglepiket is, akkor ez a doboz egészen biztosan nagy örömöt okoz majd nektek!</p>'); ?>'
				+ '<?php echo __('<p>Tartalom: 4-6 termék (értékfüggő)! Biztosan találsz a dobozban jutalomfalatot és játékot, mert tudjuk, hogy ezek a legfontosabbak, ha szuper ajándékkal szeretnéd meglepni kis kedvencedet! A Plus doboz a legjobb választás ha valamilyen extra kényeztetésre vágynátok! Mi több, a szülinapos kutyusok Plus meglepidoboz vásárlásakor ajándékot is kapnak tőlünk a doboz értékén felül!</p>'); ?>'
				+ '<?php echo __('<p>Már csak egy lépésnyire vagy a megrendelés befejezésétől! Ha ennél a meglepidoboznál maradsz, akkor nincs más dolgod, csak kattints a Tovább gombra és add meg a személyes adataidat!</p>'); ?>');
		}

		$('#box_smart').on('click', function () {
			$('.step2-text').html('<?php echo __('<p>A <span style="color:red"><b>Goodiebox Smart</b></span> dobozt választottad! Ha kutyusod játékos és szereti a hasát, akkor ez a doboz biztosan nagy örömöt okoz majd nektek!</p>'); ?>'
				+ '<?php echo __('<p>Tartalom: 3-5 termék (értékfüggő)! Biztosan találsz a dobozban jutalomfalatot és játékot, mert tudjuk, hogy ezek a legfontosabbak, ha szuper ajándékkal szeretnéd meglepni kis kedvencedet!</p>'); ?>'
				+ '<?php echo __('<p>Már csak egy lépésnyire vagy a megrendelés befejezésétől! Ha ennél a meglepidoboznál maradsz, akkor nincs más dolgod, csak kattints a Tovább gombra és add meg a személyes adataidat!</p>'); ?>');

		});

		$('#box_plus').on('click', function () {
			$('.step2-text').html('<?php echo __('<p>A <span style="color:red"><b>Goodiebox Plus</b></span> dobozt választottad! Ha kutyusod játékos, szereti a hasát és az extra meglepiket is, akkor ez a doboz egészen biztosan nagy örömöt okoz majd nektek!</p>'); ?>'
				+ '<?php echo __('<p>Tartalom: 4-6 termék (értékfüggő)! Biztosan találsz a dobozban jutalomfalatot és játékot, mert tudjuk, hogy ezek a legfontosabbak, ha szuper ajándékkal szeretnéd meglepni kis kedvencedet! A Plus doboz a legjobb választás ha valamilyen extra kényeztetésre vágynátok! Mi több, a szülinapos kutyusok Plus meglepidoboz vásárlásakor ajándékot is kapnak tőlünk a doboz értékén felül!</p>'); ?>'
				+ '<?php echo __('<p>Már csak egy lépésnyire vagy a megrendelés befejezésétől! Ha ennél a meglepidoboznál maradsz, akkor nincs más dolgod, csak kattints a Tovább gombra és add meg a személyes adataidat!</p>'); ?>');
		});

	});

</script>
<div class="clear"></div>
<section class="process-2" class="rounded">
	<img src="<?= URL::base( true, false ) ?>assets/img/shop.png" class="badge">

	<h1><?php echo __( 'Rendelés' ); ?></h1>

	<div class="process-circles">
		<ul>
			<li>
				<div class="circle">1</div>
			</li>
			<li>
				<div class="circle-line "> . . . . . . . . . .</div>
			</li>
			<li>
				<div class="circle" style="color:#ff0000;border-color:#ff0000;">2</div>
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
	<h2><?php echo __( 'Biztosan a kiválasztott doboznál maradsz?' ); ?></h2>
	<br/><br/>
	<section style="margin-bottom: 0px;padding: 30px;">
		<?php
		$products = ORM::factory( 'Packages' )
		               ->where( 'type', '=', 1 )
		               ->and_where( 'enabled', '=', '1' )
		               ->find_all();
		$limits   = ORM::factory( 'Options', 1 );
		if ($limits->smart == $limits->current_smart && $limits->plus == $limits->current_plus) {
			echo __('<h2>The ordering is closed now</h2>');
		} else {
			foreach ( $products as $product ) {
				$img   = ( $product->enabled == 1 ) ? 1 : 2;
				$price = ( $product->price != 0 && $product->enabled == 1 ) ? $product->price . ' HUF' : '';
				$econ  = ORM::factory( 'Packages' )
				            ->where( 'type', '=', 2 )
				            ->and_where( 'term', '=', $product->term )
				            ->and_where( 'enabled', '=', 1 )
				            ->find();
				if ( $product->term == 1 ) {
					$image  = '<img style="height:100px;margin-bottom:10px;"  src="' . URL::base( true, false ) . 'assets/img/plus-2nd-order-page.png"><br/>';
					$image1 = '<img style="height:100px;margin-bottom:10px;"  src="' . URL::base( true, false ) . 'assets/img/smart-2nd-order-page.png"><br/>';
				}
				$box1 = ( trim( Session::instance()->get( 'package' ) ) == 'plus' ) ? 'checked' : '';
				$box2 = ( trim( Session::instance()->get( 'package' ) ) == 'smart' ) ? 'checked' : '';
				if ( trim( Session::instance()->get( 'package' ) == '' ) ) {
					$box2 = 'checked';
				}
				if ( $limits->smart == $limits->current_smart ) {
					$box2 = 'disabled';
					$box1 = 'checked';
					$image1 = '<img style="height:100px;margin-bottom:10px;"  src="' . URL::base( true, false ) . 'assets/img/step2-img2.jpg"><br/>';
				}

				if ( $limits->plus == $limits->current_plus ) {
					$box1 = 'disabled';
					$box2 = 'checked';
					$image  = '<img style="height:100px;margin-bottom:10px;"  src="' . URL::base( true, false ) . 'assets/img/step2-img2.jpg"><br/>';
				}
				if ( $econ->id <> '' ) {
					echo '<div class="boxes">';
					echo $image1;
					echo '<input ' . $box2 . ' style="padding-left:0px;cursor: pointer" type="radio" class="box" name="box" id="box_smart" value="' . $econ->id . '" required>';
					echo '<label class="tooltip">' . $econ->package_name . '<span>' . $econ->description . '</span></label>';
					echo '<br/><br/>';
					echo '<span class="price" style="margin-left:20px;">' . $econ->price . ' HUF</span>';
					echo '</div>';
				}

				echo '<div class="boxes">';
				echo $image;
				echo '<input ' . $box1 . ' style="cursor: pointer" type="radio" class="box" name="box" id="box_plus" value="' . $product->id . '" required>';
				echo '<label class="tooltip">' . $product->package_name . '<span>' . $product->description . '</span></label>';
				echo '<br/><br/>';
				echo '<span class="price" style="margin-left:20px;">' . $price . '</span>';
				echo '</div>';
			}
		}
		?>
	</section>
	<div class="clear"></div>
	<div class="step2-text" style="text-align: justify">

	</div>

	<div class="step2-btn-container">
		<form method="POST">
			<input type="hidden" name="order" value="1">
			<input type="hidden" name="selected_box" id="selected_box" value="">
			<input type="button" id="back" class="dark-btn claim-btn fl rounded" onclick="history.go(-1);
                return true;" value="<?php echo __( 'VISSZA' ); ?>">
			<input type="submit" name="tovabb" id="next" value="<?php echo __( 'TOVÁBB' ); ?>"
			       class="dark-btn claim-btn fr rounded">
		</form>
	</div>
	<div class="clear"></div>
</section>
