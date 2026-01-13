<h2>Add User</h2>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <button>Save</button>
</form>
