@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header breadcrumb="Kelas" breadcrumb-route="classes.index" title="Ubah Data Kelas"
        description="Memperbarui catatan kelas XII AKL 1" />

    <form action="" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">

        <div>
            <label for="name" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Nama Kelas
            </label>

            <input type="text" id="name" name="name" value="XII AKL 1"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>


        <div>
            <label for="grade" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Tingkat
            </label>

            <select id="grade" name="grade"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII" selected>XII</option>
            </select>
        </div>


        <div>
            <label for="major_id" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Jurusan
            </label>

            <select id="major_id" name="major_id"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

                <option value="1" selected>Akuntansi dan Keuangan Lembaga</option>
                <option value="2">Teknik Komputer dan Jaringan</option>
                <option value="3">Bisnis Digital</option>

            </select>
        </div>


        <div>
            <label for="teacher_id" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Wali Kelas
            </label>

            <select id="teacher_id" name="teacher_id"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

                <option value="1" selected>Budi Santoso</option>
                <option value="2">Siti Aminah</option>

            </select>
        </div>


        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">
            <a href="{{ route('classes.index') }}"
                class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
                Batal
            </a>

            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                Perbarui Kelas
            </button>
        </div>

    </form>

@endsection