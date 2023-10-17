<div class="flex flex-col p-4 border bg-neutral-900 border-slate-600 h-full gap-4">
    @foreach($categories as $category)
        <div class="bg-stone-800 hover:bg-stone-700 rounded-lg p-2 cursor-pointer">
            {{ $category->name }}
        </div>
    @endforeach
</div>
