<div class="flex flex-row gap-4">
    <div>test</div>
    <div>{{$selectedCategoryId}}</div>

    @if(!empty($materials))
        @foreach($materials as $material)
            @if($selectedCategoryId === $material->category->id)
                <div class="flex flex-wrap">
                    test
                </div>
            @endif
        @endforeach
    @endif
</div>
