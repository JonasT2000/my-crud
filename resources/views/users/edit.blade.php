<h2>Edit User</h2>

<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}">
    <button>Update</button>
</form>
