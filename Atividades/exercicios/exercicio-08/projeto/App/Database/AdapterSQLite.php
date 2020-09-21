<?php

namespace App\Database;

class AdapterSQLite implements AdapterInterface{


    public function open(){
        echo "<br>Adapter Open()</br>";
    }
    public function close(){
        echo "<br>Adapter Close()</br>";
    }
    public function get(){

        echo "<br>Adapter Get()</br>";

    }


}