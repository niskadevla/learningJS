<?php
    
$startNumber = -1;
$finishNumber = 1;
$a = $startNumber;
$b = $startNumber;
$c = $startNumber;
$d = $startNumber;
$tx = $startNumber;
$ty = $startNumber;

$arrStart = [$a, $b , $c, $d, $tx, $ty];
$arrFinish = [$finishNumber, $finishNumber, $finishNumber, $finishNumber, $finishNumber, $finishNumber];
$arr = [];


$count = 0;


$firstElem = 0;
$secondElem = 1;
$thirdElem = 2;
$thorstElem = 3;
$fifthElem = 4;
$sixthElem = 5;

for ($kk = $startNumber; $kk < ($finishNumber-$startNumber); $kk++) {
    for ($ii = $startNumber; $ii < ($finishNumber-$startNumber); $ii++) {
        for ($jj = $startNumber; $jj < ($finishNumber-$startNumber); $jj++) {
            for ($k = $startNumber; $k < ($finishNumber-$startNumber); $k++ ) {
                for ($i = $startNumber; $i < ($finishNumber-$startNumber); $i++) {
                  for ($j = $startNumber; $j < ($finishNumber-$startNumber); $j++) {
                    array_push($arr, $arrStart);
                    $arrStart[$firstElem]++;
                    $count++;
                  }
                
                    $arrStart[$firstElem] = $a;
                    $arrStart[$secondElem]++;
                }
                $arrStart[$secondElem] = $b;
                $arrStart[$thirdElem]++;
             }
             $arrStart[$thirdElem] = $c;
             $arrStart[$thorstElem]++;
        }
        $arrStart[$thorstElem] = $d;
        $arrStart[$fifthElem]++;
    }
    $arrStart[$fifthElem] = $tx;
    if ($arrStart == $arrFinish) break;
    $arrStart[$sixthElem]++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Крутящаяся фигура</title>
  <link rel="stylesheet" href="spinFigure_matrix.css">
  <link rel="stylesheet" href="bootstrapGrid.css">
</head>
<body>
    <div class="wrapper row" id="wrapper">
        <div class="figure col-auto">
            <img class="figure_img" src="mishka.jpg" alt="mishka" />
            <span>Original</span>
        </div>
    </div>

  
 <?php
 
    for ($i = 0; $i < $count; $i++) {
               
        echo "<script type='text/javascript'>
              var div = document.createElement('div');
              div.className = 'figure col-auto';
              var id = 'figure-' + ".$i.";
              var a = ".$arr[$i][0].";
              var b = ".$arr[$i][1].";
              var c = ".$arr[$i][2].";
              var d = ".$arr[$i][3].";
              var tx = ".$arr[$i][4].";
              var ty = ".$arr[$i][5].";
              var matrix = 'matrix('+a+','+ b+','+ c+','+ d+','+ tx+',' +ty+')';
        
              div.innerHTML = \"<img id='\" + id + \"' src='mishka.jpg' alt='mishka'>\" + \"<span>\" + matrix + \" </span>\";
              document.getElementById('wrapper').appendChild(div);
              var elem = document.getElementById(id);
              elem.setAttribute('class','figure_img');
              elem.style.transform = matrix;
              
      </script>";
    }
 ?>
 
<script type="text/javascript">
document.body.onmouseover = document.body.onmouseout = none;
function none(event) {
        // var elem = document.getElementById(id);
        // elem.style.transform = 'none';
        var ev = event.target.childNodes[0];
        var evSpan = event.target.childNodes[1];
        var computedStyle = getComputedStyle(ev);
        if (event.type == 'mouseover') {
            ev.style.transform = 'none';
        }
        if (event.type == 'mouseout') {
            ev.style.transform = computedStyle.transform;
        }
        evSpan.innerHTML = computedStyle.transform;
        
    
 
    //   for (var i = 0; i < 729; i++) {
    //     var id = 'figure-' + i;
    //     var elem = document.getElementById(id);
    //     elem.style.transform = 'none';
    //   };
}
</script>
 
</body>
</html>
