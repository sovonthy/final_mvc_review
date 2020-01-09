<h1 class="text-center">Employee</h1>
<hr>
<div class="container">
    <a href="index1.php?action=add_employee">Add New Employee</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Province</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($data['data_emp'])){
                    foreach ($data['data_emp'] as $key => $value) { 
            ?>
            <tr>
                <td><?php echo $value['emp_id'] ?></td>
                <td><?php echo $value['emp_fname'] ?></td>
                <td><?php echo $value['emp_lname'] ?></td>
                <td><?php echo $value['pro_name'] ?></td>
                <td>
                        <a onclick="return confirm('Are you sure want to delete?')" href="index1.php?action=delete&id=<?php echo $value['emp_id'] ?>">delete</a>
                        <a href="index1.php?action=edit_form&id=<?php echo $value['emp_id'] ?>">edit</a>
                </td>
            </tr>
            <?php
                }
                }
            ?>
        </tbody>
    </table>
</div>