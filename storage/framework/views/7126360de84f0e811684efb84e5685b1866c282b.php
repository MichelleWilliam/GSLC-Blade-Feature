<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<h1></h1>
<div class="container-sm">
    <a class="btn btn-primary" href="/insert" role="button">Insert</a>
</div>

<form action="/search" method="get">

    <div class="container-sm">
    <div class="mb-3 ">
        <label for="exampleFormControlInput1" class="form-label">Search</label>
        <input type="text" class="form-control" name="search" placeholder="Input Name">
    </div>
    </div>
</form>

<div class="container-md">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Phone Number</th>

            <th scope="col">Action</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
        <tr>
<!--            --><?php //echo user['name']?>
            <th scope="row"> <?php echo e($user->user_id); ?> </th>
            <td> <?php echo e($user->name); ?> </td>
            <td><?php echo e($user->phone_number); ?></td>

            <td>
                <div class="container">
                    <div class="row">

                        <div class="col-sm">
                            <form action="/update/<?php echo e($user->user_id); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input class="btn btn-primary" type="submit" value="Update">
                            </form>
                        </div>

                        <div class="col-sm">
                            <form action="/delete/<?php echo e($user->user_id); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input class="btn btn-primary" type="submit" value="Delete">
                            </form>
                        </div>

                    </div>
                </div>



            </td>

        </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <div class="m-5 d-flex justify-content-center">
        <?php echo e($users->withQueryString()->links()); ?>

    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH D:\Karvin\Binus\belajar with cinhe\Laravel\Laravel\templateKosong\template\resources\views/hello.blade.php ENDPATH**/ ?>