<x-layouts title="Dashboard">
    <x-toast name="success" />
    <x-toast name="danger" />

    <h1 class="text-4xl font-bold">Dashboard</h1>
    <br>
    <p class="font-semibold">Selamat Datang Mas {{ Auth::user()->username }}! di Dashboard</p>

    <div x-data="{ showEventModal: false, showEditEventModal: false, event: null }">
        <button @click="showEventModal = true"
            class="px-4 py-2 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
            Buat Event Baru
        </button>

        <!-- Modal for Creating Event -->
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

        @foreach ($users as $user)
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-2">User: {{ $user->username }}</h2>

                <div class="mb-4 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Event</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if ($user->events->isEmpty())
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap italic text-gray-500">Belum ada event
                                        yang dibuat oleh pengguna ini.</td>
                                    <td class="px-6 py-4 whitespace-nowrap"></td>
                                </tr>
                            @else
                                @foreach ($user->events as $event)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $event->content }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button
                                                @click="event = {{ json_encode($event) }}; showEditEventModal = true"
                                                class="text-indigo-600 hover:text-indigo-900">Update</button>

                                            <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?')"
                                                    class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Modal for Editing Event -->
                                <div x-show="showEditEventModal"
                                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                                    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                                        <!-- Modal Header -->
                                        <div class="flex justify-between items-center mb-4">
                                            <h5 class="text-xl font-bold">Edit Event</h5>
                                            <button @click="showEditEventModal = false" class="text-xl">&times;</button>
                                        </div>
                                        <!-- Modal Body -->
                                        <form id="edit-event-form"
                                            :action="`{{ route('events.update', '') }}/${event.id}`" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-4">
                                                <label for="edit-name" class="block mb-2">Nama Event:</label>
                                                <input type="text" class="w-full px-3 py-2 border rounded-md"
                                                    id="edit-name" name="name" x-model="event.name" required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="edit-image" class="block mb-2">Image:</label>
                                                <input type="file" class="border rounded-md" id="edit-image"
                                                    name="image">
                                                <img :src="`/storage/img/${event.image}`" alt="Event Image"
                                                    class="mt-4">
                                            </div>
                                            <div class="mb-4">
                                                <label for="edit-content" class="block mb-2">Content:</label>
                                                <textarea class="w-full px-3 py-2 border rounded-md" id="edit-content" name="content" x-model="event.content"
                                                    required></textarea>
                                            </div>
                                            <div class="mb-4">
                                                <label for="edit-date"
                                                    class="block text-sm font-medium text-gray-700">Date &
                                                    Time</label>
                                                <input type="datetime-local"
                                                    class="w-full px-3 py-2 border rounded-md" id="edit-date"
                                                    name="date" x-model="event.date" required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="edit-location" class="block mb-2">Lokasi:</label>
                                                <input type="text" class="w-full px-3 py-2 border rounded-md"
                                                    id="edit-location" name="location" x-model="event.location"
                                                    required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="edit-locationUrl" class="block mb-2">URL
                                                    Lokasi:</label>
                                                <input type="text" class="w-full px-3 py-2 border rounded-md"
                                                    id="edit-locationUrl" name="locationUrl"
                                                    x-model="event.locationUrl">
                                            </div>
                                            <button type="submit"
                                                class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach

    </div>
</x-layouts>
