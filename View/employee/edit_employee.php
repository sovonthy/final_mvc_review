<h1 class="text-center">Add New Employee</h1>
<hr>
<div class="container">
    <form action="index1.php?action=edit_employee_information" method="POST">
        <?php
             foreach ($data['edit'] as $key => $value1) {
        ?>
        <input type="hidden" name="id" value="<?php echo $value1['emp_id'] ?>">
        <input class="form-control" value="<?php echo $value1['emp_fname'] ?>" type="text" name="fn" placeholder="firsnamt">
        <br>
        <input class="form-control" value="<?php echo $value1['emp_lname'] ?>" type="text" name="ln" placeholder="lastname">
        <br>
        <select class="form-control" name="select">
            <?php
                foreach ($data['edit_info'] as $key => $value) {    
                ?>
            <option value="<?php echo $value1['pro_id'] ?>" <?php if($value['pro_id'] == $value1['emp_province_id']){
                ?>
                    selected
                <?php
            }?> sel ><?php echo $value['pro_name'] ?></option>
            <?php
              }
            ?>
        </select>
        <br>
        <?php
             }
        ?>
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
</div>



<select class="form-control" name="select">
            <?php
                foreach ($data['edit_info'] as $key => $value) {
                ?>
            <option value="<?php echo $value['pro_id']?>" <?php if($value['pro_id'] == $value1['emp_province_id']){
                ?>
                    selected
                <?php
            }?> ><?php echo $value['pro_name'] ?></option>
            <?php
                }
            ?>
        </select>