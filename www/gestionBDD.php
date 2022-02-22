<?php 
class gestionBDD{
    
    protected $db;
    
    function __construct($db){
        $this->db = $db;
    }
    # Function for Login / Display (ADMIN or USER)
    function select(){}

    # Function for register / add an items in shop (ADMIN or USER)
    function insert(){}
    
    # Moficiation of Posts: (ADMIN)
    function update(){}

    
    # remove/delete posts: (ADMIN)
    function delete(){}
}


?>