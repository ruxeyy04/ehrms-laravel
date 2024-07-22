<!-- Notify sidebar -->
<div class="fx-notify-bar-overlay"></div>
<div class="fx-notify-bar">
  <div class="fx-bar-title">
    <h6>Notifications<span class="label">0</span></h6>
    <a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
  </div>
  <div class="fx-bar-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert" type="button" role="tab" aria-controls="alert" aria-selected="true">
          Alert
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
          Messages
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button" role="tab" aria-controls="log" aria-selected="false">
          Log
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
        <div class="fx-alert-list">

        </div>
      </div>
      <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
        <div class="fx-message-list">

        </div>
      </div>
      <div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
        <div class="fx-activity-list activity-list">

        </div>
      </div>
    </div>
  </div>
</div>
