@extends('layouts.dashboard')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <div class="container mx-auto">
        <a href="/blog" class="mx-3 text-primary underline">Kembali</a>
        <h1 class="font-bold text-3xl text-primary text-center my-5">Buat blog kamu</h1>
        <form class="mx-3">
            @csrf
            <div class="flex flex-col my-5 gap-3">
                <label for="title" id="title" class="text-xl font-semibold">Judul</label>
                <input type="text" id="title" name="title" class="border-2 p-2 rounded-xl">
            </div>
            <div class="flex flex-col my-5 gap-3">
                <label for="category" id="category" class="text-xl font-semibold">Kategori</label>
                <select name="category" id="category" class="border-2 p-2 rounded-xl">
                    <option value="">Tidak ada</option>
                    @foreach ($categories as $category)
                        <option value="">{{ $category->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col my-5 gap-3">
                <label for="image" class="text-xl font-semibold">Sampul gambar</label>
                <input type="file" name="image" id="file-input"
                    class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-3">
            </div>
            <div class="flex flex-col my-5 gap-3">
                <label class="text-xl font-semibold">Postingan</label>
                <div id="editor"></div>
            </div>
            <div class="flex w-full justify-end gap-3 mb-10">
                <button type="submit"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Upload
                </button>
                <button type="reset"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Batal
                </button>
            </div>
        </form>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
