@extends('partials.main')

@section('main_content')
    <div class="container mx-auto py-2">
        <h2>Home</h2>
        <p>Welcome to Contact Page</p>
        <div>
            <form class="p-4 bg-gray-100 rounded flex flex-col gap-4 w-3xs">
                <input class="p-2 rounded border border-gray-500" type="email" placeholder="email">
                <input class="p-2 rounded border border-gray-500" type="password" placeholder="password">
                <button class="px-4 py-2 bg-blue-600 text-blue-100 rounded" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection