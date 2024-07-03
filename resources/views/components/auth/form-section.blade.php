<section class="mt-auto mb-0">
    <form action="{{ $action }}" method="POST">
        @csrf
        {{ $slot }}
    </form>
</section>
