<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dosen Detail') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('dosen.index') }}"
                    class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-black uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Go back
                </a>
                <table class="w-full table-fixed">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 font-bold">NIP</td>
                            <td>{{ $dosen->nip }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">Nama</td>
                            <td>{{ $dosen->nama }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">Umur</td>
                            <td>{{ $dosen->umur }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">Alamat</td>
                            <td>{{ $dosen->alamat }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">Kota</td>
                            <td>{{ $dosen->kota }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">Jurusan</td>
                            <td>{{ $dosen->jurusan }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
