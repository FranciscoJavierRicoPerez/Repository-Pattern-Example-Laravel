<table >
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Contraseña</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                <form action="{{ action('UserController@destroy', $user->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="POST">
                    <button type="submit">Eliminar</button>
                </form>
            </td>
            <td>
                <a type="button" href="/update/{{ $user->id }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <a type="button" href="/create">Crear Usuario</a>
</table>