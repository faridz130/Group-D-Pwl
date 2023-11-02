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
        <x-head-title title="Menambah Dosen" />
        <div>
            @if($errors->any())
            <ul class="bg-red-500 text-white px-4 py-2 rounded">
                @foreach ($errors->all() as $errors)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('dosen.daftar')}}" class="bg-white p-6 rounded-lg">
            @csrf
            @method('post')
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">NIDN</label>
                <input type="number" name="nidn" placeholder="nidn" class="w-full px-3 py-2 border rounded-lg focus:border-blue-500 focus:outline-none" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nama</label>
                <input type="text" name="nama" placeholder="nama" class="w-full px-3 py-2 border rounded-lg focus:border-blue-500 focus:outline-none" />
            </div>

            <div class="flex space-x-4 ">
                <div>
                    <input type="submit" value="Tambah" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer " />
                </div>
                <div class="mt-2">
                    <a href="{{route('dosen.index')}}" class="bg-red-500 text-white px-4 py-2 rounded cursor-pointer">Kembali</a>
                </div>
            </div>

        </form>
    </div>
</body>
</html>
