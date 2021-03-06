<?php
/**
 * FiscalYears
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
 * FiscalYears Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FiscalYears implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fiscal_years';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'use_industry_template' => 'bool',
        'indirect_write_off_method' => 'bool',
        'start_date' => 'string',
        'end_date' => 'string',
        'depreciation_record_method' => 'int',
        'tax_method' => 'int',
        'sales_tax_business_code' => 'int',
        'tax_fraction' => 'int',
        'tax_account_method' => 'int',
        'return_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'use_industry_template' => null,
        'indirect_write_off_method' => null,
        'start_date' => null,
        'end_date' => null,
        'depreciation_record_method' => null,
        'tax_method' => null,
        'sales_tax_business_code' => null,
        'tax_fraction' => null,
        'tax_account_method' => null,
        'return_code' => null
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
        'use_industry_template' => 'use_industry_template',
        'indirect_write_off_method' => 'indirect_write_off_method',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'depreciation_record_method' => 'depreciation_record_method',
        'tax_method' => 'tax_method',
        'sales_tax_business_code' => 'sales_tax_business_code',
        'tax_fraction' => 'tax_fraction',
        'tax_account_method' => 'tax_account_method',
        'return_code' => 'return_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'use_industry_template' => 'setUseIndustryTemplate',
        'indirect_write_off_method' => 'setIndirectWriteOffMethod',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'depreciation_record_method' => 'setDepreciationRecordMethod',
        'tax_method' => 'setTaxMethod',
        'sales_tax_business_code' => 'setSalesTaxBusinessCode',
        'tax_fraction' => 'setTaxFraction',
        'tax_account_method' => 'setTaxAccountMethod',
        'return_code' => 'setReturnCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'use_industry_template' => 'getUseIndustryTemplate',
        'indirect_write_off_method' => 'getIndirectWriteOffMethod',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'depreciation_record_method' => 'getDepreciationRecordMethod',
        'tax_method' => 'getTaxMethod',
        'sales_tax_business_code' => 'getSalesTaxBusinessCode',
        'tax_fraction' => 'getTaxFraction',
        'tax_account_method' => 'getTaxAccountMethod',
        'return_code' => 'getReturnCode'
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
        $this->container['use_industry_template'] = isset($data['use_industry_template']) ? $data['use_industry_template'] : null;
        $this->container['indirect_write_off_method'] = isset($data['indirect_write_off_method']) ? $data['indirect_write_off_method'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['depreciation_record_method'] = isset($data['depreciation_record_method']) ? $data['depreciation_record_method'] : null;
        $this->container['tax_method'] = isset($data['tax_method']) ? $data['tax_method'] : null;
        $this->container['sales_tax_business_code'] = isset($data['sales_tax_business_code']) ? $data['sales_tax_business_code'] : null;
        $this->container['tax_fraction'] = isset($data['tax_fraction']) ? $data['tax_fraction'] : null;
        $this->container['tax_account_method'] = isset($data['tax_account_method']) ? $data['tax_account_method'] : null;
        $this->container['return_code'] = isset($data['return_code']) ? $data['return_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['use_industry_template'] === null) {
            $invalidProperties[] = "'use_industry_template' can't be null";
        }
        if ($this->container['indirect_write_off_method'] === null) {
            $invalidProperties[] = "'indirect_write_off_method' can't be null";
        }
        if ($this->container['depreciation_record_method'] === null) {
            $invalidProperties[] = "'depreciation_record_method' can't be null";
        }
        if (($this->container['depreciation_record_method'] > 1)) {
            $invalidProperties[] = "invalid value for 'depreciation_record_method', must be smaller than or equal to 1.";
        }

        if (($this->container['depreciation_record_method'] < 0)) {
            $invalidProperties[] = "invalid value for 'depreciation_record_method', must be bigger than or equal to 0.";
        }

        if ($this->container['tax_method'] === null) {
            $invalidProperties[] = "'tax_method' can't be null";
        }
        if (($this->container['tax_method'] > 4)) {
            $invalidProperties[] = "invalid value for 'tax_method', must be smaller than or equal to 4.";
        }

        if (($this->container['tax_method'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_method', must be bigger than or equal to 0.";
        }

        if ($this->container['sales_tax_business_code'] === null) {
            $invalidProperties[] = "'sales_tax_business_code' can't be null";
        }
        if (($this->container['sales_tax_business_code'] > 5)) {
            $invalidProperties[] = "invalid value for 'sales_tax_business_code', must be smaller than or equal to 5.";
        }

        if (($this->container['sales_tax_business_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'sales_tax_business_code', must be bigger than or equal to 0.";
        }

        if ($this->container['tax_fraction'] === null) {
            $invalidProperties[] = "'tax_fraction' can't be null";
        }
        if (($this->container['tax_fraction'] > 2)) {
            $invalidProperties[] = "invalid value for 'tax_fraction', must be smaller than or equal to 2.";
        }

        if (($this->container['tax_fraction'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_fraction', must be bigger than or equal to 0.";
        }

        if ($this->container['tax_account_method'] === null) {
            $invalidProperties[] = "'tax_account_method' can't be null";
        }
        if (($this->container['tax_account_method'] > 2)) {
            $invalidProperties[] = "invalid value for 'tax_account_method', must be smaller than or equal to 2.";
        }

        if (($this->container['tax_account_method'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_account_method', must be bigger than or equal to 0.";
        }

        if ($this->container['return_code'] === null) {
            $invalidProperties[] = "'return_code' can't be null";
        }
        if (($this->container['return_code'] > 1)) {
            $invalidProperties[] = "invalid value for 'return_code', must be smaller than or equal to 1.";
        }

        if (($this->container['return_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'return_code', must be bigger than or equal to 0.";
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
     * Gets use_industry_template
     *
     * @return bool
     */
    public function getUseIndustryTemplate()
    {
        return $this->container['use_industry_template'];
    }

    /**
     * Sets use_industry_template
     *
     * @param bool $use_industry_template 製造業向け機能（true: 使用する、false: 使用しない）
     *
     * @return $this
     */
    public function setUseIndustryTemplate($use_industry_template)
    {
        $this->container['use_industry_template'] = $use_industry_template;

        return $this;
    }

    /**
     * Gets indirect_write_off_method
     *
     * @return bool
     */
    public function getIndirectWriteOffMethod()
    {
        return $this->container['indirect_write_off_method'];
    }

    /**
     * Sets indirect_write_off_method
     *
     * @param bool $indirect_write_off_method 固定資産の控除法(false: 減価償却累計額でまとめる、true: 独立間接控除方式)
     *
     * @return $this
     */
    public function setIndirectWriteOffMethod($indirect_write_off_method)
    {
        $this->container['indirect_write_off_method'] = $indirect_write_off_method;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date 期首日
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date 期末日
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets depreciation_record_method
     *
     * @return int
     */
    public function getDepreciationRecordMethod()
    {
        return $this->container['depreciation_record_method'];
    }

    /**
     * Sets depreciation_record_method
     *
     * @param int $depreciation_record_method 月次償却（0: しない、1: する）
     *
     * @return $this
     */
    public function setDepreciationRecordMethod($depreciation_record_method)
    {

        if (($depreciation_record_method > 1)) {
            throw new \InvalidArgumentException('invalid value for $depreciation_record_method when calling FiscalYears., must be smaller than or equal to 1.');
        }
        if (($depreciation_record_method < 0)) {
            throw new \InvalidArgumentException('invalid value for $depreciation_record_method when calling FiscalYears., must be bigger than or equal to 0.');
        }

        $this->container['depreciation_record_method'] = $depreciation_record_method;

        return $this;
    }

    /**
     * Gets tax_method
     *
     * @return int
     */
    public function getTaxMethod()
    {
        return $this->container['tax_method'];
    }

    /**
     * Sets tax_method
     *
     * @param int $tax_method 課税区分（0: 免税、1: 簡易課税、2: 本則課税（個別対応方式）、3: 本則課税（一括比例配分方式）、4: 本則課税（全額控除））
     *
     * @return $this
     */
    public function setTaxMethod($tax_method)
    {

        if (($tax_method > 4)) {
            throw new \InvalidArgumentException('invalid value for $tax_method when calling FiscalYears., must be smaller than or equal to 4.');
        }
        if (($tax_method < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_method when calling FiscalYears., must be bigger than or equal to 0.');
        }

        $this->container['tax_method'] = $tax_method;

        return $this;
    }

    /**
     * Gets sales_tax_business_code
     *
     * @return int
     */
    public function getSalesTaxBusinessCode()
    {
        return $this->container['sales_tax_business_code'];
    }

    /**
     * Sets sales_tax_business_code
     *
     * @param int $sales_tax_business_code 簡易課税用事業区分（0: 第一種：卸売業、1: 第二種：小売業、2: 第三種：農林水産業、工業、建設業、製造業など、3: 第四種：飲食店業など、4: 第五種：金融・保険業、運輸通信業、サービス業など、5: 第六種：不動産業など
     *
     * @return $this
     */
    public function setSalesTaxBusinessCode($sales_tax_business_code)
    {

        if (($sales_tax_business_code > 5)) {
            throw new \InvalidArgumentException('invalid value for $sales_tax_business_code when calling FiscalYears., must be smaller than or equal to 5.');
        }
        if (($sales_tax_business_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $sales_tax_business_code when calling FiscalYears., must be bigger than or equal to 0.');
        }

        $this->container['sales_tax_business_code'] = $sales_tax_business_code;

        return $this;
    }

    /**
     * Gets tax_fraction
     *
     * @return int
     */
    public function getTaxFraction()
    {
        return $this->container['tax_fraction'];
    }

    /**
     * Sets tax_fraction
     *
     * @param int $tax_fraction 消費税端数処理方法（0: 切り捨て、1: 切り上げ、2: 四捨五入）
     *
     * @return $this
     */
    public function setTaxFraction($tax_fraction)
    {

        if (($tax_fraction > 2)) {
            throw new \InvalidArgumentException('invalid value for $tax_fraction when calling FiscalYears., must be smaller than or equal to 2.');
        }
        if (($tax_fraction < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_fraction when calling FiscalYears., must be bigger than or equal to 0.');
        }

        $this->container['tax_fraction'] = $tax_fraction;

        return $this;
    }

    /**
     * Gets tax_account_method
     *
     * @return int
     */
    public function getTaxAccountMethod()
    {
        return $this->container['tax_account_method'];
    }

    /**
     * Sets tax_account_method
     *
     * @param int $tax_account_method 消費税経理処理方法（0: 税込経理、1: 旧税抜経理、2: 税抜経理）
     *
     * @return $this
     */
    public function setTaxAccountMethod($tax_account_method)
    {

        if (($tax_account_method > 2)) {
            throw new \InvalidArgumentException('invalid value for $tax_account_method when calling FiscalYears., must be smaller than or equal to 2.');
        }
        if (($tax_account_method < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_account_method when calling FiscalYears., must be bigger than or equal to 0.');
        }

        $this->container['tax_account_method'] = $tax_account_method;

        return $this;
    }

    /**
     * Gets return_code
     *
     * @return int
     */
    public function getReturnCode()
    {
        return $this->container['return_code'];
    }

    /**
     * Sets return_code
     *
     * @param int $return_code 不動産所得使用区分（0: 一般、1: 一般/不動産） ※個人事業主のみ設定可能
     *
     * @return $this
     */
    public function setReturnCode($return_code)
    {

        if (($return_code > 1)) {
            throw new \InvalidArgumentException('invalid value for $return_code when calling FiscalYears., must be smaller than or equal to 1.');
        }
        if (($return_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $return_code when calling FiscalYears., must be bigger than or equal to 0.');
        }

        $this->container['return_code'] = $return_code;

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


