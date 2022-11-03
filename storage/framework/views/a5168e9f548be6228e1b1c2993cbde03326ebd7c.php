<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<h1><center>Update</center></h1>
<form action="/edit" method="post">
    <?php echo csrf_field(); ?>
    <div class="container-md">
        <input type="hidden" name="id" value="<?php echo e($user->user_id); ?>">
        <div class="mt-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name"  value="<?php echo e($user->name); ?>">
        </div>

        <div class="mt-3">
            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone"  value="<?php echo e($user->phone_number); ?>">
        </div>

        <div class="mt-3">
            <label for="exampleFormControlInput1" class="form-label">City</label>
            <input type="text" class="form-control" name="city"  value="<?php echo e($user->city); ?>">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>

</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH D:\Karvin\Binus\belajar with cinhe\Laravel\Laravel\templateKosong\template\resources\views/update.blade.php ENDPATH**/ ?>