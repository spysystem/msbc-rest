<?php
/**
 * SpyInsertPostCodeCodeUnitApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Microsoft Business Center API
 *
 * The Microsoft Business Center API is a RESTful API that provides an interface to the Microsoft Business Center service.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\MsbcRestClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
#region SPY Code
use GuzzleHttp\Cookie\CookieJar;
#endregion
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Spy\MsbcRestClient\ApiException;
use Spy\MsbcRestClient\Configuration;
use Spy\MsbcRestClient\HeaderSelector;
use Spy\MsbcRestClient\ObjectSerializer;

/**
 * SpyInsertPostCodeCodeUnitApi Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SpyInsertPostCodeCodeUnitApi
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
     * @var int Host index
     */
    protected $hostIndex;

	#region SPY Code
	protected $bXDebugOnInstance	= false;
	protected $bXDebugOnNextRequest;

	/**
	 * @param bool $bXDebugOnInstance
	 * @return $this
	 */
	public function setXDebugOnInstance(bool $bXDebugOnInstance)
	{
		$this->bXDebugOnInstance	= $bXDebugOnInstance;

		return $this;
	}

	/**
	 * @return $this
	 */
	public function setXDebugOnNextRequest()
	{
		$this->bXDebugOnNextRequest	= true;

		return $this;
	}

	/**
	 * Gets the OpenAPI Spec Version
	 *
	 * @return string
	 */
	public static function getSpecVersion()
	{
		return '1.0.0';
	}
	#endregion

    /**
    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'insertPostCode' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation insertPostCode
     *
     * This operation contains host(s) defined in the OpenAPI spec. Use 'hostIndex' to select the host.
     * if needed, use the 'variables' parameter to pass variables to the host.
     * URL: https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/ODataV4
     *  Variables:
     *    - tenantID: Tenant ID
     *    - environment: Environment: something like Production or Sandbox
     *
     * @param  string $company Company ID (required)
     * @param  \Spy\MsbcRestClient\Model\SpyInsertPostCode $spy_insert_post_code spy_insert_post_code (required)
     * @param  null|int $hostIndex Host index. Defaults to null. If null, then the library will use $this->hostIndex instead
     * @param  array $variables Associative array of variables to pass to the host. Defaults to empty array.
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['insertPostCode'] to see the possible values for this operation
     *
     * @throws \Spy\MsbcRestClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function insertPostCode($company, $spy_insert_post_code, ?int $hostIndex = null, array $variables = [], string $contentType = self::contentTypes['insertPostCode'][0])
    {
        $this->insertPostCodeWithHttpInfo($company, $spy_insert_post_code, $hostIndex, $variables, $contentType);
    }

    /**
     * Operation insertPostCodeWithHttpInfo
     *
     * This operation contains host(s) defined in the OpenAPI spec. Use 'hostIndex' to select the host.
     * if needed, use the 'variables' parameter to pass variables to the host.
     * URL: https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/ODataV4
     *  Variables:
     *    - tenantID: Tenant ID
     *    - environment: Environment: something like Production or Sandbox
     *
     * @param  string $company Company ID (required)
     * @param  \Spy\MsbcRestClient\Model\SpyInsertPostCode $spy_insert_post_code (required)
     * @param  null|int $hostIndex Host index. Defaults to null. If null, then the library will use $this->hostIndex instead
     * @param  array $variables Associative array of variables to pass to the host. Defaults to empty array.
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['insertPostCode'] to see the possible values for this operation
     *
     * @throws \Spy\MsbcRestClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function insertPostCodeWithHttpInfo($company, $spy_insert_post_code, ?int $hostIndex = null, array $variables = [], string $contentType = self::contentTypes['insertPostCode'][0])
    {
        $request = $this->insertPostCodeRequest($company, $spy_insert_post_code, $hostIndex, $variables, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Spy\MsbcRestClient\Model\AuthenticateErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Spy\MsbcRestClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation insertPostCodeAsync
     *
     * This operation contains host(s) defined in the OpenAPI spec. Use 'hostIndex' to select the host.
     * if needed, use the 'variables' parameter to pass variables to the host.
     * URL: https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/ODataV4
     *  Variables:
     *    - tenantID: Tenant ID
     *    - environment: Environment: something like Production or Sandbox
     *
     * @param  string $company Company ID (required)
     * @param  \Spy\MsbcRestClient\Model\SpyInsertPostCode $spy_insert_post_code (required)
     * @param  null|int $hostIndex Host index. Defaults to null. If null, then the library will use $this->hostIndex instead
     * @param  array $variables Associative array of variables to pass to the host. Defaults to empty array.
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['insertPostCode'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertPostCodeAsync($company, $spy_insert_post_code, ?int $hostIndex = null, array $variables = [], string $contentType = self::contentTypes['insertPostCode'][0])
    {
        return $this->insertPostCodeAsyncWithHttpInfo($company, $spy_insert_post_code, $hostIndex, $variables, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation insertPostCodeAsyncWithHttpInfo
     *
     * This operation contains host(s) defined in the OpenAPI spec. Use 'hostIndex' to select the host.
     * if needed, use the 'variables' parameter to pass variables to the host.
     * URL: https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/ODataV4
     *  Variables:
     *    - tenantID: Tenant ID
     *    - environment: Environment: something like Production or Sandbox
     *
     * @param  string $company Company ID (required)
     * @param  \Spy\MsbcRestClient\Model\SpyInsertPostCode $spy_insert_post_code (required)
     * @param  null|int $hostIndex Host index. Defaults to null. If null, then the library will use $this->hostIndex instead
     * @param  array $variables Associative array of variables to pass to the host. Defaults to empty array.
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['insertPostCode'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function insertPostCodeAsyncWithHttpInfo($company, $spy_insert_post_code, ?int $hostIndex = null, array $variables = [], string $contentType = self::contentTypes['insertPostCode'][0])
    {
        $returnType = '';
        $request = $this->insertPostCodeRequest($company, $spy_insert_post_code, $hostIndex, $variables, $contentType);

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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'insertPostCode'
     *
    * This operation contains host(s) defined in the OpenAPI spec. Use 'hostIndex' to select the host.
    * if needed, use the 'variables' parameter to pass variables to the host.
     * URL: https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/ODataV4
     *  Variables:
    *    - tenantID: Tenant ID
    *    - environment: Environment: something like Production or Sandbox
     *
     * @param  string $company Company ID (required)
     * @param  \Spy\MsbcRestClient\Model\SpyInsertPostCode $spy_insert_post_code (required)
     * @param  null|int $hostIndex Host index. Defaults to null. If null, then the library will use $this->hostIndex instead
     * @param  array $variables Associative array of variables to pass to the host. Defaults to empty array.
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['insertPostCode'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function insertPostCodeRequest($company, $spy_insert_post_code, ?int $hostIndex = null, array $variables = [], string $contentType = self::contentTypes['insertPostCode'][0])
    {

        // verify the required parameter 'company' is set
        if ($company === null || (is_array($company) && count($company) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company when calling insertPostCode'
            );
        }

        // verify the required parameter 'spy_insert_post_code' is set
        if ($spy_insert_post_code === null || (is_array($spy_insert_post_code) && count($spy_insert_post_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $spy_insert_post_code when calling insertPostCode'
            );
        }


        $resourcePath = '/SpyInsertPostCode_InsertPostCode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $company,
            'company', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($spy_insert_post_code)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($spy_insert_post_code));
            } else {
                $httpBody = $spy_insert_post_code;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
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

        # Preserve the original behavior of server indexing.
        if ($hostIndex === null) {
            $hostIndex = $this->hostIndex;
        }

        $hostSettings = $this->getHostSettingsForinsertPostCode();

        if ($hostIndex < 0 || $hostIndex >= count($hostSettings)) {
            throw new \InvalidArgumentException("Invalid index {$hostIndex} when selecting the host. Must be less than ".count($hostSettings));
        }
        $operationHost = Configuration::getHostString($hostSettings, $hostIndex, $variables);
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Returns an array of host settings for Operation insertPostCode
     *
     * @return array an array of host settings
     */
    protected function getHostSettingsForinsertPostCode(): array
    {
        return [
            [
                "url" => "https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/ODataV4",
                "description" => "URL for code unit access to the Microsoft Business Center API.",
                "variables" => [
                    "tenantID" => [
                    "description" => "Tenant ID",
                    "default_value" => "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                    ],
                    "environment" => [
                    "description" => "Environment: something like Production or Sandbox",
                    "default_value" => "Production",
                    ]
                ]
            ]
        ];
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

		#region SPY Code
		$options[RequestOptions::HEADERS]	= [
			'X-OpenAPISpecVersion'	=> '1.0.0',
		];
		$bEnableXDebug	= $this->bXDebugOnNextRequest;

		if($bEnableXDebug === null)
		{
			$bEnableXDebug	= $this->bXDebugOnInstance;
		}

		$this->bXDebugOnNextRequest	= null;

		if($bEnableXDebug)
		{
			if(preg_match('/^(?:https?:\/\/)?([^\/:]+\.[^\/:]+)/i', $this->getConfig()->getHost(), $arrMatches) === 1)
			{
				$options['cookies'] = CookieJar::fromArray(
					[
						'XDEBUG_SESSION'	=> 'PHPSTORM',
					],
					$arrMatches[1]
				);
			}
		}
		#endregion

        return $options;
    }
}
