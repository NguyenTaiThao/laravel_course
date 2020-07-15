<?php

function showError($errors, $name){
    if($errors->has($name))
        echo '<div class="alert alert-danger">' . $errors->first($name) . '</div>';
			
}

function getCategory($arr, $parent, $separator, $selected){
    foreach($arr as $key => $value){
        if($value['parent_id'] == $parent){
            // echo '<option value="' . $value['id']. '" ' . $value['id'] == $selected ? " selected " : "" . '>'. $separator . $value['name']. '</option>';
            if($value['id'] == $selected) $selected= "selected" ;
            echo '<option value="' . $value['id']. '" ' . $selected . '>'. $separator . $value['name']. '</option>';
            getCategory($arr, $value['id'], $separator. "--|", $value['parent_id']);
        }
    }
}

function getCategoryList($arr, $parent, $separator){
    foreach($arr as $key => $value){
        if($value['parent_id'] == $parent){
            echo    '<div class="item-menu"><span>'. $separator.$value['name'] .'</span>
                        <div class="category-fix">
                            <a class="btn-category btn-primary" href="'. route("category.edit",[$value['id']]) .'"><i class="fa fa-edit"></i></a>
                            <a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>
                        </div>
                    </div>';
            getCategoryList($arr, $value['id'], $separator. "--|");
        }
    }
}
?>