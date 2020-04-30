<?php

function form_begin($class, $method, $action){
    echo "<form class='$class' method='$method', action='$action'>";
}

function form_nombre($label, $name){
    echo "<div class='form-group'>";
    echo "<label>$label</label>";
    echo "<input required class='form-control' type='number' name='$name'/>";
    echo "</div>";
}

function form_text($label, $name, $taille=40){
    echo "<div class='form-group'>";
    echo "<label>$label</label>";
    echo "<input required class='form-control' type='text' name='$name' maxlength='$taille'/>";
    echo "</div>";
}

function form_select($label, $name, $multiple, $size, $list){
    echo "<div class='form-group'>";
    echo "<label>$label</label>";
    if($multiple == ""){
        echo "<select required class='form-control' name='$name' size='$size'>";
    } else {
        $name = $name.'[]';
        echo "<select required class='form-control' name='$name' multiple size='$size'>";
    }

    foreach ($list as $value){
        echo "<option value='$value'>$value</option>";
    }
    echo "</select>";
    echo "</div>";
}

function form_input_hidden($name, $value){
    echo "<input name='$name' value='$value' hidden />";
}

function form_end(){
    echo "</form>";
}

function form_input_checkbox($name, $checked, $label){
    $checked = $checked ? "checked" : "";
    echo "<label>$label</label>";
    echo "<input type='checkbox' name='$name' $checked/>";
}

function form_input_radio($name, $checked, $value, $label){
    $checked = $checked ? "checked" : "";
    echo "<label>$label</label>";
    echo "<input name='$name' type='radio' $checked value='$value' />";
}

function form_input_submit($value){
    echo "<input type='submit' value='$value' />";
}

function form_input_reset($value){
    echo "<input type='reset' value='$value' />";
}

function form_textarea($label, $name, $value){
    echo "<label>$label</label>";
    echo "<textarea name='$name' value='$value'></textarea>";
}

?>