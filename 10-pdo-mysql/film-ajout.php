<?php require 'partials/header.php';

// Pour le select
$categories = db()->query('SELECT * FROM category')->fetchAll();

// Récupérer les valeurs du formulaire
$title = sanitize($_POST['title'] ?? null);
$released_at = $_POST['released_at'] ?? null;
$description = sanitize($_POST['description'] ?? null);
$duration = $_POST['duration'] ?? null;
// $cover = $_FILES['cover'] ?? null;
$category = $_POST['category'] ?? null;

$errors = [];

if (submitted()) {
    // Vérification des erreurs
    if (strlen($title) === 0) {
        $errors['title'] = 'Le titre est obligatoire.';
    }

    // Vérification de la date
    $date = date_create($released_at); // new DateTime($released_at);
    if (!$date || $date && $date->format('Y-m-d') !== $released_at) {
        $errors['released_at'] = 'La date est invalide.';
    }

    // strlen('é') => 2
    // mb_strlen('é') => 1
    if (mb_strlen($description) <= 5) {
        $errors['description'] = 'La description doit faire 5 caractères minimum.';
    }

    if (!($duration > 1 && $duration < 999)) {
        $errors['duration'] = 'La durée doit être entre 1 et 999 minutes.';
    }

    // @todo upload vérif

    $exists = db()->query('SELECT COUNT(id) FROM category WHERE id = '.intval($category))->fetchColumn();
    if (!$exists) {
        $errors['category'] = 'La catégorie est invalide.';
    }

    if (empty($errors)) {
        // @todo upload

        $cover = 'le-parrain.jpg'; // Juste pour tester...

        // On fait la requête SQL pour insérer le film
        $query = db()->prepare('INSERT INTO movie (title, released_at, description, duration, cover, id_category)
            VALUES (:title, :released_at, :description, :duration, :cover, :category)');
        $query->execute([
            'title' => $title,
            'released_at' => $released_at,
            'description' => $description,
            'duration' => $duration,
            'cover' => $cover,
            'category' => $category,
        ]);
    }
}

?>

<div class="container my-5">
    <nav class="my-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajout</li>
        </ol>
    </nav>

    <div class="row">
        <div class="offset-lg-3 col-lg-6">
            <h1>Ajouter un film</h1>

            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                <?php foreach ($errors as $error) { ?>
                    <p class="m-0"><?= $error; ?></p>
                <?php } ?>
                </div>
            <?php } ?>

            <form method="post">
                <div class="mb-3">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= $title; ?>">
                </div>

                <div class="mb-3">
                    <label for="released_at">Date de sortie</label>
                    <input type="date" name="released_at" id="released_at" class="form-control" value="<?= $released_at; ?>">
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"><?= $description; ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="duration">Durée</label>
                    <input type="number" name="duration" id="duration" class="form-control" value="<?= $duration; ?>">
                </div>

                <div class="mb-3">
                    <label for="cover">Cover</label>
                    <input type="text" name="cover" id="cover" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="category" >Catégorie</label>
                    <select class="form-select" name="category" id="category">
                        <option selected disabled>Choisir une catégorie...</option>
                        <?php foreach ($categories as $cat) { ?>
                            <option <?= $cat['id'] === $category ? 'selected' : '' ?> value="<?= $cat['id']; ?>">
                                <?= $cat['name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <button class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>
