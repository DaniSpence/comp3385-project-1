@extends('layouts.app')

@section('content')
    <div class="container section">
        <a href="/books" class="back-link">← Back to listings</a>

        @php
            $badgeClass = match($book->condition) {
                'New' => 'badge-new',
                'Good' => 'badge-good',
                'Fair' => 'badge-fair',
                'Poor' => 'badge-poor',
                default => 'badge-good'
            };
        @endphp

        <div class="detail-card">
            <div class="detail-image">
                @if($book->photo)
                    <img src="{{ asset('storage/photos/' . $book->photo) }}" alt="{{ $book->title }}">
                @else
                    📖
                @endif
            </div>

            <div class="detail-body">
                <div class="course">{{ $book->course_code }}</div>
                <div class="title">{{ $book->title }}</div>

                <div class="detail-meta">by {{ $book->author }}</div>
                <div class="detail-meta">Listed {{ $book->created_at->format('n/j/Y') }}</div>
                <div>
                    <span class="badge {{ $badgeClass }}" style="position: static;">{{ $book->condition }} Condition</span>
                </div>

                <div class="detail-divider"></div>

                <div class="small-label">Description</div>
                <p style="line-height: 1.7; color: #374151;">{{ $book->description }}</p>

                <div class="detail-divider"></div>

                <div class="detail-price-row">
                    <div>
                        <div class="small-label">Price</div>
                        <div class="price">${{ number_format($book->price, 2) }}</div>
                    </div>

                    <button class="btn">Contact Seller</button>
                </div>
            </div>
        </div>
    </div>
@endsection