<?= $this->extend('layouts/frontend.php'); ?>
<?= $this->section('content') ?>

<div class="card m-5">
    <div class="col-md-12">
        <?php if (session()->getFlashdata('status')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('status') ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="card-header">
        <h3>Students
            <a href="students/create" class="btn btn-primary float-end">Add Student</a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Course</th>
                    <th scope="col">Action</th>
                    <th scope="col">METHOD Delete</th>
                    <th scope="col">Alertify Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) : ?>
                <tr>
                    <th scope="row"><?php echo $student['id']; ?></th>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['email']; ?></td>
                    <td>@<?php echo $student['phone']; ?></td>
                    <td><?php echo $student['course']; ?></td>
                    <td>
                        <a href="<?= base_url('students/update/' . $student['id']); ?>"
                            class="btn btn-success btn-sm">Edit</a>

                        <a href="<?= base_url('students/delete/' . $student['id']) ?>"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    <td>
                        <form action="/students/delete/<?php echo $student['id'] ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <button type="button" value="<?= $student['id'] ?>"
                            class="confirm-del-btn btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script>
$(document).ready(function() {
    $('.confirm-del-btn').click(function(e) {
        e.preventDefault();
        var id = $(this).val();
        if (confirm("Do you want to delete this data?")) {
            // alert(id);
            $.ajax({
                url: "/students/delete/" + id,
                success: function(response) {
                    window.location.reload();
                    alert("Data delete");
                }
            })
        }
    })
})
</script>
<?= $this->endSection() ?>