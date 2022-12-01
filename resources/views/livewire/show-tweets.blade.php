<div>
   <h1>Olá tudo bem</h1>

   <form action="#" method="post" wire:submit.prevent="create">
        <input type="text" name="content" wire:model="content">
        @error('content')
            {{ $message }}
        @enderror
   </form>

   @foreach ($tweets as $tweet)
        <p>{{ $tweet->user->name }} - {{ $tweet->content }}</p>
   @endforeach

   <hr>

   <div>
        {{ $tweets->links() }}
   </div>
</div>
