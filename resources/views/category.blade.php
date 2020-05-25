<html>
<head>
    <meta charset="utf-8">
    <title>Shop</title>
</head>
<body>
<h1>
@if($category == 'phones')
    Мобильные телефоны
@elseif($category == 'headphones')
    Наушники
@elseif($category == 'tablets')
    Планшеты
@endif
</h1>
</body>
</html>
