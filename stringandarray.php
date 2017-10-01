<?php

  $obj = new main();
  $text = "Harien";
  $text2 = "Mone";
  $obj->printthis($text);
  $obj->reverse($text);
  $obj->lower($text);
  $obj->upper($text);
  $obj->finder($text);
  $obj->repeats($text);
  $obj->shuffler($text);
  $obj->capitalized($text);
  $obj->partofstr($text); 
  $obj->comparison($text,$text2);



  $languages = array ('C','R','java','python','B');
  $secondarray = array ('1','3','5','7','10');
  $obj->counting($languages);
  $obj->sortingarray($languages);
  $obj->rev_array($languages);
  $obj->combine($languages,$secondarray);
  $obj->chunk($languages);
  $obj->arraypop($languages);
  $obj->arraypush($languages);
  $obj->arrayslice($languages);
  $obj->arrayflip($languages);
  $obj->arraysum($languages);


  
  class main {

    public function __construct() {

      echo ' This is PHP assignment . </br>';

    }

    public function printthis($text) {
      
	  echo '<h2>length of the string</h2>' .$text .'<h2>is</h2>' ." " .strlen($text);
	  echo '<hr>';
    }
	
	public function reverse($text) {
   
	  echo '<h2>Reverse of the string</h2>' .$text .'<h2>is</h2>' ." " .strrev($text);
	  echo '<hr>';
    }
	public function lower($text) {
   
	  echo '<h2>Lowercase of the string</h2>' .$text .'<h2>is</h2>' ." " .strtolower($text);
	  echo '<hr>';
    }
	public function upper($text) {
   
	  echo '<h2>Uppercase of the string</h2>' .$text .'<h2>is</h2>' ." " .strtoupper($text);
	  echo '<hr>';
    }
	public function finder($text) {
   
	  echo '<h2>Searches for character in a string, the character e</h2>' .$text .'<h2></h2>' ." " .strpbrk($text,'e');
	  echo '<hr>';
    }
        public function repeats($text) {
   
	  echo '<h2>Repeats the string</h2>' .$text .'<h2>5 times</h2>' ." " .str_repeat($text, 5);
	  echo '<hr>';	
	  
     } 

	public function shuffler($text) {
   
	  echo '<h2>Shuffles the string</h2>' .$text .'<h2>is</h2>' ." " .str_shuffle($text);
	  echo '<hr>';  
     }
	

	public function capitalized($text) {
   
	  echo '<h2>first character of the string</h2>' .$text .'<h2>is capitalized</h2>' ." " .ucfirst($text);
	  echo '<hr>';
     }

   	public function partofstr($text){

          echo '<h2>return part of string</h2>';
          echo substr('Harien',1); 

	  echo '<hr>';
        

    }
	public function  comparison($text,$text2){
          echo'<h2> stringcomparison</h2>';
	  echo $text;
	  echo '<br>';
	  echo $text2;
	  if(strcmp($text1,$text2)!==0){
	     echo'<br>';
	     echo 'Stings are not equal';
	     }
             echo'<hr>';
	     echo'<hr>';
	     echo'<hr>';


	}     
	
 
         public function counting($languages) {
 		
	       echo '<h1>counting the array </h1>';
         echo 'number of elements';
         echo'<br>';
	       echo count($languages);
	       echo '<hr>';
	}
    
         public function sortingarray($languages){
          
           echo '<h1>sortingarray</h1>';
           echo 'sorted array is';
           echo rsort($languages);
           print_r($languages);
           echo '<hr>';

         }
        
        public function rev_array($languages){

        	echo '<h1>Array in reverse order</h1>';
        	echo 'reversed array is';
        	$store = array_reverse($languages);
        	print_r($store);
        	echo '<hr>';
        }
        
         public function combine($languages,$secondarray){

           echo '<h1>merging arrays</h1>';
           echo ' merged array is  ';
           $output = array_combine($languages,$secondarray);
           print_r($output);
           echo '<hr>';
        }
         

         public function chunk($languages){
           
           echo'<h1> array chunk</h1>';
           echo 'split the array into 2';
           echo'</br>';
           $output1 = array_chunk($languages,2);
           print_r($output1);
           echo'<hr>';
         }

        
         

         public function arraypop($languages){
           
           echo'<h1> Arraypop</h1>';
           echo 'New array after poping  ';
           array_pop($languages);
           print_r($languages);
           echo '<hr>';
         }

          public function arraypush($languages){
          echo'<h1> Arraypush</h1>';
           echo 'New array after pushing  ';
           array_push($languages,"Hive","php");
           print_r($languages);
           echo '<hr>';
          }
         
      
      public function arrayslice($languages){
           
           echo'<h1> array slice</h1>';
           echo 'slice from 1 to 3';
           echo'</br>';
           $output1 = array_slice($languages,1,3);
           print_r($output1);
           echo'<hr>';
         }

         public function arrayflip($languages){
           
           echo'<h1> array flip</h1>';
           echo 'flipped arrray is';
           echo'</br>';
           $output1 = array_flip($languages);
           print_r($output1);
           echo'<hr>';
         }

          public function arraysum($languages){
           
           echo'<h1> array sum</h1>';
           echo 'sum of arrray is';
           echo'</br>';

           echo array_sum(array_flip($languages));
           echo'<hr>';
         }



    public function __destruct() {

      echo '</br> I\'m Done';

    }
  }


?>
