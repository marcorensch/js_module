<?php
        $content = $_POST;
        $file = "text.txt";
        file_put_contents($file, "\n".json_encode($content),FILE_APPEND);

    ?>
