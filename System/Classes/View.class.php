<?php

class View {
    public function header() {

        include (BASE_DIR .'/Templates/header.php');
    }

    public function footer() {
        
        include (BASE_DIR .'/Templates/footer.php');
    }
    
}
