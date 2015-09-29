<script type="text/javascript">
    $(document).ready(function () {
        $('#nov').on('click', function () {
            $('#dec').removeClass('active');
            $('#jan').removeClass('active');
			$('#feb').removeClass('active');
			$('#mar').removeClass('active');
			$('#apr').removeClass('active');
			$('#may').removeClass('active');
			$('#jun').removeClass('active');
            $(this).addClass('active');
            $('#dec_photos').hide();
            $('#jan_photos').hide();
			$('#feb_photos').hide();
			$('#mar_photos').hide();
			$('#apr_photos').hide();
			$('#may_photos').hide();
			$('#jun_photos').hide();
            $('#nov_photos').show();
        });
        $('#dec').on('click', function () {
            $('#nov').removeClass('active');
            $('#jan').removeClass('active');
			$('#feb').removeClass('active');
			$('#mar').removeClass('active');
			$('#apr').removeClass('active');
			$('#may').removeClass('active');
			$('#jun').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
			$('#dec_photos').show();
            $('#jan_photos').hide();
			$('#feb_photos').hide();
			$('#mar_photos').hide();
			$('#apr_photos').hide();
			$('#may_photos').hide();
			$('#jun_photos').hide();
        });
        $('#jan').on('click', function () {
            $('#nov').removeClass('active');
            $('#dec').removeClass('active');
			$('#feb').removeClass('active');
			$('#mar').removeClass('active');
			$('#apr').removeClass('active');
			$('#may').removeClass('active');
			$('#jun').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
            $('#dec_photos').hide();
            $('#jan_photos').show();
			$('#feb_photos').hide();
			$('#mar_photos').hide();
			$('#apr_photos').hide();
			$('#may_photos').hide();
			$('#jun_photos').hide();
        });
		$('#feb').on('click', function () {
            $('#nov').removeClass('active');
            $('#dec').removeClass('active');
			$('#jan').removeClass('active');
			$('#mar').removeClass('active');
			$('#apr').removeClass('active');
			$('#may').removeClass('active');
			$('#jun').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
            $('#dec_photos').hide();
			$('#jan_photos').hide();
            $('#feb_photos').show();
			$('#mar_photos').hide();
			$('#apr_photos').hide();
			$('#may_photos').hide();
			$('#jun_photos').hide();
        });
		$('#mar').on('click', function () {
            $('#nov').removeClass('active');
            $('#dec').removeClass('active');
			$('#jan').removeClass('active');
			$('#feb').removeClass('active');
			$('#apr').removeClass('active');
			$('#may').removeClass('active');
			$('#jun').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
            $('#dec_photos').hide();
			$('#jan_photos').hide();
            $('#feb_photos').hide();
			$('#mar_photos').show();
			$('#apr_photos').hide();
			$('#may_photos').hide();
			$('#jun_photos').hide();
        });
		$('#apr').on('click', function () {
            $('#nov').removeClass('active');
            $('#dec').removeClass('active');
			$('#jan').removeClass('active');
			$('#feb').removeClass('active');
			$('#mar').removeClass('active');
			$('#may').removeClass('active');
			$('#jun').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
            $('#dec_photos').hide();
			$('#jan_photos').hide();
            $('#feb_photos').hide();
			$('#mar_photos').hide();
			$('#apr_photos').show();
			$('#may_photos').hide();
			$('#jun_photos').hide();
        });
		$('#may').on('click', function () {
            $('#nov').removeClass('active');
            $('#dec').removeClass('active');
			$('#jan').removeClass('active');
			$('#feb').removeClass('active');
			$('#mar').removeClass('active');
			$('#apr').removeClass('active');
			$('#jun').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
            $('#dec_photos').hide();
			$('#jan_photos').hide();
            $('#feb_photos').hide();
			$('#mar_photos').hide();
			$('#apr_photos').hide();
			$('#may_photos').show();
			$('#jun_photos').hide();
        });
		$('#jun').on('click', function () {
            $('#nov').removeClass('active');
            $('#dec').removeClass('active');
			$('#jan').removeClass('active');
			$('#feb').removeClass('active');
			$('#mar').removeClass('active');
			$('#apr').removeClass('active');
			$('#may').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();
            $('#dec_photos').hide();
			$('#jan_photos').hide();
            $('#feb_photos').hide();
			$('#mar_photos').hide();
			$('#apr_photos').hide();
			$('#may_photos').hide();
			$('#jun_photos').show();
        });
        $('#tab-container').easytabs();
    });
