<?php
/**
 * GETRsRevenueItemType
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
 * GETRsRevenueItemType Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETRsRevenueItemType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETRsRevenueItemType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounting_period_end_date' => '\DateTime',
        'accounting_period_name' => 'string',
        'accounting_period_start_date' => '\DateTime',
        'amount' => 'string',
        'currency' => 'string',
        'custom_field__c' => 'string',
        'deferred_revenue_accounting_code' => 'string',
        'deferred_revenue_accounting_code_type' => 'string',
        'is_accounting_period_closed' => 'bool',
        'recognized_revenue_accounting_code' => 'string',
        'recognized_revenue_accounting_code_type' => 'string'
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
        'accounting_period_end_date' => 'accountingPeriodEndDate',
        'accounting_period_name' => 'accountingPeriodName',
        'accounting_period_start_date' => 'accountingPeriodStartDate',
        'amount' => 'amount',
        'currency' => 'currency',
        'custom_field__c' => 'customField__c',
        'deferred_revenue_accounting_code' => 'deferredRevenueAccountingCode',
        'deferred_revenue_accounting_code_type' => 'deferredRevenueAccountingCodeType',
        'is_accounting_period_closed' => 'isAccountingPeriodClosed',
        'recognized_revenue_accounting_code' => 'recognizedRevenueAccountingCode',
        'recognized_revenue_accounting_code_type' => 'recognizedRevenueAccountingCodeType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accounting_period_end_date' => 'setAccountingPeriodEndDate',
        'accounting_period_name' => 'setAccountingPeriodName',
        'accounting_period_start_date' => 'setAccountingPeriodStartDate',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'custom_field__c' => 'setCustomFieldC',
        'deferred_revenue_accounting_code' => 'setDeferredRevenueAccountingCode',
        'deferred_revenue_accounting_code_type' => 'setDeferredRevenueAccountingCodeType',
        'is_accounting_period_closed' => 'setIsAccountingPeriodClosed',
        'recognized_revenue_accounting_code' => 'setRecognizedRevenueAccountingCode',
        'recognized_revenue_accounting_code_type' => 'setRecognizedRevenueAccountingCodeType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accounting_period_end_date' => 'getAccountingPeriodEndDate',
        'accounting_period_name' => 'getAccountingPeriodName',
        'accounting_period_start_date' => 'getAccountingPeriodStartDate',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'custom_field__c' => 'getCustomFieldC',
        'deferred_revenue_accounting_code' => 'getDeferredRevenueAccountingCode',
        'deferred_revenue_accounting_code_type' => 'getDeferredRevenueAccountingCodeType',
        'is_accounting_period_closed' => 'getIsAccountingPeriodClosed',
        'recognized_revenue_accounting_code' => 'getRecognizedRevenueAccountingCode',
        'recognized_revenue_accounting_code_type' => 'getRecognizedRevenueAccountingCodeType'
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
        $this->container['accounting_period_end_date'] = isset($data['accounting_period_end_date']) ? $data['accounting_period_end_date'] : null;
        $this->container['accounting_period_name'] = isset($data['accounting_period_name']) ? $data['accounting_period_name'] : null;
        $this->container['accounting_period_start_date'] = isset($data['accounting_period_start_date']) ? $data['accounting_period_start_date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['custom_field__c'] = isset($data['custom_field__c']) ? $data['custom_field__c'] : null;
        $this->container['deferred_revenue_accounting_code'] = isset($data['deferred_revenue_accounting_code']) ? $data['deferred_revenue_accounting_code'] : null;
        $this->container['deferred_revenue_accounting_code_type'] = isset($data['deferred_revenue_accounting_code_type']) ? $data['deferred_revenue_accounting_code_type'] : null;
        $this->container['is_accounting_period_closed'] = isset($data['is_accounting_period_closed']) ? $data['is_accounting_period_closed'] : null;
        $this->container['recognized_revenue_accounting_code'] = isset($data['recognized_revenue_accounting_code']) ? $data['recognized_revenue_accounting_code'] : null;
        $this->container['recognized_revenue_accounting_code_type'] = isset($data['recognized_revenue_accounting_code_type']) ? $data['recognized_revenue_accounting_code_type'] : null;
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
     * Gets accounting_period_end_date
     * @return \DateTime
     */
    public function getAccountingPeriodEndDate()
    {
        return $this->container['accounting_period_end_date'];
    }

    /**
     * Sets accounting_period_end_date
     * @param \DateTime $accounting_period_end_date The accounting period end date. The accounting period end date of the open-ended accounting period is null.
     * @return $this
     */
    public function setAccountingPeriodEndDate($accounting_period_end_date)
    {
        $this->container['accounting_period_end_date'] = $accounting_period_end_date;

        return $this;
    }

    /**
     * Gets accounting_period_name
     * @return string
     */
    public function getAccountingPeriodName()
    {
        return $this->container['accounting_period_name'];
    }

    /**
     * Sets accounting_period_name
     * @param string $accounting_period_name Name of the accounting period. The open-ended accounting period is named `Open-Ended`.
     * @return $this
     */
    public function setAccountingPeriodName($accounting_period_name)
    {
        $this->container['accounting_period_name'] = $accounting_period_name;

        return $this;
    }

    /**
     * Gets accounting_period_start_date
     * @return \DateTime
     */
    public function getAccountingPeriodStartDate()
    {
        return $this->container['accounting_period_start_date'];
    }

    /**
     * Sets accounting_period_start_date
     * @param \DateTime $accounting_period_start_date The accounting period start date.
     * @return $this
     */
    public function setAccountingPeriodStartDate($accounting_period_start_date)
    {
        $this->container['accounting_period_start_date'] = $accounting_period_start_date;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount The amount of the revenue item.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency The type of currency used.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets custom_field__c
     * @return string
     */
    public function getCustomFieldC()
    {
        return $this->container['custom_field__c'];
    }

    /**
     * Sets custom_field__c
     * @param string $custom_field__c Any custom fields defined for this object.
     * @return $this
     */
    public function setCustomFieldC($custom_field__c)
    {
        $this->container['custom_field__c'] = $custom_field__c;

        return $this;
    }

    /**
     * Gets deferred_revenue_accounting_code
     * @return string
     */
    public function getDeferredRevenueAccountingCode()
    {
        return $this->container['deferred_revenue_accounting_code'];
    }

    /**
     * Sets deferred_revenue_accounting_code
     * @param string $deferred_revenue_accounting_code The accounting code for deferred revenue, such as Monthly Recurring Liability. Required only when `overrideChargeAccountingCodes` is `true`. Otherwise this value is ignored.
     * @return $this
     */
    public function setDeferredRevenueAccountingCode($deferred_revenue_accounting_code)
    {
        $this->container['deferred_revenue_accounting_code'] = $deferred_revenue_accounting_code;

        return $this;
    }

    /**
     * Gets deferred_revenue_accounting_code_type
     * @return string
     */
    public function getDeferredRevenueAccountingCodeType()
    {
        return $this->container['deferred_revenue_accounting_code_type'];
    }

    /**
     * Sets deferred_revenue_accounting_code_type
     * @param string $deferred_revenue_accounting_code_type The type associated with the deferred revenue accounting code, such as Deferred Revenue. Required only when `overrideChargeAccountingCodes` is `true`. Otherwise this value is ignored.
     * @return $this
     */
    public function setDeferredRevenueAccountingCodeType($deferred_revenue_accounting_code_type)
    {
        $this->container['deferred_revenue_accounting_code_type'] = $deferred_revenue_accounting_code_type;

        return $this;
    }

    /**
     * Gets is_accounting_period_closed
     * @return bool
     */
    public function getIsAccountingPeriodClosed()
    {
        return $this->container['is_accounting_period_closed'];
    }

    /**
     * Sets is_accounting_period_closed
     * @param bool $is_accounting_period_closed Indicates if the accounting period is closed or open.
     * @return $this
     */
    public function setIsAccountingPeriodClosed($is_accounting_period_closed)
    {
        $this->container['is_accounting_period_closed'] = $is_accounting_period_closed;

        return $this;
    }

    /**
     * Gets recognized_revenue_accounting_code
     * @return string
     */
    public function getRecognizedRevenueAccountingCode()
    {
        return $this->container['recognized_revenue_accounting_code'];
    }

    /**
     * Sets recognized_revenue_accounting_code
     * @param string $recognized_revenue_accounting_code The accounting code for recognized revenue, such as Monthly Recurring Charges or Overage Charges. Required only when `overrideChargeAccountingCodes` is `true`. Otherwise the value is ignored.
     * @return $this
     */
    public function setRecognizedRevenueAccountingCode($recognized_revenue_accounting_code)
    {
        $this->container['recognized_revenue_accounting_code'] = $recognized_revenue_accounting_code;

        return $this;
    }

    /**
     * Gets recognized_revenue_accounting_code_type
     * @return string
     */
    public function getRecognizedRevenueAccountingCodeType()
    {
        return $this->container['recognized_revenue_accounting_code_type'];
    }

    /**
     * Sets recognized_revenue_accounting_code_type
     * @param string $recognized_revenue_accounting_code_type The type associated with the recognized revenue accounting code, such as Sales Revenue or Sales Discount. Required only when `overrideChargeAccountingCodes` is `true`. Otherwise this value is ignored.
     * @return $this
     */
    public function setRecognizedRevenueAccountingCodeType($recognized_revenue_accounting_code_type)
    {
        $this->container['recognized_revenue_accounting_code_type'] = $recognized_revenue_accounting_code_type;

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
