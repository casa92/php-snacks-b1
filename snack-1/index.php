<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti
fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $basket_games = [
        [
            'hometeam' => 'Brindisi',
            'awayteam' => 'Virtus Bologna',
            'homescore' => '76',
            'awayscore' => '83',
        ],
        [
            'hometeam' => 'Cremona',
            'awayteam' => 'Venezia',
            'homescore' => '85',
            'awayscore' => '82',
        ],
        [
            'hometeam' => 'Trieste',
            'awayteam' => 'Pesaro',
            'homescore' => '89',
            'awayscore' => '78',
        ],
        [
            'hometeam' => 'Trento',
            'awayteam' => 'Basket Napoli',
            'homescore' => '85',
            'awayscore' => '72',
        ],
        [
            'hometeam' => 'Fortitudo Bologna',
            'awayteam' => 'Tortona',
            'homescore' => '74',
            'awayscore' => '92',
        ],
        [
            'hometeam' => 'Brescia',
            'awayteam' => 'Sassari',
            'homescore' => '97',
            'awayscore' => '86',
        ]
        ];
?>

<?php for($i = 0; $i < count($basket_games); $i++) { ?>

    <?php $this_game = $basket_games[$i]; ?>

    <div>
        <?php echo $this_game['hometeam']; ?>
        <span> - </span>
        <?php echo $this_game['awayteam']; ?>
        <span> | </span>
        <?php echo $this_game['homescore'] . '-' . $this_game['awayscore'] ?>
    </div>
    
<?php } ?>