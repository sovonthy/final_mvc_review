<h1 class="text-center">Add New Employee</h1>
<hr>
<div class="container">
    <form action="index1.php?action=add_employee_information" method="POST">
        <input class="form-control" type="text" name="fn" placeholder="firsnamt">
        <br>
        <input class="form-control" type="text" name="ln" placeholder="lastname">
        <br>
        <select class="form-control" name="select">
            <option selected disabled >Please selete province . . .</option>
            <?php
                if(isset($data['data_province'])){
                    foreach ($data['data_province'] as $key => $value) {
                ?>
            <option value="<?php echo $value['pro_id'] ?>" ><?php echo $value['pro_name'] ?></option>
            <?php
                        }
                    }
            ?>
        </select>
        <br>
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
</div>