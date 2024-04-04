<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $flavors = $_POST['flavor'];
    $name = $_POST['fname'];
    $total = 0;
    echo '<p>Thank you,  '. $name.', for your order!</p>';

    echo'<p>Order Summary:</p>';
    foreach ($flavors as $flavor){
        print ($flavor);
        echo'<br>';
        $total += 3.50;
    }

    echo'<p>Order Total: $'.$total;

}
