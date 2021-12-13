<?php

//decalage
function decalage( $h1 , $h2 , $m1 , $m2 , $s1 , $s2 , $d1 , $d2) {

  //si HS ambon noh HE et MS betsaka noh ME
  if ($h1<$h2 && $m1<$m2) {
     $h = $h2 - $h1 ;
     $m = $m2 - $m1 ;

     if ($s1<$s2) {
        $s = $s2 - $s1 ;

        //resultats
        $f = $h . ":" . $m . ":" . $s ;
     }
     else {
       $s = $s1 - $s2 ;

       //resultats
       $f = $h . ":" . $m . ":" . $s ;
     }
  }

  //si HS ambon noh HE et ME betsaka noh MS
  elseif ($h1<$h2 && $m1>$m2) {
      $h = $h2 - $h1 ;
      $m = $m1 - $m2 ;

      $convertiseur_minute = ( 60 * $h ) / 1 ;
      //convertiseur en minute
      $final = $convertiseur_minute - $m ;

      if ($final<60) {

        if ($s1<$s2) {
           $s = $s2 - $s1 ;

           //resultats
           $f = "0" . ":" . $final . ":" . $s ;
        }
        else {
          $s = $s1 - $s2 ;

          //resultats
          $f = "0" . ":" . $final . ":" . $s ;
        }
      }
      else {

          //boucle par 60
          $init = 60 ;
          while ($init < $final) {
             $init = $init + 60 ;
          }
          //recuperation variable init
          $recup = $init - 60 ;
          $recup1 = $final - $recup ;

          //convertiseur en heur
          $convertiseur_heur = (( 1 * $init) / 60 ) - 1 ;

          if ($s1<$s2) {
             $s = $s2 - $s1 ;

             //resultats
             $f = $convertiseur_heur . ":" . $recup1 . ":" . $s ;
          }
          else {
            $s = $s1 - $s2 ;

            //resultats
            $f = $convertiseur_heur . ":" . $recup1 . ":" . $s ;
          }
      }
  }

  //si HE ambon noh HS et ME betsaka noh MS
  elseif ($h1>$h2 && $m1>$m2) {

      $h = $h1 - $h2 ;
      $m = $m1 - $m2 ;

      $result = 24 - $h ;//9
      $result1 = 60 - $m ;//30

      if ($s1<$s2) {
         $s = $s2 - $s1 ;

         //resultats
         $f = $result . ":" . $result1 . ":" . $s ;
      }
      else {
        $s = $s1 - $s2 ;

        //resultats
        $f = $result . ":" . $result1 . ":" . $s ;
      }
  }

  //si HE ambon noh HS et MS betsaka noh ME
  elseif ($h1>$h2 && $m1<$m2) {

      $h = $h1 - $h2 ;
      $m = $m2 - $m1 ;

      $result = 24 - $h ;

      if ($s1<$s2) {
         $s = $s2 - $s1 ;

         //resultats
         $f = $result . ":" . $m . ":" . $s ;
      }
      else {
        $s = $s1 - $s2 ;

        //resultats
        $f = $result . ":" . $m . ":" . $s ;
      }
  }
  //si HE egale noh HS
  elseif ($h1==$h2) {
      $m = $m2 - $m1 ;

      if ($s1<$s2) {
         $s = $s2 - $s1 ;

         //resultats
         $f = "0" . ":" . $m . ":" . $s ;
      }
      else {
        $s = $s1 - $s2 ;

        //resultats
        $f = "0" . ":" . $m . ":" . $s ;
      }
  }
  //si HS ambon noh HE et MS == ME
  elseif ($h1<$h2 && $m1==$m2) {
     $h = $h2 - $h1 ;

     if ($s1<$s2) {
        $s = $s2 - $s1 ;

        //resultats
        $f = $h . ":" . "0" . ":" . $s ;
     }
     else {
       $s = $s1 - $s2 ;

       //resultats
       $f = $h . ":" . "0" . ":" . $s ;
     }

  }
  //si HE ambon noh HS et MS == ME
  elseif ($h1>$h2 && $m1==$m2) {
     $h = $h1 - $h2 ;
     $h1 = 24 - $h ;

     if ($s1<$s2) {
        $s = $s2 - $s1 ;

        //resultats
        $f = $h1 . ":" . "0" . ":" . $s ;
     }
     else {
       $s = $s1 - $s2 ;

       //resultats
       $f = $h1 . ":" . "0" . ":" . $s ;
     }

  }

    return $f ;
}

