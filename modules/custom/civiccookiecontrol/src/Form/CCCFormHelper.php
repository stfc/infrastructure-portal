<?php


namespace Drupal\civiccookiecontrol\Form;


use Drupal\Component\Serialization\Json;
use GuzzleHttp\Exception\RequestException;

class CCCFormHelper {

  private $type;
  private $title;
  private $options;
  private $defaultValue;
  private $description;
  private $states;



  public static function validateApiKey($apiKey, $productType=NULL)
  {
    $ccc_licenses_type = ['COMMUNITY' => 'CookieControl%20Free', 'PRO' => 'CookieControl%20Single-Site', 'PRO_MULTISITE' => 'CookieControl%20Multi-Site'];

    if (!empty($productType)){
      if (self::checkValidity($apiKey, $ccc_licenses_type[$productType]))
        return $productType;
    }else {
      foreach ($ccc_licenses_type as $key => $licenseType) {
        if (self::checkValidity($apiKey, $licenseType))
          return $key;
      }
    }

    return false;
  }


  protected static function checkValidity($apiKey, $licenseType){
    $domain = \Drupal::request()->getHost();

    $client = \Drupal::httpClient();

    $queryString = '?d=' . $domain . '&p=' . $licenseType . '&v=' . \Drupal::config('civiccookiecontrol.settings')->get('civiccookiecontrol_api_key_version') . '&format=json&k=' . $apiKey;
    try {
      $request = $client->get("https://apikeys.civiccomputing.com/c/v" . $queryString);
      $respArray = Json::decode($request->getBody()->getContents());

      if ($respArray['valid'] == 1) {
        return TRUE;
      }
    } catch (RequestException $ex) {
      \Drupal::logger('civiccookiecontrol')->notice($ex->getMessage());
      return FALSE;
    }
    return FALSE;
  }
}
