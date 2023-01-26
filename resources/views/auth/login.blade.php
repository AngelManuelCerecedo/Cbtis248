<style>
    body {
        background-position: center;
        background-size:cover;
        background-repeat: no-repeat;
        max-width: 100%;
        background-image: url("https://github.com/Darftgamer/LOGO-CBTIS/blob/main/xd.jpg?raw=true")
    }
</style>
<x-guest-layout>
    <div class="font-sans" >
        <x-jet-authentication-card>
            <x-slot name="logo">
                <img src="https://github.com/Darftgamer/LOGO-CBTIS/blob/main/LOGO-HD.jpeg?raw=true" alt=""
                    width="150px" height="150px">
            </x-slot>
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <x-jet-label class="text-lg" for="email" value="{{ __('Correo') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label class="text-lg" for="password" value="{{ __('Contraseña') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>
                <div class="flex items-center justify-end mt-4">

                    <x-jet-button class="mr-[95px] mt-6 text-lg">
                        {{ __('Iniciar Sesión') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </div>
</x-guest-layout>
