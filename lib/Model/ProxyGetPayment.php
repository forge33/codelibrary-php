<?php
/**
 * ProxyGetPayment
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
 * ProxyGetPayment Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProxyGetPayment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProxyGetPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'accounting_code' => 'string',
        'amount' => 'double',
        'applied_credit_balance_amount' => 'double',
        'auth_transaction_id' => 'string',
        'bank_identification_number' => 'string',
        'cancelled_on' => '\DateTime',
        'comment' => 'string',
        'created_by_id' => 'string',
        'created_date' => '\DateTime',
        'effective_date' => '\DateTime',
        'gateway' => 'string',
        'gateway_order_id' => 'string',
        'gateway_response' => 'string',
        'gateway_response_code' => 'string',
        'gateway_state' => 'string',
        'id' => 'string',
        'marked_for_submission_on' => '\DateTime',
        'payment_method_id' => 'string',
        'payment_method_snapshot_id' => 'string',
        'payment_number' => 'string',
        'reference_id' => 'string',
        'refund_amount' => 'double',
        'second_payment_reference_id' => 'string',
        'settled_on' => '\DateTime',
        'soft_descriptor' => 'string',
        'soft_descriptor_phone' => 'string',
        'source' => 'string',
        'source_name' => 'string',
        'status' => 'string',
        'submitted_on' => '\DateTime',
        'transferred_to_accounting' => 'string',
        'type' => 'string',
        'updated_by_id' => 'string',
        'updated_date' => '\DateTime'
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
        'accounting_code' => 'AccountingCode',
        'amount' => 'Amount',
        'applied_credit_balance_amount' => 'AppliedCreditBalanceAmount',
        'auth_transaction_id' => 'AuthTransactionId',
        'bank_identification_number' => 'BankIdentificationNumber',
        'cancelled_on' => 'CancelledOn',
        'comment' => 'Comment',
        'created_by_id' => 'CreatedById',
        'created_date' => 'CreatedDate',
        'effective_date' => 'EffectiveDate',
        'gateway' => 'Gateway',
        'gateway_order_id' => 'GatewayOrderId',
        'gateway_response' => 'GatewayResponse',
        'gateway_response_code' => 'GatewayResponseCode',
        'gateway_state' => 'GatewayState',
        'id' => 'Id',
        'marked_for_submission_on' => 'MarkedForSubmissionOn',
        'payment_method_id' => 'PaymentMethodId',
        'payment_method_snapshot_id' => 'PaymentMethodSnapshotId',
        'payment_number' => 'PaymentNumber',
        'reference_id' => 'ReferenceId',
        'refund_amount' => 'RefundAmount',
        'second_payment_reference_id' => 'SecondPaymentReferenceId',
        'settled_on' => 'SettledOn',
        'soft_descriptor' => 'SoftDescriptor',
        'soft_descriptor_phone' => 'SoftDescriptorPhone',
        'source' => 'Source',
        'source_name' => 'SourceName',
        'status' => 'Status',
        'submitted_on' => 'SubmittedOn',
        'transferred_to_accounting' => 'TransferredToAccounting',
        'type' => 'Type',
        'updated_by_id' => 'UpdatedById',
        'updated_date' => 'UpdatedDate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'accounting_code' => 'setAccountingCode',
        'amount' => 'setAmount',
        'applied_credit_balance_amount' => 'setAppliedCreditBalanceAmount',
        'auth_transaction_id' => 'setAuthTransactionId',
        'bank_identification_number' => 'setBankIdentificationNumber',
        'cancelled_on' => 'setCancelledOn',
        'comment' => 'setComment',
        'created_by_id' => 'setCreatedById',
        'created_date' => 'setCreatedDate',
        'effective_date' => 'setEffectiveDate',
        'gateway' => 'setGateway',
        'gateway_order_id' => 'setGatewayOrderId',
        'gateway_response' => 'setGatewayResponse',
        'gateway_response_code' => 'setGatewayResponseCode',
        'gateway_state' => 'setGatewayState',
        'id' => 'setId',
        'marked_for_submission_on' => 'setMarkedForSubmissionOn',
        'payment_method_id' => 'setPaymentMethodId',
        'payment_method_snapshot_id' => 'setPaymentMethodSnapshotId',
        'payment_number' => 'setPaymentNumber',
        'reference_id' => 'setReferenceId',
        'refund_amount' => 'setRefundAmount',
        'second_payment_reference_id' => 'setSecondPaymentReferenceId',
        'settled_on' => 'setSettledOn',
        'soft_descriptor' => 'setSoftDescriptor',
        'soft_descriptor_phone' => 'setSoftDescriptorPhone',
        'source' => 'setSource',
        'source_name' => 'setSourceName',
        'status' => 'setStatus',
        'submitted_on' => 'setSubmittedOn',
        'transferred_to_accounting' => 'setTransferredToAccounting',
        'type' => 'setType',
        'updated_by_id' => 'setUpdatedById',
        'updated_date' => 'setUpdatedDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'accounting_code' => 'getAccountingCode',
        'amount' => 'getAmount',
        'applied_credit_balance_amount' => 'getAppliedCreditBalanceAmount',
        'auth_transaction_id' => 'getAuthTransactionId',
        'bank_identification_number' => 'getBankIdentificationNumber',
        'cancelled_on' => 'getCancelledOn',
        'comment' => 'getComment',
        'created_by_id' => 'getCreatedById',
        'created_date' => 'getCreatedDate',
        'effective_date' => 'getEffectiveDate',
        'gateway' => 'getGateway',
        'gateway_order_id' => 'getGatewayOrderId',
        'gateway_response' => 'getGatewayResponse',
        'gateway_response_code' => 'getGatewayResponseCode',
        'gateway_state' => 'getGatewayState',
        'id' => 'getId',
        'marked_for_submission_on' => 'getMarkedForSubmissionOn',
        'payment_method_id' => 'getPaymentMethodId',
        'payment_method_snapshot_id' => 'getPaymentMethodSnapshotId',
        'payment_number' => 'getPaymentNumber',
        'reference_id' => 'getReferenceId',
        'refund_amount' => 'getRefundAmount',
        'second_payment_reference_id' => 'getSecondPaymentReferenceId',
        'settled_on' => 'getSettledOn',
        'soft_descriptor' => 'getSoftDescriptor',
        'soft_descriptor_phone' => 'getSoftDescriptorPhone',
        'source' => 'getSource',
        'source_name' => 'getSourceName',
        'status' => 'getStatus',
        'submitted_on' => 'getSubmittedOn',
        'transferred_to_accounting' => 'getTransferredToAccounting',
        'type' => 'getType',
        'updated_by_id' => 'getUpdatedById',
        'updated_date' => 'getUpdatedDate'
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
        $this->container['accounting_code'] = isset($data['accounting_code']) ? $data['accounting_code'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['applied_credit_balance_amount'] = isset($data['applied_credit_balance_amount']) ? $data['applied_credit_balance_amount'] : null;
        $this->container['auth_transaction_id'] = isset($data['auth_transaction_id']) ? $data['auth_transaction_id'] : null;
        $this->container['bank_identification_number'] = isset($data['bank_identification_number']) ? $data['bank_identification_number'] : null;
        $this->container['cancelled_on'] = isset($data['cancelled_on']) ? $data['cancelled_on'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['gateway_order_id'] = isset($data['gateway_order_id']) ? $data['gateway_order_id'] : null;
        $this->container['gateway_response'] = isset($data['gateway_response']) ? $data['gateway_response'] : null;
        $this->container['gateway_response_code'] = isset($data['gateway_response_code']) ? $data['gateway_response_code'] : null;
        $this->container['gateway_state'] = isset($data['gateway_state']) ? $data['gateway_state'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['marked_for_submission_on'] = isset($data['marked_for_submission_on']) ? $data['marked_for_submission_on'] : null;
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
        $this->container['payment_method_snapshot_id'] = isset($data['payment_method_snapshot_id']) ? $data['payment_method_snapshot_id'] : null;
        $this->container['payment_number'] = isset($data['payment_number']) ? $data['payment_number'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['refund_amount'] = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['second_payment_reference_id'] = isset($data['second_payment_reference_id']) ? $data['second_payment_reference_id'] : null;
        $this->container['settled_on'] = isset($data['settled_on']) ? $data['settled_on'] : null;
        $this->container['soft_descriptor'] = isset($data['soft_descriptor']) ? $data['soft_descriptor'] : null;
        $this->container['soft_descriptor_phone'] = isset($data['soft_descriptor_phone']) ? $data['soft_descriptor_phone'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['source_name'] = isset($data['source_name']) ? $data['source_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['submitted_on'] = isset($data['submitted_on']) ? $data['submitted_on'] : null;
        $this->container['transferred_to_accounting'] = isset($data['transferred_to_accounting']) ? $data['transferred_to_accounting'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updated_by_id'] = isset($data['updated_by_id']) ? $data['updated_by_id'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
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
     * @param string $account_id The unique account ID for the customer that the payment is for. **Character limit**: 32 **Values**: a valid [account ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account)
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets accounting_code
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->container['accounting_code'];
    }

    /**
     * Sets accounting_code
     * @param string $accounting_code The [Chart of Accounts](/CB_Billing/W_Billing_and_Payments_Settings/V_Configure_Accounting_Codes/D_Set_Up_Chart_of_Accounts)
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param double $amount The amount of the payment. **Character limit**: 16 **Values**: a valid currency value
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets applied_credit_balance_amount
     * @return double
     */
    public function getAppliedCreditBalanceAmount()
    {
        return $this->container['applied_credit_balance_amount'];
    }

    /**
     * Sets applied_credit_balance_amount
     * @param double $applied_credit_balance_amount The amount of the payment to apply to a credit balance. This field is required in a create() call when the `AppliedInvoiceAmount` field value is null. **Character limit**: 16 **Values**: a valid currency value
     * @return $this
     */
    public function setAppliedCreditBalanceAmount($applied_credit_balance_amount)
    {
        $this->container['applied_credit_balance_amount'] = $applied_credit_balance_amount;

        return $this;
    }

    /**
     * Gets auth_transaction_id
     * @return string
     */
    public function getAuthTransactionId()
    {
        return $this->container['auth_transaction_id'];
    }

    /**
     * Sets auth_transaction_id
     * @param string $auth_transaction_id The authorization transaction ID from the payment gateway. Use this field for electronic payments, such as credit cards. **Character limit**: 50 **Values**: a string of 50 characters or fewer
     * @return $this
     */
    public function setAuthTransactionId($auth_transaction_id)
    {
        $this->container['auth_transaction_id'] = $auth_transaction_id;

        return $this;
    }

    /**
     * Gets bank_identification_number
     * @return string
     */
    public function getBankIdentificationNumber()
    {
        return $this->container['bank_identification_number'];
    }

    /**
     * Sets bank_identification_number
     * @param string $bank_identification_number The first six digits of the credit card or debit card used for the payment, when applicable. Use this field to [reconcile payments between the gateway and merchant banks](https://knowledgecenter.zuora.com/CB_Billing/K_Payment_Operations/d_Reconciling_Payments_with_Merchant_Accounts). **Character limit**: 6 **Values**: automatically generated
     * @return $this
     */
    public function setBankIdentificationNumber($bank_identification_number)
    {
        $this->container['bank_identification_number'] = $bank_identification_number;

        return $this;
    }

    /**
     * Gets cancelled_on
     * @return \DateTime
     */
    public function getCancelledOn()
    {
        return $this->container['cancelled_on'];
    }

    /**
     * Sets cancelled_on
     * @param \DateTime $cancelled_on The date when the payment was canceled. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setCancelledOn($cancelled_on)
    {
        $this->container['cancelled_on'] = $cancelled_on;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment Additional information related to the payment. **Character limit**: 255 **Values**: a string of 255 characters or fewer
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets created_by_id
     * @return string
     */
    public function getCreatedById()
    {
        return $this->container['created_by_id'];
    }

    /**
     * Sets created_by_id
     * @param string $created_by_id The user ID of the person who created the `Payment` object. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setCreatedById($created_by_id)
    {
        $this->container['created_by_id'] = $created_by_id;

        return $this;
    }

    /**
     * Gets created_date
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     * @param \DateTime $created_date The date when the Payment object was created in the Zuora system. **Character limit**: 29 **Values** automatically generated
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets effective_date
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     * @param \DateTime $effective_date The date when the payment takes effect. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_Format_and_Datetimes_in_Zuora)
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets gateway
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     * @param string $gateway Name of the [gateway](/C_Zuora_User_Guides/A_Billing_and_Payments/M_Payment_Gateways) instance that processes the payment. When creating a Payment, this must be a valid gateway instance name and this gateway must support the specific payment method. If not specified, the default gateway on the Account will be used.
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets gateway_order_id
     * @return string
     */
    public function getGatewayOrderId()
    {
        return $this->container['gateway_order_id'];
    }

    /**
     * Sets gateway_order_id
     * @param string $gateway_order_id A merchant-specified natural key value that can be passed to the electronic payment gateway when a payment is created. If not specified, the PaymentNumber will be passed in instead. **Character limit**: 70 **Values**: a string of 70 characters or fewer
     * @return $this
     */
    public function setGatewayOrderId($gateway_order_id)
    {
        $this->container['gateway_order_id'] = $gateway_order_id;

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
     * @param string $gateway_response The message returned from the payment gateway for the payment. This message is gateway-dependent. **Character limit**: 500 **Values**: automatically generated
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
     * @param string $gateway_response_code The code returned from the payment gateway for the payment. This code is gateway-dependent. **Character limit**: 20 **Values**: automatically generated
     * @return $this
     */
    public function setGatewayResponseCode($gateway_response_code)
    {
        $this->container['gateway_response_code'] = $gateway_response_code;

        return $this;
    }

    /**
     * Gets gateway_state
     * @return string
     */
    public function getGatewayState()
    {
        return $this->container['gateway_state'];
    }

    /**
     * Sets gateway_state
     * @param string $gateway_state The status of the payment in the gateway; use for reconciliation. **Character limit**: 19 **Values**: automatically generated
     * @return $this
     */
    public function setGatewayState($gateway_state)
    {
        $this->container['gateway_state'] = $gateway_state;

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
     * @param string $id Object identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets marked_for_submission_on
     * @return \DateTime
     */
    public function getMarkedForSubmissionOn()
    {
        return $this->container['marked_for_submission_on'];
    }

    /**
     * Sets marked_for_submission_on
     * @param \DateTime $marked_for_submission_on The date when a payment was marked and waiting for batch submission to the payment process. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setMarkedForSubmissionOn($marked_for_submission_on)
    {
        $this->container['marked_for_submission_on'] = $marked_for_submission_on;

        return $this;
    }

    /**
     * Gets payment_method_id
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     * @param string $payment_method_id The ID of the payment method used for the payment. Required for Create. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->container['payment_method_id'] = $payment_method_id;

        return $this;
    }

    /**
     * Gets payment_method_snapshot_id
     * @return string
     */
    public function getPaymentMethodSnapshotId()
    {
        return $this->container['payment_method_snapshot_id'];
    }

    /**
     * Sets payment_method_snapshot_id
     * @param string $payment_method_snapshot_id The unique ID of the payment method snapshot which is a copy of the particular Payment Method used in a transaction. **Character limit**: 32 **V****alues**: a valid [payment method snapshot ID](http://knowledgecenter.zuora.com/D_SOAP_API/E_SOAP_API_Objects/PaymentMethod_Snapshot)
     * @return $this
     */
    public function setPaymentMethodSnapshotId($payment_method_snapshot_id)
    {
        $this->container['payment_method_snapshot_id'] = $payment_method_snapshot_id;

        return $this;
    }

    /**
     * Gets payment_number
     * @return string
     */
    public function getPaymentNumber()
    {
        return $this->container['payment_number'];
    }

    /**
     * Sets payment_number
     * @param string $payment_number The unique identification number of a payment. For example: P-00000028. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setPaymentNumber($payment_number)
    {
        $this->container['payment_number'] = $payment_number;

        return $this;
    }

    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     * @param string $reference_id The transaction ID returned by the payment gateway. Use this field to reconcile payments between your gateway and Z-Payments. **Character limit**: 60 **Values**: a string of 60 characters or fewer
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets refund_amount
     * @return double
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     * @param double $refund_amount The amount of the payment that is refunded. This field is null if no refund is made against the payment. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets second_payment_reference_id
     * @return string
     */
    public function getSecondPaymentReferenceId()
    {
        return $this->container['second_payment_reference_id'];
    }

    /**
     * Sets second_payment_reference_id
     * @param string $second_payment_reference_id The transaction ID returned by the payment gateway if there is an additional transaction for the payment. Use this field to reconcile payments between your gateway and Z-Payments. **Character limit**: 60 **Values**: a string of 60 characters or fewer
     * @return $this
     */
    public function setSecondPaymentReferenceId($second_payment_reference_id)
    {
        $this->container['second_payment_reference_id'] = $second_payment_reference_id;

        return $this;
    }

    /**
     * Gets settled_on
     * @return \DateTime
     */
    public function getSettledOn()
    {
        return $this->container['settled_on'];
    }

    /**
     * Sets settled_on
     * @param \DateTime $settled_on The date when the payment was settled in the payment processor. This field is used by the Spectrum gateway only and not applicable to other gateways. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setSettledOn($settled_on)
    {
        $this->container['settled_on'] = $settled_on;

        return $this;
    }

    /**
     * Gets soft_descriptor
     * @return string
     */
    public function getSoftDescriptor()
    {
        return $this->container['soft_descriptor'];
    }

    /**
     * Sets soft_descriptor
     * @param string $soft_descriptor [A payment gateway-specific field that maps to Zuora for the gateways, Orbital, Vantiv and Verifi](https://knowledgecenter.zuora.com/CB_Billing/M_Payment_Gateways/Supported_Payment_Gateways/Verifi_Global_Payment_Gateway#Soft_Descriptors_(Optional)). **Character limit**: 35 **Values**: `[SDMerchantName]*[SDProductionInfo]`
     * @return $this
     */
    public function setSoftDescriptor($soft_descriptor)
    {
        $this->container['soft_descriptor'] = $soft_descriptor;

        return $this;
    }

    /**
     * Gets soft_descriptor_phone
     * @return string
     */
    public function getSoftDescriptorPhone()
    {
        return $this->container['soft_descriptor_phone'];
    }

    /**
     * Sets soft_descriptor_phone
     * @param string $soft_descriptor_phone [A payment gateway-specific field that maps to Zuora for the gateways, Orbital, Vantiv and Verifi](https://knowledgecenter.zuora.com/CB_Billing/M_Payment_Gateways/Supported_Payment_Gateways/Verifi_Global_Payment_Gateway#Soft_Descriptors_(Optional)). **Character limit**: 20 **Values**: `[SDPhone]`
     * @return $this
     */
    public function setSoftDescriptorPhone($soft_descriptor_phone)
    {
        $this->container['soft_descriptor_phone'] = $soft_descriptor_phone;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source Indicates how the payment was created, whether through API, manually, import, or payment run. **Character limit**: **Values**: Payment Run, Import, Manually, and API
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets source_name
     * @return string
     */
    public function getSourceName()
    {
        return $this->container['source_name'];
    }

    /**
     * Sets source_name
     * @param string $source_name Name of the source. **Character limit**: **Values**: Payment Run number or a file name.
     * @return $this
     */
    public function setSourceName($source_name)
    {
        $this->container['source_name'] = $source_name;

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
     * @param string $status The status of the payment in Zuora. The value depends on the type of payment. **Character limit**: 11 **Values**: one of the following:  -  Electronic payments: `Processed`, `Error`, `Voided`  -  External payments: `Processed`, `Canceled`  See [Troubleshooting Payment Runs](https://knowledgecenter.zuora.com/CB_Billing/K_Payment_Operations/CA_Payment_Runs/Troubleshooting_Payment_Runs) for more information. * Update of status can change value from `Processed` to `Canceled` when the payment type is external.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets submitted_on
     * @return \DateTime
     */
    public function getSubmittedOn()
    {
        return $this->container['submitted_on'];
    }

    /**
     * Sets submitted_on
     * @param \DateTime $submitted_on The date when the payment was submitted. **Character limit****:** 29 **Values**: automatically generated
     * @return $this
     */
    public function setSubmittedOn($submitted_on)
    {
        $this->container['submitted_on'] = $submitted_on;

        return $this;
    }

    /**
     * Gets transferred_to_accounting
     * @return string
     */
    public function getTransferredToAccounting()
    {
        return $this->container['transferred_to_accounting'];
    }

    /**
     * Sets transferred_to_accounting
     * @param string $transferred_to_accounting Indicates if the payment was transferred to an external accounting system. Use this field for integration with accounting systems, such as NetSuite. **Character limit**: 11 **Values**: `Processing`, `Yes`, `Error`, `Ignore`
     * @return $this
     */
    public function setTransferredToAccounting($transferred_to_accounting)
    {
        $this->container['transferred_to_accounting'] = $transferred_to_accounting;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Indicates if the payment is external or electronic. **Character limit**: 10 **Values**: `External`, `Electronic`
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets updated_by_id
     * @return string
     */
    public function getUpdatedById()
    {
        return $this->container['updated_by_id'];
    }

    /**
     * Sets updated_by_id
     * @param string $updated_by_id The ID of the user who last updated the payment. **Character limit**: **Values**: automatically generated
     * @return $this
     */
    public function setUpdatedById($updated_by_id)
    {
        $this->container['updated_by_id'] = $updated_by_id;

        return $this;
    }

    /**
     * Gets updated_date
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     * @param \DateTime $updated_date The date when the payment was last updated. **Character limit**: **Values** **Values**: automatically generated
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

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
