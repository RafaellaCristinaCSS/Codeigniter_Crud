<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - View Users</title>
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
                <div class="row">
                    <div class="col-8">
                        <div class="row ">
                            <div class="col-md-6">
                                <h3>View Users</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="<?= base_url() . 'index.php/user/create' ?>" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th width="60">Edit</th>
                                <th width="100">Delete</th>
                            </tr>
                            <?php if (!empty($users)) {
                                foreach ($users as $user) { ?>
                                    <tr>
                                        <td><?= $user['use_id'] ?></td>
                                        <td><?= $user['use_name'] ?></td>
                                        <td><?= $user['use_email'] ?></td>
                                        <td><a href="<?= base_url() . 'index.php/user/edit/' . $user['use_id'] ?>" class="btn btn-primary">Edit</a></td>
                                        <td><a href="<?= base_url() . 'index.php/user/delete/' . $user['use_id'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="5">Records not found</td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>