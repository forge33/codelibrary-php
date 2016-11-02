<?php
/**
 * SubscribeResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zuora API Reference
 *
 * # Introduction  Welcome to the reference for the Zuora REST API!  <a href=\"http://en.wikipedia.org/wiki/REST_API\" target=\"_blank\">REST</a> is a web-service protocol that lends itself to rapid development by using everyday HTTP and JSON technology.  The Zuora REST API provides a broad set of operations and resources that:  * Enable Web Storefront integration between your websites. * Support self-service subscriber sign-ups and account management. * Process revenue schedules through custom revenue rule models.  ## Endpoints  The Zuora REST services are provided via the following endpoints.  | Service                 | Base URL for REST Endpoints                                                                                                                                         | |-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------| | Production REST service | https://rest.zuora.com/v1                                                                                                                                           | | Sandbox REST service    | https://rest.apisandbox.zuora.com/v1                                                                                                                                |  The production service provides access to your live user data. The sandbox environment is a good place to test your code without affecting real-world data. To use it, you must be provisioned with a sandbox tenant - your Zuora representative can help with this if needed.  ## Accessing the API  If you have a Zuora tenant, you already have access the the API.  If you don't have a Zuora tenant, go to <a href=\"https://www.zuora.com/resource/zuora-test-drive\" target=\"_blank\">https://www.zuora.com/resource/zuora-test-drive</a> and sign up for a trial tenant. The tenant comes with seed data, such as a sample product catalog.   We recommend that you <a href=\"https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/Manage_Users/Create_an_API_User\" target=\"_blank\">create an API user</a> specifically for making API calls. Don't log in to the Zuora UI with this account. Logging in to the UI enables a security feature that periodically expires the account's password, which may eventually cause authentication failures with the API. Note that a user role does not have write access to Zuora REST services unless it has the API Write Access permission as described in those instructions.   # Authentication  There are three ways to authenticate:  * Use an authorization cookie. The cookie authorizes the user to make calls to the REST API for the duration specified in  **Administration > Security Policies > Session timeout**. The cookie expiration time is reset with this duration after every call to the REST API. To obtain a cookie, call the REST  `connections` resource with the following API user information:     *   ID     *   password     *   entity Id or entity name (Only for [Zuora Multi-entity](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity \"Multi-entity\"). See \"Entity Id and Entity Name\" below for more information.)  *   Include the following parameters in the request header, which re-authenticates the user with each request:     *   `apiAccessKeyId`     *   `apiSecretAccessKey`     *   `entityId` or `entityName` (Only for [Zuora Multi-entity](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity \"Multi-entity\"). See \"Entity Id and Entity Name\" below for more information.) *   For CORS-enabled APIs only: Include a 'single-use' token in the request header, which re-authenticates the user with each request. See below for more details.   ## Entity Id and Entity Name  The `entityId` and `entityName`  parameters are only used for  [Zuora Multi-entity](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity).  The  `entityId` parameter specifies the Id of the entity that you want to access. The `entityName` parameter specifies the [name of the entity](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity/B_Introduction_to_Entity_and_Entity_Hierarchy#Name_and_Display_Name \"Introduction to Entity and Entity Hierarchy\") that you want to access. Note that you must have permission to access the entity. You can get the entity Id and entity name through the REST GET Entities call.  You can specify either the  `entityId` or `entityName` parameter in the authentication to access and view an entity.  *   If both `entityId` and `entityName` are specified in the authentication, an error occurs.  *   If neither  `entityId` nor  `entityName` is specified in the authentication, you will log in to the entity in which your user account is created.   See [API User Authentication](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity/A_Overview_of_Multi-entity#API_User_Authentication \"Zuora Multi-entity\") for more information.  ## Token Authentication for CORS-Enabled APIs  The CORS mechanism enables REST API calls to Zuora to be made directly from your customer's browser, with all credit card and security information transmitted directly to Zuora. This minimizes your PCI compliance burden, allows you to implement advanced validation on your payment forms, and makes your payment forms look just like any other part of your website.  For security reasons, instead of using cookies, an API request via CORS uses **tokens** for authentication.  The token method of authentication is only designed for use with requests that must originate from your customer's browser; **it should not be considered a replacement to the existing cookie authentication** mechanism.  See [Zuora CORS REST ](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/G_CORS_REST \"Zuora CORS REST\")for details on how CORS works and how you can begin to implement customer calls to the Zuora REST APIs. See  [HMAC Signatures](/BC_Developers/REST_API/B_REST_API_reference/HMAC_Signatures \"HMAC Signatures\") for details on the HMAC method that returns the authentication token.    # Requests and Responses   ## Request IDs  As a general rule, when asked to supply a \"key\" for an account or subscription (accountKey, account-key, subscriptionKey, subscription-key), you can provide either the actual ID or the number of the entity.  ## HTTP Request Body  Most of the parameters and data accompanying your requests will be contained in the body of the HTTP request.  The Zuora REST API accepts JSON in the HTTP request body.  No other data format (e.g., XML) is supported.   ## Testing a Request  Use a third party client, such as Postman or Advanced REST Client, to test the Zuora REST API.  You can test the Zuora REST API from the Zuora sandbox or  production service. If connecting to the production service, bear in mind that you are working with your live production data, not sample data or test data.  ## Testing with Credit Cards  Sooner or later it will probably be necessary to test some transactions that involve credit cards. For suggestions on how to handle this, see [Going Live With Your Payment Gateway](https://knowledgecenter.zuora.com/CB_Billing/M_Payment_Gateways/C_Managing_Payment_Gateways/B_Going_Live_Payment_Gateways#Testing_with_Credit_Cards \"C_Zuora_User_Guides/A_Billing_and_Payments/M_Payment_Gateways/C_Managing_Payment_Gateways/B_Going_Live_Payment_Gateways#Testing_with_Credit_Cards\").       ## Error Handling  Responses and error codes are detailed in [Responses and errors](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/3_Responses_and_errors \"Responses and errors\").    # Pagination  When retrieving information (using GET methods), the optional `pageSize` query parameter sets the maximum number of rows to return in a response. The maximum is `40`; larger values are treated as `40`. If this value is empty or invalid, `pageSize` typically defaults to `10`.  The default value for the maximum number of rows retrieved can be overridden at the method level.  If more rows are available, the response will include a `nextPage` element, which contains a URL for requesting the next page.  If this value is not provided, no more rows are available. No \"previous page\" element is explicitly provided; to support backward paging, use the previous call.  ## Array Size  For data items that are not paginated, the REST API supports arrays of up to 300 rows.  Thus, for instance, repeated pagination can retrieve thousands of customer accounts, but within any account an array of no more than 300 rate plans is returned.   # API Versions  The Zuora REST API is in version control. Versioning ensures that Zuora REST API changes are backward compatible. Zuora uses a major and minor version nomenclature to manage changes. By specifying a version in a REST request, you can get expected responses regardless of future changes to the API.   ## Major Version  The major version number of the REST API appears in the REST URL. Currently, Zuora only supports the **v1** major version. For example,  `POST https://rest.zuora.com/v1/subscriptions` .   ## Minor Version  Zuora uses minor versions for the REST API to control small changes. For example, a field in a REST method is deprecated and a new field is used to replace it.   Some fields in the REST methods are supported as of minor versions. If a field is not noted with a minor version, this field is available for all minor versions. If a field is noted with a minor version, this field is in version control. You must specify the supported minor version in the request header to process without an error.   If a field is in version control, it is either with a minimum minor version or a maximum minor version, or both of them. You can only use this field with the minor version between the minimum and the maximum minor versions. For example, the  `invoiceCollect` field in the POST Subscription method is in version control and its maximum minor version is 189.0. You can only use this field with the minor version 189.0 or earlier.  The supported minor versions are not serial, see [Zuora REST API Minor Version History](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/Zuora_REST_API_Minor_Version_History \"Zuora REST API Minor Version History\") for the fields and their supported minor versions. In our REST API documentation, if a field or feature requires a minor version number, we note that in the field description.  You only need to specify the version number when you use the fields require a minor version. To specify the minor version, set the `zuora-version` parameter to the minor version number in the request header for the request call. For example, the `collect` field is in 196.0 minor version. If you want to use this field for the POST Subscription method, set the  `zuora-version` parameter to `196.0` in the request header. The `zuora-version` parameter is case sensitive.   For all the REST API fields, by default, if the minor version is not specified in the request header, Zuora will use the minimum minor version of the REST API to avoid breaking your integration.     # Zuora Object Model The following diagram presents a high-level view of the key Zuora objects. Click the image to open it in a new tab to resize it.  <a href=\"https://www.zuora.com/wp-content/uploads/2016/10/ZuoraERD-compressor-1.jpeg\" target=\"_blank\"><img src=\"https://www.zuora.com/wp-content/uploads/2016/10/ZuoraERD-compressor-1.jpeg\" alt=\"Zuora Object Model Diagram\"></a>
 *
 * OpenAPI spec version: 0.0.1
 * Contact: docs@zuora.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * SubscribeResult Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubscribeResult implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubscribeResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'account_number' => 'string',
        'charge_metrics_data' => '\Swagger\Client\Model\ChargeMetricsData',
        'errors' => '\Swagger\Client\Model\Error[]',
        'gateway_response' => 'string',
        'gateway_response_code' => 'string',
        'invoice_data' => '\Swagger\Client\Model\InvoiceData[]',
        'invoice_id' => 'string',
        'invoice_number' => 'string',
        'invoice_result' => '\Swagger\Client\Model\InvoiceResult',
        'payment_id' => 'string',
        'payment_transaction_number' => 'string',
        'subscription_id' => 'string',
        'subscription_number' => 'string',
        'success' => 'bool',
        'total_mrr' => 'double',
        'total_tcv' => 'double'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'account_id' => 'AccountId',
        'account_number' => 'AccountNumber',
        'charge_metrics_data' => 'ChargeMetricsData',
        'errors' => 'Errors',
        'gateway_response' => 'GatewayResponse',
        'gateway_response_code' => 'GatewayResponseCode',
        'invoice_data' => 'InvoiceData',
        'invoice_id' => 'InvoiceId',
        'invoice_number' => 'InvoiceNumber',
        'invoice_result' => 'InvoiceResult',
        'payment_id' => 'PaymentId',
        'payment_transaction_number' => 'PaymentTransactionNumber',
        'subscription_id' => 'SubscriptionId',
        'subscription_number' => 'SubscriptionNumber',
        'success' => 'Success',
        'total_mrr' => 'TotalMrr',
        'total_tcv' => 'TotalTcv'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'account_number' => 'setAccountNumber',
        'charge_metrics_data' => 'setChargeMetricsData',
        'errors' => 'setErrors',
        'gateway_response' => 'setGatewayResponse',
        'gateway_response_code' => 'setGatewayResponseCode',
        'invoice_data' => 'setInvoiceData',
        'invoice_id' => 'setInvoiceId',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_result' => 'setInvoiceResult',
        'payment_id' => 'setPaymentId',
        'payment_transaction_number' => 'setPaymentTransactionNumber',
        'subscription_id' => 'setSubscriptionId',
        'subscription_number' => 'setSubscriptionNumber',
        'success' => 'setSuccess',
        'total_mrr' => 'setTotalMrr',
        'total_tcv' => 'setTotalTcv'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'account_number' => 'getAccountNumber',
        'charge_metrics_data' => 'getChargeMetricsData',
        'errors' => 'getErrors',
        'gateway_response' => 'getGatewayResponse',
        'gateway_response_code' => 'getGatewayResponseCode',
        'invoice_data' => 'getInvoiceData',
        'invoice_id' => 'getInvoiceId',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_result' => 'getInvoiceResult',
        'payment_id' => 'getPaymentId',
        'payment_transaction_number' => 'getPaymentTransactionNumber',
        'subscription_id' => 'getSubscriptionId',
        'subscription_number' => 'getSubscriptionNumber',
        'success' => 'getSuccess',
        'total_mrr' => 'getTotalMrr',
        'total_tcv' => 'getTotalTcv'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['charge_metrics_data'] = isset($data['charge_metrics_data']) ? $data['charge_metrics_data'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['gateway_response'] = isset($data['gateway_response']) ? $data['gateway_response'] : null;
        $this->container['gateway_response_code'] = isset($data['gateway_response_code']) ? $data['gateway_response_code'] : null;
        $this->container['invoice_data'] = isset($data['invoice_data']) ? $data['invoice_data'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoice_result'] = isset($data['invoice_result']) ? $data['invoice_result'] : null;
        $this->container['payment_id'] = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['payment_transaction_number'] = isset($data['payment_transaction_number']) ? $data['payment_transaction_number'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['subscription_number'] = isset($data['subscription_number']) ? $data['subscription_number'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['total_mrr'] = isset($data['total_mrr']) ? $data['total_mrr'] : null;
        $this->container['total_tcv'] = isset($data['total_tcv']) ? $data['total_tcv'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets account_id
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param string $account_id 
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     * @param string $account_number 
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets charge_metrics_data
     * @return \Swagger\Client\Model\ChargeMetricsData
     */
    public function getChargeMetricsData()
    {
        return $this->container['charge_metrics_data'];
    }

    /**
     * Sets charge_metrics_data
     * @param \Swagger\Client\Model\ChargeMetricsData $charge_metrics_data 
     * @return $this
     */
    public function setChargeMetricsData($charge_metrics_data)
    {
        $this->container['charge_metrics_data'] = $charge_metrics_data;

        return $this;
    }

    /**
     * Gets errors
     * @return \Swagger\Client\Model\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     * @param \Swagger\Client\Model\Error[] $errors 
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets gateway_response
     * @return string
     */
    public function getGatewayResponse()
    {
        return $this->container['gateway_response'];
    }

    /**
     * Sets gateway_response
     * @param string $gateway_response 
     * @return $this
     */
    public function setGatewayResponse($gateway_response)
    {
        $this->container['gateway_response'] = $gateway_response;

        return $this;
    }

    /**
     * Gets gateway_response_code
     * @return string
     */
    public function getGatewayResponseCode()
    {
        return $this->container['gateway_response_code'];
    }

    /**
     * Sets gateway_response_code
     * @param string $gateway_response_code 
     * @return $this
     */
    public function setGatewayResponseCode($gateway_response_code)
    {
        $this->container['gateway_response_code'] = $gateway_response_code;

        return $this;
    }

    /**
     * Gets invoice_data
     * @return \Swagger\Client\Model\InvoiceData[]
     */
    public function getInvoiceData()
    {
        return $this->container['invoice_data'];
    }

    /**
     * Sets invoice_data
     * @param \Swagger\Client\Model\InvoiceData[] $invoice_data 
     * @return $this
     */
    public function setInvoiceData($invoice_data)
    {
        $this->container['invoice_data'] = $invoice_data;

        return $this;
    }

    /**
     * Gets invoice_id
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     * @param string $invoice_id 
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param string $invoice_number 
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_result
     * @return \Swagger\Client\Model\InvoiceResult
     */
    public function getInvoiceResult()
    {
        return $this->container['invoice_result'];
    }

    /**
     * Sets invoice_result
     * @param \Swagger\Client\Model\InvoiceResult $invoice_result 
     * @return $this
     */
    public function setInvoiceResult($invoice_result)
    {
        $this->container['invoice_result'] = $invoice_result;

        return $this;
    }

    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     * @param string $payment_id 
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets payment_transaction_number
     * @return string
     */
    public function getPaymentTransactionNumber()
    {
        return $this->container['payment_transaction_number'];
    }

    /**
     * Sets payment_transaction_number
     * @param string $payment_transaction_number 
     * @return $this
     */
    public function setPaymentTransactionNumber($payment_transaction_number)
    {
        $this->container['payment_transaction_number'] = $payment_transaction_number;

        return $this;
    }

    /**
     * Gets subscription_id
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     * @param string $subscription_id 
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets subscription_number
     * @return string
     */
    public function getSubscriptionNumber()
    {
        return $this->container['subscription_number'];
    }

    /**
     * Sets subscription_number
     * @param string $subscription_number 
     * @return $this
     */
    public function setSubscriptionNumber($subscription_number)
    {
        $this->container['subscription_number'] = $subscription_number;

        return $this;
    }

    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param bool $success 
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets total_mrr
     * @return double
     */
    public function getTotalMrr()
    {
        return $this->container['total_mrr'];
    }

    /**
     * Sets total_mrr
     * @param double $total_mrr 
     * @return $this
     */
    public function setTotalMrr($total_mrr)
    {
        $this->container['total_mrr'] = $total_mrr;

        return $this;
    }

    /**
     * Gets total_tcv
     * @return double
     */
    public function getTotalTcv()
    {
        return $this->container['total_tcv'];
    }

    /**
     * Sets total_tcv
     * @param double $total_tcv 
     * @return $this
     */
    public function setTotalTcv($total_tcv)
    {
        $this->container['total_tcv'] = $total_tcv;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
