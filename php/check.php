<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $country = $_POST['country'];
        $visaInfo = [
            'USA' => 'Visa required for most applicants.',
            'Canada' => 'Visa required unless you have an eTA.',
            'India' => 'Visa required before travel.',
            'UK' => 'Visa depends on the duration of stay.',
            'Australia' => 'eVisa available for eligible travelers.'
            ];
            if (array_key_exists($country, $visaInfo)) {
                echo "<p>" . $visaInfo[$country] . "</p>";
            } 
            else echo "<p>Invalid country selection.</p>";
    }
?>