<x-layouts title="Home">
    <h1 class="text-4xl font-bold">Halaman Home</h1>
    <br>
    <p class="font-semibold">Selamat Datang Mas {{ Auth::user()->username }}!</p>

    <p>Coba Keluar Mas {{ Auth::user()->username }}!</p>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
</x-layouts>
