<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Modules</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.scss">
    <?php if(isset($addCSS) && count($addCSS)){
        foreach ($addCSS as $styleSrc){
            echo '<link rel="stylesheet" type="text/css" href="'.$styleSrc.'?v=1.4">';
        }
    }?>
    <link rel="stylesheet" type="text/css" href="assets/frameworks/fontAwesome/css/all.min.css">
    <script type="module" src="assets/js/main.js?v=1.3"></script>

    <link rel="icon" type="image/png" href="assets/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/vnd.microsoft.icon" href="assets/img/fav/favicon-32x32.ico">

</head>
