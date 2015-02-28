<?php

  require_once 'google-api-php-client-master/autoload.php'; // or wherever autoload.php is located

  $client = new Google_Client();
  $client->setApplicationName("SIRM");
  $client->setDeveloperKey("YOUR_APP_KEY");

  $service = new Google_Service_Books($client);
  $optParams = array('filter' => 'free-ebooks');
  $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

  foreach ($results as $item) {
    echo $item['volumeInfo']['title'], "<br /> \n";
  }
?>