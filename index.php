<?php

    require_once 'vendor/autoload.php';

  // Using https://github.com/firebase/php-jwt

  use \Firebase\JWT\JWT;

  $keyId = "4AmlirF2PdZ74qjN70065i01lgVBUwAzPFE9c3QU02scj4";
  $keySecret = "LS0tLS1CRUdJTiBSU0EgUFJJVkFURSBLRVktLS0tLQpNSUlFb3dJQkFBS0NBUUVBc2xhaDhLYlQzT1E3VkpKUHdLaTQ2V3NMRlB0RGlsWXhxN2RNcHBtY0pTV2NURy8wCmM3cWRQRzU5SmJMVDFJU2VzODlKa2NrTUdacXRncUpES1BNUEMvMEJudWlIWmVaL2Z1NzFLaSswOFVtaGhMVTYKL3QyVmFSZ2daSE94WXJseHh2bU9QV2czSU9KNno0TGVnVDB3NnRTZHBWS0VzSlJrSXYzeHlPWHg0OERJMks5aApiR010MXNMdS8wNXpZWHhVZENRYU5kL0RXeDhRZHB0M1dyeEk1MHdjYktRUitRZTI4ZTJrSm1FUVJ4cVI3V3d4CmZiLzF0WXJPYmMrOWFJRzJKaEFpd01jKzJxdHEwTk13eXlnMGptTW96OXRxMW5UUCtiWW5VMi9HUjAzUHBibTMKby9vY0NrVkt5T2x0Y0F6eSsrQmRySS9rWTNmM1FGS2txcC92dlFJREFRQUJBb0lCQUJvNkQxcTZ6aEdBSnhHSwo2dHVrZEgwdlZ0UGhGOCt5V1YrdGQwSlErTnVscWxTN2FqSFMwZWpmUHR4YWJqaWt3RW9sUSthQ3NKcmJXb1VKCm8rTFR5L1N4WXBtaURMZDVyR3BZYmdta05uSDlxQmxDSmNqeGdWV1JUTUk1R1c4eFlvQW1senFFcHdiWkI4S1kKdG13L09ZQnZnRGVkNlJHbTRRc2NXWUI0QUpqRHRCc1hjVmxyMGFVYWt1WkZZbWo4S2lMendtdzk0aHNEZW9Udwo4N1ZMNnBVd1ZhcTlEOUoxRnJMOEpncS8wT1NTZk4wWHI3anc3Q1A0OEIzaGFSTkYxb242aVgwL3pMM2djeU1pCjhpSE4yS0NlQ0N6UWpyckNGMldzelJLVmZlWjhaSW1rZlBySUpxZWE2NUdSVG9aYkNXbEdCMTlFMElSQS85U28KazdyMmZla0NnWUVBd1NUMHFwTjNrVjZZZVloNExuV1ZNdTBtdllCVWdPU2JEZlhLWnJMWkN5Vmk3NzZNMldlQQpqblM4YU80bzFLWkdPYk1sZ0IwT2FhVE9aa0VObFBpK29Bb2ZxUlIzK2N4WFFtMXFRVUdKaWdGN25rVy9SRkZkClpuWlVFMVJiTFVzUU1vc29ueEk0d0theWJQTHdMbEx2V2pLN2hPUnIwYTZSZjZXSXFseUkwdThDZ1lFQTdHQXQKeEY3ck5nWU5QYmMyNzJJeFVHZkJqK3QwckZBNW1NYjBBTFpZMitBZERaTVZ0L2huTTFMOWRsSmNKMU11Rlo5YQp6Z3dvV3N2cHQvR2xJSnY5UXRmM1pUbjBZRjZzR2tUQmRVZ1JCMWdWSngrdlhkYlRkckdsNVhvWk5ObFV2NGJOCjU4VEd5bDZYWjJsZDZZcWRKc2FBcmU0ZWNwNVYrR0pPN3pic09CTUNnWUJKaExtazNERWRJbmJEZkJEVERtclcKVWJMM1d3dlBiRFVoSVRnRDAzd09aQksrMHpkbDRhSHJsNy9INlMrZGtoVVZEWDN1d0NDbVVkZEcwT2hNbGtwcApQTEZFZU1nYVM0L0RkMGFFeEYrSUtueFZpSkwvZkVFaktWTmpjQzZzbE8vN2JVRHZHODZDZG5GZ1N6RGxVU2hPCm14VUp4ckRMeGJrWWIzZ1A4TjBiL1FLQmdRQzZab29RM2cwOEYvK2ZHSGtRdzIxQ0MrQWZQejFObVNJaWNWbi8KcWN4ZTc5ZlpXWkQ1OThCaVArS3l5UFgwNk9waGtMM0oyTnFGNTJIU2RaT1RLSS9LZzRhTFkrMXJoWnpRUmtJTQoyNXphSHNMbmpGdjljeWhrNUdoL2t3NkhsNDcyVGpiWHUxeE1QOVhEYmRycURTNHFZc1VjNDdkTkNjR2YwdDZPClU5QnAwd0tCZ0dpL1pRRXpsd0ZtZGFjVU9EL2NrY3djZXRUbVZEdjQ2bjZuU2lUK1c2T3dYcTJIakYyalJkUjgKZTlRc3N3a2ViOTM1a2ZjMDUzNTdTSzNROXNTcitESjlyc2dSeHFKY3RwYVF6MUp1QWovZWYxUWtkSUVyWEg4ZwpJNG9kWHNGaDV1UHRLVVlRMEp3UVNFRndtaGUyRDZDK2NhcnY3OUdBZ0F1V3QwRktiWnVsCi0tLS0tRU5EIFJTQSBQUklWQVRFIEtFWS0tLS0tCg";
  
  $payload = array(
  "sub" => "QrEdKbN01ZhbILkkHiKbZR2hna5F02f91Frucg5W8NsGM",    // A private Playback ID
  "aud" => "v",                           // v = video, t = thumbnail, g = gif.
  "exp" => time() + 600,                  // Expiry time in epoch - in this case now + 10 mins
  "kid" => $keyId
  );

  $jwt = JWT::encode($payload, base64_decode($keySecret), 'RS256');
?>

<video id="myVideo" controls width="800" height="500"></video>
<?php /*echo ($result->getData()->getPlaybackIds()[0]->getId());*/ ?>
<!-- Use HLS.js to support the HLS format in browsers. -->
<script src="https://cdn.jsdelivr.net/npm/hls.js@0.8.2"></script>
<script>
  (function(){
    // Replace with your asset's playback ID
    var playbackId = "QrEdKbN01ZhbILkkHiKbZR2hna5F02f91Frucg5W8NsGM";
    var token = "<?php echo $jwt ?>";

    //var playbackId = "ftiUuPkP6VV7YMvwHyGVGQ5jM6xgdCZWLQT1qLpj3KE";
    
    var url = "https://stream.mux.com/"+playbackId+".m3u8?token="+token;

    console.log(url);

    // HLS.js-specific setup code
    if (Hls.isSupported()) {
      var video = document.getElementById("myVideo");
      var hls = new Hls();
      hls.loadSource(url);
      hls.attachMedia(video);
    }
  })();
</script>