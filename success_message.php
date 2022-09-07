<?php
    if($message) {
     echo   '<div class="alert alert-success">';
     echo      '<strong>Congratulations! </strong>'. ' ' .$message;
     echo    '<button type="button" class="btn-close ms-5" data-bs-dismiss="alert" aria-label="Close"></button>';
     echo   '</div>';
    }
?>