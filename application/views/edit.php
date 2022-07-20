<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Update User</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>"> <!-- Adding bootstrap css -->
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="container">
                <h3>Update User</h3>
                <hr>
                <form method="POST" name="updateUser" action="<?= base_url() . 'index.php/user/edit/'.$user['use_id'] ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="<?= set_value('name', $user['use_name']) ?>" class="form-control">
                                <?= form_error('name') ?>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?= set_value('email',$user['use_email']) ?>" class="form-control">
                                <?= form_error('email') ?>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Update</button>
                                <a href="<?= base_url().'index.php/user/index' ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!-- test -->
