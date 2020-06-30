@php
  error_reporting(0);
  $pins = get_option_field('pins');
  $pinsArray = [];
  foreach ($pins as $pin) {
      $pinObject = '';
      $pinObject->icon = $pin['icon']['url'];
      $pinObject->pin = $pin['pin'];
      $pinObject->content = $pin['tooltip'];
      array_push($pinsArray, $pinObject);
  }
  $pinsJSON = json_encode($pinsArray);
@endphp

<div class="map" id="google-map"  data-aos="fade-in" google-map data-pins="{{ $pinsJSON }}"></div>