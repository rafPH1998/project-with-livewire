<div>
   <h1>Olá tudo bem</h1>
    {{ $message }} <br>

   <input type="text" name="text" id="" wire:model="message">

   @foreach ($tweets as $tweet)
        <p>{{ $tweet->user->name }} - {{ $tweet->content }}</p>
   @endforeach
</div>
