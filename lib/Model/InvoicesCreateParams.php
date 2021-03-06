<?php
/**
 * InvoicesCreateParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * <h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"\">スタートガイド</h2> <p>1. セットアップ</p> <ol> <ul><li><a href=\"https://support.freee.co.jp/hc/ja/articles/202847230\" class=\"external-link\" rel=\"nofollow\">freeeアカウント（無料）</a>を<a href=\"https://secure.freee.co.jp/users/sign_up\" class=\"external-link\" rel=\"nofollow\">作成</a>します（すでにお持ちの場合は次へ）</li><li><a href=\"https://app.secure.freee.co.jp/developers/demo_companies/description\" class=\"external-link\" rel=\"nofollow\">開発者向け事業所・環境を作成</a>します</li><li><span><a href=\"https://app.secure.freee.co.jp/developers/applications\" class=\"external-link\" rel=\"nofollow\">前のステップで作成した事業所を選択してfreeeアプリを追加</a>します</span></li><li>Client IDをCopyしておきます</li> </ul> </ol>  <p>2. 実際にAPIを叩いてみる（ブラウザからAPIのレスポンスを確認する）</p> <ol> <ul><li><span><span>以下のURLの●をclient_idに入れ替えて<a href=\"https://app.secure.freee.co.jp/developers/tutorials/3-%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%83%88%E3%83%BC%E3%82%AF%E3%83%B3%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B#%E8%AA%8D%E5%8F%AF%E3%82%B3%E3%83%BC%E3%83%89%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B\" class=\"external-link\" rel=\"nofollow\">アクセストークンを取得</a>します</span></span><ul><li><span><span><pre><code>https://accounts.secure.freee.co.jp/public_api/authorize?client_id=●&amp;redirect_uri=urn%3Aietf%3Awg%3Aoauth%3A2.0%3Aoob&amp;response_type=token</a></code></pre></span></span></li></ul></li><li><span><a href=\"https://developer.freee.co.jp/docs/accounting/reference#/%E9%80%A3%E7%B5%A1%E5%85%88\" class=\"external-link\" rel=\"nofollow\">APIリファレンス</a>で<code>Authorize</code>を押下します</span></li><li><span>アクセストークン<span><span>を入力して</span></span>&nbsp;もう一度<span><code>Authorize</code>を押下して<code>Close</code>を押下します</span></span></li><li>リファレンス内のCompanies（事業所）に移動し、<code>Try it out</code>を押下し、<code>Execute</code>を押下します</li><li>Response bodyを参照し、事業所ID(id属性)を活用して、Companies以外のエンドポイントでどのようなデータのやりとりできるのか確認します</li></ul> </ol> <p>3. 連携を実装する</p> <ol> <ul><li><a href=\"https://developer.freee.co.jp/tips\" class=\"external-link\" rel=\"nofollow\">API TIPS</a>を参考に、ユースケースごとの連携の概要を学びます。<span>例えば</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-salesmanegement-system\" class=\"external-link\" rel=\"nofollow\">SFA、CRM、販売管理システムから会計freeeへの連携</a>や<a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-excel-and-spreadsheet\" class=\"external-link\" rel=\"nofollow\">エクセルやgoogle spreadsheetからの連携</a>です</li><li>実利用向け事業所がすでにある場合は利用、ない場合は作成します（セットアップで作成したのは開発者向け環境のため活用不可）</li><li><a href=\"https://developer.freee.co.jp/docs/accounting/reference\" class=\"external-link\" rel=\"nofollow\">API documentation</a><span>&nbsp;を参照し、躓いた場合は</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/community/forum/community\" class=\"external-link\" rel=\"nofollow\">Community</a><span>&nbsp;で質問してみましょう</span></li></ul> </ol> <p>アプリケーションの登録方法や認証方法、またはAPIの活用方法でご不明な点がある場合は<a href=\"https://support.freee.co.jp/hc/ja/sections/115000030743\">ヘルプセンター</a>もご確認ください</p> <hr /> <h2 id=\"_2\">仕様</h2>  <h3 id=\"api\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"_3\">認証方式</h3>  <p><a href=\"http://tools.ietf.org/html/rfc6749\">OAuth2</a>に対応</p>  <ul> <li>Authorization Code Flow (Webアプリ向け)</li>  <li>Implicit Flow (Mobileアプリ向け)</li> </ul>  <h3 id=\"_4\">認証エンドポイント</h3>  <p>https://accounts.secure.freee.co.jp/</p>  <ul> <li>authorize : https://accounts.secure.freee.co.jp/public_api/authorize</li>  <li>token : https://accounts.secure.freee.co.jp/public_api/token</li> </ul>  <h3 id=\"_5\">アクセストークンのリフレッシュ</h3>  <p>認証時に得たrefresh_token を使ってtoken の期限をリフレッシュして新規に発行することが出来ます。</p>  <p>grant_type=refresh_token で https://accounts.secure.freee.co.jp/public_api/token にアクセスすればリフレッシュされます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/token</p>  <p>params: grant_type=refresh_token&amp;client_id=UID&amp;client_secret=SECRET&amp;refresh_token=REFRESH_TOKEN</p>  <p>詳細は<a href=\"https://github.com/applicake/doorkeeper/wiki/Enable-Refresh-Token-Credentials#flow\">refresh_token</a>を参照下さい。</p>  <h3 id=\"_6\">アクセストークンの破棄</h3>  <p>認証時に得たaccess_tokenまたはrefresh_tokenを使って、tokenを破棄することができます。 token=access_tokenまたはtoken=refresh_tokenでhttps://accounts.secure.freee.co.jp/public_api/revokeにアクセスすると破棄されます。token_type_hintでaccess_tokenまたはrefresh_tokenを陽に指定できます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/revoke</p>  <p>params: token=ACCESS_TOKEN</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN</p>  <p>または</p>  <p>params: token=ACCESS_TOKEN&amp;token_type_hint=access_token</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN&amp;token_type_hint=refresh_token</p>  <p>詳細は <a href=\"https://tools.ietf.org/html/rfc7009\">OAuth 2.0 Token revocation</a> をご参照ください。</p>  <h3 id=\"_7\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポート</p>  <h3 id=\"_8\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"_9\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li>  <li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre> <hr /> <h2 id=\"_10\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Freee\Accounting\Model;

use \ArrayAccess;
use \Freee\Accounting\ObjectSerializer;

/**
 * InvoicesCreateParams Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoicesCreateParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'invoicesCreateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'int',
        'issue_date' => 'string',
        'partner_id' => 'int',
        'partner_code' => 'string',
        'invoice_number' => 'string',
        'title' => 'string',
        'due_date' => 'string',
        'booking_date' => 'string',
        'description' => 'string',
        'invoice_status' => 'string',
        'partner_name' => 'string',
        'partner_title' => 'string',
        'partner_contact_info' => 'string',
        'company_name' => 'string',
        'company_zipcode' => 'string',
        'company_prefecture_code' => 'int',
        'company_address1' => 'string',
        'company_address2' => 'string',
        'company_contact_info' => 'string',
        'payment_type' => 'string',
        'payment_bank_info' => 'string',
        'use_virtual_transfer_account' => 'string',
        'message' => 'string',
        'notes' => 'string',
        'invoice_layout' => 'string',
        'tax_entry_method' => 'string',
        'invoice_contents' => '\Freee\Accounting\Model\InvoicesCreateParamsInvoiceContents[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'company_id' => null,
        'issue_date' => null,
        'partner_id' => null,
        'partner_code' => null,
        'invoice_number' => null,
        'title' => null,
        'due_date' => null,
        'booking_date' => null,
        'description' => null,
        'invoice_status' => null,
        'partner_name' => null,
        'partner_title' => null,
        'partner_contact_info' => null,
        'company_name' => null,
        'company_zipcode' => null,
        'company_prefecture_code' => null,
        'company_address1' => null,
        'company_address2' => null,
        'company_contact_info' => null,
        'payment_type' => null,
        'payment_bank_info' => null,
        'use_virtual_transfer_account' => null,
        'message' => null,
        'notes' => null,
        'invoice_layout' => null,
        'tax_entry_method' => null,
        'invoice_contents' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'company_id' => 'company_id',
        'issue_date' => 'issue_date',
        'partner_id' => 'partner_id',
        'partner_code' => 'partner_code',
        'invoice_number' => 'invoice_number',
        'title' => 'title',
        'due_date' => 'due_date',
        'booking_date' => 'booking_date',
        'description' => 'description',
        'invoice_status' => 'invoice_status',
        'partner_name' => 'partner_name',
        'partner_title' => 'partner_title',
        'partner_contact_info' => 'partner_contact_info',
        'company_name' => 'company_name',
        'company_zipcode' => 'company_zipcode',
        'company_prefecture_code' => 'company_prefecture_code',
        'company_address1' => 'company_address1',
        'company_address2' => 'company_address2',
        'company_contact_info' => 'company_contact_info',
        'payment_type' => 'payment_type',
        'payment_bank_info' => 'payment_bank_info',
        'use_virtual_transfer_account' => 'use_virtual_transfer_account',
        'message' => 'message',
        'notes' => 'notes',
        'invoice_layout' => 'invoice_layout',
        'tax_entry_method' => 'tax_entry_method',
        'invoice_contents' => 'invoice_contents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'issue_date' => 'setIssueDate',
        'partner_id' => 'setPartnerId',
        'partner_code' => 'setPartnerCode',
        'invoice_number' => 'setInvoiceNumber',
        'title' => 'setTitle',
        'due_date' => 'setDueDate',
        'booking_date' => 'setBookingDate',
        'description' => 'setDescription',
        'invoice_status' => 'setInvoiceStatus',
        'partner_name' => 'setPartnerName',
        'partner_title' => 'setPartnerTitle',
        'partner_contact_info' => 'setPartnerContactInfo',
        'company_name' => 'setCompanyName',
        'company_zipcode' => 'setCompanyZipcode',
        'company_prefecture_code' => 'setCompanyPrefectureCode',
        'company_address1' => 'setCompanyAddress1',
        'company_address2' => 'setCompanyAddress2',
        'company_contact_info' => 'setCompanyContactInfo',
        'payment_type' => 'setPaymentType',
        'payment_bank_info' => 'setPaymentBankInfo',
        'use_virtual_transfer_account' => 'setUseVirtualTransferAccount',
        'message' => 'setMessage',
        'notes' => 'setNotes',
        'invoice_layout' => 'setInvoiceLayout',
        'tax_entry_method' => 'setTaxEntryMethod',
        'invoice_contents' => 'setInvoiceContents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'issue_date' => 'getIssueDate',
        'partner_id' => 'getPartnerId',
        'partner_code' => 'getPartnerCode',
        'invoice_number' => 'getInvoiceNumber',
        'title' => 'getTitle',
        'due_date' => 'getDueDate',
        'booking_date' => 'getBookingDate',
        'description' => 'getDescription',
        'invoice_status' => 'getInvoiceStatus',
        'partner_name' => 'getPartnerName',
        'partner_title' => 'getPartnerTitle',
        'partner_contact_info' => 'getPartnerContactInfo',
        'company_name' => 'getCompanyName',
        'company_zipcode' => 'getCompanyZipcode',
        'company_prefecture_code' => 'getCompanyPrefectureCode',
        'company_address1' => 'getCompanyAddress1',
        'company_address2' => 'getCompanyAddress2',
        'company_contact_info' => 'getCompanyContactInfo',
        'payment_type' => 'getPaymentType',
        'payment_bank_info' => 'getPaymentBankInfo',
        'use_virtual_transfer_account' => 'getUseVirtualTransferAccount',
        'message' => 'getMessage',
        'notes' => 'getNotes',
        'invoice_layout' => 'getInvoiceLayout',
        'tax_entry_method' => 'getTaxEntryMethod',
        'invoice_contents' => 'getInvoiceContents'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const INVOICE_STATUS_DRAFT = 'draft';
    const INVOICE_STATUS_ISSUE = 'issue';
    const PAYMENT_TYPE_TRANSFER = 'transfer';
    const PAYMENT_TYPE_DIRECT_DEBIT = 'direct_debit';
    const USE_VIRTUAL_TRANSFER_ACCOUNT_NOT_USE = 'not_use';
    const USE_VIRTUAL_TRANSFER_ACCOUNT__USE = 'use';
    const INVOICE_LAYOUT_DEFAULT_CLASSIC = 'default_classic';
    const INVOICE_LAYOUT_STANDARD_CLASSIC = 'standard_classic';
    const INVOICE_LAYOUT_ENVELOPE_CLASSIC = 'envelope_classic';
    const INVOICE_LAYOUT_CARRIED_FORWARD_STANDARD_CLASSIC = 'carried_forward_standard_classic';
    const INVOICE_LAYOUT_CARRIED_FORWARD_ENVELOPE_CLASSIC = 'carried_forward_envelope_classic';
    const INVOICE_LAYOUT_DEFAULT_MODERN = 'default_modern';
    const INVOICE_LAYOUT_STANDARD_MODERN = 'standard_modern';
    const INVOICE_LAYOUT_ENVELOPE_MODERN = 'envelope_modern';
    const TAX_ENTRY_METHOD_INCLUSIVE = 'inclusive';
    const TAX_ENTRY_METHOD_EXCLUSIVE = 'exclusive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceStatusAllowableValues()
    {
        return [
            self::INVOICE_STATUS_DRAFT,
            self::INVOICE_STATUS_ISSUE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_TRANSFER,
            self::PAYMENT_TYPE_DIRECT_DEBIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUseVirtualTransferAccountAllowableValues()
    {
        return [
            self::USE_VIRTUAL_TRANSFER_ACCOUNT_NOT_USE,
            self::USE_VIRTUAL_TRANSFER_ACCOUNT__USE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceLayoutAllowableValues()
    {
        return [
            self::INVOICE_LAYOUT_DEFAULT_CLASSIC,
            self::INVOICE_LAYOUT_STANDARD_CLASSIC,
            self::INVOICE_LAYOUT_ENVELOPE_CLASSIC,
            self::INVOICE_LAYOUT_CARRIED_FORWARD_STANDARD_CLASSIC,
            self::INVOICE_LAYOUT_CARRIED_FORWARD_ENVELOPE_CLASSIC,
            self::INVOICE_LAYOUT_DEFAULT_MODERN,
            self::INVOICE_LAYOUT_STANDARD_MODERN,
            self::INVOICE_LAYOUT_ENVELOPE_MODERN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxEntryMethodAllowableValues()
    {
        return [
            self::TAX_ENTRY_METHOD_INCLUSIVE,
            self::TAX_ENTRY_METHOD_EXCLUSIVE,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['partner_code'] = isset($data['partner_code']) ? $data['partner_code'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['booking_date'] = isset($data['booking_date']) ? $data['booking_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['invoice_status'] = isset($data['invoice_status']) ? $data['invoice_status'] : null;
        $this->container['partner_name'] = isset($data['partner_name']) ? $data['partner_name'] : null;
        $this->container['partner_title'] = isset($data['partner_title']) ? $data['partner_title'] : null;
        $this->container['partner_contact_info'] = isset($data['partner_contact_info']) ? $data['partner_contact_info'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_zipcode'] = isset($data['company_zipcode']) ? $data['company_zipcode'] : null;
        $this->container['company_prefecture_code'] = isset($data['company_prefecture_code']) ? $data['company_prefecture_code'] : null;
        $this->container['company_address1'] = isset($data['company_address1']) ? $data['company_address1'] : null;
        $this->container['company_address2'] = isset($data['company_address2']) ? $data['company_address2'] : null;
        $this->container['company_contact_info'] = isset($data['company_contact_info']) ? $data['company_contact_info'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['payment_bank_info'] = isset($data['payment_bank_info']) ? $data['payment_bank_info'] : null;
        $this->container['use_virtual_transfer_account'] = isset($data['use_virtual_transfer_account']) ? $data['use_virtual_transfer_account'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['invoice_layout'] = isset($data['invoice_layout']) ? $data['invoice_layout'] : null;
        $this->container['tax_entry_method'] = isset($data['tax_entry_method']) ? $data['tax_entry_method'] : null;
        $this->container['invoice_contents'] = isset($data['invoice_contents']) ? $data['invoice_contents'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 999999999999.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be smaller than or equal to 999999999999.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!is_null($this->container['invoice_status']) && !in_array($this->container['invoice_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['company_prefecture_code']) && ($this->container['company_prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'company_prefecture_code', must be smaller than or equal to 46.";
        }

        if (!is_null($this->container['company_prefecture_code']) && ($this->container['company_prefecture_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'company_prefecture_code', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUseVirtualTransferAccountAllowableValues();
        if (!is_null($this->container['use_virtual_transfer_account']) && !in_array($this->container['use_virtual_transfer_account'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'use_virtual_transfer_account', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInvoiceLayoutAllowableValues();
        if (!is_null($this->container['invoice_layout']) && !in_array($this->container['invoice_layout'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_layout', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTaxEntryMethodAllowableValues();
        if (!is_null($this->container['tax_entry_method']) && !in_array($this->container['tax_entry_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_entry_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id 事業所ID
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {

        if (($company_id > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling InvoicesCreateParams., must be smaller than or equal to 999999999999.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling InvoicesCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string|null $issue_date 請求日 (yyyy-mm-dd)
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int|null $partner_id 取引先ID
     *
     * @return $this
     */
    public function setPartnerId($partner_id)
    {

        if (!is_null($partner_id) && ($partner_id > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling InvoicesCreateParams., must be smaller than or equal to 999999999999.');
        }
        if (!is_null($partner_id) && ($partner_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling InvoicesCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner_code
     *
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->container['partner_code'];
    }

    /**
     * Sets partner_code
     *
     * @param string|null $partner_code 取引先コード
     *
     * @return $this
     */
    public function setPartnerCode($partner_code)
    {
        $this->container['partner_code'] = $partner_code;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number 請求書番号 (デフォルト: 自動採番されます)
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title タイトル (デフォルト: 請求書)
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string|null $due_date 期日 (yyyy-mm-dd)
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets booking_date
     *
     * @return string|null
     */
    public function getBookingDate()
    {
        return $this->container['booking_date'];
    }

    /**
     * Sets booking_date
     *
     * @param string|null $booking_date 売上計上日
     *
     * @return $this
     */
    public function setBookingDate($booking_date)
    {
        $this->container['booking_date'] = $booking_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 概要
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets invoice_status
     *
     * @return string|null
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoice_status'];
    }

    /**
     * Sets invoice_status
     *
     * @param string|null $invoice_status 請求書ステータス  (draft: 下書き (デフォルト), issue: 発行(請求先ワークフローを利用している場合は指定できません))
     *
     * @return $this
     */
    public function setInvoiceStatus($invoice_status)
    {
        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!is_null($invoice_status) && !in_array($invoice_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_status'] = $invoice_status;

        return $this;
    }

    /**
     * Gets partner_name
     *
     * @return string|null
     */
    public function getPartnerName()
    {
        return $this->container['partner_name'];
    }

    /**
     * Sets partner_name
     *
     * @param string|null $partner_name 取引先名
     *
     * @return $this
     */
    public function setPartnerName($partner_name)
    {
        $this->container['partner_name'] = $partner_name;

        return $this;
    }

    /**
     * Gets partner_title
     *
     * @return string|null
     */
    public function getPartnerTitle()
    {
        return $this->container['partner_title'];
    }

    /**
     * Sets partner_title
     *
     * @param string|null $partner_title 敬称（御中、様、(空白)の3つから選択）
     *
     * @return $this
     */
    public function setPartnerTitle($partner_title)
    {
        $this->container['partner_title'] = $partner_title;

        return $this;
    }

    /**
     * Gets partner_contact_info
     *
     * @return string|null
     */
    public function getPartnerContactInfo()
    {
        return $this->container['partner_contact_info'];
    }

    /**
     * Sets partner_contact_info
     *
     * @param string|null $partner_contact_info 取引先担当者名
     *
     * @return $this
     */
    public function setPartnerContactInfo($partner_contact_info)
    {
        $this->container['partner_contact_info'] = $partner_contact_info;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name 事業所名 (デフォルトは事業所設定情報が補完されます)
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_zipcode
     *
     * @return string|null
     */
    public function getCompanyZipcode()
    {
        return $this->container['company_zipcode'];
    }

    /**
     * Sets company_zipcode
     *
     * @param string|null $company_zipcode 郵便番号 (デフォルトは事業所設定情報が補完されます)
     *
     * @return $this
     */
    public function setCompanyZipcode($company_zipcode)
    {
        $this->container['company_zipcode'] = $company_zipcode;

        return $this;
    }

    /**
     * Gets company_prefecture_code
     *
     * @return int|null
     */
    public function getCompanyPrefectureCode()
    {
        return $this->container['company_prefecture_code'];
    }

    /**
     * Sets company_prefecture_code
     *
     * @param int|null $company_prefecture_code 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄 ) (デフォルトは事業所設定情報が補完されます)
     *
     * @return $this
     */
    public function setCompanyPrefectureCode($company_prefecture_code)
    {

        if (!is_null($company_prefecture_code) && ($company_prefecture_code > 46)) {
            throw new \InvalidArgumentException('invalid value for $company_prefecture_code when calling InvoicesCreateParams., must be smaller than or equal to 46.');
        }
        if (!is_null($company_prefecture_code) && ($company_prefecture_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $company_prefecture_code when calling InvoicesCreateParams., must be bigger than or equal to 0.');
        }

        $this->container['company_prefecture_code'] = $company_prefecture_code;

        return $this;
    }

    /**
     * Gets company_address1
     *
     * @return string|null
     */
    public function getCompanyAddress1()
    {
        return $this->container['company_address1'];
    }

    /**
     * Sets company_address1
     *
     * @param string|null $company_address1 市区町村・番地 (デフォルトは事業所設定情報が補完されます)
     *
     * @return $this
     */
    public function setCompanyAddress1($company_address1)
    {
        $this->container['company_address1'] = $company_address1;

        return $this;
    }

    /**
     * Gets company_address2
     *
     * @return string|null
     */
    public function getCompanyAddress2()
    {
        return $this->container['company_address2'];
    }

    /**
     * Sets company_address2
     *
     * @param string|null $company_address2 建物名・部屋番号など (デフォルトは事業所設定情報が補完されます)
     *
     * @return $this
     */
    public function setCompanyAddress2($company_address2)
    {
        $this->container['company_address2'] = $company_address2;

        return $this;
    }

    /**
     * Gets company_contact_info
     *
     * @return string|null
     */
    public function getCompanyContactInfo()
    {
        return $this->container['company_contact_info'];
    }

    /**
     * Sets company_contact_info
     *
     * @param string|null $company_contact_info 事業所担当者名 (デフォルトは事業所設定情報が補完されます)
     *
     * @return $this
     */
    public function setCompanyContactInfo($company_contact_info)
    {
        $this->container['company_contact_info'] = $company_contact_info;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string|null $payment_type 支払方法 (振込: transfer, 引き落とし: direct_debit)
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($payment_type) && !in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets payment_bank_info
     *
     * @return string|null
     */
    public function getPaymentBankInfo()
    {
        return $this->container['payment_bank_info'];
    }

    /**
     * Sets payment_bank_info
     *
     * @param string|null $payment_bank_info 支払口座
     *
     * @return $this
     */
    public function setPaymentBankInfo($payment_bank_info)
    {
        $this->container['payment_bank_info'] = $payment_bank_info;

        return $this;
    }

    /**
     * Gets use_virtual_transfer_account
     *
     * @return string|null
     */
    public function getUseVirtualTransferAccount()
    {
        return $this->container['use_virtual_transfer_account'];
    }

    /**
     * Sets use_virtual_transfer_account
     *
     * @param string|null $use_virtual_transfer_account 振込専用口座の利用(利用しない: not_use(デフォルト), 利用する: use)
     *
     * @return $this
     */
    public function setUseVirtualTransferAccount($use_virtual_transfer_account)
    {
        $allowedValues = $this->getUseVirtualTransferAccountAllowableValues();
        if (!is_null($use_virtual_transfer_account) && !in_array($use_virtual_transfer_account, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'use_virtual_transfer_account', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['use_virtual_transfer_account'] = $use_virtual_transfer_account;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message メッセージ (デフォルト: 下記の通りご請求申し上げます。)
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes 備考
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets invoice_layout
     *
     * @return string|null
     */
    public function getInvoiceLayout()
    {
        return $this->container['invoice_layout'];
    }

    /**
     * Sets invoice_layout
     *
     * @param string|null $invoice_layout レイアウト(default_classic: レイアウト１/クラシック (デフォルト), standard_classic: レイアウト２/クラシック, envelope_classic: 封筒１/クラシック, carried_forward_standard_classic: レイアウト３（繰越金額欄あり）/クラシック, carried_forward_envelope_classic: 封筒２（繰越金額欄あり）/クラシック, default_modern: レイアウト１/モダン, standard_modern: レイアウト２/モダン, envelope_modern: 封筒/モダン)
     *
     * @return $this
     */
    public function setInvoiceLayout($invoice_layout)
    {
        $allowedValues = $this->getInvoiceLayoutAllowableValues();
        if (!is_null($invoice_layout) && !in_array($invoice_layout, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_layout', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_layout'] = $invoice_layout;

        return $this;
    }

    /**
     * Gets tax_entry_method
     *
     * @return string|null
     */
    public function getTaxEntryMethod()
    {
        return $this->container['tax_entry_method'];
    }

    /**
     * Sets tax_entry_method
     *
     * @param string|null $tax_entry_method 請求書の消費税計算方法(inclusive: 内税表示, exclusive: 外税表示 (デフォルト))
     *
     * @return $this
     */
    public function setTaxEntryMethod($tax_entry_method)
    {
        $allowedValues = $this->getTaxEntryMethodAllowableValues();
        if (!is_null($tax_entry_method) && !in_array($tax_entry_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_entry_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_entry_method'] = $tax_entry_method;

        return $this;
    }

    /**
     * Gets invoice_contents
     *
     * @return \Freee\Accounting\Model\InvoicesCreateParamsInvoiceContents[]|null
     */
    public function getInvoiceContents()
    {
        return $this->container['invoice_contents'];
    }

    /**
     * Sets invoice_contents
     *
     * @param \Freee\Accounting\Model\InvoicesCreateParamsInvoiceContents[]|null $invoice_contents 請求内容
     *
     * @return $this
     */
    public function setInvoiceContents($invoice_contents)
    {
        $this->container['invoice_contents'] = $invoice_contents;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


