<tr>
    <td> 
        <label>
            <input type="radio" class="flat-red" name="category_id" value="{{ $category->id }}">
        </label>
    </td>
    <td>
        @for ($i = 0; $i < count($category->ancestors); $i++)
            {{ '-' }} 
        @endfor
        {{  $category->name }} 
    
    </td>
</tr>

@if($category->children)
    @foreach ($category->children as $category)
    @include('backend.pages.products.category-child', $category)
    @endforeach
@endif
