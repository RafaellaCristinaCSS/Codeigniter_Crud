<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
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
        <h3>Create User</h3>
        <hr>
        <form method="POST" name="createUser" action="<?= base_url() . 'index.php/user/create' ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control">
                        <?= form_error('name') ?> <!-- Probably so that an error alert appears if the input field is not filled -->
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control">
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<!-- test -->