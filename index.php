<!DOCTYPE html>
<html>
<head>
    <title>Інтернет-магазин</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1>Товари Інтернет-магазин</h1>
    
    <h2>Обрати запит</h2>

    <a href="manufacturers.php">Перелік виробників</a><br>
    <a href="out_of_stock.php">Товари, відсутні на складі</a><br>

    <br>
    <h3>Товари в обраному ціновому діапазоні</h3>
    <form method="GET" action="price_range.php">
        <label for="min_price">Мінімальна ціна:</label>
        <input type="number" name="min_price" id="min_price" step="0.01" required min="0">
        <label for="max_price">Максимальна ціна:</label>
        <input type="number" name="max_price" id="max_price" step="0.01" required min="0">
        <button type="submit">Пошук</button>
    </form>

</body>
</html>
