@extends('layouts.app')

@section('content')
    <h1>Categories</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>

    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->name }}

                @if ($category->children->count() > 0)
                    <ul>
                        @foreach ($category->children as $child)
                            <li>{{ $child->name }}</li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
