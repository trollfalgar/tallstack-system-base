<div class="flex items-center min-h-screen w-full px-4">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
            @include('livewire.auth.partials.block-image')
            <div class="flex flex-col items-center justify-center p-6 sm:p-8 md:w-1/2">
                <a href="{{ route('home') }}" class="mb-4">
                    <x-layout.logo class="h-24 w-24"/>
                </a>

                <h2 class="my-8 text-2xl text-gray-600 font-semibold uppercase">{{ __('Alterar senha') }}</h2>

                <form wire:submit.prevent="resetPassword" autocomplete="off" class="w-full flex flex-col gap-6">
                    <input wire:model="token" type="hidden">
                    <x-input.text model="email" type="email" :label-text="__('Endereço de e-mail')" :is-disabled="true" :is-required="true"/>
                    <x-input.text model="password" type="password" :label-text="__('Senha')" :is-autofocus="true" :is-required="true"/>
                    <x-input.text model="passwordConfirmation" type="password" :label-text="__('Confirmação de Senha')" :is-required="true"/>

                    <div class="rounded-md shadow-sm mt-6" wire:loading.remove wire:target="resetPassword">
                        <x-layout.button type="submit" :text="__('Alterar senha')" classes="w-full"/>
                        <div class="flex items-center justify-center mt-4">
                            <div class="text-sm leading-5">
                                <x-layout.hyperlink :url="route('login')" :text="__('Voltar para tela de login')"/>
                            </div>
                        </div>
                    </div>
                    <div wire:loading wire:target="resetPassword">
                        <x-layout.loading/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>