    <?php
        /* Muestra 3 frases, cada una en un párrafo utilizando las tres posibilidades que existen de mostrar contenido. Tras ello, introduce dos comentarios, uno de bloque y otro de una línea */
        $frase1="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, earum.";
        $frase2="Lorem ipsum dolor sit amet consectetur adip";
        $frase3="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut placeat quod sequi atque modi. Corrupti!";
        echo "<p> $frase1 </p>";
        print("<p> $frase2 </p>");
        printf("<p> $frase3 </p>");
        // Esto es un comentario de linea
        /* 
            Esto es un comentario de
            bloque
         */
    ?>