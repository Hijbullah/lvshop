
<tr>
    <td> 
        <label>
            <input type="radio" class="flat-red" name="parent_id" value="{{ $category->id }}">
        </label>
    </td>
    <td>
        @for ($i = 0; $i < count($category->ancestors); $i++)
            {{ '-' }} 
        @endfor

    {{  $category->name }} 
    

    
    </td>
    <td>
        {!! $category->status ? '<span class="badge bg-success p-2">Published</span>' : '<span class="badge bg-danger p-2">NOT Published</span>' !!} 
    </td>
    <td>
        <a href="#" title="Edit" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-edit"></i></a>
        <a href="{{ route('categories.destroy', $category->id) }}" title="DELETE" class="btn btn-sm btn-danger text-white category-delete"><i class="fas fa-trash-alt"></i></a>
    </td>
</tr>

@if($category->children)
    @foreach ($category->children as $category)
    @include('backend.pages.categories.child', $category)
    @endforeach
@endif

