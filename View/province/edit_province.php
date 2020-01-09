<h1 class="text-center">Edit Province</h1>
<hr>
<div class="container">
    <form action="index.php?action=edit_province_information" method="POST">
        <?php
            if(isset($data['data_province'])){
                foreach ($data['data_province'] as $key => $value) {
           
        ?>
        <input  type="hidden" name="id" value="<?php echo $value['pro_id'] ?>">
        <input class="form-control" type="text" name="pro" value="<?php echo $value['pro_name'] ?>">
        <br>
        <?php
                     
            }
        }
        ?>
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
</div>