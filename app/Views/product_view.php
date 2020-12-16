<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $unproduit) { ?>
                <tr>
                    <td><?php echo $unproduit['product_name'] ?> </td>
                    <td><?php echo $unproduit['product_price'] ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>