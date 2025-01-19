@extends('layouts.app')

@section('content')
<div class="container">
    <h1>مدیریت نمرات</h1>
    @foreach ($courses as $course)
        <div>
            <h2>{{ $course->title }}</h2>
            @foreach ($course->grades as $grade)
                <form method="post" action="{{ route('update-grade') }}">
                    @csrf
                    <p>دانشجو: {{ $grade->user->name }}</p>
                    <input type="number" name="grade" value="{{ $grade->grade }}">
                    <input type="hidden" name="user_id" value="{{ $grade->user_id }}">
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <button type="submit">بروزرسانی</button>
                </form>
            @endforeach
        </div>
    @endforeach
</div>
@endsection
