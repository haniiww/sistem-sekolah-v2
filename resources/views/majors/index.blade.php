@extends('layouts.app')

@section('title', $title)

@section('content')
    <x-page-header title="Daftar Jurusan" description="Daftar jurusan yang terdaftar dalam sistem sekolah"
        action-route="majors.create" action-text="Catat Jurusan Baru" show-academic-year="true" />

    <div class="border border-[#E5E3DB] bg-white">
        <table class="w-full text-left text-sm">
            <thead>
                <tr class="border-b border-[#16213A] text-[11px] uppercase tracking-[0.15em] text-[#16213A]">
                    <th class="w-14 px-5 py-3.5 font-semibold">No.</th>
                    <th class="px-5 py-3.5 font-semibold">Kode Jurusan</th>
                    <th class="px-5 py-3.5 font-semibold">Nama Jurusan</th>
                    <th class="px-5 py-3.5 font-semibold">Deskripsi</th>
                    <th class="px-5 py-3.5 text-right font-semibold">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($majors as $major )
                <tr class="border-b border-[#EFEDE6] hover:bg-[#FAF9F5]">
                    <td class="px-5 py-4 font-display text-lg text-[#A16207]">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-5 py-4 font-mono text-xs text-slate-500">
                        {{ $major['code'] }}
                    </td>
                    <td class="px-5 py-4 font-medium text-[#16213A]">
                        {{ $major['name'] }}
                    </td>
                    <td class="px-5 py-4">
                        {{ $major['description'] }}
                    </td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-4 text-xs font-medium">
                            <a href="{{ route('majors.show', ['major' => 1]) }}" 
                                class="text-[#16213A] hover:text-[#A16207]">Lihat</a>
                            <a href="{{ route('majors.edit', ['major' => 1]) }}" 
                                class="text-[#16213A] hover:text-[#A16207]">Ubah</a>
                            <form action="" method="POST"
                                onsubmit="return confirm('Hapus data jurusan ini dari buku induk?')">

                                <button type="submit" class="text-red-700 hover:text-red-900">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

