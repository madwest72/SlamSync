@extends('header')

@section('title', 'Connection-SlamSync')

@section('content')



    <form action="{{ route('SignIn') }}" method="POST"
        class="flex flex-col gap-4 w-full max-w-sm mx-auto mt-6 p-5 bg-base-200 rounded-xl shadow-lg">
        @if ($errors->any())
            <div role="alert" class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>error</span>
                <span>{{ $errors->first() }}</span>
            </div>
        @endif
        @csrf
        <h2 class="text-2xl font-bold text-center mb-4">se connecter</h2>

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text font-semibold">Adresse Email</span>
            </div>
            <input type="email" name="email" value="{{ old('email') }}" id="email"
                class="input input-bordered w-full focus:input-primary" />
            @error('email')
                <span class="label-text-alt text-error font-medium">{{ $message }}</span>
            @enderror
        </label>

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text font-semibold">Mot de passe</span>
            </div>
            <input type="password" name="password" value="{{ old('password') }}" id="password"
                class="input input-bordered w-full focus:input-primary" />
            @error('password')
                <span class="label-text-alt text-error font-medium">{{ $message }}</span>
            @enderror
        </label>

        <button type="submit" class="btn btn-primary w-full mt-2">Se connecter</button>
        <div class="flex justify-center gap-4">
            <a href="{{ route('SignUp') }}" class="btn btn-outline btn-primary">Inscription</a>
        </div>

    </form>





@endsection
