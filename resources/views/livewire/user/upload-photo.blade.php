<div>
    <h1 class="text-4xl py-6 font-bold">Foto de perfil</h1>
    <form action="#" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8 m-8" wire:submit.prevent="upload()">
        @if ($photo)
            <div class="mb-4">
                <img src="{{ $photo->temporaryUrl() }}" style="max-width: 200px;">
            </div>
        @endif
        <div class="mb-4">
            <input type="file" name="photo" wire:model="photo">
        </div>
        @error('photo') <p><span class="text-red-500">{{ $message }}</span></p> @enderror

        <button type="submit" class="bg-blue-900 text-white p-2 pl-6 pr-6 rounded">Upload Foto</button>
    </form>
</div>
