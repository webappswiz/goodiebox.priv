<!DOCTYPE html>
<html lang="en-EN">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <title>Test Work</title>
    </head>

    <body>
        <div>
            <h3>Download form</h3>
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="file" name="logfile"><br><br>
                <input type="submit" value="Download log file">
            </form>
            <hr>
        </div>
        <?php
        echo 'test';
        $destination = "file/";
        $uploadfile = $destination . basename($_FILES['logfile']['name']);

        echo '<pre>';
        if (move_uploaded_file($_FILES['logfile']['tmp_name'], $uploadfile)) {
            echo "Файл корректен и был успешно загружен.\n";
        } else {
            echo "Возможная атака с помощью файловой загрузки!\n";
        }

        $log = file_get_contents($uploadfile);
        if ($log) {
            preg_match_all('/^(\S+) (\S+) (\S+) \[([^:]+):(\d+:\d+:\d+) ([^\]]+)\] \"(\S+) (.*?) (\S+)\" (\S+) (\S+) (\".*?\") (\".*?\")$/is', $log, $matches);
            print_r($matches);
        } else {
            echo 'Error open file';
        }
        ?>
    </body>
