
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
    </head>

    <body>

    <div>
        <h1>Cart</h1>
        <form method="POST" action="">
            Количество товара <input type="number" min="0" name="amount" required="required"/> <br><br>
            Цена товара <input type="text" name="price" required="required"/> <br><br>
            <button type="submit" name="submit">Посчитать сумму</button>
            <br>
        </form>
    </div>

    </body>
    </html>

<?php
function positive_me($number){
    if($number < 0){
        $number = -$number;
    }
    return $number;
}

function cart_summary($amount, $price) {
    
    $sum = $amount * positive_me($price);
    
    return "Сумма покупки - " . $sum;
}



if (isset($_POST['submit'])) {
    echo cart_summary($_POST['amount'], $_POST['price']);
}
?>