<div class="hero__categories sticky-div">
    <div class="hero__categories__all">
        <i class="fa fa-bars"></i>
        <span>All departments</span>
    </div>
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('category.products', $category->category_name) }}">{{ $category->category_name }}</a>
            </li>
        @endforeach
    </ul>
</div>
