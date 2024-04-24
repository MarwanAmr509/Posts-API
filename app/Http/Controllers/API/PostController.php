<?php

    namespace App\Http\Controllers\API;

    use App\Http\Controllers\Controller;
    use App\Http\Resources\PostResource;
    use App\Models\Post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    class PostController extends Controller
    {
        use ApiResponseTrait;

        public function index(){
            $posts = PostResource::collection(Post::all());
            return $this->ApiResponse($posts,'ok',200); // Call the method            
        }

        public function show($id){
            $post = Post::find($id);

            if($post){
                return $this->ApiResponse(new PostResource($post),'ok',200);
            }
            else{
                return  $this->ApiResponse(null,'Post Not Found',404);
            }

           
        }

        public function store(Request $request){

            $validator = Validator::make($request->all(), [
                'title'=>'required|max:50',
                'body'=>'required|max:255',
            ]);

            if ($validator->fails()) {
                return $this->ApiResponse(null, $validator->errors(), 400);
            }

            $post = Post::create(
                $request->all()
            );

            if($post){
                return $this->ApiResponse(new PostResource($post),'The Post Created Succefully',201);
            }
            else{
                return  $this->ApiResponse(null,'Post Not Created',400);
            }

           
        }

        public function update(Request $request, $id){
            $validator = Validator::make($request->all(), [
                'title'=>'required|max:50',
                'body'=>'required|max:255',
            ]);

            if ($validator->fails()) {
                return $this->ApiResponse(null, $validator->errors(), 400);
            }

            $post = Post::find($id);

            if (!$post){
                return $this->ApiResponse(null, 'Post Not Found', 404);
            }

            $post->update($request->all());

            if($post){
                return $this->ApiResponse(new PostResource($post),'The Post Updated Succefully',201);
            }
     
        }

        public function delete($id){
           
            $post = Post::find($id);

            if (!$post){
                return $this->ApiResponse(null, 'Post Not Found', 404);
            }

            $post->delete();

            if($post){
                return $this->ApiResponse(new PostResource($post),'The Post Deleted Succefully',200);
            }
    
           
        }
    }
