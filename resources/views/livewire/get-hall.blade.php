<div>
    <ul class="conf-step__list">
        @foreach($halls as $hall)

        <li wire:key="{{ $hall->id }}">{{ $hall->name }}
            <livewire:DeleteHall wire:key="'hall-'.$hall->id" :id="$hall->id"/>
        </li>
        @endforeach
    </ul>
</div>
