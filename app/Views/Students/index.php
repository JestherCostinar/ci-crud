<?=$this->extend('layouts/frontend.php');?>
<?=$this->section('content')?>

<div class="card m-5">
    <div class="card-header">
        <h3>Students
            <a href="" class="btn btn-primary float-end">Add Student</a>
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
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $student): ?>
                <tr>
                    <th scope="row"><?php echo $student['id']; ?></th>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['email']; ?></td>
                    <td>@<?php echo $student['phone']; ?></td>
                    <td><?php echo $student['course']; ?></td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?=$this->endSection()?>