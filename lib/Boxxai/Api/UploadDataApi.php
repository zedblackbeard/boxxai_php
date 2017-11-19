<?php
    

namespace Boxxai\Api;

use \Boxxai\ApiClient;
use \Boxxai\ApiException;
use \Boxxai\Configuration;
use \Boxxai\ObjectSerializer;

/**
 * UploadDataApi Class Doc Comment
 *
 * @category Class
 * @package  Boxxai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadDataApi
{
    /**
     * API Client
     *
     * @var \Boxxai\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Boxxai\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Boxxai\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }
echo "in boxx ai";
        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Boxxai\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Boxxai\ApiClient $apiClient set the API client
     *
     * @return UploadDataApi
     */
    public function setApiClient(\Boxxai\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation apiUploadCustomerPut
     *
     * 
     *
     * @param \Boxxai\Model\UploadCustomerRequest $request_data request data (required)
     * @throws \Boxxai\ApiException on non-2xx response
     * @return \Boxxai\Model\UploadOkResponse
     */
    public function apiUploadCustomerPut($request_data)
    {
        list($response) = $this->apiUploadCustomerPutWithHttpInfo($request_data);
        return $response;
    }

    /**
     * Operation apiUploadCustomerPutWithHttpInfo
     *
     * 
     *
     * @param \Boxxai\Model\UploadCustomerRequest $request_data request data (required)
     * @throws \Boxxai\ApiException on non-2xx response
     * @return array of \Boxxai\Model\UploadOkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiUploadCustomerPutWithHttpInfo($request_data)
    {
        // verify the required parameter 'request_data' is set
        if ($request_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request_data when calling apiUploadCustomerPut');
        }
        // parse inputs
        $resourcePath = "/api/upload/customer/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request_data)) {
            $_tempBody = $request_data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Boxxai\Model\UploadOkResponse',
                '/api/upload/customer/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Boxxai\Model\UploadOkResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\UploadOkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation apiUploadProductPut
     *
     * 
     *
     * @param \Boxxai\Model\UploadProductRequest $request_data request data (required)
     * @throws \Boxxai\ApiException on non-2xx response
     * @return \Boxxai\Model\UploadOkResponse
     */
    public function apiUploadProductPut($request_data)
    {
        list($response) = $this->apiUploadProductPutWithHttpInfo($request_data);
        return $response;
    }

    /**
     * Operation apiUploadProductPutWithHttpInfo
     *
     * 
     *
     * @param \Boxxai\Model\UploadProductRequest $request_data request data (required)
     * @throws \Boxxai\ApiException on non-2xx response
     * @return array of \Boxxai\Model\UploadOkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiUploadProductPutWithHttpInfo($request_data)
    {
        // verify the required parameter 'request_data' is set
        if ($request_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request_data when calling apiUploadProductPut');
        }
        // parse inputs
        $resourcePath = "/api/upload/product/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request_data)) {
            $_tempBody = $request_data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Boxxai\Model\UploadOkResponse',
                '/api/upload/product/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Boxxai\Model\UploadOkResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\UploadOkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation apiUploadTransactionPut
     *
     * 
     *
     * @param \Boxxai\Model\UploadTransactionRequest $request_data request data (required)
     * @throws \Boxxai\ApiException on non-2xx response
     * @return \Boxxai\Model\UploadOkResponse
     */
    public function apiUploadTransactionPut($request_data)
    {
        list($response) = $this->apiUploadTransactionPutWithHttpInfo($request_data);
        return $response;
    }

    /**
     * Operation apiUploadTransactionPutWithHttpInfo
     *
     * 
     *
     * @param \Boxxai\Model\UploadTransactionRequest $request_data request data (required)
     * @throws \Boxxai\ApiException on non-2xx response
     * @return array of \Boxxai\Model\UploadOkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiUploadTransactionPutWithHttpInfo($request_data)
    {
        // verify the required parameter 'request_data' is set
        if ($request_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request_data when calling apiUploadTransactionPut');
        }
        // parse inputs
        $resourcePath = "/api/upload/transaction/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request_data)) {
            $_tempBody = $request_data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Boxxai\Model\UploadOkResponse',
                '/api/upload/transaction/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Boxxai\Model\UploadOkResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\UploadOkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Boxxai\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
