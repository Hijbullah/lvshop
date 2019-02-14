<ul class="">
    <li>
        <div class="radio cat-radio-item">
            <input type="radio" id="{{ $category->id }}" name="parent_id" value="{{ $category->id }}">
            <label for="{{ $category->id }}"> {{ $category->name }} </label>
            <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-round btn-danger waves-effect waves-float btn-sm waves-light cat-data-delete"><i class="zmdi zmdi-delete"></i></a>

            
        </div>
        @if (count($category->children) > 0)
            @foreach($category->children as $category)
                @include('backend.pages.categories.child', $category)
            @endforeach
        @endif
    </li>
    
</ul>