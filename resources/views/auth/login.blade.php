<x-layouts.app title="Login">

    <x-headers.form-header />

    <main class="form-body flex flex-col items-center mt-32">
        <section class="text-center">
            <h1 class="text-4xl font-bold">Bem-vindo à Varkoop!</h1>
            <p class="text-lg font-normal mt-5">Não está registado? <a href="/register" class="text-blue-600">Crie uma
                    conta</a></p>
        </section>

        <form action="{{ route('login') }}" method="post">
            @csrf

            <input type="email" name="email" class="block mt-3 w-80 rounded-lg border-gray-300 bg-gray-100"
                :value="old('email')" required autofocus autocomplete="username" placeholder="E-mail">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <input id="password" class="block mt-4 w-80 rounded-lg border-gray-300 bg-gray-100"" type="password"
                name="password" required autocomplete="current-password" placeholder="Senha">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <section class="flex items-center justify-start mt-2">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-900 hover:text-blue-600 hover:underline"
                        href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                @endif
            </section>

            <section class="button flex justify-center mt-4">
            <button type="submit" class="button text-white font-bold text-xl">Entrar</button>
            </section>
        </form>

        <section class="social-login">

        </section>

    </main>
</x-layouts.app>
