<style>
  body { 
  background: #000000 url(kosmos.jpg); 
  color: #FFFFFF;
  }
</style><?php
$text = file_get_contents( 'https://www.gismeteo.ua/weather-zaporizhia-5093/' );
preg_match( '/<title>(.*?)<\\/title>/is' , $text , $title );
echo $title[1];
?>
<?php
$text = file_get_contents( 'https://www.gismeteo.ua/weather-zaporizhia-5093/' );
preg_match( '/<dd>(.*?)<\\/dd>/is' , $text , $title );
echo $title[1]
;
?>
<?php 
$text = file_get_contents( 'https://www.gismeteo.ua/weather-zaporizhia-5093/' ); 
preg_match( '/<div class="temp">(.*?)<\\/div>/is' , $text , $title ); 
echo $title[1] 
; 
?>






