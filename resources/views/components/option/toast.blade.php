@php
    if($variant == 'success')$color = '#009a6e';
    if($variant == 'danger')$color = '#f43f5e';
    if($variant == 'info')$color = '#2563eb';
    if($variant == 'warning')$color = '#ca8a04';
@endphp
<script>
    Toastify({
        text: "{{ $message }}",
        close: true,
        style: {
            background: "{{ $color }}"
        },
        progressBar: true,
        duration: 3000,
    }).showToast();
</script>
