<?php
      $data = array();
      fixible_function($data);
      function fixible_function(&$data){
          $function = "employee";
          if(isset($_GET['action'])){
              $function = $_GET['action'];
          }
          $function($data);
      }
      function employee(&$data){
        $data['data_emp'] = get_employee();
        $data['pages'] = "employee/employee";
      }
      function add_employee(&$data){
        $data['pages'] = "employee/add_employee";
        $data['data_province'] = get_province();
      }
      function add_employee_information(&$data){
        $result = add_emp_info($_POST);
        if($result){
          header("Location:index1.php?action=employee");
        }
      }

      function delete(&$data){
        $delete = delete_emp($_GET);
        if($delete){
          header("Location:index1.php?action=employee");
        }
      }

      function edit_form(&$data){
        $data['edit_info'] = edit($_GET);
        $data['edit'] = employee_edit();
        $data['pages'] = "employee/edit_employee";
      }
      function edit_employee_information(&$data){
        $result = edit_emp_info();
        if($result){
          header("Location:index1.php?action=employee");
        }
      }
?>