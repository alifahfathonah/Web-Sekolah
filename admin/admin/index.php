<?php include 'header.php';
?>

<div class="container mt-3">

    <?php
    $ip_info = json_decode(file_get_contents("http://ip-api.com/json"), true);
    echo "<pre>";
    echo print_r($ip_info, true);
    echo "</pre>";
    ?>
</div>

<?php include 'footer.php';
?>