<?php

    function outputOrderRow($file, $title, $quantity, $price) {
        echo "<tr>";
        //TODO
        $amount = $price * $quantity;
        printf( "<td><img src=\"images/books/tinysquare/%s\"></td>
                      <td class=\"mdl-data-table__cell--non-numeric\">%s</td>
                      <td>%d</td>
                      <td>$%.2f</td>
                      <td>$%.2f</td>", $file, $title, $quantity, $price, $amount);
        echo "</tr>";
    }

?>