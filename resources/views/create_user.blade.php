<div>
    Página para crear usuarios
    <form action="{{ action('UserController@store') }}" method="POST" role="form">
        {{ csrf_field() }}
        <input name="_method" type="hidden">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Correo Electronico:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="password">Contraseña:</label>
        <input type="text" id="paswsword" name="password"><br><br>
        <button type="submit">Crear</button>
    </form>
</div>