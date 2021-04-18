<div class="flex items-center min-h-screen w-full px-4">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
            @include('livewire.auth.partials.block-image')
            <div class="flex flex-col items-center justify-center p-6 sm:p-8 md:w-1/2">
                <a href="{{ route('home') }}" class="mb-4">
                    <x-layout.logo class="h-24 w-24"/>
                </a>

                <h2 class="my-8 text-2xl text-gray-600 font-semibold uppercase">{{ __('Redefinir senha') }}</h2>

                @if ($emailSentMessage)
                    <div class="rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>

                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-green-800">
                                    {{ $emailSentMessage }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-8">
                        <div class="text-sm leading-5">
                            <x-layout.hyperlink :url="route('login')" :text="__('Voltar para tela de login')"/>
                        </div>
                    </div>
                @else
                    <form wire:submit.prevent="sendResetPasswordLink" autocomplete="off" class="w-full flex flex-col gap-6">
                        <x-input.text model="email" type="email" :label-text="__('Endereço de e-mail')" :is-autofocus="true" :is-required="true"/>

                        <div class="flex items-center justify-center">
                            <div class="text-sm leading-5">
                                <x-layout.hyperlink :url="route('login')" :text="__('Lembrou sua senha?')"/>
                            </div>
                        </div>

                        <div class="rounded-md shadow-sm mt-6" wire:loading.remove wire:target="sendResetPasswordLink">
                            <x-layout.button type="submit" :text="__('Enviar link de redefinição')" classes="w-full"/>
                        </div>
                        <div wire:loading wire:target="sendResetPasswordLink">
                            <x-layout.loading/>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
