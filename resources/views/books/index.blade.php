@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <h1>Buy and Sell Textbooks</h1>
            <p>
                The student marketplace for used textbooks. Find great deals or sell your old books to fellow students.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            @if(session('success'))
                <div class="success">{{ session('success') }}</div>
            @endif

            <h2>Available Books</h2>
            <p class="section-sub">{{ $books->count() }} listings available</p>

            <div class="grid">
                @foreach($books as $book)
                    @php
                        $badgeClass = match($book->condition) {
                            'New' => 'badge-new',
                            'Good' => 'badge-good',
                            'Fair' => 'badge-fair',
                            'Poor' => 'badge-poor',
                            default => 'badge-good'
                        };
                    @endphp

                    <div class="card">
                        <div class="card-image">
                            @if($book->photo)
                                <img src="{{ asset('storage/photos/' . $book->photo) }}" alt="{{ $book->title }}">
                            @else
                                📖
                            @endif
                            <span class="badge {{ $badgeClass }}">{{ $book->condition }}</span>
                        </div>

                        <div class="card-body">
                            <div class="course">{{ $book->course_code }}</div>
                            <div class="title">{{ $book->title }}</div>
                            <div class="author">by {{ $book->author }}</div>

                            <div class="card-footer">
                                <div class="price">${{ number_format($book->price, 2) }}</div>
                                <a href="/books/{{ $book->id }}" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection