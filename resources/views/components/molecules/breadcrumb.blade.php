<nav class="no-scrollbar my-2 flex justify-between overflow-x-auto whitespace-nowrap text-gray-900"
    aria-label="Breadcrumb">
    <ol class="mb-3 inline-flex items-center space-x-3">
        <li>
            <div class="flex items-center">
                <a class="text-sm font-medium text-gray-900 hover:text-blue-600 md:text-base"
                    href="{{ route('dashboard.index') }}">Dashboard</a>
            </div>
        </li>
        {{ $slot }}
    </ol>
</nav>
