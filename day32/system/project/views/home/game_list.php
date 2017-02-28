<div class="container-left">
    <h1 style="text-align:center">List of games</h1>
        <ol>
            <?php foreach ($games as $game) : ?>
                 
                <div id="game_<?php echo $game->id; ?>" class="game">
                    <a href="#" id="ocultar">Hide Game</a>
                    <a href="#" id="mostrar">Show Game</a>
                    <div class="image">
                        <img src="<?php echo $game->image_url; ?>" />
                    </div>
                    <div class="info">
                        <h2 class="name"><?php echo $game->name; ?> </h2>
                        <div class="release">Released at: <?php echo $game->released_at; ?></div>
                        <div class="genres">
                            <?php foreach ($genre[$game->id] as $genr) : ?>
                                <?php echo ' | <a href="#">' . $genr->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <div class="description">
                            <p><?php echo $game->description; ?></p>
                        </div>
                        <div class="rating"><?php echo $game->rating . '%'; ?> </div>        
                    </div>
                </div>
                           

            <?php endforeach; ?>
       </ol>     
</div>      

<script>
    $(document).ready(function(){

        var headings = $("h1");
        
        $("#ocultar").click(function(event){
            event.preventDefault();
            $("#game_1").hide("slow");
            $("#game_2").hide("slow");

        });

        $("#mostrar").click(function(event){
            event.preventDefault();
            $("#game_1").show(3000);
            $("#game_2").show(3000);
        });

    });

    
</script>    