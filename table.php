<!DOCTYPE html>
<html lang="en">
<?php
$addCSS = ['assets/css/table.css'];
$addScript = ['assets/js/modules/Table.js'];
include "./partials/docHead.php";?>
<body>
<?php
$site = "Table";


include "./partials/header.php";?>
    <section class="banner parallax">
        <div class="page-headline">
            <h1>Table</h1>
        </div>
    </section>

    <main>
        <div class="content nx-padding">
            <div class="responsive-container">
                <table id="table">
                    <thead>
                    <tr>
                        <th>Vorname</th>
                        <th>Nachname</th>
                        <th>Jahrgang</th>
                        <th>E-Mail</th>
                        <th>Telefon</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <?php require_once "./partials/tablerow.php"; ?>
            </div>
        </div>
    </main>

    <?php include "./partials/footer.php";?>
    <?php include "./partials/modal.php";?>
</body>
</html>
