<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form class = 'mt-3 ms-3' method = 'post' action = '{{route('posts.store')}}'>
    @csrf
    <div class="mb-3 col-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input  type="text" name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    </div>
    <div class="mb-3 col-3">
        <label for="exampleInputPassword1" class="form-label">Body</label>
        <input type="text" name='body' class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
