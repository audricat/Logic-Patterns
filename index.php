<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PEREZ PATTERN</title>
    <link rel="stylesheet" href="style.css">
		<script src = "script.js"></script>
    </head>
    <body onload="hideLoading();">
      <div id="loading">
        <div class="spinner-box">
          <div class="pulse-container">
            <div class="pulse-bubble pulse-bubble-1"></div>
            <div class="pulse-bubble pulse-bubble-2"></div>
            <div class="pulse-bubble pulse-bubble-3"></div>
          </div>
        </div>
      </div>
        <pre>
        <form action="index.php" method="POST">
    <label>

 Enter Odd Number above 3:</label><br><br><input type="number" name="number" id="number"/><br><br><input name="form" type="submit" value="Submit"/>
  </form>
</pre>
      <?php
function DrawLine($number) {
    $pattern = "";
        for ($i = 0; $i < $number; $i++) {
          $pattern .= "*";
        }
        return $pattern .= "\n";
        };

function DrawStripedLine($number) {
     $pattern = "";
        for ($i = 0; $i < $number; $i++) {
        if ($i % 2 == 0) {
            $pattern .= "*";
        } else {
            $pattern .= "_";
        }
        }
        return $pattern .= "\n";
        };

function DrawSquare($number) {
    $pattern = "";
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j < $number; $j++) {
            $pattern .= "*";
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawParallelogram($number) {
    $pattern = "";
    $width = $number * 2 - 1;
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j < $width; $j++) {
            if ($j >= ($number - $i - 1) && $j < ($width - $i)) {
              $pattern .= "*";
            } else {
              $pattern .= "_";
            }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawTriangle($number) {
    $pattern = "";
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j < $number; $j++) {
            if ($j >= $i) {
              $pattern .= "*";
            } else {
              $pattern .= "_";
            }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawReverseTriangle($number) {
    $pattern = "";
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j < $number; $j++) {
          if ($j < ($i + 1)){
            $pattern .= "*";
          } else {
            $pattern .= "_";
          }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawIsocelesTriangle($number) {
    $pattern = "";
    $rows = floor($number / 2) + 1;
    $spaces = ($number - 1) / 2;
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $number; $j++) {
          if (($j < $spaces) | $j >= $number - $spaces) {
            $pattern .= "_";
          } else {
            $pattern .= "*";
          }
        }
        $spaces--;
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawReverseIsocelesTriangle($number) {
    $pattern = "";
    $rows = floor($number / 2) + 1;
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $number; $j++) {
            if ($j < $i | $j >= $number - $i) {
              $pattern .= "_";
            } else {
              $pattern .= "*";
            }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawHourGlass($number) {
    $pattern = "";
    $half = floor($number / 2);
    for ($i = 0; $i < $number; $i++) {
        $spaces = $half - abs($i - $half);
        for ($j = 0; $j < $number; $j++) {
          if ($j < $spaces | $j >= ($number - $spaces)) {
            $pattern .= "_";
          } else {
            $pattern .= "*";
          }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawDiamond($number) {
    $pattern = "";
    $half = floor($number / 2);
    for ($i = 0; $i < $number; $i++) {
        $spaces = abs($i - $half);
        for ($j = 0; $j < $number; $j++) {
          if ($j < $spaces | $j >= $number - $spaces) {
            $pattern .= "_";
          }
          else {
            $pattern .= "*";
          }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawZero($number) {
    $pattern = "";
    for ($i = 0; $i < $number; $i++) {
        $spaces = (($number - 1) / 2) - $i;
        for ($j = 0; $j < $number; $j++) {
            if ($i == 0 | $i == ($number - 1)|
                $j == 0 | $j == ($number - 1)) {
                $pattern .= "*";
            } else {
                $pattern .= "_";
            }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawArrowUp($number) {
    $pattern = "";
    $rows = floor($number / 2) + 1;
    $spaces = ($number - 1) / 2;
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $number; $j++) {
          if (($j < $spaces) | $j >= $number - $spaces) {
            $pattern .= "_";
          } else {
            $pattern .= "*";
          }
        }
        $spaces--;
        $pattern .= "\n";
    }
    $tailheight = floor($number / 2);
    $tailwidth = floor(floor($number / 2) / 2) * 2 + 1;
    for ($i = 0; $i < $tailheight; $i++) {
        for ($j = 0; $j < $number; $j++) {
          $spaces = ($number - $tailwidth)/ 2;
          if ($j < $spaces | $j >= $number - $spaces){
            $pattern .= "_";
          } else {
            $pattern .= "*";
          }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawArrowDown($number) {
    $pattern = "";
    $tailheight = floor($number / 2);
    $tailwidth =  floor(floor($number / 2) / 2) * 2 + 1; // round to nearest odd
    for ($i = 0; $i < $tailheight; $i++) {
        for ($j = 0; $j < $number; $j++) {
          $spaces = ($number - $tailwidth)/ 2;
          if ($j < $spaces | $j >= $number - $spaces){
            $pattern .= "_";
          } else {
            $pattern .= "*";
          }
        }
        $pattern .= "\n";
    }
    $rows = floor($number / 2) + 1;
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $number; $j++) {
            if ($j < $i | $j >= $number - $i) {
              $pattern .= "_";
            } else {
              $pattern .= "*";
            }
        }
        $pattern .= "\n";
    }

    return $pattern .= "\n";
};

function DrawX($number) {
    $pattern = "";
    $half = floor($number / 2);
    for ($i = 0; $i < $number; $i++) {
        $x = $half - abs($i - $half);
        for ($j = 0; $j < $number; $j++) {
          if ($j == $x | $j == ($number - $x - 1)) {
            $pattern .= "*";
          } else {
            $pattern .= "_";
          }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};

function DrawBowtie($number) {
    $pattern = "";
    $half = floor($number / 2);
    for ($i = 0; $i < $number; $i++) {
        $spaces = $half - abs($i - $half);
        for ($j = 0; $j < $number; $j++) {
          if (($j > $spaces) & ($j < ($number - $spaces - 1))) {
            $pattern .= "_";
          } else {
            $pattern .= "*";
          }
        }
        $pattern .= "\n";
    }
    return $pattern .= "\n";
};
         echo "<pre>";

         if (isset($_POST['form'])){
         $number = $_POST['number'];

         if (($number % 2 == 1) && ($number > 3)) {

         echo "\ndraw line \n";
         echo(DrawLine($number));

         echo "\ndraw striped line \n";
         echo(DrawStripedLine($number));

         echo "\ndraw square \n";
         echo(DrawSquare($number));

         echo "\ndraw parallelogram \n";
         echo(DrawParallelogram($number));

         echo "\ndraw triangle \n";
         echo(DrawTriangle($number));

         echo "\ndraw reverse triangle \n";
         echo(DrawReverseTriangle($number));

         echo "\ndraw isoceles triangle \n";
         echo(DrawIsocelesTriangle($number));

         echo "\ndraw reverse isoceles triangle \n";
         echo(DrawReverseIsocelesTriangle($number));

         echo "\ndraw hourglass \n";
         echo(DrawHourGlass($number));

         echo "\ndraw diamond \n";
         echo(DrawDiamond($number));

         echo "\ndraw zero \n";
         echo(DrawZero($number));

         echo "\ndraw arrow up \n";
         echo(DrawArrowUp($number));

         echo "\ndraw arrow down \n";
         echo(DrawArrowDown($number));

         echo "\ndraw x \n";
         echo(DrawX($number));

         echo "\ndraw bowtie \n";
         echo(DrawBowtie($number));

         echo "</pre>";
       }
       else if (($number <= 3) || ($number %2 == 0))
       {
         echo ("Wrong Input.");
       }
       }
?>
</body>
    </html>