<!DOCTYPE html>
<html lang="en">
<?php
    $addCSS = ['assets/css/grid.scss'];
    include "./partials/docHead.php";
    ?>
<body>
    <?php
    $site = "Grid";
    include "./partials/header.php";?>

    <section class="banner parallax">
        <div class="page-headline">
            <h1>Grid Layouts</h1>
        </div>
    </section>

    <main class="grid">

        <p>This grid layout contains three columns and three rows:</p>

        <div class="grid-container">
            <div class="item1"><h2>Exposer</h2></div>
            <div class="item2"><h2>WidgetsBox</h2></div>
            <div class="item3"><h2>nx-youtubeBox</h2><p>The Llamas</p></div>
            <div class="item4"><h2>nx-Tubeflix</h2></div>
            <div class="item5"><h2>agileVideos</h2></div>
            <div class="item6"><h2>agileDownloads</h2></div>
        </div>

    </main>




    <?php include "./partials/footer.php";?>
    <?php include "./partials/modal.php";?>
</body>
</html>

