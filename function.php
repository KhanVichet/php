<?php

    function sup(){
        function sub(){
            print 'It in sub function';
        }
    }

    sup();
    sub();


    function take_arrage($input){
        echo " $input[0] + $input[1] = ",$input[0]+ $input[1];
    }

    take_arrage('123');


    function add($string ){
        $string .='and something extra';
    }

    echo add('This is a string ,');
?>