<div class="container mt-5">
    <form action="index.php?action=edit_province" method="POST">
        <h1 class="text-center">Add New Province</h1>
        <?php
            if(isset($data['e_privince'])){
                foreach ($data['e_privince'] as $key => $value) {
        ?>
        <input type="hidden" name="id_pro" value="<?php echo $value['pro_id'] ?>" >
        <input class="form-control" type="text" value="<?php echo $value['pro_name'] ?>"  name="province">
        <br>
        <?php
               }
            }
        ?>
        <input type="submit" class="btn btn-success" value="submit">
    </form>
</div>