<html>
<head>
    <title>All Post</title>
</head>
<body>
{{--<a href="{{route("post.add")}}">Create new post</a>--}}
<table border="1">
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th>date</th>
        <th>point</th>
        <th>author name</th>
        <th>category_name</th>
        {{--<th>Edit</th>--}}
        {{--<th>Delete</th>--}}
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->date}}</td>
            <td>{{$post->point}}</td>
            <td>{{$post->author->name}}</td>
            <td>{{$post->category->name}}</td>
            {{--<td><a href="{{route("post.edit", ["id"=>$post->id])}}">edit</a></td>--}}
            {{--<td><a href="{{route("post.deleteForm", ["id"=>$post->id])}}">delete</a></td>--}}
        </tr>
    @endforeach
</table>
</body>
</html>