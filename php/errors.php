<?php
include_once('setup.php');
    if(isset($_SESSION['error'])){
        echo '<span>
            <div class="error">'.$_SESSION['error'].'</div>
        </span>';
    }
