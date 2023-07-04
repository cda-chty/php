<?php require 'partials/header.php';

$videos = [
    'Vidéo 1' => 'hKQHJEZF6YQ',
    'Vidéo 2' => 'F-zQOAwSuHg',
    'Vidéo 3' => 'LqS88aVasA4',
    'Vidéo 4' => '-vmdSULzPbM',
];
?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Nos vidéos</h1>

            <?php foreach ($videos as $name => $video) { ?>
            <a href="video.php?id=<?= $video; ?>" class="btn btn-primary"><?= $name; ?></a>
            <?php } ?>
        </div>
    </main>

<?php require 'partials/footer.php'; ?>
