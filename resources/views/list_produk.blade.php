@extends('layouts.toko') @section('content')
<div class="container mx-auto p-4">

    @include('components.header')

    <div class="overflow-x-auto bg-white rounded-lg shadow-sm border border-gray-200">
        <table class="min-w-full table-auto text-sm text-left">
            <thead>
                <tr class="bg-gray-100 text-gray-700 uppercase text-xs font-bold tracking-wider border-b border-gray-200">
                    <th class="py-3 px-6 text-left w-16">No</th>
                    <th class="py-3 px-6 text-left">Nama Produk</th>
                    <th class="py-3 px-6 text-left">Deskripsi Produk</th>
                    <th class="py-3 px-6 text-right w-40">Harga</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 divide-y divide-gray-100">
                @foreach ($nama as $index => $item)
                <tr class="hover:bg-blue-50/50 transition duration-100">
                    <td class="py-3.5 px-6 font-medium text-gray-400">{{ $index + 1 }}</td>
                    <td class="py-3.5 px-6 font-semibold text-gray-800">{{ $item }}</td>
                    <td class="py-3.5 px-6 text-gray-500 max-w-md truncate" title="{{ $desc[$index] }}">
                        {{ $desc[$index] }}
                    </td>
                    <td class="py-3.5 px-6 text-right font-bold text-emerald-600">
                        Rp{{ number_format($harga[$index], 0, ',', '.') }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
