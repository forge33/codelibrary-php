<?php
/**
 * GETAccountSummarySubscriptionType
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
 * GETAccountSummarySubscriptionType Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETAccountSummarySubscriptionType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETAccountSummarySubscriptionType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cpq_bundle_json_id__qt' => 'string',
        'opportunity_close_date__qt' => 'string',
        'opportunity_name__qt' => 'string',
        'quote_business_type__qt' => 'string',
        'quote_number__qt' => 'string',
        'quote_type__qt' => 'string',
        'auto_renew' => 'bool',
        'custom_field__c' => 'string',
        'id' => 'string',
        'initial_term' => 'string',
        'rate_plans' => '\Swagger\Client\Model\GETAccountSummarySubscriptionRatePlanType[]',
        'renewal_term' => 'string',
        'status' => 'string',
        'subscription_number' => 'string',
        'subscription_start_date' => '\DateTime',
        'term_end_date' => '\DateTime',
        'term_start_date' => '\DateTime',
        'term_type' => 'string'
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
        'cpq_bundle_json_id__qt' => 'CpqBundleJsonId__QT',
        'opportunity_close_date__qt' => 'OpportunityCloseDate__QT',
        'opportunity_name__qt' => 'OpportunityName__QT',
        'quote_business_type__qt' => 'QuoteBusinessType__QT',
        'quote_number__qt' => 'QuoteNumber__QT',
        'quote_type__qt' => 'QuoteType__QT',
        'auto_renew' => 'autoRenew',
        'custom_field__c' => 'customField__c',
        'id' => 'id',
        'initial_term' => 'initialTerm',
        'rate_plans' => 'ratePlans',
        'renewal_term' => 'renewalTerm',
        'status' => 'status',
        'subscription_number' => 'subscriptionNumber',
        'subscription_start_date' => 'subscriptionStartDate',
        'term_end_date' => 'termEndDate',
        'term_start_date' => 'termStartDate',
        'term_type' => 'termType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cpq_bundle_json_id__qt' => 'setCpqBundleJsonIdQt',
        'opportunity_close_date__qt' => 'setOpportunityCloseDateQt',
        'opportunity_name__qt' => 'setOpportunityNameQt',
        'quote_business_type__qt' => 'setQuoteBusinessTypeQt',
        'quote_number__qt' => 'setQuoteNumberQt',
        'quote_type__qt' => 'setQuoteTypeQt',
        'auto_renew' => 'setAutoRenew',
        'custom_field__c' => 'setCustomFieldC',
        'id' => 'setId',
        'initial_term' => 'setInitialTerm',
        'rate_plans' => 'setRatePlans',
        'renewal_term' => 'setRenewalTerm',
        'status' => 'setStatus',
        'subscription_number' => 'setSubscriptionNumber',
        'subscription_start_date' => 'setSubscriptionStartDate',
        'term_end_date' => 'setTermEndDate',
        'term_start_date' => 'setTermStartDate',
        'term_type' => 'setTermType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cpq_bundle_json_id__qt' => 'getCpqBundleJsonIdQt',
        'opportunity_close_date__qt' => 'getOpportunityCloseDateQt',
        'opportunity_name__qt' => 'getOpportunityNameQt',
        'quote_business_type__qt' => 'getQuoteBusinessTypeQt',
        'quote_number__qt' => 'getQuoteNumberQt',
        'quote_type__qt' => 'getQuoteTypeQt',
        'auto_renew' => 'getAutoRenew',
        'custom_field__c' => 'getCustomFieldC',
        'id' => 'getId',
        'initial_term' => 'getInitialTerm',
        'rate_plans' => 'getRatePlans',
        'renewal_term' => 'getRenewalTerm',
        'status' => 'getStatus',
        'subscription_number' => 'getSubscriptionNumber',
        'subscription_start_date' => 'getSubscriptionStartDate',
        'term_end_date' => 'getTermEndDate',
        'term_start_date' => 'getTermStartDate',
        'term_type' => 'getTermType'
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
        $this->container['cpq_bundle_json_id__qt'] = isset($data['cpq_bundle_json_id__qt']) ? $data['cpq_bundle_json_id__qt'] : null;
        $this->container['opportunity_close_date__qt'] = isset($data['opportunity_close_date__qt']) ? $data['opportunity_close_date__qt'] : null;
        $this->container['opportunity_name__qt'] = isset($data['opportunity_name__qt']) ? $data['opportunity_name__qt'] : null;
        $this->container['quote_business_type__qt'] = isset($data['quote_business_type__qt']) ? $data['quote_business_type__qt'] : null;
        $this->container['quote_number__qt'] = isset($data['quote_number__qt']) ? $data['quote_number__qt'] : null;
        $this->container['quote_type__qt'] = isset($data['quote_type__qt']) ? $data['quote_type__qt'] : null;
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : null;
        $this->container['custom_field__c'] = isset($data['custom_field__c']) ? $data['custom_field__c'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['initial_term'] = isset($data['initial_term']) ? $data['initial_term'] : null;
        $this->container['rate_plans'] = isset($data['rate_plans']) ? $data['rate_plans'] : null;
        $this->container['renewal_term'] = isset($data['renewal_term']) ? $data['renewal_term'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subscription_number'] = isset($data['subscription_number']) ? $data['subscription_number'] : null;
        $this->container['subscription_start_date'] = isset($data['subscription_start_date']) ? $data['subscription_start_date'] : null;
        $this->container['term_end_date'] = isset($data['term_end_date']) ? $data['term_end_date'] : null;
        $this->container['term_start_date'] = isset($data['term_start_date']) ? $data['term_start_date'] : null;
        $this->container['term_type'] = isset($data['term_type']) ? $data['term_type'] : null;
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
     * Gets cpq_bundle_json_id__qt
     * @return string
     */
    public function getCpqBundleJsonIdQt()
    {
        return $this->container['cpq_bundle_json_id__qt'];
    }

    /**
     * Sets cpq_bundle_json_id__qt
     * @param string $cpq_bundle_json_id__qt dummy
     * @return $this
     */
    public function setCpqBundleJsonIdQt($cpq_bundle_json_id__qt)
    {
        $this->container['cpq_bundle_json_id__qt'] = $cpq_bundle_json_id__qt;

        return $this;
    }

    /**
     * Gets opportunity_close_date__qt
     * @return string
     */
    public function getOpportunityCloseDateQt()
    {
        return $this->container['opportunity_close_date__qt'];
    }

    /**
     * Sets opportunity_close_date__qt
     * @param string $opportunity_close_date__qt dummy
     * @return $this
     */
    public function setOpportunityCloseDateQt($opportunity_close_date__qt)
    {
        $this->container['opportunity_close_date__qt'] = $opportunity_close_date__qt;

        return $this;
    }

    /**
     * Gets opportunity_name__qt
     * @return string
     */
    public function getOpportunityNameQt()
    {
        return $this->container['opportunity_name__qt'];
    }

    /**
     * Sets opportunity_name__qt
     * @param string $opportunity_name__qt dummy
     * @return $this
     */
    public function setOpportunityNameQt($opportunity_name__qt)
    {
        $this->container['opportunity_name__qt'] = $opportunity_name__qt;

        return $this;
    }

    /**
     * Gets quote_business_type__qt
     * @return string
     */
    public function getQuoteBusinessTypeQt()
    {
        return $this->container['quote_business_type__qt'];
    }

    /**
     * Sets quote_business_type__qt
     * @param string $quote_business_type__qt dummy
     * @return $this
     */
    public function setQuoteBusinessTypeQt($quote_business_type__qt)
    {
        $this->container['quote_business_type__qt'] = $quote_business_type__qt;

        return $this;
    }

    /**
     * Gets quote_number__qt
     * @return string
     */
    public function getQuoteNumberQt()
    {
        return $this->container['quote_number__qt'];
    }

    /**
     * Sets quote_number__qt
     * @param string $quote_number__qt dummy
     * @return $this
     */
    public function setQuoteNumberQt($quote_number__qt)
    {
        $this->container['quote_number__qt'] = $quote_number__qt;

        return $this;
    }

    /**
     * Gets quote_type__qt
     * @return string
     */
    public function getQuoteTypeQt()
    {
        return $this->container['quote_type__qt'];
    }

    /**
     * Sets quote_type__qt
     * @param string $quote_type__qt dummy
     * @return $this
     */
    public function setQuoteTypeQt($quote_type__qt)
    {
        $this->container['quote_type__qt'] = $quote_type__qt;

        return $this;
    }

    /**
     * Gets auto_renew
     * @return bool
     */
    public function getAutoRenew()
    {
        return $this->container['auto_renew'];
    }

    /**
     * Sets auto_renew
     * @param bool $auto_renew If `true`, auto-renew is enabled. If `false`, auto-renew is disabled.
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Subscription ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets initial_term
     * @return string
     */
    public function getInitialTerm()
    {
        return $this->container['initial_term'];
    }

    /**
     * Sets initial_term
     * @param string $initial_term Duration of the initial subscription term in whole months.
     * @return $this
     */
    public function setInitialTerm($initial_term)
    {
        $this->container['initial_term'] = $initial_term;

        return $this;
    }

    /**
     * Gets rate_plans
     * @return \Swagger\Client\Model\GETAccountSummarySubscriptionRatePlanType[]
     */
    public function getRatePlans()
    {
        return $this->container['rate_plans'];
    }

    /**
     * Sets rate_plans
     * @param \Swagger\Client\Model\GETAccountSummarySubscriptionRatePlanType[] $rate_plans Container for rate plans for this subscription.
     * @return $this
     */
    public function setRatePlans($rate_plans)
    {
        $this->container['rate_plans'] = $rate_plans;

        return $this;
    }

    /**
     * Gets renewal_term
     * @return string
     */
    public function getRenewalTerm()
    {
        return $this->container['renewal_term'];
    }

    /**
     * Sets renewal_term
     * @param string $renewal_term Duration of the renewal term in whole months.
     * @return $this
     */
    public function setRenewalTerm($renewal_term)
    {
        $this->container['renewal_term'] = $renewal_term;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Subscription status; possible values are: `Draft`, `PendingActivation`, `PendingAcceptance`, `Active`, `Cancelled`, `Expired`.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string $subscription_number Subscription Number.
     * @return $this
     */
    public function setSubscriptionNumber($subscription_number)
    {
        $this->container['subscription_number'] = $subscription_number;

        return $this;
    }

    /**
     * Gets subscription_start_date
     * @return \DateTime
     */
    public function getSubscriptionStartDate()
    {
        return $this->container['subscription_start_date'];
    }

    /**
     * Sets subscription_start_date
     * @param \DateTime $subscription_start_date Subscription start date.
     * @return $this
     */
    public function setSubscriptionStartDate($subscription_start_date)
    {
        $this->container['subscription_start_date'] = $subscription_start_date;

        return $this;
    }

    /**
     * Gets term_end_date
     * @return \DateTime
     */
    public function getTermEndDate()
    {
        return $this->container['term_end_date'];
    }

    /**
     * Sets term_end_date
     * @param \DateTime $term_end_date End date of the subscription term. If the subscription is evergreen, this is either null or equal to the cancellation date, as appropriate.
     * @return $this
     */
    public function setTermEndDate($term_end_date)
    {
        $this->container['term_end_date'] = $term_end_date;

        return $this;
    }

    /**
     * Gets term_start_date
     * @return \DateTime
     */
    public function getTermStartDate()
    {
        return $this->container['term_start_date'];
    }

    /**
     * Sets term_start_date
     * @param \DateTime $term_start_date Start date of the subscription term. If this is a renewal subscription, this date is different than the subscription start date.
     * @return $this
     */
    public function setTermStartDate($term_start_date)
    {
        $this->container['term_start_date'] = $term_start_date;

        return $this;
    }

    /**
     * Gets term_type
     * @return string
     */
    public function getTermType()
    {
        return $this->container['term_type'];
    }

    /**
     * Sets term_type
     * @param string $term_type Possible values are: `TERMED`, `EVERGREEN`.
     * @return $this
     */
    public function setTermType($term_type)
    {
        $this->container['term_type'] = $term_type;

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
