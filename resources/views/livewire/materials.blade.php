<div class="flex flex-row gap-4">
    @foreach($materials as $material)
        @if ($material->category_id == $resultId)
            <a href="{{ route('prod.give', [$cleanedUrl, $productId = $material->id]) }}">
                <div>
                    {{$material->name}}
                </div>
            </a>
        @endif
    @endforeach
</div>
