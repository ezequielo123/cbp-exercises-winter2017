<?php

class piece
{
    protected $type = null;
    protected static $images = array(
        'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
        'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
        'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
        'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
        'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
        'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
        'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
        'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
        'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
        'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
        'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
        'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
);

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return '<img src="' . static::$images[$this->type] . '">';
    }
}

$black_pawn = new piece('p');
$white_queen = new piece('k');

//echo $black_pawn;
//echo $white_queen;

class field

{
    protected $x_coord = null;
    protected $y_coord = null;
    protected $piece = null;

    public function __construct($x, $y, $piece = null)
    {
        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece;
    }

    protected function isDark()
    {
        if ($this->x_coord % 2 == 0 &&  $this->y_coord % 2 == 0)
        {
            return true;
        } else {
            return false;
        }
    }

    public function __toString()
    {
        if ($this->isDark() == true) {
            return '<div class="light">' . $this->piece . '</div>';
        } else {
            return '<div class="dark">' . $this->piece . '</div>';
        }
        
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .light {
            height: 40px;
            width: 22px;
            padding-top: 5px;
            background-color: lightgrey;
            padding-left: 10px;
            padding-right: 10px;
            margin-bottom: 1px solid black;
            border: 1px solid;
        }
        .dark {
            height: 40px;
            width: 22px;
            padding-top: 5px;
            background-color: darkgrey;
            padding-left: 10px;
            padding-right: 10px;
            border: 1px solid;
        }
        .game {
            display: flex;
            flex-direction: row;
            
            
        }
     </style>   
</head>
<body>
        <div class="game">

            <?php 
                $a2 = new field(1, 2, $black_pawn);
                $b2 = new field(2, 2, $white_queen);
                $c2 = new field(3, 2, $black_pawn);
                $d2 = new field(4, 2, $black_pawn);
                $e2 = new field(3, 2, $black_pawn);
                $f2 = new field(4, 2, $black_pawn);
                echo $a2;
                echo $b2;
                echo $c2;
                echo $d2;
                echo $e2;
                echo $f2;
            ?>
        </div>    
        <div class="game">

        <?php 
            $a2 = new field(1, 2, $black_pawn);
                $b2 = new field(2, 2, $white_queen);
                $c2 = new field(3, 2, $black_pawn);
                $d2 = new field(4, 2, $black_pawn);
                $e2 = new field(3, 2, $black_pawn);
                $f2 = new field(4, 2, $black_pawn);
                echo $a2;
                echo $b2;
                echo $c2;
                echo $d2;
                echo $e2;
                echo $f2;
        ?>
        </div> 
        <div class="game">

        <?php 
            $a2 = new field(1, 2, $black_pawn);
                $b2 = new field(2, 2, $white_queen);
                $c2 = new field(3, 2, $black_pawn);
                $d2 = new field(4, 2, $black_pawn);
                $e2 = new field(3, 2, $black_pawn);
                $f2 = new field(4, 2, $black_pawn);
                echo $a2;
                echo $b2;
                echo $c2;
                echo $d2;
                echo $e2;
                echo $f2;
        ?>
        </div> 
        <div class="game">

        <?php 
            $a2 = new field(1, 2, $black_pawn);
                $b2 = new field(2, 2, $white_queen);
                $c2 = new field(3, 2, $black_pawn);
                $d2 = new field(4, 2, $black_pawn);
                $e2 = new field(3, 2, $black_pawn);
                $f2 = new field(4, 2, $black_pawn);
                echo $a2;
                echo $b2;
                echo $c2;
                echo $d2;
                echo $e2;
                echo $f2;
        ?>
        </div> 
        <div class="game">

        <?php 
            $a2 = new field(1, 2, $black_pawn);
                $b2 = new field(2, 2, $white_queen);
                $c2 = new field(3, 2, $black_pawn);
                $d2 = new field(4, 2, $black_pawn);
                $e2 = new field(3, 2, $black_pawn);
                $f2 = new field(4, 2, $black_pawn);
                echo $a2;
                echo $b2;
                echo $c2;
                echo $d2;
                echo $e2;
                echo $f2;
        ?>

        </div>
</body>
</html>

