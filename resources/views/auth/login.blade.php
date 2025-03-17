<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-background">
        <div class="bg-white shadow-lg rounded-2xl flex max-w-xl mx-auto">
            <!-- Lado esquerdo -->
            <div class=" bg-blush p-8 rounded-l-2xl flex flex-col justify-center items-center">
                <h2 class="text-white text-2xl font-bold">PURELOOK</h2>
                <p class="text-white text-lg mt-4 font-semibold">Bem-vinda de volta!</p>
                <p class="text-white text-sm text-center">Acesse sua conta e gerencie sua clínica.</p>
                <a href="{{ route('register') }}" class="mt-6 px-6 py-2 border border-white text-white rounded-lg hover:bg-white hover:text-pink-300 transition">Cadastrar</a>
            </div>
            
            <!-- Lado direito -->
            <div class=" p-8">
                <h2 class="text-blush text-2xl font-bold text-center">Entre na sua conta!</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-black" />
                        <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-black" />

                        <x-text-input id="password" class="block mt-1 w-full text-black"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <x-primary-button class="ms-3 bg-blush">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>