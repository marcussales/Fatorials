<?php		
	class Fatorial{
			private $_n;
			public function setNum($n){
				if($n >= 1){
				$this->_n = "O fatorial do valor inserido eh: " . $n;
				}else{
					echo  "MERDA";
					}
			}
				public function getNum(){
					return $this->_n;
				}
			}			
				
 ?>