//decalageheur
  function decalageHeur( $h1 , $h2 , $m1 , $m2 , $s1 , $s2 , $d1 , $d2) {

    //si HS ambon noh HE et MS betsaka noh ME
    if ($h1<$h2 && $m1<$m2) {
       $h = $h2 - $h1 ;
       $m = $m2 - $m1 ;

       if ($s1<$s2) {
          $s = $s2 - $s1 ;

          //resultats
          $f = $h  ;
       }
       else {
         $s = $s1 - $s2 ;

         //resultats
         $f = $h ;
       }
    }

    //si HS ambon noh HE et ME betsaka noh MS
    elseif ($h1<$h2 && $m1>$m2) {
        $h = $h2 - $h1 ;
        $m = $m1 - $m2 ;

        $convertiseur_minute = ( 60 * $h ) / 1 ;
        //convertiseur en minute
        $final = $convertiseur_minute - $m ;

        if ($final<60) {

          if ($s1<$s2) {
             $s = $s2 - $s1 ;

             //resultats
             $f = "0"  ;
          }
          else {
            $s = $s1 - $s2 ;

            //resultats
            $f = "0" ;
          }
        }
        else {

            //boucle par 60
            $init = 60 ;
            while ($init < $final) {
               $init = $init + 60 ;
            }
            //recuperation variable init
            $recup = $init - 60 ;
            $recup1 = $final - $recup ;

            //convertiseur en heur
            $convertiseur_heur = (( 1 * $init) / 60 ) - 1 ;

            if ($s1<$s2) {
               $s = $s2 - $s1 ;

               //resultats
               $f = $convertiseur_heur  ;
            }
            else {
              $s = $s1 - $s2 ;

              //resultats
              $f = $convertiseur_heur ;
            }
        }
    }

    //si HE ambon noh HS et ME betsaka noh MS
    elseif ($h1>$h2 && $m1>$m2) {

        $h = $h1 - $h2 ;
        $m = $m1 - $m2 ;

        $result = 24 - $h ;//9
        $result1 = 60 - $m ;//30

        if ($s1<$s2) {
           $s = $s2 - $s1 ;

           //resultats
           $f = $result ;
        }
        else {
          $s = $s1 - $s2 ;

          //resultats
          $f = $result ;
        }
    }

    //si HE ambon noh HS et MS betsaka noh ME
    elseif ($h1>$h2 && $m1<$m2) {

        $h = $h1 - $h2 ;
        $m = $m2 - $m1 ;

        $result = 24 - $h ;//9

        if ($s1<$s2) {
           $s = $s2 - $s1 ;

           //resultats
           $f = $result ;
        }
        else {
          $s = $s1 - $s2 ;

          //resultats
          $f = $result ;
        }
    }
    //si HE egale noh HS
    elseif ($h1==$h2) {
        $m = $m2 - $m1 ;

        if ($s1<$s2) {
           $s = $s2 - $s1 ;

           //resultats
           $f = 0 ;
        }
        else {
          $s = $s1 - $s2 ;

          //resultats
          $f = 0 ;
        }
    }
    //si HS ambon noh HE et MS == ME
    elseif ($h1<$h2 && $m1==$m2) {
       $h = $h2 - $h1 ;

       if ($s1<$s2) {
          $s = $s2 - $s1 ;

          //resultats
          $f = $h ;
       }
       else {
         $s = $s1 - $s2 ;

         //resultats
         $f = $h ;
       }

    }
    //si HE ambon noh HS et MS == ME
    elseif ($h1>$h2 && $m1==$m2) {
       $h = $h1 - $h2 ;
       $h1 = 24 - $h ;

       if ($s1<$s2) {
          $s = $s2 - $s1 ;

          //resultats
          $f = $h1 ;
       }
       else {
         $s = $s1 - $s2 ;

         //resultats
         $f = $h1 ;
       }

    }

      return $f ;
  }
  //decalage minute
  function decalageMinute( $h1 , $h2 , $m1 , $m2 , $s1 , $s2 , $d1 , $d2) {

    //si HS ambon noh HE et MS betsaka noh ME
    if ($h1<$h2 && $m1<$m2) {
       $h = $h2 - $h1 ;
       $m = $m2 - $m1 ;

       if ($s1<$s2) {
          $s = $s2 - $s1 ;

          //resultats
          $f = $m ;
       }
       else {
         $s = $s1 - $s2 ;

         //resultats
         $f = $m ;
       }
    }

    //si HS ambon noh HE et ME betsaka noh MS
    elseif ($h1<$h2 && $m1>$m2) {
        $h = $h2 - $h1 ;
        $m = $m1 - $m2 ;

        $convertiseur_minute = ( 60 * $h ) / 1 ;
        //convertiseur en minute
        $final = $convertiseur_minute - $m ;

        if ($final<60) {

          if ($s1<$s2) {
             $s = $s2 - $s1 ;

             //resultats
             $f = $final;
          }
          else {
            $s = $s1 - $s2 ;

            //resultats
            $f = $final ;
          }
        }
        else {

            //boucle par 60
            $init = 60 ;
            while ($init < $final) {
               $init = $init + 60 ;
            }
            //recuperation variable init
            $recup = $init - 60 ;
            $recup1 = $final - $recup ;

            //convertiseur en heur
            $convertiseur_heur = (( 1 * $init) / 60 ) - 1 ;

            if ($s1<$s2) {
               $s = $s2 - $s1 ;

               //resultats
               $f = $recup1 ;
            }
            else {
              $s = $s1 - $s2 ;

              //resultats
              $f = $recup1 ;
            }
        }
    }

    //si HE ambon noh HS et ME betsaka noh MS
    elseif ($h1>$h2 && $m1>$m2) {

        $h = $h1 - $h2 ;
        $m = $m1 - $m2 ;

        $result = 24 - $h ;//9
        $result1 = 60 - $m ;//30

        if ($s1<$s2) {
           $s = $s2 - $s1 ;

           //resultats
           $f = $result1 ;
        }
        else {
          $s = $s1 - $s2 ;

          //resultats
          $f = $result1 ;
        }
    }

    //si HE ambon noh HS et MS betsaka noh ME
    elseif ($h1>$h2 && $m1<$m2) {

        $h = $h1 - $h2 ;
        $m = $m2 - $m1 ;

        $result = 24 - $h ;//9

        if ($s1<$s2) {
           $s = $s2 - $s1 ;

           //resultats
           $f = $m ;
        }
        else {
          $s = $s1 - $s2 ;

          //resultats
          $f = $m ;
        }
    }
    //si HE egale noh HS
    elseif ($h1==$h2) {
        $m = $m2 - $m1 ;

        if ($s1<$s2) {
           $s = $s2 - $s1 ;

           //resultats
           $f = $m ;
        }
        else {
          $s = $s1 - $s2 ;

          //resultats
          $f = $m ;
        }
    }
    //si HS ambon noh HE et MS == ME
    elseif ($h1<$h2 && $m1==$m2) {
       $h = $h2 - $h1 ;

       if ($s1<$s2) {
          $s = $s2 - $s1 ;

          //resultats
          $f = 0 ;
       }
       else {
         $s = $s1 - $s2 ;

         //resultats
         $f = 0 ;
       }

    }
    //si HE ambon noh HS et MS == ME
    elseif ($h1>$h2 && $m1==$m2) {
       $h = $h1 - $h2 ;
       $h1 = 24 - $h ;

       if ($s1<$s2) {
          $s = $s2 - $s1 ;

          //resultats
          $f = 0 ;
       }
       else {
         $s = $s1 - $s2 ;

         //resultats
         $f = 0;
       }
    }

      return $f ;
  }


 ?>
