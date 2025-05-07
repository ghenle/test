<pre>
<?php
$beers = 99;

echo "Lyrics of the song {$beers} Bottles of Beer".PHP_EOL.PHP_EOL;

do {
  echo "{$beers} bottles of beer on the wall, {$beers} bottles of beer.".PHP_EOL;
  
  $oneLessBeer = (--$beers > 0) ? $beers : "no more";

  echo "Take one down and pass it around, {$oneLessBeer} bottles of beer on the wall.".PHP_EOL.PHP_EOL;
} while ( $beers > 0 );

echo <<<BEERS
No more bottles of beer on the wall, no more bottles of beer.
Go to the store and buy some more, 99 bottles of beer on the wall.
BEERS;

?>
</pre>