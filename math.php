<?php


    class score{

         public function sum($math,$khmer,$english){
            return $math+$khmer+$english;
         }

         public function arrage($totalScore,$totalSubject){
            return $totalScore/$totalSubject;
         }
    }

    class salary{

        public function salaryOfEmployee(){
            echo 'The maneger 500$';
            echo 'The sale 300$';
            echo 'HR 400$';
            echo 'Maketing 600$';
        }

        public function salaryWithinTax($salary){
            // ($salary < 250) ? $tax = 0 :($salary <500) ? $tax = 5 :($salary <1000 ) ? $tax =8 :($salary <2000) ? $tax=10 : $tax = 15

            if ($salary<250){
                $tax =0;
            }else if($salary<=500){
                $tax =5;
            }else if($salary<=1000){
                $tax = 8;
            }else if($salary<=2000){
                $tax = 10;
            }else{
                $tax=15;
            }

            return $totalSalary = $salary -(($salary*$tax)/100);
            
        }
    }
?>