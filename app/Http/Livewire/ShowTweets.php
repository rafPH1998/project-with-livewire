<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweets extends Component
{
    use WithPagination;
    
    public $content = '';

    protected $rules = [
        'content' => 'required|min:2|max:200|unique:tweets'
    ]; 

    public function render()
    {
        $tweets = Tweet::with('user')
                        ->latest()
                        ->paginate(2);

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create()
    {
        $this->validate();

        auth()->user()->tweets()->create([
            'content' => $this->content
        ]);

        $this->content = '';
    }

    public function likeTweet($tweetId)
    {
        $tweet = Tweet::find($tweetId);

        $tweet->likes()->create([
            'user_id' => auth()->user()->id
        ]);
    }

    public function unLikeTweet(Tweet $tweet)
    {
        $tweet->likes()->delete();
    }
}
