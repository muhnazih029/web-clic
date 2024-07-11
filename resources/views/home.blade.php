<x-layouts title="Home">
    <x-toast name="success" />
    <h1 class="text-4xl font-bold">Halaman Home</h1>
    <br>
    <p class="font-semibold">Selamat Datang Mas {{ Auth::user()->username }}!</p>

    <p>Coba Keluar Mas {{ Auth::user()->username }}!</p>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <h2 class="mt-8 mb-4 text-xl font-semibold">Coba Tombol Di Bawah ini</h2>

    <!-- Button to Open the Modal for Discussion -->
    <button type="button"
        class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
        @click="showDiscussionModal = true">
        Buat Diskusi Baru
    </button>

    <!-- Modal for Discussion -->
    <div x-data="{ showDiscussionModal: false }">
        <div x-show="showDiscussionModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-4">
                    <h5 class="text-xl font-bold">Buat Diskusi Baru</h5>
                    <button @click="showDiscussionModal = false" class="text-xl">&times;</button>
                </div>
                <!-- Modal Body -->
                <form id="discussion-form" action="{{ route('discussions.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="eventId" name="eventId" value="1">
                    <!-- Ganti dengan event ID yang sesuai -->
                    <div class="mb-4">
                        <label for="content" class="block mb-2">Content:</label>
                        <textarea class="w-full px-3 py-2 border rounded-md" id="content" name="content" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block mb-2">Image:</label>
                        <input type="file" class="border rounded-md" id="image" name="image">
                    </div>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Button to Open the Modal for Event -->
    <button type="button"
        class="px-4 py-2 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600 focus:outline-none focus:bg-green-600"
        @click="showEventModal = true">
        Buat Event Baru
    </button>

    <!-- Modal for Event -->
    <div x-data="{ showEventModal: false }">
        <div x-show="showEventModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-4">
                    <h5 class="text-xl font-bold">Buat Event Baru</h5>
                    <button @click="showEventModal = false" class="text-xl">&times;</button>
                </div>
                <!-- Modal Body -->
                <form id="event-form" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block mb-2">Nama Event:</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-md" id="name" name="name"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block mb-2">Image:</label>
                        <input type="file" class="border rounded-md" id="image" name="image">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block mb-2">Content:</label>
                        <textarea class="w-full px-3 py-2 border rounded-md" id="content" name="content" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block mb-2">Tanggal:</label>
                        <input type="date" class="w-full px-3 py-2 border rounded-md" id="date" name="date"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="location" class="block mb-2">Lokasi:</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-md" id="location" name="location"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="locationUrl" class="block mb-2">URL Lokasi:</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-md" id="locationUrl"
                            name="locationUrl">
                    </div>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
</x-layouts>
