<!-- Modal -->
@props(['modal_type'=>'fade', 'modal_size'=>'modal-lg', 'icon','modal_mode', 'modal_title', 'buttons'=>'false'])
<div {{ $attributes->merge(['class' => 'modal '. $modal_type]) }}>
  <div class="modal-dialog {{$modal_size}} {{$modal_mode ?? ''}}">

    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title fs-5 custom-heading" id="exampleModalLabel"><i class="{{$icon ?? ''}}"></i> {{$modal_title}}</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" style="contain: content;">
      <div class="bar d-none">
        <div></div>
      </div>

         {{$slot}}
        </div>
      
      <div class="modal-footer">
        @if ($buttons) 
        <button type="button" class="fx-btn ripple-btn color-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="fx-btn ripple-btn color-success">Save</button>
        @else
        test
        @endif
      </div>
    </div>
  </div>
</div>
