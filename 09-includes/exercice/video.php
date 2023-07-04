<?php
// Je vérifie si l'id est présent
$id = $_GET['id'] ?? null;
$theme = $_GET['theme'] ?? '#fff';

// On affiche une 404 si l'id n'est pas
// présent
if (! $id) {
    http_response_code(404);
    require '404.php';
    die(); // Arrête le script
}

require 'partials/header.php'; ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0" style="background-color: <?= $theme; ?>">
        <div class="container">
            <nav class="mt-5" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="videos.php">Vidéos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vidéo <?= $id; ?></li>
                </ol>
            </nav>
            <h1>Vidéo <?= $id; ?></h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <form action="">
                <input type="color" name="theme" value="">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <button>Changer le thème</button>
            </form>
        </div>
    </main>

<?php require 'partials/footer.php'; ?>
