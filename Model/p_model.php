<?php
    function get_province(){
        include "connection.php";
        $query = "SELECT * FROM tblprovince";
        $result = mysqli_query($connection, $query);
        $rows = [];
        foreach ($result as  $value) {
            $rows[] = $value;
        }
        return $rows;
    }
    function p_add_province(){
        include "connection.php";
        $province = $_POST['pro'];
        $insert = "INSERT INTO tblprovince(pro_name) VALUES('$province')";
        $result = mysqli_query($connection, $insert);
        return $result;
    }

    function edit_pro(){
        include "connection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM tblprovince WHERE pro_id = $id";
        $result = mysqli_query($connection, $query);
        $rows = [];
        foreach ($result as  $value) {
            $rows[] = $value;
        }
        return $rows;
    }

    function  get_edit(){
        include "connection.php";
        $id = $_POST['id'];
        $province = $_POST['pro'];
        $update = "UPDATE tblprovince SET pro_name = '$province'  WHERE pro_id = $id";
        $result = mysqli_query($connection, $update);
        return $result;
    }

    function delete_data(){
        include "connection.php";
        $id = $_GET['id'];
        $delete = "DELETE  FROM tblprovince WHERE pro_id = $id";
        $result = mysqli_query($connection, $delete);
        return $result;
    }
?>