<div class="container">
    <div class="flex justify-center ">
        <div class="card-body flex-initial w-64">
            <h5 class="card-title bg-red-400 max-w-7xl mx-auto sm:px-6 lg:px-8">Add Content</h5>

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit='save' action="" class="flex flex-col">
                @csrf
                <input wire:model='name' type="text" placeholder="User Name" class="mt-2">
                @error('name')
                    <div class="alert alert-danger">
                        <span class="error"> {{ $message }}</span>
                    </div>
                @enderror
                <input wire:model='title' type="text" placeholder="Ttile" class="mt-2">
                @error('title')
                    <div class="alert alert-danger">
                        <span class="error"> {{ $message }}</span>
                    </div>
                @enderror
                <input wire:model='content' type="text" placeholder="Content" class="mt-2">
                @error('content')
                    <div class="alert alert-danger">
                        <span class="error"> {{ $message }}</span>
                    </div>
                @enderror

                <button type="submit" class="bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
                    Save changes
                </button>

            </form>
        </div>
    </div>

    <div class="card-footer mt-4">
        @foreach ($posts as $post)
            {{ $post->name }}
        @endforeach
    </div>

    {{ $posts->links('vendor.livewire.simple-tailwind') }}
</div>
