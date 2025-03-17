<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-background">
        <div class="bg-white shadow-lg rounded-2xl flex">
            <!-- Lado esquerdo -->
            <div class="w-2/3 bg-blush p-8 rounded-l-2xl flex flex-col justify-center items-center">
                <h2 class="text-white text-2xl font-bold">PURELOOK</h2>
                <p class="text-white text-lg mt-4 font-semibold">Bem-vinda de volta!</p>
                <p class="text-white text-sm text-center">Acesse sua conta e gerencie sua clínica.</p>
                <a href="{{ route('register') }}" class="mt-6 px-6 py-2 border border-white text-white rounded-lg hover:bg-white hover:text-pink-300 transition">Cadastrar</a>
            </div>
            
            <!-- Lado direito -->
            <div class="w-3/3 p-8">
                <h2 class="text-blush    text-2xl font-bold text-center">Entre na sua conta!</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-black" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-black" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ms-2 text-sm text-black">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-black  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                                Ainda não possui uma conta?
                            </a>
                        @endif

                        <x-primary-button class="ms-3 bg-icemint">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>