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
			<section class="faq" class="rounded">
				<h1>Gyakran Ismételt Kérdések</h1>
				<ul id="faqList">
					<li>
					<p class="question">+ 1. Mi is az a Goodiebox pontosan?</p>
					<div class="answer">
					Answer 1
					</div>
					</li>

					<li>
					<p class="question">+ 2. Hogyan tudok rendelni a kutyusomnak?</p>
					<div class="answer">
					Answer 2
					</div>
					</li>

					<li>
					<p class="question">+ 3. Több kutyám is van. Tudok egyszerre több dobozt is rendelni?</p>
					<div class="answer">
					Answer 3
					</div>
					</li>

					<li>
					<p class="question">+ 4. Mennyibe kerül és hogyan fizethetek?</p>
					<div class="answer">
					Answer 4
					</div>
					</li>

					<li>
					<p class="question">+ 5. Ha megrendeltem, mikor kapom meg?</p>
					<div class="answer">
					Answer 5
					</div>
					</li>

					<li>
					<p class="question">+ 6. Hogyan kapom meg a dobozom?</p>
					<div class="answer">
					Answer 6
					</div>
					</li>

					<li>
					<p class="question">+ 7. Meg lehet tudni, hogy mi lesz a következő havi dobozban? Választhatok?</p>
					<div class="answer">
					Answer 7
					</div>
					</li>

					<li>
					<p class="question">+ 8. Van bármilyen rejtett költség?</p>
					<div class="answer">
					Answer 8
					</div>
					</li>

					<li>
					<p class="question">+ 9. Nem érkezett meg a Goodiebox, pedig regsztráltam, vagyis megrendeltem.</p>
					<div class="answer">
					Answer 9
					</div>
					</li>

					<li>
					<p class="question">+ 10. Van-e mód a visszaküldésre, ha elégedetlen vagyok?</p>
					<div class="answer">
					Answer 10
					</div>
					</li>
				</ul>
				 <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/faq-img.png" alt="FAQS">
			</section>
