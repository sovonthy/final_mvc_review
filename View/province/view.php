<div class="container">
    <h1 class="text-center">Province</h1>
    <hr>
    <a class="btn btn-success" href="index.php?action=form_add">And New Province</a>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Province_name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($data['data_province'])){
                    foreach ($data['data_province'] as $value) {
                       
                 
            ?>
            <tr>
                <td><?php echo $value['pro_id'] ?></td>
                <td><?php  echo $value['pro_name'] ?></td>
                <td>
                    <a href="index.php?action=edit_province&id=<?php echo $value['pro_id']?>">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete?')" href="index.php?action=delete&id=<?php echo $value['pro_id']?>">Delete</a>
                </td>
            </tr>
            <?php
                   }
                }
            ?>
        </tbody>
    </table>
</div>