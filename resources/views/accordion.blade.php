<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> 3.3 accordian </title>
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo asset('js/app.js')?>" charset="utf-8"></script>
  </head>
  <body>
    <div class="accordion" data-js="accordion">
      <h3 class="accordion__toggle"
          data-js="accordion">
          Myron Floren
      </h3>
      <div class="accordion__pannel open">
        <p>
         Floren was born on November 5, 1919 to Ole and Tillie Floren.
         A first-generation American of Norwegian immigrant parentage,
         he grew up on a farm near Roslyn, South Dakota. Floren took up
         playing the accordion at age 6 when his father bought him a $10
         mail-order squeezebox.
        </p>
      </div>
      <h3 class="accordion__toggle"
          data-js="accordion">
          Lawrence Welk
      </h3>
      <div class="accordion__pannel">
        <p>
          Welk was born in the German-speaking community of Strasburg,
          North Dakota. He was sixth of the eight children of Ludwig and
          Christiana (Schwahn) Welk, ethnic Germans who emigrated to America
          in 1892.
        </p>
      </div>
      <h3 class="accordion__toggle"
          data-js="accordion">
          Friedrich Lips
      </h3>
      <div class="accordion__pannel">
        <p>
          Friedrich Lips (born November 18, 1948, in the city of Yemanzhelinsk
          near Chelyabinsk in eastern Ural) was the son of Russian parents of
          German descent.
        </p>
      </div>
    </div>
  </body>
</html>
