
<div>
    <x-slot:title>
        login
    </x-slot>

    <div class="container">
        <h1>Admin Login</h1>
    
        @if (session()->has('error'))
            <div class="alert alert-danger">
                <strong>{{ session('error') }}</strong>
            </div>
        @endif
    
        <form wire:submit.prevent='login'>
            <div class="mb-3">
                <label for="id" class="form-label">Username</label>
                <input type="text" wire:model='username' class="form-control" id="voteid"
                    placeholder="Enter Username" name="username">
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" wire:model='password' class="form-control" id="pwd"
                    placeholder="Enter password" name="pswd">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-warning">Login</button>
        </form>
    </div>
    