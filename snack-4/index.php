<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo
paragrafo. -->





<?php
    $phrase_to_explode = 'Lorem ipsum dolor sit. amet consectetur adipisicing elit. Aspernatur beatae sequi. explicabo accusantium optio consequuntur ea deserunt aut quo. vel magni voluptate fugit iusto. exercitationem a! Quos quisquam vel eaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolor distinctio consequatur eligendi. blanditiis accusantium neque inventore quas. Atque architecto blanditiis est! Pariatur nostrum. recusandae aut eligendi aliquid inventore veritatis! Lorem ipsum dolor sit amet. consectetur adipisicing elit. Consectetur dolores adipisci repellendus illum voluptas rerum odio et labore tempora libero esse reprehenderit inventore molestiae. numquam ipsam atque quaerat asperiores! Velit.';
    
    $exploded_phrase = explode( '.', $phrase_to_explode );
?>

<?php for($i = 0; $i < count($exploded_phrase); $i++) { ?>
    <?php $single_phrase = $exploded_phrase[$i]; ?>

    <p>
        <?php echo $single_phrase ?>
    </p>

<?php } ?>