<?php
if(isset($_FILES['fileRead'])) {
    echo file_get_contents($_FILES['fileRead']['full_path']);
}


