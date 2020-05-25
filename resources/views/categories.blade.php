<html>
<head>
    <meta charset="utf-8">
    <title>Shop</title>
</head>
<body>
<h1>Категории</h1>
<ul>
@foreach($categories as $category)
    <li><a href="/{{$category->code}}"><b>{{$category->name}}</b><br><p>{{$category->description}}</p></a></li>
@endforeach
</ul>
</body>
</html>
