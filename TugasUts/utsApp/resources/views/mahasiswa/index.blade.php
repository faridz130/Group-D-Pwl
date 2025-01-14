<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body class="bg-gray-100">
    @include('layouts.sidebar')
    <x-topbar title="Crud Data" slash="/" subTitle="Mahasiswa" />
    <div class="w-[cacl(100%-256px)] ml-64">
        <div class="container mx-auto px-10">
            <x-head-title title="Mahasiswa" />
            <div>
                @if(session()->has('success'))
                    <div class="bg-green-500 text-white px-4 py-2 rounded">
                        {{session('success')}}
                    </div>
                @endif
            </div>
            <div class="flex justify-between">
                <div class="my-4">
                    <x-crud-button class="bg-blue-500 " href="{{route('mahasiswa.add')}}" title="Tambah Mahasiswa" />
                </div>
                <div class="my-4">
                    <x-crud-button class="bg-red-500 " href="/admin" title="Kembali" />
                </div>
            </div>
            <table class="w-full bg-white rounded-lg overflow-hidden">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-2 py-2">NPM</th>
                        <th class="px-2 py-2">Nama</th>
                        <th class="px-2 py-2">Kelas</th>
                        <th class="px-2 py-2">Jurusan</th>
                        <th class="px-2 py-2">Edit</th>
                        <th class="px-2 py-2">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $mahasiswas as $mahasiswa )
                        <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-100' : '' }}">
                            <td class="border px-4 py-2">{{$mahasiswa->npm}}</td>
                            <td class="border px-4 py-2">{{$mahasiswa->nama}}</td>
                            <td class="border px-4 py-2">{{$mahasiswa->kelas}}</td>
                            <td class="border px-4 py-2">{{$mahasiswa->jurusan}}</td>
                            <td class="border px-4 py-2">
                                <x-crud-button class="bg-yellow-500 " href="{{route('mahasiswa.edit', ['mahasiswa' => $mahasiswa])}}" title="Edit" />
                            </td>
                            <td class="border px-4 py-2">
                                <form method="post" action="{{route('mahasiswa.destroy', ['mahasiswa' => $mahasiswa] )}}" >
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

    </div>
    @include('layouts.footer')
</body>
</html>
