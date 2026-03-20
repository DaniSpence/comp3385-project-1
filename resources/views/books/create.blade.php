@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-wrap">
            <a href="/books" class="back-link">← Back to listings</a>

            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-card">
                <h1>Add New Book</h1>
                <p>Fill out the form below to list your book for sale</p>

                <form action="/books" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Enter book title">
                    </div>

                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author" value="{{ old('author') }}" placeholder="Enter author name">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="course_code">Course Code</label>
                            <input type="text" name="course_code" id="course_code" value="{{ old('course_code') }}" placeholder="e.g., CS101">
                        </div>

                        <div class="form-group">
                            <label for="price">Price ($)</label>
                            <input type="text" name="price" id="price" value="{{ old('price') }}" placeholder="0.00">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="condition">Condition</label>
                        <select name="condition" id="condition">
                            <option value="New" {{ old('condition') == 'New' ? 'selected' : '' }}>New</option>
                            <option value="Good" {{ old('condition') == 'Good' ? 'selected' : '' }}>Good</option>
                            <option value="Fair" {{ old('condition') == 'Fair' ? 'selected' : '' }}>Fair</option>
                            <option value="Poor" {{ old('condition') == 'Poor' ? 'selected' : '' }}>Poor</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" placeholder="Describe the book's condition, highlights, notes, etc.">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo">
                    </div>

                    <button type="submit" class="btn" style="width: 100%;">Add Book</button>
                </form>
            </div>
        </div>
    </div>
@endsection