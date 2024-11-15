<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
<a {{ $attributes }} class="{{ request()->fullUrlIs(url($href)) ? 'bg-zinc-700 text-white' : 'text-zinc-300 hover:bg-zinc-800 hover:text-white' }}block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">
    {{ $slot }}
</a>