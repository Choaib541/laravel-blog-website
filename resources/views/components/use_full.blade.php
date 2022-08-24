<div class="sidebar-section">
    <h5><span>Useful</span></h5>
    <ul style="list-none;">
        @foreach ($categories as $category)
            <li><a  href="{{ route('Posts') . '?search=' . $category->name }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
