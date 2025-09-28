<?php
$menu = array(
    "Rumah" => "#home",
    "Tentang Kami" => array(
        "Tim Kami" => "#team",
        "Kisah Kami" => "#story",
        "Misi & Visi" => "#mission"
    ),
    "Layanan" => array(
        "Pengembangan Web" => "#web",
        "Pengembangan Seluler" => "#mobile",
        "Optimasi SEO" => "#seo"
    ),
    "Kontak" => "#contact"
);

function displayMenu($menu) {
    echo "<ul>";
    foreach ($menu as $key => $value) {
        if (is_array($value)) {
            echo "<li>$key:";
            displayMenu($value); 
            echo "</li>";
        } else {
            echo "<li><a href='$value'>$key</a></li>";
        }
    }
    echo "</ul>";
}

displayMenu($menu);
?>