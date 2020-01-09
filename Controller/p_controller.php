<?php
    $data = array();
    fixible_function($data);
    function fixible_function(&$data){
        $function = "view";
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data){
        $data['data_province'] = get_province();
        $data['pages'] = "province/view";
    }
    function form_add(&$data){
        $data['pages'] = "province/p_add";
    }
    function add_province(&$data){
        $result = p_add_province($_POST);
        if($result){
            header("location:index.php?action=view");
        }else {
            header("location:index.php?action=form_add");
        }
    }
    function edit_province(&$data){
        $data['data_province'] = edit_pro($_GET);
        $data['pages'] = "province/edit_province";
    }

    function edit_province_information(&$data){
        $result = get_edit($_POST);
        if($result){
            header("location:index.php?action=view");
        }
    }

    function delete(&$data){
        $delete = delete_data($_GET);
        if($delete){
            header("location:index.php?action=view");
        }
    }
?>