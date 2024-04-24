<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)

        <tr>
        <th scope="row">1</th>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>
            <a href ='{{route('posts.edit',$post->id)}}' type="button" class="btn btn-primary">Edit</a>
            <form action="{{route('posts.destroy',$post->id)}}" method ='post' class='d-inline'>
                @method('DELETE')
                @csrf
            <button type="submit" class="btn btn-danger">Delete</button>

            </form>
            

        </td>
        </tr>


        @endforeach
        
    </tbody>
    </table>
</body>