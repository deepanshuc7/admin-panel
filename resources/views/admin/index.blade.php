@extends('layouts.app')

@section('content')
    <div class="container ">
        <h1>Admin Panel</h1>
        <a href="{{ route('admin.create') }}" class="btn btn-primary ">Create New User</a>
        <table class="container border-collapse border border-slate-500 table-auto w-full ">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Admin</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.edit', $user) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.destroy', $user) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
