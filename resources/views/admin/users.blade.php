@extends('layouts.admin')
@section('content')
    <div class="flex flex-col">
        <h1 class="font-bold text-3xl text-primary">Show and Delete Users</h1>
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Name</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Email</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Username</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Role</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Email Verified at</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="odd:bg-white even:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $user->username }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $user->role }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $user->email_verified_at }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <form action="{{ route('destroy.user' , $user) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-red-600 hover:text-red-800">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
