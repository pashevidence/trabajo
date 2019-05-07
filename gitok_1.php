<?php

    echo 'CHOTO!!!???';
   //$so = PDO("");
   $text = '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45';
   $text = 'Также можно указать массив строк, в этом случае замены будут происходить с каждой предоставленной строкой. В этом случае параметры replacement, start и length могут быть как скалярными значениями - в этом случае эти значения будут применены к каждой строке, так и массивами - в этом случае соответствующие элементы массивов будут применены к каждой предоставленной строке.';
  
   $cik = '00';
   $z = 1;
   $c = 0;
   $fun = function($pop) use(&$cik, &$z, &$c)
   {
        if($z==20)
        {
            $cik = '01';
            $z--;
            return $pop[0] = ' TTT ';
        }
        else if($z==1 && $c > 0)
        {
            $cik = '00';
            $z++;
            return $pop[0] = ' UUU ';
        }
        ($cik == '00') ? $z++ : $z--;
        $c++;
        return $pop[0];
   };
  echo  preg_replace_callback('/\s/', $fun, $text).'<br/>';
  
  
  
  
  $ciki = substr_count($text , ' ');
  $per = '';
    $cik = '00';
  for($z=0, $x=1; $z<$ciki; $z++)
  {
    $per = mb_strpos($text, ' ', $per+1);
    if($x==20)
    {
        $text = substr_replace($text, ' YYY ', $per, 1);
        $cik = '01';
        $x--;
    }
    else if($x==-1 && $z > 0)
    {
        $text = substr_replace($text, ' YYY ', $per, 1);
        $cik = '00';
        $x++;
    }
    ($cik == '00') ? $x++ : $x--;
  }
  
  var_dump($text);


?>