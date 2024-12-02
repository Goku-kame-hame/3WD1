<?php

class Person
{
    //properties
    var $nama;
    var $alamat;
    var $kota;
    
    //function
    function say(string $nama){
        echo "hello $nama";
    }
    function set_nama($nama){
        $this->nama = $nama;
    }
    function get_nama($nama){
        $this->nama = $nama;
    }
}
?>