<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pix.exchange/api/auth/v1/getQRCode',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"amount" : 50,"reference":"Test reference"}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTFkZGVmNTE0M2FmODQ3ODg4Yjc1NGM3YWFkZWU0NWRhZTYxY2Y2MDUwNmI2NTg5ZjJkM2FjMmQzNTRiZDhhYzM4NDEyMzNmZjk4OTkyOWIiLCJpYXQiOjE2Mzg5ODQxMTQsIm5iZiI6MTYzODk4NDExNCwiZXhwIjoxNjcwNTIwMTE0LCJzdWIiOiIyODIiLCJzY29wZXMiOltdfQ.KphqhNLKsQvOINKJjB1CugPkIYRH7WHRBGsWdhyBlbiRYoH6mMrczxnUrTJ1uLChU-v3H-0iwk2lpMFgPnrxYG-wfcD2ccrzU6MgVPmRa3d9ebkZD0GmV4grpOiRwBTjHzrlGYN6Nqn3YgkfxZ2dTZ4LOU9OrP3uOxyi4C7LSZ6RDcLqbMmC4dm0l0ldAAxgF-R4JzbbtL06NEdBO3tBf1-zwT_HfsloJP7pHej_mlAVWnU_BpXXpRZJEajco2pGqDIhSPyDmx5KmNrWH6M5yPVo9ohtOBKwJpf7jq3ONzsDpAUv3iEaJvISJQJ586-WagxT_v2Nwb2rGQbZ_hjuQD0XyhukWtJRrns5b85SErhNv9MyZ3gqOtptBDanrUtjtLSLBTKO4OxAhAOZQZ77E-wFEZ52gt_-SCxRIfPPebUBAwA3TIO8T7cId5k4NDVSD6XKKwK9oDM6jDVOUnNgod4JVPYxAZPyua6oQ8zcr_km8gwz5VIE9T1f60_W4osOtGd3qUduhaO9Xbb1Hlr43QlaeooXvN6ofjO2xj-79vQ6kE_x5XSjnf8pwTCNLoBsqP5Yk0tg2OV1_lTTSAGPMQR5NAlrxunUHEosySwjgJ1S6OXnwxLhrRPg0hnWFTqC3F4DjXQ_6TBuud0MnyC-HCW7buEEefAX_R7GXWDhr78',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