</script>
<section class="how-it-works rounded">
    <h1><?php echo __('Kutyusaink + Dobozaink');?></h1>
    <br/>
    <div id="tab-container" class="tab-container" style="margin-top: 10px;">
        
        <ul class='etabs' style="text-align: center;margin-bottom: 10px">
            <li class='tab2'><a href="#fotok" style="font-family: 'La-chata'"><?php echo __('Goodiebox fotók');?></a></li>
            <li class='tab2'><a href="#videok" style="font-family: 'La-chata'"><?php echo __('Goodiebox videók');?></a></li>
			<li class='tab2'><a href="#doboz" style="font-family: 'La-chata'"><?php echo __('Meglepi dobozaink');?></a></li>
        </ul>
        
        <div id="fotok">
            <div id="navs">
			<a style="cursor: pointer" id="jun" class="active" style="font-family: 'La-chata';font-size: 18px">2015 <?php echo __('Június');?></a>
            &nbsp;&nbsp;&nbsp
			<a style="cursor: pointer" id="may" style="font-family: 'La-chata';font-size: 18px">2015 <?php echo __('Május');?></a>
            &nbsp;&nbsp;&nbsp
			<a style="cursor: pointer" id="apr" style="font-family: 'La-chata';font-size: 18px">2015 <?php echo __('Április');?></a>
            &nbsp;&nbsp;&nbsp;
			<a style="cursor: pointer" id="mar" style="font-family: 'La-chata';font-size: 18px">2015 <?php echo __('Március');?></a>
            &nbsp;&nbsp;&nbsp;
            <!-- a style="cursor: pointer" id="feb" style="font-family: 'La-chata';font-size: 18px">2015 Február</a -->
            &nbsp;&nbsp;&nbsp;
			<!--a style="cursor: pointer" id="jan" style="font-family: 'La-chata';font-size: 18px">2015 Január</a -->
            &nbsp;&nbsp;&nbsp;
            <!-- a style="cursor: pointer" id="dec" style="font-family: 'La-chata';font-size: 18px">2014 December</a -->
            &nbsp;&nbsp;&nbsp;
            <!-- a style="cursor: pointer" id="nov" style="font-family: 'La-chata';font-size: 18px">2014 November</a --><br/><br/><br/>
            </div>
            
            <!-- div class="image-row" style="text-align: center;display: none" id="nov_photos">
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
            </div -->
            <!-- div class="image-row" style="text-align: center;display: none" id="dec_photos">
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
            </div -->


            <!-- div class="image-row" style="text-align: center;display:none; " id="jan_photos">
                <div class="image-set">
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-34.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                       "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-34.jpg" alt=""/></a>
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-35.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
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
                    <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-42.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
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
            </div -->

			<!-- div class="image-row" style="text-align: center;display:none;" id="feb_photos">
				<div class="image-set">
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-57.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-57.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-58.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-58.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-59.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-59.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-60.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-60.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-61.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-61.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-62.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-62.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-63.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-63.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-64.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-64.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-65.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-65.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-66.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-66.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-67.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-67.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-68.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-68.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-69.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-69.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-70.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-70.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-71.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-71.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-72.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-72.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-73.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-73.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-74.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-74.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-75.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-75.jpg" alt=""/></a>
					<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-76.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-76.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-77.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-77.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-78.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-78.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-79.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-79.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-80.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-80.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-81.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-81.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-82.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-82.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-83.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-83.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-84.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-84.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-85.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-85.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-86.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-86.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-87.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-87.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-88.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-88.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-89.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-89.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-90.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-90.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-91.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-91.jpg" alt=""/></a>
					   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-92.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
					   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-92.jpg" alt=""/></a>
				</div>
            
        </div -->
		<div class="image-row" style="text-align: center; display:none;" id="mar_photos">
            <div class="image-set">
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-93.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!"><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-93.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-94.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-94.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-95.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-95.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-96.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-96.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-97.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-97.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-98.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-98.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-99.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-99.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-100.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-100.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-101.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-101.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-102.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-102.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-103.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-103.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-104.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-104.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-105.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-105.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-106.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-106.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-107.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-107.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-108.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-108.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-109.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-109.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-110.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-110.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-111.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-111.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-112.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-112.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-113.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-113.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-114.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-114.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-115.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-115.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-116.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-116.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-117.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-117.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-118.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-118.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-119.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-119.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-120.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-120.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-121.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-121.jpg" alt=""/></a>
            </div>
            
        </div>
		<div class="image-row" style="text-align: center; display:none;" id="apr_photos">
				<div class="image-set">
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-122.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!"><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-122.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-123.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-123.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-124.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-124.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-125.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-125.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-126.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-126.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-127.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-127.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-128.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-128.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-129.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-129.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-130.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-130.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-131.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-131.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-132.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-132.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-133.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-133.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-134.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-134.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-135.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-135.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-136.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-136.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-137.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-137.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-138.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-138.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-139.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-139.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-140.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-140.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-141.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-141.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-142.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-142.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-143.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-143.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-144.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-144.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-145.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-145.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-146.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-146.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-147.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-147.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-148.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-148.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-149.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-149.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-150.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-150.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-151.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-151.jpg" alt=""/></a>
            </div>
		</div>
		
		<div class="image-row" style="text-align: center; display:none;" id="may_photos">
            <div class="image-set">
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-152.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!"><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-152.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-153.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-153.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-154.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-154.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-155.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-155.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-156.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-156.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-157.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-157.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-158.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-158.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-159.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-159.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-160.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-160.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-161.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-161.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-162.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-162.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-163.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-163.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-164.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-164.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-165.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-165.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-166.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-166.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-167.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-167.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-168.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-168.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-169.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-169.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-170.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-170.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-171.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-171.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-172.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-172.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-173.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-173.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-174.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-174.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-175.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-175.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-176.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-176.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-177.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-177.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-178.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-178.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-179.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-179.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-180.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-180.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-181.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-181.jpg" alt=""/></a>
            </div>
          </div>
		  <div class="image-row" style="text-align: center;" id="jun_photos">
            <div class="image-set">
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-182.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!"><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-182.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-183.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-183.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-184.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-184.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-185.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-185.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-186.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-186.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-187.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-187.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-188.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-188.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-189.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-189.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-190.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-190.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-191.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-191.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-192.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-192.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-193.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-193.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-194.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-194.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-195.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-195.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-196.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-196.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-197.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-197.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-198.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-198.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-199.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-199.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-200.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-200.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-201.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-201.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-202.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-202.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-203.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-203.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-204.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-204.jpg" alt=""/></a>
				   <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-205.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" style="width:150px;height:150px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-205.jpg" alt=""/></a>
            </div>
            </div>
        </div>
        <div id="videok" style="text-align: center">
            <?php
            /*$xml_data = file_get_contents('http://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA/uploads?max-results=4');
            $xml = simplexml_load_string($xml_data) or die("Error: Cannot create object");
            foreach ($xml->entry as $entry) {
                $link = $entry->id;
                $link_array = explode('/', $link);
                $video_id = array_pop($link_array);
                echo '<iframe width="315" height="315" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe> ';
            }*/
			echo '<iframe width="315" height="315" src="https://www.youtube.com/embed/videoseries?list=PL4ZnDVm3eIp0fjo7W2dGCdirkuboJ_kzt&loop=1" frameborder="0" allowfullscreen></iframe> ';
            ?>
			<br/><br/>
            <a href="https://www.youtube.com/channel/UCAnqUKt9dkY7Tw2kndO9JAA/videos" style="color:green;cursor: pointer;font-weight: bold">Klikkelj a többi videóért!</a>



        </div>
		<div id="doboz"style="text-align: center">
			<div class="image-row spacer" style="font-family: 'franklin_gothic_bookregular'; font-size:17px; text-align: justify;">
			<p><?php echo __('Megmutatjuk nektek az eddigi meglepi dobozaink tartalmát. Természetesen a Smart és a Plus dobozok egy adott hónapon belül mást és mást tartalmazhatnak. A Smart doboz inkább jutalomfalatokban erős, míg a Plus doboz mindig valami kiegészítőt, extra terméket kínál a kutyusnak vagy a gazdinak.');?></p>
			<br />
		<p><?php echo __('Előfordul bizony, hogy egyes termékek még egy hónapon belül is különbözőek az adott doboz kategórián belül, hiszen mindig próbáljuk abszolút kutyaszemélyiségre szabni a meglepiket!');?></p> 
			<br />
		<p><?php echo __('Ha például egy kutyus érzékeny valamire, más jutalomfalat vagy táp kerül a csomagba. Ha már törzsvendégünk, akkor pedig arra is figyelmet fordítunk, hogy ne kapja ismét ugyanazokat a termékeket vagy ízesítést, mint az előző hónapokban!');?></p>
			<br />
		<p><?php echo __('Egy dolog azonban biztos!');?></p>
			<br />
		<p><span style="font-weight:bold;"><?php echo __('Mindig figyelünk az ár-érték arányra, hiszen az egyik legfontosabb dolog, hogy olyan csomagot állítsunk nektek össze, ami abszolút mértékben megéri az árát! Szeretnénk, ha kedvező áron próbálhatnátok ki új termékeket vagy beszerezni olyanokat, amiket eddig még nem próbáltatok! Ne feledjétek, nekünk az a legnagyobb öröm, ha boldoggá tehetjük a legjobb barátotokat: a kutyusotokat! ♥');?></span></p>
		<br /><br />
                <div class="image-set" style="text-align:center;">
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/plus-june-large.jpg"data-lightbox="example-set13" data-title="2015 Június Plus"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/plus-june.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/smart-june-large.jpg" data-lightbox="example-set13" data-title="2015 Június Smart"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/smart-june.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/may-plus-large.jpg"data-lightbox="example-set13" data-title="2015 Május Plus"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/may-plus.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/may-smart-large.jpg" data-lightbox="example-set13" data-title="2015 Május Smart"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/may-smart.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/aprilis-plus-large.jpg"data-lightbox="example-set13" data-title="2015 Április Plus"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/aprilis-plus.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/aprilis-smart-large.jpg" data-lightbox="example-set13" data-title="2015 Április Smart"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/aprilis-smart.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/marcius-plus-large.jpg"data-lightbox="example-set13" data-title="2015 Március Plus"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/marcius-plus.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/marcius-smart-large.jpg" data-lightbox="example-set13" data-title="2015 Március Smart"><img class="example-image-cards" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/marcius-smart.jpg" alt=""/></a>
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
