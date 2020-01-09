<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final Prepare</title>
</head>
<body>
    <h1 class="text-center">Province</h1>
    <hr>
    <div class="container">
        <a href="index.php?action=form_add">Add New Province</a>
        <table class="table table-bordered"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Province</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($data['p_data'])){
                        foreach ($data['p_data'] as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value['pro_id']; ?></td>
                    <td><?php echo $value['pro_name']; ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo $value['pro_id'] ?>">Edit</a>
                        <a onclick=" return confirm('Are you sure want to delete')" href="index.php?action=delete&id=<?php echo $value['pro_id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php
                       }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>