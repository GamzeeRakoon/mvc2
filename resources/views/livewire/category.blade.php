<div class="flex flex-col p-4 border bg-neutral-900 border-slate-600 h-full gap-4">
    @foreach($categories as $category)
        <a href="{{route('cat.give', ['categoryButton' => str_replace(' ', '-', $category->name), 'CategoryId' => $category->id] )}}"
           class="bg-stone-800 hover:bg-stone-700 rounded-lg p-2 cursor-pointer">
            {{ $category->name }}
        </a>
    @endforeach
</div>
