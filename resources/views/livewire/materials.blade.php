<div class="flex flex-row gap-4">
    @foreach($materials as $material)
        @if ($material->category_id == $resultId)
            <div>
                {{$material->name}}
            </div>
        @endif
    @endforeach
</div>
