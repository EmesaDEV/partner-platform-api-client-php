# SwaggerClient-php

Documentation:<br>
- [OpenAPI.json](https://market.emesa.org/supplier-api/v1/doc.json).
- [Swagger UI Prod](https://market.emesa.org/supplier-api/v1/ui.html)
- [Swagger UI Sandbox](https://sandbox-market.emesa.org/supplier-api/v1/ui.html)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project.

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to your `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/EmesaDEV/partner-platform-api-client-php.git"
    }
  ],
  "require": {
    "emesa-dev/partner-platform-api-client-php": "^1.1.0"
  }
}
```

Then run `composer install`

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

We use [Keycloak](https://www.keycloak.org/) as an OAuth2 authentication provider.
Consider using this [package](https://github.com/stevenmaguire/oauth2-keycloak) to get a token from Keycloak.

Use the following example as a reference on how to use the API. The example shows how to create a Product (content),
and send an Offer (stock, pricing, shipping and target countries information) for the created Product.

To run the example, you can follow the [installation procedure](#installation--usage) and then require
the [oauth2-keycloak](https://github.com/stevenmaguire/oauth2-keycloak) package, that we use in the example.

```
composer require stevenmaguire/oauth2-keycloak
```

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

define('CLIENT_ID', getenv('CLIENT_ID') ?: 'YOUR_CLIENT_ID');
define('CLIENT_SECRET', getenv('CLIENT_SECRET') ?: 'YOUR_CLIENT_SECRET');
define('API_HOST', getenv('API_HOST') ?: 'https://sandbox-market.emesa.org');

$provider = new Stevenmaguire\OAuth2\Client\Provider\Keycloak([
    // Please check Swagger UI or OpenAPI doc.json for updates of the authServerUrl
    'authServerUrl'         => 'https://sso.partners.talpaecommerce.nl',
    'realm'                 => 'partners-sandbox',
    'clientId'              => CLIENT_ID,
    'clientSecret'          => CLIENT_SECRET,
]);
$accessToken = $provider->getAccessToken('client_credentials');
$token = $accessToken->getToken();

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setHost(API_HOST)
    ->setAccessToken($token);

$dictionaryApi = new Emesa\PartnerPlatform\Api\DictionaryApi(
    // If you want to use a custom http client, you can pass an instance of `GuzzleHttp\ClientInterface` to override
    // the default one. This is optional, a default instance of `GuzzleHttp\Client` is created by default.
    new GuzzleHttp\Client(),
    $config
);

$productsApi = new Emesa\PartnerPlatform\Api\ProductsApi(
    // Use the default http client created by the API
    null,
    $config
);

function fetchMarketplaceCategory(Emesa\PartnerPlatform\Api\DictionaryApi $dictionaryApi)
{
    $limit = 20; // int | Maximum number of entities to return
    $offset = 0; // int | Skip first N items

    try {
        $result = $dictionaryApi->listCategories($limit, $offset);
        foreach ($result->getData() as $category) {
            if ($category->getCanContainProducts()) {
                return $category->getMarketCategoryId();
            }
        }
    } catch (Exception $e) {
        // Exception when calling DictionaryApi->listCategories
        throw $e;
    }

    throw new \RuntimeException('Failed to find a category ID');
}

function createProduct(Emesa\PartnerPlatform\Api\ProductsApi $productsApi, $supplierProductId, $marketCategoryId)
{
    try {
        $putProductRequest = new Emesa\PartnerPlatform\Model\PutProductRequest();
        $putProductRequest->setEan('1111111111116');
        $putProductRequest->setRetailPriceInCents(2599);
        $putProductRequest->setMarketCategoryId($marketCategoryId);
        $putProductRequest->setMainImageUrl('https://via.placeholder.com/500');

        $nlNlContent = new Emesa\PartnerPlatform\Model\ProductContentDto();
        $nlNlContent->setName('Test product');
        $nlNlContent->setWhatIsToBeSold([
            'Draadloze koptelefoon van Hyundai Electronics (modelnummer: HHA32101)',
            'Modelnaam: Reliance',
            'Inclusief oplaadkabel en audio-kabel',
        ]);
        $nlNlContent->setProductSpecifications([
            'Afspeeltijd: 18 uur',
            'Bluetooth-bereik: 10 m',
            'Snel opladen: 1 uur luisteren na slechts 10 minuten opladen',
        ]);

        $translations = new Emesa\PartnerPlatform\Model\ProductContentTranslationsDto();
        $translations->setNlNl($nlNlContent);

        $putProductRequest->setTranslations($translations);

        $productsApi->putProduct($supplierProductId, $putProductRequest);
    } catch (Exception $e) {
        // Exception when calling ProductsApi->putProduct
        throw $e;
    }
}

function createOffer(Emesa\PartnerPlatform\Api\ProductsApi $productsApi, $supplierProductId)
{
    $shippingClass = Emesa\PartnerPlatform\Model\ProductOfferDto::MARKET_SHIPPING_CLASS_ID_S;
    $putOfferRequest = new Emesa\PartnerPlatform\Model\ProductOfferDto();
    $putOfferRequest->setTargetPriceInCents(999);
    $putOfferRequest->setStock(15);
    $putOfferRequest->setMarketShippingClassId($shippingClass);
    $putOfferRequest->setTargetCountryCodes(['NL']);

    try {
        $productsApi->putOffer($supplierProductId, $putOfferRequest);
    } catch (Exception $e) {
        // Exception when calling ProductsApi->putOffer
        throw $e;
    }
}

// For this example we fetch the first category that can contain products
$marketCategoryId = fetchMarketplaceCategory($dictionaryApi);

createProduct($productsApi, 'my-product-id', $marketCategoryId);
createOffer($productsApi, 'my-product-id');
```

## ClientCredentials

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: You can find the URL in Swagger UI
