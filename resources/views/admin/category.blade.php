@extends('layouts.admin')
@section('content')
    <div class="md:flex gap-5">
        <div class="md:w-3/6">
            <div class="p-3">
                <h1 class="font-bold text-xl text-primary">Buat Kategori</h1>
                <p class="text-md">Buat Kategori</p>
            </div>
            <div class="bg-white rounded shadow-md p-2">
                <form method="post" action="{{ route('store.category') }}">
                    @csrf
                    <div class="p-3 flex flex-col gap-2">
                        <label for="label" class="text-md font-semibold">Kategori</label>
                        <input type="text" name="label" id="label" class="border border-gray-500 rounded p-2"
                            placeholder="Nama Kategori">
                    </div>
                    <div class="p-3 flex flex-col gap-2">
                        <label for="desc" class="text-md font-semibold">Deskripsi</label>
                        <textarea class="p-2 block w-full border border-gray-500 rounded-lg focus:border-blue-500 focus:ring-blue-500" name="desc" id="desc"
                            rows="3" placeholder="Masukkan Deskripsi"></textarea>
                    </div>
                    <div class="p-3 flex gap-2">
                        <button type="submit"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">Simpan</button>
                        <button type="reset"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">Batal</button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="p-3">
                <h1 class="font-bold text-xl text-primary">List Kategori</h1>
                <p class="text-md ">Update dan Hapus Kategori</p>
            </div>
            <div class="bg-white rounded shadow-md p-2">
                <div class="flex flex-col p-2">
                    <div class="-m-1.5 overflow-x-auto">
                      <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg shadow overflow-hidden">
                          <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-white">
                              <tr>
                                <th scope="col" class="px-6 py-3 text-start text-sm font-medium text-gray-500">Label</th>
                                <th scope="col" class="px-6 py-3 text-start text-sm font-medium text-gray-500">Deskripsi</th>
                                <th scope="col" class="px-6 py-3 text-end text-sm font-medium text-gray-500">Action</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $category->label }}</td>
                                    <td class="px-6 py-4 whitespace-normal w-[250px] text-sm text-gray-800">{{ $category->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <form action="{{ route('destroy.category', $category) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-red-600 hover:text-red-800 ">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
