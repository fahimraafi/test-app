
<div>
    
    <form wire:submit='createUser' action="">
        @csrf
        <input wire:model='name' type="text" placeholder="User Name">
        <input wire:model='email' type="email" placeholder="email">
        <input wire:model='password' type="password" placeholder="Password">

        <button class="btn btn-success">
            Click Here
        </button>

    </form>

    @foreach ($users as $user)
        <p>
            {{ $user->name }}
        </p>
    @endforeach

    
</div>
