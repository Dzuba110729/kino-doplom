<div>

    <button wire:click="doShow()" class="conf-step__button conf-step__button-accent">Создать зал</button>

    <div class="popup @if($show === true) active @endif">
        <div class="popup__container">
            <div class="popup__content">
                <div class="popup__header">
                    <h2 class="popup__title">
                        Добавление зала
                        <a class="popup__dismiss" wire:click.prevent="doClose()" href="#"><img src="/admin/image/close.png" alt="Закрыть"></a>
                    </h2>

                </div>
                <div class="popup__wrapper">
                    <form wire:submit="save">
                        <label class="conf-step__label conf-step__label-fullsize" for="name">
                            Название зала
                            <input class="conf-step__input" type="text" placeholder="Например, &laquo;Зал 1&raquo;" wire:model="name" required>
                            <div>
                                @error('content') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </label>
                        <div class="conf-step__buttons text-center">
                            <input  type="submit" value="Добавить зал" class="conf-step__button conf-step__button-accent">
                            <button wire:click="doClose()" class="conf-step__button conf-step__button-regular">Отменить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
