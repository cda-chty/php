<?php
$title = 'Contact';
require 'partials/header.php';
?>

    <div class="container py-5">
        <h1>Contact</h1>

        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label class="form-label">Compétences</label>
                <div class="form-check">
                    <input type="checkbox" id="html" name="skills" class="form-check-input">
                    <label for="html" class="form-check-label">HTML / CSS</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="js" name="skills" class="form-check-input">
                    <label for="js" class="form-check-label">JavaScript</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="java" name="skills" class="form-check-input">
                    <label for="java" class="form-check-label">Java</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="php" name="skills" class="form-check-input">
                    <label for="php" class="form-check-label">PHP</label>
                </div>
            </div>

            <button class="btn btn-dark">Valider</button>
        </form>
    </div>

<?php require 'partials/footer.php'; ?>
