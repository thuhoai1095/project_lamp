<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo product</title>
</head>
<body>
<h1>Day la list product</h1>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
    </tr>
    @foreach($ids as $id)
    <tr>
        <td>{{$id}}</td>
    </tr>
        @endforeach;
</table>
</body>
</html>
