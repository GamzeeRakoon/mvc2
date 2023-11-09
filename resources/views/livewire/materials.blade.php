<div class="flex flex-row gap-4">
    @foreach($materials as $material)
        @if ($material->category_id == $resultId)
            <a href="{{ url($url . '/' . $material->id) }}">
                <div>
                    {{$material->name}}
                </div>
            </a>
        @endif
    @endforeach
    {{$url}}
</div>
