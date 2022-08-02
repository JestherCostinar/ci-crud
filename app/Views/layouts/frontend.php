<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI CRUD | <?php echo $title ?></title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
</head>

<body>
    <div class="app">
        <?= $this->include('layouts/inc/navbar') ?>
        <?= $this->renderSection('content') ?>
    </div>
    <script src="<?= base_url('assets/js/jquery-3.6.0.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
    $(document).ready(function() {
        <?php if (session()->getFlashdata('status')) : ?>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?= session()->getFlashdata('status') ?>");
        <?php endif; ?>
    });
    </script>
    <?= $this->renderSection('scripts') ?>

</body>

</html>