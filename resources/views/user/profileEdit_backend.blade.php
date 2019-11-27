

<form method="post" action="route('users.edit', $user)">
    {{ csrf_field() }}
    {{ method_field('patch') }}

    <input type="text" name="fullname"  value="{{ $user->fullname }}" />

    <input type="text" name="username"  value="{{ $user->username }}" />

    <input type="text" name="zip"  value="{{ $user->zip }}" />

    <input type="email" name="email"  value="{{ $user->email }}" />

   
    <button type="submit">Save Changes</button>
</form>