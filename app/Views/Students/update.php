<?= $this->extend('layouts/frontend'); ?>

<?= $this->section('content'); ?>
<div class="card m-5">

    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <?= service('validation')->listErrors() ?>
        </div>
    </div>

    <div class="card-header">
        <h3>Edit Students Record
            <a href="<?= base_url('students/') ?>" class="btn btn-primary float-end">Go back to Student list</a>
        </h3>
    </div>
    <div class="card-body">
        <form action="/students/update/<?= $student['id'] ?>" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name here"
                    value="<?php echo $student['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Email <span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="name" name="email" placeholder="Enter email here"
                    value="<?php echo $student['email']; ?>">
            </div>
            <div class=" mb-3">
                <label for="phone" class="form-label">Phone <span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number here"
                    value="<?php echo $student['phone']; ?>">
            </div>
            <div class=" mb-3">
                <label for="course" class="form-label">Course <span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Enter course here"
                    value="<?php echo $student['course']; ?>">
            </div>
            <button type=" submit" class="btn btn-primary">Update Record</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>