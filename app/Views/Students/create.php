<?= $this->extend('layouts/frontend'); ?>

<?= $this->section('content'); ?>
<div class="card m-5">

    <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <?= service('validation')->listErrors() ?>
            </div>
    </div>

    <div class="card-header">
        <h3>Students
            <a href="<?= base_url('students/') ?>" class="btn btn-primary float-end">Go back to Student list</a>
        </h3>
    </div>
    <div class="card-body">
        <form action="/students/create" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name here">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Email <span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="name" name="email" placeholder="Enter email here">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone <span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number here">
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course <span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Enter course here">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>