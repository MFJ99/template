<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar jQuery Duniailkom</title>
  <script src="jquery-3.3.1.js"></script>
  <script>
    $( document ).ready(function() {
      $( "#tombol_hide" ).click(function() {     
        $("h1").hide();
      });
       
      $( "#tombol_show" ).click(function() {     
        $("h1").show();
      });
       
      $( "#tombol_small" ).click(function() {     
        $("h1").css("font-size","20px");
      });
      
      $( "#tombol_big" ).click(function() {     
        $("h1").css("font-size","35px");
      });
       
      $( "#tombol_red" ).click(function() {     
        $("h1").css( "color", "red" );
      });

	  $( "#tombol_black" ).click(function() {     
        $("h1").css( "color", "black" );
      });
    });
   </script>
</head>
<body>
  <h1>Belajar jQuery di Duniailkom</h1>
  <button id="tombol_hide">Sembunyikan</button>
  <button id="tombol_show">Tampilkan</button>
  <button id="tombol_small">Perkecil</button>
  <button id="tombol_big">Perbesar</button>
  <button id="tombol_red">Merahkan</button>
  <button id="tombol_black">Hitamkan</button>

</body>
</html>