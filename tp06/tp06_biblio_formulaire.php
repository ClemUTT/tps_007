<?php

// 20/03/2019 : bibliotheque fonctions formulaire avec bootstrap
// --------------------------------------------------
// form_begin
// --------------------------------------------------

function form_begin($class, $method, $action) {
    echo ("\n<!-- ============================================== -->\n");
    echo ("<!-- form_begin : $class $method $action) -->\n");

    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

// --------------------------------------------------
// form_input_text
// --------------------------------------------------

function form_input_text($label, $name, $size, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
    echo ("  <p>\n");

    echo ("<div class='form-group'>");
    echo (" <label for='$abel'>$label</label>");
    echo (" <input type='text' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}

// --------------------------------------------------
// form_input_hidden
// --------------------------------------------------

function form_input_hidden($name, $value) {
    // todo ...
}

// --------------------------------------------------
// form_end
// --------------------------------------------------

function form_end() {
// todo ...
}


// --------------------------------------------------
// form_select
// --------------------------------------------------

function form_select($label, $name, $multiple, $size, $liste) {
// todo ...
}

function form_input_checkbox($name, $checked, $label) {
// todo ...
}

function form_input_radio($name, $checked, $value, $label) {
// todo ...
}

function form_input_submit($value) {
// todo ...
}

function form_input_reset($value) {
// todo ...
}

function form_textarea($label, $name, $value) {
// todo ...
}


?>

