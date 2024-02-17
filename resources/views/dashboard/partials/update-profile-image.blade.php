<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Image') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Update Profile Image. Pilih Gambar dengan rasio 1:1 atau persegi (Rekomendasi)') }}
        </p>
    </header>
    <div class="my-6">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (Auth::user()->image)
            <img class="w-[150px] rounded-full border-2 border-primary"
                src="{{ asset('/storage/images/' . Auth::user()->image) }}" alt="profile_image"
                style="padding: 10px; margin: 0px; ">
        @endif
    </div>
    <div class="card-body">
        <form action="{{ route('store.profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex gap-2">
                <label for="file-input" class="sr-only">Choose file</label>
                <input type="file" name="image" id="file-input"
                    class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4">
                <button type="submit" value="Upload"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-primary text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Upload
                </button>
            </div>
        </form>
        <div class="mt-5">
            <p class="font-bold mb-2">Hapus Profile</p>
            <form action="{{ route('delete.profile', $user) }}" method="POST" enctype="multipart/form-data">
                @method('DELETE')
                @csrf
                <button type="submit"
                    class="py-3 px-4 w-[150px] text-center justify-center inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                    Delete
                </button>
            </form>
        </div>
    </div>
</section>
