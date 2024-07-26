<?php

namespace App\Http\Controllers\admin;
use App\Models\NewsFeed;
use App\Mail\NewsFeedMails;
use Illuminate\Http\Request;
use App\Models\SubscribedUser;
use App\Services\NewsdataService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class NewsController extends Controller
{
    protected $newsdataService;
    public function __construct(NewsdataService $newsdataService)
    {
        $this->newsdataService = $newsdataService;
    }
    

    public function get(Request $request)
    {
        $query = $request->input('query', 'Cyberthreats');
        $language = $request->input('language', 'en');
        // $country = $request->input('country', '');
        // $category = $request->input('category', '');
        // $page = $request->input('page', 1);
        $pageSize = $request->input('pageSize', 10);

        $news = $this->newsdataService->getNews($query, $pageSize);

        foreach ($news['results'] as $article)
        {
            if(NewsFeed::where('article_id', $article['article_id'])->exists()){
                continue;
            }
            
            NewsFeed::create([
            'article_id' => $article['article_id'],
            'date' =>$article['pubDate'],
            'title' => $article['title'],
            'link' => $article['link'],
            'description' => $article['description'],
            'source' => $article['source_id']
            ]);
        }

        return redirect()->route('admin.news.index');
        // return view('NewsFeed.index', compact('news'));
}
    public function search(){
        return view('admin.NewsFeed.search');
    }
    public function show($id)
    {
        // return $article;
        $article = NewsFeed::where('article_id',$id)->first();
        // return $article;
        return view('admin.NewsFeed.show', compact('article'));
    }
    public function index()
    {
        $articles = NewsFeed::get();
        return view('admin.NewsFeed.index', compact('articles'));
    }

    public function delete($id)
    {
        NewsFeed::where('article_id', $id)->delete();

        return redirect()->route('admin.news.index');
    }

    public function sendmail()
    {
        $emails = SubscribedUser::get('email');
        $news = NewsFeed::get();
        foreach($news as $article){
            $feed = $article;
        }
        // return $feed;
        foreach($emails as $email){
            Mail::to( $email['email'])->send(new NewsFeedMails($feed));
        }

        return redirect()->route('admin.news.index');
    }
}
