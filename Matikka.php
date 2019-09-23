<?php
class Matikka{
 
        public function calcKilokalorit($num) {
            $vak = 4.184;
            $result = $vak/$num;
            return $num. ' Joule is equal to ' . $result . ' Kcal ' . '<br>';
          }

        public function calcJouleiksi($num) {
            $vak = 4.184;
            $result = $vak * $num;
            return  $num . ' Kilokalorit is equal to ' . $result . ' J ' . '<br>';
          }
          
        // A = π r2

        public function ympyränPintaAla($num){
            $pii = pi();
            $area = $pii * ($num * $num);
            return 'Ympyrän pinta- ala on  ' .$area . '<br>';
        }
   
        //A = B · h / 2 (jossa B on kannan pituus ja h on korkeus)
         
        public function suorakulmionPintaAla($num, $num2){
            
            $area =  $num * ( $num2 / 2);
            return 'Suorakulmio pinta- ala on  ' . $area . '<br>';
        }
      
        // Number in °F − 32) × 5/9 = result in celsius
        public function Celsius($num){
            $result = ($num -32) * 5/9;
            return $result . '°C'. ' <br>' ;
        }

        // Number  in °C × 9/5) + 32 = result in fahrenheit

        public function Fahrenheit($num){
            $result = ($num + 32) * 9/5;
            return $result . '°F'. ' <br>' ;
        }


        // αrad =αast/360*2π

      public function radian($ast) {
          $rad = ($ast/360) *( 2 * pi());
          return 'α '. $rad . '<br>';
      }

      public function textValidate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      



    }
?>