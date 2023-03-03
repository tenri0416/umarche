<div>
    @if (empty($shop->filename))
        <img src="{{ asset('images/no_image.jpg') }}">
    @else
        <img src="{{ asset('storage/sbops/' . $shop->filename) }}">
    @endif
</div>
