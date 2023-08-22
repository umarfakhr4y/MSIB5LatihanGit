<?php
$items = array("Universitas : Universitas Negeri Jakarta", "Prodi : Sistem Teknologi Informasi", "Angkatan : 2021");
?>

<?php echo '<!DOCTYPE html>'; ?>
<html lang="en">

<head>
    <?php echo '<meta charset="UTF-8">'; ?>
    <?php echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'; ?>
    <title>
        <?php 'Umar Fakhriy'; ?>
    </title>
    <!-- Menggunakan Bootstrap CSS terbaru dari CDN -->
    <?php echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
</head>

<body>
    <?php echo '<div class="container">'; ?>

    <?php echo '<div class="row">'; ?>
    <?php echo '<div class="col-md-12">'; ?>
    <?php echo '<div class="card mt-5">'; ?>
    <?php echo '<div class="card-body">'; ?>
    <?php echo '<h5 class="card-title text-center fw-bold">Umar Fakhriy Setijono</h5>'; ?>


    <?php echo '<ul>'; ?>
    <?php foreach ($items as $item) { ?>
        <?php echo '<li>' . $item . '</li>'; ?>
    <?php } ?>
    <?php echo '</ul>'; ?>

    <?php echo '</div>'; ?>
    <?php echo '</div>'; ?>
    <?php echo '</div>'; ?>

    <?php echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>'; ?>
</body>

</html>