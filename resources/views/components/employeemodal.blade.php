<!-- Modal -->
@props(['modal_type' => 'fade', 'modal_size' => 'modal-lg', 'icon', 'modal_mode', 'modal_title'])
<div {{ $attributes->merge(['class' => 'modal ' . $modal_type]) }}>
  <div class="modal-dialog {{ $modal_size }} {{ $modal_mode ?? '' }}">

    <div class="modal-content">
      <div class="modal-header">

        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="{{ $icon ?? '' }}"></i> {{ $modal_title }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary ripple-btn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="fx-btn ripple-btn color-success">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
