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

    function add_emp_info(){
        include "connection.php";
        $id  = $_POST['select'];
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $insert = "INSERT INTO tblemployee(emp_fname,emp_lname,emp_province_id) VALUES('$fn','$ln','$id')";
        $result = mysqli_query($connection, $insert);
        return $result;
    }

    function get_employee(){
        include "connection.php";
        $select = "SELECT * FROM tblemployee INNER JOIN tblprovince ON emp_province_id = pro_id";
        $result = mysqli_query($connection, $select);
        $rows= [];
        if($result && mysqli_num_rows($result)){
            foreach ($result as $key => $value) {
                $rows[] = $value;
            }
        }
        return $rows;
    }

    function delete_emp(){
        include "connection.php";
        $id = $_GET['id'];
        $delete = "DELETE FROM tblemployee WHERE emp_id=$id";
        $result = mysqli_query($connection, $delete);
        return $result;
    }

    function edit(){
        include "connection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM tblprovince;";
        $result = mysqli_query($connection, $query);
        $rows = [];
        foreach ($result as  $value) {
            $rows[] = $value;
        }
        return $rows;  
    }

    function employee_edit(){
        include "connection.php";
        $query = "SELECT * FROM tblemployee";
        $result = mysqli_query($connection, $query);
        $rows = [];
        foreach ($result as  $value) {
            $rows[] = $value;
        }
        return $rows;
    }

    function edit_emp_info(){
        include "connection.php";
        $id = $_POST['id'];
        var_dump($id);
        $firstname = $_POST['fn'];
        $lastname = $_POST['ln'];
        $province = $_POST['select'];
        $update = "UPDATE tblemployee INNER JOIN tblprovince SET emp_fname = '$firstname', emp_lname = '$lastname',emp_province_id='$province' WHERE emp_id=$id";
        $result = mysqli_query($connection, $update);
        return $result;
    }
?>