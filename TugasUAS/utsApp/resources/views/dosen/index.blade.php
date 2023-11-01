<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold my-8">Product</h1>
        <div>
            @if(session()->has('success'))
                <div class="bg-green-500 text-white px-4 py-2 rounded">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="flex justify-between">
            <div class="my-4">
                <a href="{{route('dosen.add')}}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Dosen</a>
            </div>
            <div class="my-4">
                <a href="/admin" class="bg-red-500 text-white px-4 py-2 rounded">Kembali</a>
            </div>
        </div>
        <table class="w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="px-4 py-2">NIDN</th>
                    <th class="px-4 py-2">Nama</th>

                </tr>
            </thead>
            <tbody>
                @foreach ( $dosens as $dosen )
                    <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-100' : '' }}">
                        <td class="border px-4 py-2">{{$dosen->nidn}}</td>
                        <td class="border px-4 py-2">{{$dosen->nama}}</td>
                        <td class="border px-4 py-2">
                            <a href="{{route('dosen.edit', ['dosen' => $dosens])}}" class="bg-yellow-500 text-white px-4 py-1 rounded">Edit</a>
                        </td>
                        <td class="border px-4 py-2">
                            <form method="post" action="{{route('dosen.destroy', ['dosen' => $dosens] )}}" >
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="bg-red-500 text-white px-4 py-1 rounded cursor-pointer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>