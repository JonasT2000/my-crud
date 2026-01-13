<h2>Users List</h2>

<a href="{{ route('users.create') }}">Add User</a>

<ul>
@foreach ($users as $user)
    <li>
        {{ $user->name }}

        <a href="{{ route('users.edit', $user) }}">Edit</a>

        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </li>
@endforeach
</ul>
