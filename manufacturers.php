<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->dbforlab->products;

$manufacturers = $collection->distinct("manufacturer");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Перелік виробників</title>
    <link rel="stylesheet" href="./response.css">
</head>
<body>
    <h1>Перелік виробників</h1>
    <ul>
        <?php foreach ($manufacturers as $manufacturer): ?>
            <li><?php echo htmlspecialchars($manufacturer); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Збережені виробники в LocalStorage</h2>
    <ul id="saved-manufacturers-list"></ul>

    <script>
        const manufacturers = <?php echo json_encode($manufacturers); ?>;
        
        function showSavedManufacturers() {
            const savedManufacturers = JSON.parse(localStorage.getItem('manufacturers')) || [];
            const savedManufacturersList = document.getElementById('saved-manufacturers-list');
            savedManufacturersList.innerHTML = '';
            savedManufacturers.forEach(manufacturer => {
                const listItem = document.createElement('li');
                listItem.textContent = manufacturer;
                savedManufacturersList.appendChild(listItem);
            });
        }
        showSavedManufacturers();
        localStorage.setItem('manufacturers', JSON.stringify(manufacturers));
    </script>
</body>
</html>
