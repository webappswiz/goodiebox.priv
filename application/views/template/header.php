<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE" />
    <meta charset="UTF-8"/>
<?php
echo '<title>'.URL::title($title).'</title>', PHP_EOL;

if ($favicon) {
    echo '<link rel ="shortcut icon" href="' .URL::base(TRUE, FALSE) . $favicon. '" type="image/x-icon" />';
}

foreach($meta as $key => $attr) {
    echo '<meta '.HTML::attributes($attr).' />';
}

foreach ( Media::styles() as $file => $type) {
    echo HTML::style($file, array('media' => $type)), PHP_EOL;
}
echo  Media::inline_style();
?>

<script>
    var url_base = '<?php echo URL::base(true, true) ?>';
</script>

<?php
foreach ( Media::scripts() as $file) {
    echo HTML::script($file), PHP_EOL;
}
echo  Media::inline_script();
?>
</head>
    <body>
