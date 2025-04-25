<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5 col-12 col-md-6">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Create a New Event</h2>
        <a href="<?=base_url("/event/list")?>" class="btn btn-primary">Events</a>
    </div>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (count(validation_errors())): ?>
        <div class="alert alert-danger">
            <?= validation_list_errors(); ?>
        </div>
    <?php endif; ?>

    <form action="<?=base_url('/event/create');?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="name" class="form-label">Event Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= old('name') ?>">
        </div>

        <div class="mb-3">
            <label for="venue" class="form-label">Venue</label>
            <input type="text" name="venue" id="venue" class="form-control" value="<?= old('venue') ?>">
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="<?= old('date') ?>">
        </div>

        <button type="submit" class="btn btn-primary">Create Event</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>