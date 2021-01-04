<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
</head>

<body>
    <form action="order-submit.php" method="POST">
        <div class="food">
            <label for="Foods">Food item:</label>
            <select id="food" name="food">
                <option value="Apple">Apple</option>
                <option value="chicken">chicken</option>
                <option value="cookie">cookie</option>
                <option value="milk">milk</option>
                <option value="tomato">tomato</option>
            </select>
        </div>
        <div>
            <label for="Quantity">Quantity:</label>
            <input type="int" name="Quantity" id="Quantity">
        </div>
        <div>
            <input type="submit" value="order" name="order">
        </div>
    </form>
</body>

</html>