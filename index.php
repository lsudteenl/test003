<?php

$request = new HttpRequest();
$request->setUrl('https://notify-api.line.me/api/notify');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'Postman-Token' => '10a88757-7c56-48f2-915f-0330f32ac265',
  'Cache-Control' => 'no-cache',
  'Authorization' => 'Bearer V3HChiiaa8fNbiNZO443971MHf43LEk0U1273mAcDYI',
  'Content-Type' => 'application/x-www-form-urlencoded',
  'content-type' => 'multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW'
));

$request->setBody('------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="message"

Ticket Complete
http://itsupport.carabao.co.th/helpdesk/tickets
------WebKitFormBoundary7MA4YWxkTrZu0gW--');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
/>
