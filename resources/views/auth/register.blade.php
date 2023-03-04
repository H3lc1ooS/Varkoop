<x-layouts.app title="Register">

    <x-headers.form-header />

    <main class="form-body flex flex-col items-center mt-20">

        <section class="text-center">
            <h1 class="text-4xl font-bold">Crie uma Conta!</h1>
        </section>

        <section class="flex justify-evenly w-full h-96 divide-x-2">

            <form method="POST" action="{{ route('register') }}"
                class="register w-2/5 flex flex-col justify-center items-center">

                @csrf

                <input id="name" class="block mt-3 w-80 rounded-lg border-gray-300 bg-gray-100" type="text"
                    name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nome">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />


                <input id="email" class="block mt-3 w-80 rounded-lg border-gray-300 bg-gray-100" type="email"
                    name="email" :value="old('email')" required autocomplete="username" placeholder="E-mail">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <input id="password" class="block mt-3 w-80 rounded-lg border-gray-300 bg-gray-100"
                    type="password"name="password" required autocomplete="new-password" placeholder="Senha">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <input id="password_confirmation" class="block mt-3 w-80 rounded-lg border-gray-300 bg-gray-100"
                    type="password" type="password" name="password_confirmation" required
                    autocomplete="new-password"placeholder="Confirmar Senha">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <section class="button flex justify-center mt-6">
                    <button type="submit" class="button text-white font-bold text-xl w-80">Criar Conta</button>
                </section>
            </form>

            <section class="login w-2/5 flex flex-col items-center justify-center">

                <a href=""
                    class="flex justify-center items-center text-white font-bold facebook social rounded-3xl w-1/2">
                    <ion-icon name="logo-facebook" class="text-4xl"></ion-icon>
                    <p class="ml-2">Entrar com Facebook</p>
                </a>

                <a href=""
                    class="flex justify-center items-center text-black font-bold social rounded-3xl w-1/2 border-solid border-black mt-4 bg-red-400">
                    <ion-icon name="logo-google" class="text-3xl"></ion-icon>
                    <p class="ml-2">Entrar com Google</p>
                </a>



                <p class="text-lg font-normal mt-5">Já tem uma conta? <a href="/login" class="text-blue-600">Entrar</a>
                </p>
            </section>

        </section>

    </main>
</x-layouts.app>
