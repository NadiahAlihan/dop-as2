<x-guest-layout>
<div class="flex justify-center mt-6">
    </div>
<form method="POST" action="{{ route('register') }}">
        @csrf


    <!-- Header Text -->
    <div class="text-center">
        <h2 class="font-bold text-2xl">Create an account</h2>
        <p class="text-gray-600">Enter your details below to create your account</p>
    </div>


        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  placeholder="Full name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email address')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username"  placeholder="email@example.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"  placeholder="Password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

<!-- Register Button -->
<div class="mt-4">
    <x-primary-button class="w-full flex justify-center items-center" style="text-transform: none; font-weight: normal;">
        <span style="text-transform: uppercase;">C</span>reate account
    </x-primary-button>
</div>

        <!-- Login Link -->
        <div class="text-center mt-4">
            <p class="text-gray-600">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-black font-semibold hover:underline">Log in</a>
            </p>
        </div>
    </form>
</x-guest-layout>
