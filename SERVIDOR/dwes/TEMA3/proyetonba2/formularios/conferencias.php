<?php
    function conferenciaJug ($resultadoQuery){
        while($row = mysqli_fetch_assoc($resultadoQuery)) {
            echo "<option value='{$row['conferencia']}'>{$row['conferencia']}</option>";
        }
    }
