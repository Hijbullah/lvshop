<ul class="">
    <li>
        <div class="radio">
            <input type="radio" id="{{ $category->id }}"  name="category_id" value="{{ $category->id }}" {{ $category->id == $product->category->id ? 'checked' : '' }}>
            <label for="{{ $category->id }}"> {{ $category->name }} </label>
            
        </div>
        @if (count($category->children) > 0)
            @foreach($category->children as $category)
                @include('backend.pages.products.category-edit-child', $category)
            @endforeach
        @endif
    </li>
    
</ul>