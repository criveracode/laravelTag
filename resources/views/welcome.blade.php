<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="bg-gray-200 py-100">
    <div class="max-w-lg bg-white mx-auto p-5 rounded shadow">
        <form action="tags" method="post" class="flex mb-4">
            @csrf
            <input type="text" name="name" class="rounded-l bg-gray-200 p-4 w-full outline-none" placeholder="Nueva Etiqueta">
            <input type="submit" value="Agregar" class="rounded-r px-8 bg-blue-500 text-white outline-none">
        </form>

        <h4 class="text-lg text-center mb-4">Listado de Etiquetas</h4>
        <table>
            @forelse ($tags as $tag)
                <tr>
                    <td class="border px-4 py-2">{{ $tag->name }}</td>
                    <td class="border px-4 py-2">
                        <form action="tags/{{ $tag->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="px-4 rounded bg-red-500 text-white">

                        </form>
                    </td>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>No hay etiquetas</p>
                    </td>
                </tr>
            @endforelse

        </table>
    </div>
</body>

</html>
