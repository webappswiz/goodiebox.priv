<nav style="text-align: right">
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
			<section id="faq" class="rounded">
				<h1>Gyakran Ismételt Kérdések</h1>

				<div id="collapse-content">
				<h3>1. Mi is az a Goodiebox pontosan?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>2. Hogyan tudok rendelni a kutyusomnak?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>3. Több kutyám is van. Tudok egyszerre több dobozt is rendelni?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>4. Mennyibe kerül és hogyan fizethetek?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>5. Ha megrendeltem, mikor kapom meg?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>6. Hogyan kapom meg a dobozom?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>7. Meg lehet tudni, hogy mi lesz a következő havi dobozban? Választhatok?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>8. Van bármilyen rejtett költség?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>9. Nem érkezett meg a Goodiebox, pedig regsztráltam, vagyis megrendeltem.</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>

		        <h3>10. Van-e mód a visszaküldésre, ha elégedetlen vagyok?</h3>
		        <div>
		          <div class="content">
		            Content here
		          </div>
		        </div>
		    </div>
		        <script>
		        $("#collapse-content").collapse({
		          accordion: true,
		          open: function() {
		            this.addClass("open");
		            this.css({ height: this.children().outerHeight() });
		          },
		          close: function() {
		            this.css({ height: "0px" });
		            this.removeClass("open");
		          }
		        });
		      </script>
				 <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/faq-img.png" alt="FAQS">
			</section>
