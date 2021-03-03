<?php 

class formet{

   public function formetDate($time){

   	 return date("F j,Y,g:i a",strtotime($time));


   }
   public function textSorten($text,$limit=300){

   	$text=$text." ";
   	$text=substr($text, 0,$limit);
   	$text=substr($text, 0,strrpos($text, ' '));
   	$text=$text."...";
   	return $text;
   	
   }
   public function verySort($text,$limit=100){
      $text=$text." ";
      $text=substr($text, 0,$limit);
      $text=substr($text, 0,strrpos($text, ' '));
      $text=$text."...";
      return $text;
      


   }

   public function validation($data){

      $data=trim($data);
      $data=htmlspecialchars($data);
      $data=stripcslashes($data);
      return $data;
     
   }



	

}


 ?>