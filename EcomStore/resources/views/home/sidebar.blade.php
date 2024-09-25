<div class="hero__categories sticky-div">
    <div class="hero__categories__all">
        <span>Select category</span>
    </div>
    <ul>
        <li>
            <a href="{{ route('category.products', 'all')}}" style="font-weight: bold; color: black;">
                All Categories ({{ $totalProducts }})
            </a>
        </li>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('category.products', $category->category_name) }}" class="category-link">
                    {{ $category->category_name }} ({{ $category->products_count }}) <!-- Display product count -->
                </a>
            </li>
        @endforeach
    </ul>
</div>
