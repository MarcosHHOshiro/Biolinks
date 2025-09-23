@props(['title', 'actions'])

<div class="card bg-base-100 md:w-1/2 lg:w-1/3 shadow-xl">
    <div class="card-body">

        <div class="card-title mb-4">{{ $title ?? '' }}</div>
        {{ $slot }}

        <div class="card-actions flex-center justify-between mt-6">
            {{ $actions ?? '' }}
        </div>
    </div>

</div>