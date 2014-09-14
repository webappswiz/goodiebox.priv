<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Test</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <script type="text/javascript" src="http://goodiebox.priv/assets/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function(){
        $('#haha').on('click',function(){
           if($('#test').is(':visible')){
               $('#test').hide();
           } else {
               $('#test').show();
               $('#test').html('<p>А хуй</p>');
           }
        });
    });

        </script>
        </head>
        <body>
            <button id="haha" class="hshsh" name="haha">Hahahahahahha</button>
            <div id="test">
                <p>Testing....</p>
            </div>
        </body>
        </html>