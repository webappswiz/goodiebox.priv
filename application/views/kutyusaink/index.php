<script type="text/javascript">
    $(document).ready(function () {
        $('#nov').on('click', function () {
            $('#dec').removeClass('active');
            $('#jan').removeClass('active');
            $(this).addClass('active');
            $('#dec_photos').hide();
            $('#jan_photos').hide();
            $('#nov_photos').show();
        });
        $('#dec').on('click', function () {
            $('#nov').removeClass('active');
            $('#jan').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
            $('#jan_photos').hide();
            $('#dec_photos').show();
        });
        $('#jan').on('click', function () {
            $('#nov').removeClass('active');
            $('#dec').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
            $('#dec_photos').hide();
            $('#jan_photos').show();
        });
        $('#tab-container').easytabs();
    });
</script>
<section class="how-it-works rounded">
    <h1>Kutyusaink + Dobozaink</h1>
    <br/>
    <div id="tab-container" class="tab-container" style="margin-top: 10px;">
        
        <ul class='etabs' style="text-align: center;margin-bottom: 10px">
            <li class='tab2'><a href="#fotok" style="font-family: 'La-chata'">Goodiebox fotók</a></li>
            <li class='tab2'><a href="#videok" style="font-family: 'La-chata'">Goodiebox videók</a></li>
			<li class='tab2'><a href="#doboz" style="font-family: 'La-chata'">Meglepi dobozaink</a></li>
        </ul>
        
        <div id="fotok">
            <div id="navs">
                <a style="cursor: pointer" id="jan" class="active" style="font-family: 'La-chata';font-size: 18px">2015 Január</a>
            &nbsp;&nbsp;&nbsp;
            <a style="cursor: pointer" id="dec" style="font-family: 'La-chata';font-size: 18px">2014 December</a>
            &nbsp;&nbsp;&nbsp;
            <a style="cursor: pointer" id="nov" style="font-family: 'La-chata';font-size: 18px">2014 November</a><br/><br/><br/>
            </div>
            
            <div class="image-row" style="text-align: center;display: none" id="nov_photos">
                <div class="image-set">
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-0.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-0.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-1.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-1.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-2.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-2.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-3.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-3.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-4.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-4.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-5.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-5.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-6.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-6.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-7.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-7.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-8.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-8.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-9.jpg" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-9.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-10.png" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-10.jpg" alt="" /></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-11.png" data-lightbox="example-set1" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-11.jpg" alt="" /></a>
                </div>
            </div>
            <div class="image-row" style="text-align: center;display: none" id="dec_photos">
                <div class="image-set">
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-12.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-12.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-13.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-13.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-14.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-14.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-15.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-15.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-16.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-16.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-17.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-17.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-18.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-18.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-19.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-19.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-20.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-20.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-21.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-21.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-22.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-22.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-23.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-23.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-24.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-24.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-25.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-25.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-26.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-26.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-27.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-27.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-28.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-28.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-29.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-29.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-30.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-30.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-31.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-31.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-32.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-32.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-33.jpg" data-lightbox="example-set2" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-33.jpg" alt=""/></a>
                </div>
            </div>


            <div class="image-row" style="text-align: center;" id="jan_photos">
                <div class="image-set">
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-34.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-34.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-35.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-35.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-36.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-36.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-37.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-37.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-38.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-38.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-39.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-39.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-40.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-40.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-41.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-41.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-42.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-42.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-43.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-43.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-44.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-44.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-45.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-45.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-46.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-46.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-47.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-47.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-48.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-48.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-49.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-49.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-50.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-50.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-51.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-51.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-52.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-52.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-53.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-53.jpg" alt=""/></a>
                </div>
            </div>


        </div>
        <div id="videok" style="text-align: center">
            <?php
            $xml_data = file_get_contents('http://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA/uploads?max-results=4');
            $xml = simplexml_load_string($xml_data) or die("Error: Cannot create object");
            foreach ($xml->entry as $entry) {
                $link = $entry->id;
                $link_array = explode('/', $link);
                $video_id = array_pop($link_array);
                echo '<iframe width="315" height="315" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe> ';
            }
            ?>



        </div>
		<div id="doboz"style="text-align: center">
			<div class="image-row spacer" style="font-family: 'franklin_gothic_bookregular'; font-size:17px; text-align: justify;">
			<p>Megmutatjuk nektek az eddigi meglepi dobozaink tartalmát. Természetesen a Smart és a Plus dobozok egy adott hónapon belül mást és mást tartalmazhatnak. A Smart doboz inkább jutalomfalatokban erős, míg a Plus doboz mindig valami kiegészítőt, extra terméket kínál a kutyusnak vagy a gazdinak.</p>
			<br />
		<p>Előfordul bizony, hogy egyes termékek még egy hónapon belül is különbözőek az adott doboz kategórián belül, hiszen mindig próbáljuk abszolút kutyaszemélyiségre szabni a meglepiket!</p> 
			<br />
		<p>Ha például egy kutyus érzékeny valamire, más jutalomfalat vagy táp kerül a csomagba. Ha már törzsvendégünk, akkor pedig arra is figyelmet fordítunk, hogy ne kapja ismét ugyanazokat a termékeket vagy ízesítést, mint az előző hónapokban!</p>
			<br />
		<p>Egy dolog azonban biztos!</p>
			<br />
		<p><span style="font-weight:bold;">Mindig figyelünk az ár-érték arányra, hiszen az egyik legfontosabb dolog, hogy olyan csomagot állítsunk nektek össze, ami abszolút mértékben megéri az árát! Szeretnénk, ha kedvező áron próbálhatnátok ki új termékeket vagy beszerezni olyanokat, amiket eddig még nem próbáltatok! Ne feledjétek, nekünk az a legnagyobb öröm, ha boldoggá tehetjük a legjobb barátotokat: a kutyusotokat! ♥</span></p>
		<br /><br />
                <div class="image-set" style="text-align:center;">
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/februar-plus-large.jpg"data-lightbox="example-set13" data-title="2015 Február Plus"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/februar-plus.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/februar-smart-large.jpg" data-lightbox="example-set13" data-title="2015 Február Smart"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/februar-smart.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/januar-plus-large.jpg"data-lightbox="example-set13" data-title="2015 Január Plus"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/januar-plus.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/januar-smart-large.jpg" data-lightbox="example-set13" data-title="2015 Január Smart"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/januar-smart.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/december-plus-large.jpg"data-lightbox="example-set13" data-title="2014 December Plus"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/december-plus.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/december-smart-large.jpg" data-lightbox="example-set13" data-title="2014 December Smart"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/december-smart.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/november-large.jpg" data-lightbox="example-set13" data-title="2014 November Plus"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/november.jpg" alt=""/></a>
				
			</div>
		</div>
		</div>
    </div>
</section>
