<?php
/**
 * ShipmentsApi
 * PHP version 5
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * Supplier API description... <br /><br /> Open [OpenAPI.json](doc.json).
 *
 * OpenAPI spec version: 1.1.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Emesa\PartnerPlatform\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Emesa\PartnerPlatform\ApiException;
use Emesa\PartnerPlatform\Configuration;
use Emesa\PartnerPlatform\HeaderSelector;
use Emesa\PartnerPlatform\ObjectSerializer;

/**
 * ShipmentsApi Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listOrderShipments
     *
     * @param  string $market_order_id market_order_id (required)
     *
     * @throws \Emesa\PartnerPlatform\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Emesa\PartnerPlatform\Model\ShipmentDto[]
     */
    public function listOrderShipments($market_order_id)
    {
        list($response) = $this->listOrderShipmentsWithHttpInfo($market_order_id);
        return $response;
    }

    /**
     * Operation listOrderShipmentsWithHttpInfo
     *
     * @param  string $market_order_id (required)
     *
     * @throws \Emesa\PartnerPlatform\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Emesa\PartnerPlatform\Model\ShipmentDto[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listOrderShipmentsWithHttpInfo($market_order_id)
    {
        $returnType = '\Emesa\PartnerPlatform\Model\ShipmentDto[]';
        $request = $this->listOrderShipmentsRequest($market_order_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Emesa\PartnerPlatform\Model\ShipmentDto[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Emesa\PartnerPlatform\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listOrderShipmentsAsync
     *
     * 
     *
     * @param  string $market_order_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listOrderShipmentsAsync($market_order_id)
    {
        return $this->listOrderShipmentsAsyncWithHttpInfo($market_order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listOrderShipmentsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $market_order_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listOrderShipmentsAsyncWithHttpInfo($market_order_id)
    {
        $returnType = '\Emesa\PartnerPlatform\Model\ShipmentDto[]';
        $request = $this->listOrderShipmentsRequest($market_order_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listOrderShipments'
     *
     * @param  string $market_order_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listOrderShipmentsRequest($market_order_id)
    {
        // verify the required parameter 'market_order_id' is set
        if ($market_order_id === null || (is_array($market_order_id) && count($market_order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $market_order_id when calling listOrderShipments'
            );
        }

        $resourcePath = '/supplier-api/v1/orders/{marketOrderId}/shipments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($market_order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'marketOrderId' . '}',
                ObjectSerializer::toPathValue($market_order_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation putOrderShipment
     *
     * @param  string $market_order_id market_order_id (required)
     * @param  string $supplier_shipment_id supplier_shipment_id (required)
     * @param  \Emesa\PartnerPlatform\Model\PutShipmentRequest $body Input data (optional)
     *
     * @throws \Emesa\PartnerPlatform\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function putOrderShipment($market_order_id, $supplier_shipment_id, $body = null)
    {
        $this->putOrderShipmentWithHttpInfo($market_order_id, $supplier_shipment_id, $body);
    }

    /**
     * Operation putOrderShipmentWithHttpInfo
     *
     * @param  string $market_order_id (required)
     * @param  string $supplier_shipment_id (required)
     * @param  \Emesa\PartnerPlatform\Model\PutShipmentRequest $body Input data (optional)
     *
     * @throws \Emesa\PartnerPlatform\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function putOrderShipmentWithHttpInfo($market_order_id, $supplier_shipment_id, $body = null)
    {
        $returnType = '';
        $request = $this->putOrderShipmentRequest($market_order_id, $supplier_shipment_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Emesa\PartnerPlatform\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Emesa\PartnerPlatform\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Emesa\PartnerPlatform\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Emesa\PartnerPlatform\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putOrderShipmentAsync
     *
     * 
     *
     * @param  string $market_order_id (required)
     * @param  string $supplier_shipment_id (required)
     * @param  \Emesa\PartnerPlatform\Model\PutShipmentRequest $body Input data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putOrderShipmentAsync($market_order_id, $supplier_shipment_id, $body = null)
    {
        return $this->putOrderShipmentAsyncWithHttpInfo($market_order_id, $supplier_shipment_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putOrderShipmentAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $market_order_id (required)
     * @param  string $supplier_shipment_id (required)
     * @param  \Emesa\PartnerPlatform\Model\PutShipmentRequest $body Input data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putOrderShipmentAsyncWithHttpInfo($market_order_id, $supplier_shipment_id, $body = null)
    {
        $returnType = '';
        $request = $this->putOrderShipmentRequest($market_order_id, $supplier_shipment_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'putOrderShipment'
     *
     * @param  string $market_order_id (required)
     * @param  string $supplier_shipment_id (required)
     * @param  \Emesa\PartnerPlatform\Model\PutShipmentRequest $body Input data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putOrderShipmentRequest($market_order_id, $supplier_shipment_id, $body = null)
    {
        // verify the required parameter 'market_order_id' is set
        if ($market_order_id === null || (is_array($market_order_id) && count($market_order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $market_order_id when calling putOrderShipment'
            );
        }
        // verify the required parameter 'supplier_shipment_id' is set
        if ($supplier_shipment_id === null || (is_array($supplier_shipment_id) && count($supplier_shipment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $supplier_shipment_id when calling putOrderShipment'
            );
        }

        $resourcePath = '/supplier-api/v1/orders/{marketOrderId}/shipments/{supplierShipmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($market_order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'marketOrderId' . '}',
                ObjectSerializer::toPathValue($market_order_id),
                $resourcePath
            );
        }
        // path params
        if ($supplier_shipment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'supplierShipmentId' . '}',
                ObjectSerializer::toPathValue($supplier_shipment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
