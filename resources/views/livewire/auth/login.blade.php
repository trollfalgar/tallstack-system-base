<div class="flex items-center min-h-screen w-full px-4">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
            @include('livewire.auth.partials.block-image')
            <div class="flex flex-col items-center justify-center p-6 sm:p-8 md:w-1/2">
                <a href="{{ route('home') }}" class="mb-4">
                    <x-layout.logo class="h-24 w-24"/>
                </a>

                <h2 class="my-8 text-2xl text-gray-600 font-semibold uppercase">{{ __('Acessar conta') }}</h2>

                <form wire:submit.prevent="authenticate" autocomplete="off" class="w-full flex flex-col gap-6">
                    <x-input.text model="email" type="email" :label-text="__('Endereço de e-mail')" :is-autofocus="true" :is-required="true"/>
                    <x-input.text model="password" type="password" :label-text="__('Senha')" :is-required="true"/>

                    <div class="flex items-center justify-between">
                        <x-input.checkbox model="remember" :label-text="__('Lembre de mim')"/>

                        <div class="text-sm leading-5">
                            <x-layout.hyperlink :url="route('password.request')" :text="__('Esqueceu sua senha?')"/>
                        </div>
                    </div>

                    <div class="rounded-md shadow-sm mt-6" wire:loading.remove wire:target="authenticate">
                        <x-layout.button type="submit" :text="__('Entrar')" classes="w-full"/>
                    </div>
                    <div wire:loading wire:target="authenticate">
                        <x-layout.loading/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>