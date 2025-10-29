@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 px-4">
    <h2 class="text-2xl font-bold mb-4 text-nature-1">Callback Requests</h2>
    
    @if($callbacks->count())
        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-md overflow-hidden">
                <thead class="bg-nature-4 text-white">
                    <tr>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Email</th>
                        <th class="p-3 text-left">Contact</th>
                        <th class="p-3 text-left">Purpose</th>
                        <th class="p-3 text-left">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($callbacks as $callback)
                    <tr class="border-b odd:bg-gray-100 even:bg-white">
                        <td class="p-3">{{ $callback->name }}</td>
                        <td class="p-3">{{ $callback->email }}</td>
                        <td class="p-3">{{ $callback->contact_no }}</td>
                        <td class="p-3">{{ $callback->purpose }}</td>
                        <td class="p-3">{{ $callback->message }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-600 text-center">No callback requests found.</p>
    @endif
</div>
@endsection
