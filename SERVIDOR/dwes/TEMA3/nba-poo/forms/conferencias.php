<?php
function conferenciaJug($result){
    while($reg = $result->fetch_assoc()){
        echo "<option value='{$reg['Conferencia']}'>{$reg['Conferencia']}</option>";
    }
}