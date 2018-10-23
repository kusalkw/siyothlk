<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php

    if($this->session->userdata('admin_flag')==1) {
        include 'admin/admin_header.php';
    }
    else {
        include 'general_header.php';
    }

?>
