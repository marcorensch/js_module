<!DOCTYPE html>
<html lang="en">
<?php include "./partials/docHead.php";?>
<body>
<?php
$site = "Contact";
include "./partials/header.php";?>

<?php
if($_POST){
    $content = $_POST;
    $file = "text.txt";
    file_put_contents($file, "\n".json_encode($content),FILE_APPEND);
}

?>
    <section class="banner parallax">
        <div class="page-headline">
            <h1>Kontakt</h1>
        </div>
    </section>
    <main>
        <div class="content nx-padding">
            <form action="contact.php" method="post">
                <fieldset>
                    <div class="nx-flex">
                        <div>
                            <span class="nx-text-large">Vielen Dank für Ihr Interesse!</span>
                            <p>Gerne bespreche ich mit Ihnen weitere Details</p>
                        </div>
                        <div>
                            <div class="nx-margin nx-flex">
                                <label for="title">Anrede</label>
                                <select type="text" name="title" id="title" required>
                                    <option value="">Bitte wählen</option>
                                    <option value="herr">Herr</option>
                                    <option value="frau">Frau</option>
                                </select>
                            </div>
                            <div class="nx-margin nx-flex">
                                <label for="firstname">Vorname</label>
                                <input type="text" name="firstname" id="firstname" required placeholder="Vorname" />
                            </div>
                            <div class="nx-margin nx-flex">
                                <label for="lastname">Nachname</label>
                                <input type="text" name="lastname" id="lastname" required placeholder="Nachname" />
                            </div>
                            <div class="nx-margin nx-flex">
                                <label for="email">E-Mail</label>
                                <input type="email" name="email" id="email" required placeholder="name@operator.tld" />
                            </div>
                            <div class="nx-margin nx-flex">
                                <label for="message">Nachricht</label>
                                <textarea name="message" id="message"></textarea>
                            </div>
                        </div>
                    </div>

                </fieldset>
                <fieldset class="nx-flex flex-right">
                    <button type="reset" class="nx-button nx-button-danger">Löschen</button>
                    <button type="submit" class="nx-button nx-button-primary">Senden</button>
                </fieldset>
            </form>
        </div>
    </main>

    <?php include "./partials/footer.php";?>
    <?php include "./partials/modal.php";?>
</body>
</html>
