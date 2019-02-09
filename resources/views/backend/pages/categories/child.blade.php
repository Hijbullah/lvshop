<div>
    <div class="radio ml-4">
        <input type="radio" id="{{ $category->id }}" name="parent_id" value="{{ $category->id }}">
        <label for="{{ $category->id }}"> {{ $category->name }} </label>
        
    </div>
    @if (count($category->children) > 0)
        @foreach($category->children as $category)
            @include('backend.pages.categories.child', $category)
        @endforeach
    @endif
</div>