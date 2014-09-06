<section id="counting-back">
    <div class="count-image">
        <img src="<?=URL::base(TRUE, FALSE)?>/assets/img/quality.png" alt="Premium 100% Quality">
    </div> <!--End count image-->
    <div class="siess">
        <img src="<?=URL::base(TRUE, FALSE)?>/assets/img/siess.png" alt="Siess">
    </div>
    <div class="count-text">
        <p>Add le a rendelésed <span>szeptember 10-ig</span>, hogy megkapd a havi csomagot!</p>
        <div class="counter">
            <p>Hátralévő idő: <span class="count-btn rounded">12</span> nap <span>15:37:55</span></p>
        </div> <!--End counter-->
        <div class="lock">
            <ul>
                <li><a href="#">Nyitva vagyunk!</a></li>
            </ul>
        </div> <!--End lock-->

    </div> <!--End count text-->
    <div class="dog-img">
        <img src="<?=URL::base(TRUE, FALSE)?>/assets/img/dog.png" alt="Dog">
    </div>
</section> <!--End counting back-->
<div class="clear"></div>
<section id="order-place" class="rounded">
    <h2>Legyen kutyusodnak is <span>saját</span> doboza</h2>
    <div class="order-btnleft">
        <button type="button" class="rounded">Megrendelem</button>
        <p>a saját kutyusomnak</p>
    </div>
    <div class="center-arrows">
        <img src="<?=URL::base(TRUE, FALSE)?>/assets/img/arrows.png">
    </div>
    <div class="order-btnright">
        <button type="button" class="rounded">Ajándékozom</button>
        <p>barátom kutyusának</p>
    </div>
</section> <!--End order place-->
</div> <!--End container-->
			<section id="menu">
					<a href="index.html" id="menu-img1"></a>
					<a href="how-it-works.html" id="menu-img2"></a>
					<a href="donations.html" id="menu-img3"></a>
					<a href="blog.html" id="menu-img4"></a>
					<a href="faq.html" id="menu-img5"></a>
					<a href="contact.html" id="menu-img6"></a>
			</section>
			<div class="clear"></div>
	<div class="container">
			<nav>
				<ul>
					<?php echo View::factory('template/menu', get_defined_vars())->render();?>
				</ul>
			</nav>
			<div class="clear"></div>
			<section id="portfolio">
				<p>“Amíg meg nem tapasztaljuk, milyen érzés szeretni egy állatot, lelkünk egy része mélyen alszik.”</p>
				<i>Anatole France</i>
			</section> <!--End portfolio-->

