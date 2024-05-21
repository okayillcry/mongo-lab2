<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->dbforlab->products;

$minPrice = isset($_GET['min_price']) ? (float)$_GET['min_price'] : 0;
$maxPrice = isset($_GET['max_price']) ? (float)$_GET['max_price'] : PHP_INT_MAX;
$priceRangeCursor = $collection->find([
    'price' => ['$gte' => $minPrice, '$lte' => $maxPrice]
]);
$priceRangeProducts = iterator_to_array($priceRangeCursor);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Товари в обраному ціновому діапазоні</title>
    <link rel="stylesheet" href="./response.css">
</head>
<body>
    <h1>Товари в обраному ціновому діапазоні</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($priceRangeProducts as $row): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['manufacturer']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['stock']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Збережені товари в localstorage</h2>
    <table id="table" style="display:none;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody id="saved"></tbody>
    </table>
    <p id="no-saved">Даних в LocalStorage немає</p>


    <script>
        const priceRangeProducts = <?php echo json_encode($priceRangeProducts); ?>;
        const key = "priceRange:" + "<?php echo $minPrice; ?>-" + "<?php echo $maxPrice; ?>";
        
        function showSavedPriceRange() {
            const savedProducts = JSON.parse(localStorage.getItem(key)) || [];
            const tbody = document.getElementById('saved');
            const noSavedPriceRange = document.getElementById('no-saved');
            const savedTable = document.getElementById('table');

            tbody.innerHTML = '';
            if (savedProducts.length === 0) {
                noSavedPriceRange.style.display = 'block';
                savedTable.style.display = 'none';
            } else {
                noSavedPriceRange.style.display = 'none';
                savedTable.style.display = 'table';
                savedProducts.forEach(product => {
                    const row = document.createElement('tr');
                    const nameCell = document.createElement('td');
                    nameCell.textContent = product.name;
                    const manufacturerCell = document.createElement('td');
                    manufacturerCell.textContent = product.manufacturer;
                    const categoryCell = document.createElement('td');
                    categoryCell.textContent = product.category;
                    const priceCell = document.createElement('td');
                    priceCell.textContent = product.price;
                    const stockCell = document.createElement('td');
                    stockCell.textContent = product.stock;
                    row.appendChild(nameCell);
                    row.appendChild(manufacturerCell);
                    row.appendChild(categoryCell);
                    row.appendChild(priceCell);
                    row.appendChild(stockCell);
                    tbody.appendChild(row);
                });
            }
        }
        showSavedPriceRange();
        localStorage.setItem(key, JSON.stringify(priceRangeProducts));
    </script>
</body>
</html>
