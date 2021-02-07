<div>
    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
        {{ $service->icon ?? '' }}
    </div>
    <div class="mt-5">
        <dt class="text-lg leading-6 font-medium text-gray-900">
            <a href="{{ route('services.show', $service) }}">{{ $service->name }}</a>
        </dt>
        <dd class="mt-2 text-base text-gray-500">
            {{ $service->summary }}
        </dd>
    </div>
</div>
