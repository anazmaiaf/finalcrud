<x-guest-layout>
    <div class=" flex items-center justify-center min-h-screen bg-background">
        <div class="bg-white shadow-lg rounded-2xl flex max-w-xl mx-auto">
            <!-- Lado esquerdo -->
            <div class="bg-blush p-8 rounded-l-2xl flex flex-col justify-center items-center">
                <h2 class="text-white text-2xl font-bold">PURELOOK</h2>
                <p class="text-white text-lg mt-4 font-semibold">Bem-vinda ao site!</p>
                <p class="text-white text-sm text-center">Crie sua conta e gerencie sua clínica.</p>
                <a href="{{ route('login') }}" class="mt-6 px-6 py-2 border border-white text-white rounded-lg hover:bg-white hover:text-pink-300 transition">Login</a>
            </div>
            
            <!-- Lado direito -->
            <div class="p-8">
                <h2 class="text-blush text-2xl font-bold text-center">Crie sua conta!</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full text-black" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full text-black" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full text-black" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
