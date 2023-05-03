<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Mail;
use App\Mail\Message;
use App\Rules\GoogleRecaptcha;
use Butschster\Head\Facades\Meta;
use App\Repositories\Interfaces\PostRepositoryInterface;

class MainController extends Controller
{
    public $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $specialPosts = $this->postRepository->getSpecialPosts();
        $latestPosts = $this->postRepository->getLatestPosts();

        Meta::prependTitle('Bosh sahifa');
        Meta::setDescription('Yangliklar site');
        Meta::setKeywords(['Awesome keyword', 'keyword2']);

        return view('index', compact('specialPosts', 'latestPosts'));
    }

    public function categoryPosts($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->paginate(6);

        Meta::prependTitle($category->meta_title  );
        Meta::setDescription($category->meta_description);
        Meta::setKeywords($category->meta_keywords);

        return view('categoryPosts', compact('category','posts'));
    }

    public function postDetail($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->increment('view');
        $post->save();

        $otherePosts = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->limit(3)->get();

        Meta::prependTitle($post->meta_title );
        Meta::setDescription($post->meta_description);
        Meta::setKeywords($post->meta_keywords);

        return view('postDetail', compact('post', 'otherePosts'));
    }

    public function contact()
    {
        Meta::prependTitle("Biz bilan boglanish ");
        Meta::setDescription("Description");
        Meta::setKeywords("key words");

        return view('contact');
    }

    public function sendMail(Request $request)
    {

        $data = $request->all();

        $this->validate($request, [
            'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ]);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('files/', $filename);
            $data['file'] = 'files/'.$filename;
        }

        Mail::to('sayfullayevnorbek@gmail.com')->send(new Message($data));

        return back()->with('message', 'Ma\'lumot yuborildi !');
        //return view('contact');
    }

    public function search(Request $request)
    {
        $key = $request->key;

        $posts = Post::where('title_uz', 'like', '%'.$key.'%')
            ->orWhere('title_ru', 'like', '%'.$key.'%')
            ->orWhere('body_uz', 'like', '%'.$key.'%')
            ->orWhere('body_ru', 'like', '%'.$key.'%')
            ->paginate(5);

            
        return view('search', compact('posts', 'key'));
    }

}
