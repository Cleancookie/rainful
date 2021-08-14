<div class="navbar mb-8 shadow-lg bg-neutral text-neutral-content">
    <div class="container mx-auto">
        <div class="flex lg:hidden">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="flex-none px-2 mx-2">
            <span class="text-lg font-bold">
                <a href="{{ route('dashboard') }}">Rainful</a>
            </span>
        </div>
        <div class="flex-1 px-2 mx-2">
            <div class="items-stretch hidden lg:flex">
                <a class="btn btn-ghost btn-sm rounded-btn" href="{{ route('dashboard') }}">
                    Home
                </a>
                <a class="btn btn-ghost btn-sm rounded-btn" href="{{ route('plant.index') }}">
                    Plants
                </a>
            </div>
        </div>

    </div>
</div>
