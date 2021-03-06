<?php
/**
 * UsersCapabilitiesResponse
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
 * UsersCapabilitiesResponse Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsersCapabilitiesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'usersCapabilitiesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wallet_txns' => '\Freee\Accounting\Model\UsersCapability',
        'deals' => '\Freee\Accounting\Model\UsersCapability',
        'transfers' => '\Freee\Accounting\Model\UsersCapability',
        'docs' => '\Freee\Accounting\Model\UsersCapability',
        'doc_postings' => '\Freee\Accounting\Model\UsersCapability',
        'receipts' => '\Freee\Accounting\Model\UsersCapability',
        'receipt_stream_editor' => '\Freee\Accounting\Model\UsersCapability',
        'expense_applications' => '\Freee\Accounting\Model\UsersCapability',
        'spreadsheets' => '\Freee\Accounting\Model\UsersCapability',
        'payment_requests' => '\Freee\Accounting\Model\UsersCapability',
        'request_forms' => '\Freee\Accounting\Model\UsersCapability',
        'approval_requests' => '\Freee\Accounting\Model\UsersCapability',
        'reports' => '\Freee\Accounting\Model\UsersCapability',
        'reports_income_expense' => '\Freee\Accounting\Model\UsersCapability',
        'reports_receivables' => '\Freee\Accounting\Model\UsersCapability',
        'reports_payables' => '\Freee\Accounting\Model\UsersCapability',
        'reports_cash_balance' => '\Freee\Accounting\Model\UsersCapability',
        'reports_crosstabs' => '\Freee\Accounting\Model\UsersCapability',
        'reports_general_ledgers' => '\Freee\Accounting\Model\UsersCapability',
        'reports_pl' => '\Freee\Accounting\Model\UsersCapability',
        'reports_bs' => '\Freee\Accounting\Model\UsersCapability',
        'reports_journals' => '\Freee\Accounting\Model\UsersCapability',
        'reports_managements_planning' => '\Freee\Accounting\Model\UsersCapability',
        'reports_managements_navigation' => '\Freee\Accounting\Model\UsersCapability',
        'manual_journals' => '\Freee\Accounting\Model\UsersCapability',
        'fixed_assets' => '\Freee\Accounting\Model\UsersCapability',
        'inventory_refreshes' => '\Freee\Accounting\Model\UsersCapability',
        'biz_allocations' => '\Freee\Accounting\Model\UsersCapability',
        'payment_records' => '\Freee\Accounting\Model\UsersCapability',
        'annual_reports' => '\Freee\Accounting\Model\UsersCapability',
        'tax_reports' => '\Freee\Accounting\Model\UsersCapability',
        'consumption_entries' => '\Freee\Accounting\Model\UsersCapability',
        'tax_return' => '\Freee\Accounting\Model\UsersCapability',
        'account_item_statements' => '\Freee\Accounting\Model\UsersCapability',
        'month_end' => '\Freee\Accounting\Model\UsersCapability',
        'year_end' => '\Freee\Accounting\Model\UsersCapability',
        'walletables' => '\Freee\Accounting\Model\UsersCapability',
        'companies' => '\Freee\Accounting\Model\UsersCapability',
        'invitations' => '\Freee\Accounting\Model\UsersCapability',
        'sign_in_logs' => '\Freee\Accounting\Model\UsersCapability',
        'backups' => '\Freee\Accounting\Model\UsersCapability',
        'opening_balances' => '\Freee\Accounting\Model\UsersCapability',
        'system_conversion' => '\Freee\Accounting\Model\UsersCapability',
        'resets' => '\Freee\Accounting\Model\UsersCapability',
        'partners' => '\Freee\Accounting\Model\UsersCapability',
        'items' => '\Freee\Accounting\Model\UsersCapability',
        'sections' => '\Freee\Accounting\Model\UsersCapability',
        'tags' => '\Freee\Accounting\Model\UsersCapability',
        'account_items' => '\Freee\Accounting\Model\UsersCapability',
        'taxes' => '\Freee\Accounting\Model\UsersCapability',
        'user_matchers' => '\Freee\Accounting\Model\UsersCapability',
        'deal_templates' => '\Freee\Accounting\Model\UsersCapability',
        'manual_journal_templates' => '\Freee\Accounting\Model\UsersCapability',
        'cost_allocations' => '\Freee\Accounting\Model\UsersCapability',
        'approval_flow_routes' => '\Freee\Accounting\Model\UsersCapability',
        'expense_application_templates' => '\Freee\Accounting\Model\UsersCapability',
        'workflows' => '\Freee\Accounting\Model\UsersCapability',
        'oauth_applications' => '\Freee\Accounting\Model\UsersCapability',
        'oauth_authorizations' => '\Freee\Accounting\Model\UsersCapability',
        'bank_accountant_staff_users' => '\Freee\Accounting\Model\UsersCapability'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'wallet_txns' => null,
        'deals' => null,
        'transfers' => null,
        'docs' => null,
        'doc_postings' => null,
        'receipts' => null,
        'receipt_stream_editor' => null,
        'expense_applications' => null,
        'spreadsheets' => null,
        'payment_requests' => null,
        'request_forms' => null,
        'approval_requests' => null,
        'reports' => null,
        'reports_income_expense' => null,
        'reports_receivables' => null,
        'reports_payables' => null,
        'reports_cash_balance' => null,
        'reports_crosstabs' => null,
        'reports_general_ledgers' => null,
        'reports_pl' => null,
        'reports_bs' => null,
        'reports_journals' => null,
        'reports_managements_planning' => null,
        'reports_managements_navigation' => null,
        'manual_journals' => null,
        'fixed_assets' => null,
        'inventory_refreshes' => null,
        'biz_allocations' => null,
        'payment_records' => null,
        'annual_reports' => null,
        'tax_reports' => null,
        'consumption_entries' => null,
        'tax_return' => null,
        'account_item_statements' => null,
        'month_end' => null,
        'year_end' => null,
        'walletables' => null,
        'companies' => null,
        'invitations' => null,
        'sign_in_logs' => null,
        'backups' => null,
        'opening_balances' => null,
        'system_conversion' => null,
        'resets' => null,
        'partners' => null,
        'items' => null,
        'sections' => null,
        'tags' => null,
        'account_items' => null,
        'taxes' => null,
        'user_matchers' => null,
        'deal_templates' => null,
        'manual_journal_templates' => null,
        'cost_allocations' => null,
        'approval_flow_routes' => null,
        'expense_application_templates' => null,
        'workflows' => null,
        'oauth_applications' => null,
        'oauth_authorizations' => null,
        'bank_accountant_staff_users' => null
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
        'wallet_txns' => 'wallet_txns',
        'deals' => 'deals',
        'transfers' => 'transfers',
        'docs' => 'docs',
        'doc_postings' => 'doc_postings',
        'receipts' => 'receipts',
        'receipt_stream_editor' => 'receipt_stream_editor',
        'expense_applications' => 'expense_applications',
        'spreadsheets' => 'spreadsheets',
        'payment_requests' => 'payment_requests',
        'request_forms' => 'request_forms',
        'approval_requests' => 'approval_requests',
        'reports' => 'reports',
        'reports_income_expense' => 'reports_income_expense',
        'reports_receivables' => 'reports_receivables',
        'reports_payables' => 'reports_payables',
        'reports_cash_balance' => 'reports_cash_balance',
        'reports_crosstabs' => 'reports_crosstabs',
        'reports_general_ledgers' => 'reports_general_ledgers',
        'reports_pl' => 'reports_pl',
        'reports_bs' => 'reports_bs',
        'reports_journals' => 'reports_journals',
        'reports_managements_planning' => 'reports_managements_planning',
        'reports_managements_navigation' => 'reports_managements_navigation',
        'manual_journals' => 'manual_journals',
        'fixed_assets' => 'fixed_assets',
        'inventory_refreshes' => 'inventory_refreshes',
        'biz_allocations' => 'biz_allocations',
        'payment_records' => 'payment_records',
        'annual_reports' => 'annual_reports',
        'tax_reports' => 'tax_reports',
        'consumption_entries' => 'consumption_entries',
        'tax_return' => 'tax_return',
        'account_item_statements' => 'account_item_statements',
        'month_end' => 'month_end',
        'year_end' => 'year_end',
        'walletables' => 'walletables',
        'companies' => 'companies',
        'invitations' => 'invitations',
        'sign_in_logs' => 'sign_in_logs',
        'backups' => 'backups',
        'opening_balances' => 'opening_balances',
        'system_conversion' => 'system_conversion',
        'resets' => 'resets',
        'partners' => 'partners',
        'items' => 'items',
        'sections' => 'sections',
        'tags' => 'tags',
        'account_items' => 'account_items',
        'taxes' => 'taxes',
        'user_matchers' => 'user_matchers',
        'deal_templates' => 'deal_templates',
        'manual_journal_templates' => 'manual_journal_templates',
        'cost_allocations' => 'cost_allocations',
        'approval_flow_routes' => 'approval_flow_routes',
        'expense_application_templates' => 'expense_application_templates',
        'workflows' => 'workflows',
        'oauth_applications' => 'oauth_applications',
        'oauth_authorizations' => 'oauth_authorizations',
        'bank_accountant_staff_users' => 'bank_accountant_staff_users'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wallet_txns' => 'setWalletTxns',
        'deals' => 'setDeals',
        'transfers' => 'setTransfers',
        'docs' => 'setDocs',
        'doc_postings' => 'setDocPostings',
        'receipts' => 'setReceipts',
        'receipt_stream_editor' => 'setReceiptStreamEditor',
        'expense_applications' => 'setExpenseApplications',
        'spreadsheets' => 'setSpreadsheets',
        'payment_requests' => 'setPaymentRequests',
        'request_forms' => 'setRequestForms',
        'approval_requests' => 'setApprovalRequests',
        'reports' => 'setReports',
        'reports_income_expense' => 'setReportsIncomeExpense',
        'reports_receivables' => 'setReportsReceivables',
        'reports_payables' => 'setReportsPayables',
        'reports_cash_balance' => 'setReportsCashBalance',
        'reports_crosstabs' => 'setReportsCrosstabs',
        'reports_general_ledgers' => 'setReportsGeneralLedgers',
        'reports_pl' => 'setReportsPl',
        'reports_bs' => 'setReportsBs',
        'reports_journals' => 'setReportsJournals',
        'reports_managements_planning' => 'setReportsManagementsPlanning',
        'reports_managements_navigation' => 'setReportsManagementsNavigation',
        'manual_journals' => 'setManualJournals',
        'fixed_assets' => 'setFixedAssets',
        'inventory_refreshes' => 'setInventoryRefreshes',
        'biz_allocations' => 'setBizAllocations',
        'payment_records' => 'setPaymentRecords',
        'annual_reports' => 'setAnnualReports',
        'tax_reports' => 'setTaxReports',
        'consumption_entries' => 'setConsumptionEntries',
        'tax_return' => 'setTaxReturn',
        'account_item_statements' => 'setAccountItemStatements',
        'month_end' => 'setMonthEnd',
        'year_end' => 'setYearEnd',
        'walletables' => 'setWalletables',
        'companies' => 'setCompanies',
        'invitations' => 'setInvitations',
        'sign_in_logs' => 'setSignInLogs',
        'backups' => 'setBackups',
        'opening_balances' => 'setOpeningBalances',
        'system_conversion' => 'setSystemConversion',
        'resets' => 'setResets',
        'partners' => 'setPartners',
        'items' => 'setItems',
        'sections' => 'setSections',
        'tags' => 'setTags',
        'account_items' => 'setAccountItems',
        'taxes' => 'setTaxes',
        'user_matchers' => 'setUserMatchers',
        'deal_templates' => 'setDealTemplates',
        'manual_journal_templates' => 'setManualJournalTemplates',
        'cost_allocations' => 'setCostAllocations',
        'approval_flow_routes' => 'setApprovalFlowRoutes',
        'expense_application_templates' => 'setExpenseApplicationTemplates',
        'workflows' => 'setWorkflows',
        'oauth_applications' => 'setOauthApplications',
        'oauth_authorizations' => 'setOauthAuthorizations',
        'bank_accountant_staff_users' => 'setBankAccountantStaffUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wallet_txns' => 'getWalletTxns',
        'deals' => 'getDeals',
        'transfers' => 'getTransfers',
        'docs' => 'getDocs',
        'doc_postings' => 'getDocPostings',
        'receipts' => 'getReceipts',
        'receipt_stream_editor' => 'getReceiptStreamEditor',
        'expense_applications' => 'getExpenseApplications',
        'spreadsheets' => 'getSpreadsheets',
        'payment_requests' => 'getPaymentRequests',
        'request_forms' => 'getRequestForms',
        'approval_requests' => 'getApprovalRequests',
        'reports' => 'getReports',
        'reports_income_expense' => 'getReportsIncomeExpense',
        'reports_receivables' => 'getReportsReceivables',
        'reports_payables' => 'getReportsPayables',
        'reports_cash_balance' => 'getReportsCashBalance',
        'reports_crosstabs' => 'getReportsCrosstabs',
        'reports_general_ledgers' => 'getReportsGeneralLedgers',
        'reports_pl' => 'getReportsPl',
        'reports_bs' => 'getReportsBs',
        'reports_journals' => 'getReportsJournals',
        'reports_managements_planning' => 'getReportsManagementsPlanning',
        'reports_managements_navigation' => 'getReportsManagementsNavigation',
        'manual_journals' => 'getManualJournals',
        'fixed_assets' => 'getFixedAssets',
        'inventory_refreshes' => 'getInventoryRefreshes',
        'biz_allocations' => 'getBizAllocations',
        'payment_records' => 'getPaymentRecords',
        'annual_reports' => 'getAnnualReports',
        'tax_reports' => 'getTaxReports',
        'consumption_entries' => 'getConsumptionEntries',
        'tax_return' => 'getTaxReturn',
        'account_item_statements' => 'getAccountItemStatements',
        'month_end' => 'getMonthEnd',
        'year_end' => 'getYearEnd',
        'walletables' => 'getWalletables',
        'companies' => 'getCompanies',
        'invitations' => 'getInvitations',
        'sign_in_logs' => 'getSignInLogs',
        'backups' => 'getBackups',
        'opening_balances' => 'getOpeningBalances',
        'system_conversion' => 'getSystemConversion',
        'resets' => 'getResets',
        'partners' => 'getPartners',
        'items' => 'getItems',
        'sections' => 'getSections',
        'tags' => 'getTags',
        'account_items' => 'getAccountItems',
        'taxes' => 'getTaxes',
        'user_matchers' => 'getUserMatchers',
        'deal_templates' => 'getDealTemplates',
        'manual_journal_templates' => 'getManualJournalTemplates',
        'cost_allocations' => 'getCostAllocations',
        'approval_flow_routes' => 'getApprovalFlowRoutes',
        'expense_application_templates' => 'getExpenseApplicationTemplates',
        'workflows' => 'getWorkflows',
        'oauth_applications' => 'getOauthApplications',
        'oauth_authorizations' => 'getOauthAuthorizations',
        'bank_accountant_staff_users' => 'getBankAccountantStaffUsers'
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
        $this->container['wallet_txns'] = isset($data['wallet_txns']) ? $data['wallet_txns'] : null;
        $this->container['deals'] = isset($data['deals']) ? $data['deals'] : null;
        $this->container['transfers'] = isset($data['transfers']) ? $data['transfers'] : null;
        $this->container['docs'] = isset($data['docs']) ? $data['docs'] : null;
        $this->container['doc_postings'] = isset($data['doc_postings']) ? $data['doc_postings'] : null;
        $this->container['receipts'] = isset($data['receipts']) ? $data['receipts'] : null;
        $this->container['receipt_stream_editor'] = isset($data['receipt_stream_editor']) ? $data['receipt_stream_editor'] : null;
        $this->container['expense_applications'] = isset($data['expense_applications']) ? $data['expense_applications'] : null;
        $this->container['spreadsheets'] = isset($data['spreadsheets']) ? $data['spreadsheets'] : null;
        $this->container['payment_requests'] = isset($data['payment_requests']) ? $data['payment_requests'] : null;
        $this->container['request_forms'] = isset($data['request_forms']) ? $data['request_forms'] : null;
        $this->container['approval_requests'] = isset($data['approval_requests']) ? $data['approval_requests'] : null;
        $this->container['reports'] = isset($data['reports']) ? $data['reports'] : null;
        $this->container['reports_income_expense'] = isset($data['reports_income_expense']) ? $data['reports_income_expense'] : null;
        $this->container['reports_receivables'] = isset($data['reports_receivables']) ? $data['reports_receivables'] : null;
        $this->container['reports_payables'] = isset($data['reports_payables']) ? $data['reports_payables'] : null;
        $this->container['reports_cash_balance'] = isset($data['reports_cash_balance']) ? $data['reports_cash_balance'] : null;
        $this->container['reports_crosstabs'] = isset($data['reports_crosstabs']) ? $data['reports_crosstabs'] : null;
        $this->container['reports_general_ledgers'] = isset($data['reports_general_ledgers']) ? $data['reports_general_ledgers'] : null;
        $this->container['reports_pl'] = isset($data['reports_pl']) ? $data['reports_pl'] : null;
        $this->container['reports_bs'] = isset($data['reports_bs']) ? $data['reports_bs'] : null;
        $this->container['reports_journals'] = isset($data['reports_journals']) ? $data['reports_journals'] : null;
        $this->container['reports_managements_planning'] = isset($data['reports_managements_planning']) ? $data['reports_managements_planning'] : null;
        $this->container['reports_managements_navigation'] = isset($data['reports_managements_navigation']) ? $data['reports_managements_navigation'] : null;
        $this->container['manual_journals'] = isset($data['manual_journals']) ? $data['manual_journals'] : null;
        $this->container['fixed_assets'] = isset($data['fixed_assets']) ? $data['fixed_assets'] : null;
        $this->container['inventory_refreshes'] = isset($data['inventory_refreshes']) ? $data['inventory_refreshes'] : null;
        $this->container['biz_allocations'] = isset($data['biz_allocations']) ? $data['biz_allocations'] : null;
        $this->container['payment_records'] = isset($data['payment_records']) ? $data['payment_records'] : null;
        $this->container['annual_reports'] = isset($data['annual_reports']) ? $data['annual_reports'] : null;
        $this->container['tax_reports'] = isset($data['tax_reports']) ? $data['tax_reports'] : null;
        $this->container['consumption_entries'] = isset($data['consumption_entries']) ? $data['consumption_entries'] : null;
        $this->container['tax_return'] = isset($data['tax_return']) ? $data['tax_return'] : null;
        $this->container['account_item_statements'] = isset($data['account_item_statements']) ? $data['account_item_statements'] : null;
        $this->container['month_end'] = isset($data['month_end']) ? $data['month_end'] : null;
        $this->container['year_end'] = isset($data['year_end']) ? $data['year_end'] : null;
        $this->container['walletables'] = isset($data['walletables']) ? $data['walletables'] : null;
        $this->container['companies'] = isset($data['companies']) ? $data['companies'] : null;
        $this->container['invitations'] = isset($data['invitations']) ? $data['invitations'] : null;
        $this->container['sign_in_logs'] = isset($data['sign_in_logs']) ? $data['sign_in_logs'] : null;
        $this->container['backups'] = isset($data['backups']) ? $data['backups'] : null;
        $this->container['opening_balances'] = isset($data['opening_balances']) ? $data['opening_balances'] : null;
        $this->container['system_conversion'] = isset($data['system_conversion']) ? $data['system_conversion'] : null;
        $this->container['resets'] = isset($data['resets']) ? $data['resets'] : null;
        $this->container['partners'] = isset($data['partners']) ? $data['partners'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['sections'] = isset($data['sections']) ? $data['sections'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['account_items'] = isset($data['account_items']) ? $data['account_items'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['user_matchers'] = isset($data['user_matchers']) ? $data['user_matchers'] : null;
        $this->container['deal_templates'] = isset($data['deal_templates']) ? $data['deal_templates'] : null;
        $this->container['manual_journal_templates'] = isset($data['manual_journal_templates']) ? $data['manual_journal_templates'] : null;
        $this->container['cost_allocations'] = isset($data['cost_allocations']) ? $data['cost_allocations'] : null;
        $this->container['approval_flow_routes'] = isset($data['approval_flow_routes']) ? $data['approval_flow_routes'] : null;
        $this->container['expense_application_templates'] = isset($data['expense_application_templates']) ? $data['expense_application_templates'] : null;
        $this->container['workflows'] = isset($data['workflows']) ? $data['workflows'] : null;
        $this->container['oauth_applications'] = isset($data['oauth_applications']) ? $data['oauth_applications'] : null;
        $this->container['oauth_authorizations'] = isset($data['oauth_authorizations']) ? $data['oauth_authorizations'] : null;
        $this->container['bank_accountant_staff_users'] = isset($data['bank_accountant_staff_users']) ? $data['bank_accountant_staff_users'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['wallet_txns'] === null) {
            $invalidProperties[] = "'wallet_txns' can't be null";
        }
        if ($this->container['deals'] === null) {
            $invalidProperties[] = "'deals' can't be null";
        }
        if ($this->container['transfers'] === null) {
            $invalidProperties[] = "'transfers' can't be null";
        }
        if ($this->container['docs'] === null) {
            $invalidProperties[] = "'docs' can't be null";
        }
        if ($this->container['doc_postings'] === null) {
            $invalidProperties[] = "'doc_postings' can't be null";
        }
        if ($this->container['receipts'] === null) {
            $invalidProperties[] = "'receipts' can't be null";
        }
        if ($this->container['receipt_stream_editor'] === null) {
            $invalidProperties[] = "'receipt_stream_editor' can't be null";
        }
        if ($this->container['expense_applications'] === null) {
            $invalidProperties[] = "'expense_applications' can't be null";
        }
        if ($this->container['spreadsheets'] === null) {
            $invalidProperties[] = "'spreadsheets' can't be null";
        }
        if ($this->container['payment_requests'] === null) {
            $invalidProperties[] = "'payment_requests' can't be null";
        }
        if ($this->container['request_forms'] === null) {
            $invalidProperties[] = "'request_forms' can't be null";
        }
        if ($this->container['approval_requests'] === null) {
            $invalidProperties[] = "'approval_requests' can't be null";
        }
        if ($this->container['reports'] === null) {
            $invalidProperties[] = "'reports' can't be null";
        }
        if ($this->container['reports_income_expense'] === null) {
            $invalidProperties[] = "'reports_income_expense' can't be null";
        }
        if ($this->container['reports_receivables'] === null) {
            $invalidProperties[] = "'reports_receivables' can't be null";
        }
        if ($this->container['reports_payables'] === null) {
            $invalidProperties[] = "'reports_payables' can't be null";
        }
        if ($this->container['reports_cash_balance'] === null) {
            $invalidProperties[] = "'reports_cash_balance' can't be null";
        }
        if ($this->container['reports_crosstabs'] === null) {
            $invalidProperties[] = "'reports_crosstabs' can't be null";
        }
        if ($this->container['reports_general_ledgers'] === null) {
            $invalidProperties[] = "'reports_general_ledgers' can't be null";
        }
        if ($this->container['reports_pl'] === null) {
            $invalidProperties[] = "'reports_pl' can't be null";
        }
        if ($this->container['reports_bs'] === null) {
            $invalidProperties[] = "'reports_bs' can't be null";
        }
        if ($this->container['reports_journals'] === null) {
            $invalidProperties[] = "'reports_journals' can't be null";
        }
        if ($this->container['reports_managements_planning'] === null) {
            $invalidProperties[] = "'reports_managements_planning' can't be null";
        }
        if ($this->container['reports_managements_navigation'] === null) {
            $invalidProperties[] = "'reports_managements_navigation' can't be null";
        }
        if ($this->container['manual_journals'] === null) {
            $invalidProperties[] = "'manual_journals' can't be null";
        }
        if ($this->container['fixed_assets'] === null) {
            $invalidProperties[] = "'fixed_assets' can't be null";
        }
        if ($this->container['inventory_refreshes'] === null) {
            $invalidProperties[] = "'inventory_refreshes' can't be null";
        }
        if ($this->container['biz_allocations'] === null) {
            $invalidProperties[] = "'biz_allocations' can't be null";
        }
        if ($this->container['payment_records'] === null) {
            $invalidProperties[] = "'payment_records' can't be null";
        }
        if ($this->container['annual_reports'] === null) {
            $invalidProperties[] = "'annual_reports' can't be null";
        }
        if ($this->container['tax_reports'] === null) {
            $invalidProperties[] = "'tax_reports' can't be null";
        }
        if ($this->container['consumption_entries'] === null) {
            $invalidProperties[] = "'consumption_entries' can't be null";
        }
        if ($this->container['tax_return'] === null) {
            $invalidProperties[] = "'tax_return' can't be null";
        }
        if ($this->container['account_item_statements'] === null) {
            $invalidProperties[] = "'account_item_statements' can't be null";
        }
        if ($this->container['month_end'] === null) {
            $invalidProperties[] = "'month_end' can't be null";
        }
        if ($this->container['year_end'] === null) {
            $invalidProperties[] = "'year_end' can't be null";
        }
        if ($this->container['walletables'] === null) {
            $invalidProperties[] = "'walletables' can't be null";
        }
        if ($this->container['companies'] === null) {
            $invalidProperties[] = "'companies' can't be null";
        }
        if ($this->container['invitations'] === null) {
            $invalidProperties[] = "'invitations' can't be null";
        }
        if ($this->container['sign_in_logs'] === null) {
            $invalidProperties[] = "'sign_in_logs' can't be null";
        }
        if ($this->container['backups'] === null) {
            $invalidProperties[] = "'backups' can't be null";
        }
        if ($this->container['opening_balances'] === null) {
            $invalidProperties[] = "'opening_balances' can't be null";
        }
        if ($this->container['system_conversion'] === null) {
            $invalidProperties[] = "'system_conversion' can't be null";
        }
        if ($this->container['resets'] === null) {
            $invalidProperties[] = "'resets' can't be null";
        }
        if ($this->container['partners'] === null) {
            $invalidProperties[] = "'partners' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['sections'] === null) {
            $invalidProperties[] = "'sections' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['account_items'] === null) {
            $invalidProperties[] = "'account_items' can't be null";
        }
        if ($this->container['taxes'] === null) {
            $invalidProperties[] = "'taxes' can't be null";
        }
        if ($this->container['user_matchers'] === null) {
            $invalidProperties[] = "'user_matchers' can't be null";
        }
        if ($this->container['deal_templates'] === null) {
            $invalidProperties[] = "'deal_templates' can't be null";
        }
        if ($this->container['manual_journal_templates'] === null) {
            $invalidProperties[] = "'manual_journal_templates' can't be null";
        }
        if ($this->container['cost_allocations'] === null) {
            $invalidProperties[] = "'cost_allocations' can't be null";
        }
        if ($this->container['approval_flow_routes'] === null) {
            $invalidProperties[] = "'approval_flow_routes' can't be null";
        }
        if ($this->container['expense_application_templates'] === null) {
            $invalidProperties[] = "'expense_application_templates' can't be null";
        }
        if ($this->container['workflows'] === null) {
            $invalidProperties[] = "'workflows' can't be null";
        }
        if ($this->container['oauth_applications'] === null) {
            $invalidProperties[] = "'oauth_applications' can't be null";
        }
        if ($this->container['oauth_authorizations'] === null) {
            $invalidProperties[] = "'oauth_authorizations' can't be null";
        }
        if ($this->container['bank_accountant_staff_users'] === null) {
            $invalidProperties[] = "'bank_accountant_staff_users' can't be null";
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
     * Gets wallet_txns
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getWalletTxns()
    {
        return $this->container['wallet_txns'];
    }

    /**
     * Sets wallet_txns
     *
     * @param \Freee\Accounting\Model\UsersCapability $wallet_txns wallet_txns
     *
     * @return $this
     */
    public function setWalletTxns($wallet_txns)
    {
        $this->container['wallet_txns'] = $wallet_txns;

        return $this;
    }

    /**
     * Gets deals
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getDeals()
    {
        return $this->container['deals'];
    }

    /**
     * Sets deals
     *
     * @param \Freee\Accounting\Model\UsersCapability $deals deals
     *
     * @return $this
     */
    public function setDeals($deals)
    {
        $this->container['deals'] = $deals;

        return $this;
    }

    /**
     * Gets transfers
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param \Freee\Accounting\Model\UsersCapability $transfers transfers
     *
     * @return $this
     */
    public function setTransfers($transfers)
    {
        $this->container['transfers'] = $transfers;

        return $this;
    }

    /**
     * Gets docs
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getDocs()
    {
        return $this->container['docs'];
    }

    /**
     * Sets docs
     *
     * @param \Freee\Accounting\Model\UsersCapability $docs docs
     *
     * @return $this
     */
    public function setDocs($docs)
    {
        $this->container['docs'] = $docs;

        return $this;
    }

    /**
     * Gets doc_postings
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getDocPostings()
    {
        return $this->container['doc_postings'];
    }

    /**
     * Sets doc_postings
     *
     * @param \Freee\Accounting\Model\UsersCapability $doc_postings doc_postings
     *
     * @return $this
     */
    public function setDocPostings($doc_postings)
    {
        $this->container['doc_postings'] = $doc_postings;

        return $this;
    }

    /**
     * Gets receipts
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReceipts()
    {
        return $this->container['receipts'];
    }

    /**
     * Sets receipts
     *
     * @param \Freee\Accounting\Model\UsersCapability $receipts receipts
     *
     * @return $this
     */
    public function setReceipts($receipts)
    {
        $this->container['receipts'] = $receipts;

        return $this;
    }

    /**
     * Gets receipt_stream_editor
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReceiptStreamEditor()
    {
        return $this->container['receipt_stream_editor'];
    }

    /**
     * Sets receipt_stream_editor
     *
     * @param \Freee\Accounting\Model\UsersCapability $receipt_stream_editor receipt_stream_editor
     *
     * @return $this
     */
    public function setReceiptStreamEditor($receipt_stream_editor)
    {
        $this->container['receipt_stream_editor'] = $receipt_stream_editor;

        return $this;
    }

    /**
     * Gets expense_applications
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getExpenseApplications()
    {
        return $this->container['expense_applications'];
    }

    /**
     * Sets expense_applications
     *
     * @param \Freee\Accounting\Model\UsersCapability $expense_applications expense_applications
     *
     * @return $this
     */
    public function setExpenseApplications($expense_applications)
    {
        $this->container['expense_applications'] = $expense_applications;

        return $this;
    }

    /**
     * Gets spreadsheets
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getSpreadsheets()
    {
        return $this->container['spreadsheets'];
    }

    /**
     * Sets spreadsheets
     *
     * @param \Freee\Accounting\Model\UsersCapability $spreadsheets spreadsheets
     *
     * @return $this
     */
    public function setSpreadsheets($spreadsheets)
    {
        $this->container['spreadsheets'] = $spreadsheets;

        return $this;
    }

    /**
     * Gets payment_requests
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getPaymentRequests()
    {
        return $this->container['payment_requests'];
    }

    /**
     * Sets payment_requests
     *
     * @param \Freee\Accounting\Model\UsersCapability $payment_requests payment_requests
     *
     * @return $this
     */
    public function setPaymentRequests($payment_requests)
    {
        $this->container['payment_requests'] = $payment_requests;

        return $this;
    }

    /**
     * Gets request_forms
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getRequestForms()
    {
        return $this->container['request_forms'];
    }

    /**
     * Sets request_forms
     *
     * @param \Freee\Accounting\Model\UsersCapability $request_forms request_forms
     *
     * @return $this
     */
    public function setRequestForms($request_forms)
    {
        $this->container['request_forms'] = $request_forms;

        return $this;
    }

    /**
     * Gets approval_requests
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getApprovalRequests()
    {
        return $this->container['approval_requests'];
    }

    /**
     * Sets approval_requests
     *
     * @param \Freee\Accounting\Model\UsersCapability $approval_requests approval_requests
     *
     * @return $this
     */
    public function setApprovalRequests($approval_requests)
    {
        $this->container['approval_requests'] = $approval_requests;

        return $this;
    }

    /**
     * Gets reports
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReports()
    {
        return $this->container['reports'];
    }

    /**
     * Sets reports
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports reports
     *
     * @return $this
     */
    public function setReports($reports)
    {
        $this->container['reports'] = $reports;

        return $this;
    }

    /**
     * Gets reports_income_expense
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsIncomeExpense()
    {
        return $this->container['reports_income_expense'];
    }

    /**
     * Sets reports_income_expense
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_income_expense reports_income_expense
     *
     * @return $this
     */
    public function setReportsIncomeExpense($reports_income_expense)
    {
        $this->container['reports_income_expense'] = $reports_income_expense;

        return $this;
    }

    /**
     * Gets reports_receivables
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsReceivables()
    {
        return $this->container['reports_receivables'];
    }

    /**
     * Sets reports_receivables
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_receivables reports_receivables
     *
     * @return $this
     */
    public function setReportsReceivables($reports_receivables)
    {
        $this->container['reports_receivables'] = $reports_receivables;

        return $this;
    }

    /**
     * Gets reports_payables
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsPayables()
    {
        return $this->container['reports_payables'];
    }

    /**
     * Sets reports_payables
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_payables reports_payables
     *
     * @return $this
     */
    public function setReportsPayables($reports_payables)
    {
        $this->container['reports_payables'] = $reports_payables;

        return $this;
    }

    /**
     * Gets reports_cash_balance
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsCashBalance()
    {
        return $this->container['reports_cash_balance'];
    }

    /**
     * Sets reports_cash_balance
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_cash_balance reports_cash_balance
     *
     * @return $this
     */
    public function setReportsCashBalance($reports_cash_balance)
    {
        $this->container['reports_cash_balance'] = $reports_cash_balance;

        return $this;
    }

    /**
     * Gets reports_crosstabs
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsCrosstabs()
    {
        return $this->container['reports_crosstabs'];
    }

    /**
     * Sets reports_crosstabs
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_crosstabs reports_crosstabs
     *
     * @return $this
     */
    public function setReportsCrosstabs($reports_crosstabs)
    {
        $this->container['reports_crosstabs'] = $reports_crosstabs;

        return $this;
    }

    /**
     * Gets reports_general_ledgers
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsGeneralLedgers()
    {
        return $this->container['reports_general_ledgers'];
    }

    /**
     * Sets reports_general_ledgers
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_general_ledgers reports_general_ledgers
     *
     * @return $this
     */
    public function setReportsGeneralLedgers($reports_general_ledgers)
    {
        $this->container['reports_general_ledgers'] = $reports_general_ledgers;

        return $this;
    }

    /**
     * Gets reports_pl
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsPl()
    {
        return $this->container['reports_pl'];
    }

    /**
     * Sets reports_pl
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_pl reports_pl
     *
     * @return $this
     */
    public function setReportsPl($reports_pl)
    {
        $this->container['reports_pl'] = $reports_pl;

        return $this;
    }

    /**
     * Gets reports_bs
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsBs()
    {
        return $this->container['reports_bs'];
    }

    /**
     * Sets reports_bs
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_bs reports_bs
     *
     * @return $this
     */
    public function setReportsBs($reports_bs)
    {
        $this->container['reports_bs'] = $reports_bs;

        return $this;
    }

    /**
     * Gets reports_journals
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsJournals()
    {
        return $this->container['reports_journals'];
    }

    /**
     * Sets reports_journals
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_journals reports_journals
     *
     * @return $this
     */
    public function setReportsJournals($reports_journals)
    {
        $this->container['reports_journals'] = $reports_journals;

        return $this;
    }

    /**
     * Gets reports_managements_planning
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsManagementsPlanning()
    {
        return $this->container['reports_managements_planning'];
    }

    /**
     * Sets reports_managements_planning
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_managements_planning reports_managements_planning
     *
     * @return $this
     */
    public function setReportsManagementsPlanning($reports_managements_planning)
    {
        $this->container['reports_managements_planning'] = $reports_managements_planning;

        return $this;
    }

    /**
     * Gets reports_managements_navigation
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getReportsManagementsNavigation()
    {
        return $this->container['reports_managements_navigation'];
    }

    /**
     * Sets reports_managements_navigation
     *
     * @param \Freee\Accounting\Model\UsersCapability $reports_managements_navigation reports_managements_navigation
     *
     * @return $this
     */
    public function setReportsManagementsNavigation($reports_managements_navigation)
    {
        $this->container['reports_managements_navigation'] = $reports_managements_navigation;

        return $this;
    }

    /**
     * Gets manual_journals
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getManualJournals()
    {
        return $this->container['manual_journals'];
    }

    /**
     * Sets manual_journals
     *
     * @param \Freee\Accounting\Model\UsersCapability $manual_journals manual_journals
     *
     * @return $this
     */
    public function setManualJournals($manual_journals)
    {
        $this->container['manual_journals'] = $manual_journals;

        return $this;
    }

    /**
     * Gets fixed_assets
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getFixedAssets()
    {
        return $this->container['fixed_assets'];
    }

    /**
     * Sets fixed_assets
     *
     * @param \Freee\Accounting\Model\UsersCapability $fixed_assets fixed_assets
     *
     * @return $this
     */
    public function setFixedAssets($fixed_assets)
    {
        $this->container['fixed_assets'] = $fixed_assets;

        return $this;
    }

    /**
     * Gets inventory_refreshes
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getInventoryRefreshes()
    {
        return $this->container['inventory_refreshes'];
    }

    /**
     * Sets inventory_refreshes
     *
     * @param \Freee\Accounting\Model\UsersCapability $inventory_refreshes inventory_refreshes
     *
     * @return $this
     */
    public function setInventoryRefreshes($inventory_refreshes)
    {
        $this->container['inventory_refreshes'] = $inventory_refreshes;

        return $this;
    }

    /**
     * Gets biz_allocations
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getBizAllocations()
    {
        return $this->container['biz_allocations'];
    }

    /**
     * Sets biz_allocations
     *
     * @param \Freee\Accounting\Model\UsersCapability $biz_allocations biz_allocations
     *
     * @return $this
     */
    public function setBizAllocations($biz_allocations)
    {
        $this->container['biz_allocations'] = $biz_allocations;

        return $this;
    }

    /**
     * Gets payment_records
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getPaymentRecords()
    {
        return $this->container['payment_records'];
    }

    /**
     * Sets payment_records
     *
     * @param \Freee\Accounting\Model\UsersCapability $payment_records payment_records
     *
     * @return $this
     */
    public function setPaymentRecords($payment_records)
    {
        $this->container['payment_records'] = $payment_records;

        return $this;
    }

    /**
     * Gets annual_reports
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getAnnualReports()
    {
        return $this->container['annual_reports'];
    }

    /**
     * Sets annual_reports
     *
     * @param \Freee\Accounting\Model\UsersCapability $annual_reports annual_reports
     *
     * @return $this
     */
    public function setAnnualReports($annual_reports)
    {
        $this->container['annual_reports'] = $annual_reports;

        return $this;
    }

    /**
     * Gets tax_reports
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getTaxReports()
    {
        return $this->container['tax_reports'];
    }

    /**
     * Sets tax_reports
     *
     * @param \Freee\Accounting\Model\UsersCapability $tax_reports tax_reports
     *
     * @return $this
     */
    public function setTaxReports($tax_reports)
    {
        $this->container['tax_reports'] = $tax_reports;

        return $this;
    }

    /**
     * Gets consumption_entries
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getConsumptionEntries()
    {
        return $this->container['consumption_entries'];
    }

    /**
     * Sets consumption_entries
     *
     * @param \Freee\Accounting\Model\UsersCapability $consumption_entries consumption_entries
     *
     * @return $this
     */
    public function setConsumptionEntries($consumption_entries)
    {
        $this->container['consumption_entries'] = $consumption_entries;

        return $this;
    }

    /**
     * Gets tax_return
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getTaxReturn()
    {
        return $this->container['tax_return'];
    }

    /**
     * Sets tax_return
     *
     * @param \Freee\Accounting\Model\UsersCapability $tax_return tax_return
     *
     * @return $this
     */
    public function setTaxReturn($tax_return)
    {
        $this->container['tax_return'] = $tax_return;

        return $this;
    }

    /**
     * Gets account_item_statements
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getAccountItemStatements()
    {
        return $this->container['account_item_statements'];
    }

    /**
     * Sets account_item_statements
     *
     * @param \Freee\Accounting\Model\UsersCapability $account_item_statements account_item_statements
     *
     * @return $this
     */
    public function setAccountItemStatements($account_item_statements)
    {
        $this->container['account_item_statements'] = $account_item_statements;

        return $this;
    }

    /**
     * Gets month_end
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getMonthEnd()
    {
        return $this->container['month_end'];
    }

    /**
     * Sets month_end
     *
     * @param \Freee\Accounting\Model\UsersCapability $month_end month_end
     *
     * @return $this
     */
    public function setMonthEnd($month_end)
    {
        $this->container['month_end'] = $month_end;

        return $this;
    }

    /**
     * Gets year_end
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getYearEnd()
    {
        return $this->container['year_end'];
    }

    /**
     * Sets year_end
     *
     * @param \Freee\Accounting\Model\UsersCapability $year_end year_end
     *
     * @return $this
     */
    public function setYearEnd($year_end)
    {
        $this->container['year_end'] = $year_end;

        return $this;
    }

    /**
     * Gets walletables
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getWalletables()
    {
        return $this->container['walletables'];
    }

    /**
     * Sets walletables
     *
     * @param \Freee\Accounting\Model\UsersCapability $walletables walletables
     *
     * @return $this
     */
    public function setWalletables($walletables)
    {
        $this->container['walletables'] = $walletables;

        return $this;
    }

    /**
     * Gets companies
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getCompanies()
    {
        return $this->container['companies'];
    }

    /**
     * Sets companies
     *
     * @param \Freee\Accounting\Model\UsersCapability $companies companies
     *
     * @return $this
     */
    public function setCompanies($companies)
    {
        $this->container['companies'] = $companies;

        return $this;
    }

    /**
     * Gets invitations
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getInvitations()
    {
        return $this->container['invitations'];
    }

    /**
     * Sets invitations
     *
     * @param \Freee\Accounting\Model\UsersCapability $invitations invitations
     *
     * @return $this
     */
    public function setInvitations($invitations)
    {
        $this->container['invitations'] = $invitations;

        return $this;
    }

    /**
     * Gets sign_in_logs
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getSignInLogs()
    {
        return $this->container['sign_in_logs'];
    }

    /**
     * Sets sign_in_logs
     *
     * @param \Freee\Accounting\Model\UsersCapability $sign_in_logs sign_in_logs
     *
     * @return $this
     */
    public function setSignInLogs($sign_in_logs)
    {
        $this->container['sign_in_logs'] = $sign_in_logs;

        return $this;
    }

    /**
     * Gets backups
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getBackups()
    {
        return $this->container['backups'];
    }

    /**
     * Sets backups
     *
     * @param \Freee\Accounting\Model\UsersCapability $backups backups
     *
     * @return $this
     */
    public function setBackups($backups)
    {
        $this->container['backups'] = $backups;

        return $this;
    }

    /**
     * Gets opening_balances
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getOpeningBalances()
    {
        return $this->container['opening_balances'];
    }

    /**
     * Sets opening_balances
     *
     * @param \Freee\Accounting\Model\UsersCapability $opening_balances opening_balances
     *
     * @return $this
     */
    public function setOpeningBalances($opening_balances)
    {
        $this->container['opening_balances'] = $opening_balances;

        return $this;
    }

    /**
     * Gets system_conversion
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getSystemConversion()
    {
        return $this->container['system_conversion'];
    }

    /**
     * Sets system_conversion
     *
     * @param \Freee\Accounting\Model\UsersCapability $system_conversion system_conversion
     *
     * @return $this
     */
    public function setSystemConversion($system_conversion)
    {
        $this->container['system_conversion'] = $system_conversion;

        return $this;
    }

    /**
     * Gets resets
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getResets()
    {
        return $this->container['resets'];
    }

    /**
     * Sets resets
     *
     * @param \Freee\Accounting\Model\UsersCapability $resets resets
     *
     * @return $this
     */
    public function setResets($resets)
    {
        $this->container['resets'] = $resets;

        return $this;
    }

    /**
     * Gets partners
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
     * Sets partners
     *
     * @param \Freee\Accounting\Model\UsersCapability $partners partners
     *
     * @return $this
     */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Freee\Accounting\Model\UsersCapability $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets sections
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getSections()
    {
        return $this->container['sections'];
    }

    /**
     * Sets sections
     *
     * @param \Freee\Accounting\Model\UsersCapability $sections sections
     *
     * @return $this
     */
    public function setSections($sections)
    {
        $this->container['sections'] = $sections;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Freee\Accounting\Model\UsersCapability $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets account_items
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getAccountItems()
    {
        return $this->container['account_items'];
    }

    /**
     * Sets account_items
     *
     * @param \Freee\Accounting\Model\UsersCapability $account_items account_items
     *
     * @return $this
     */
    public function setAccountItems($account_items)
    {
        $this->container['account_items'] = $account_items;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Freee\Accounting\Model\UsersCapability $taxes taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets user_matchers
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getUserMatchers()
    {
        return $this->container['user_matchers'];
    }

    /**
     * Sets user_matchers
     *
     * @param \Freee\Accounting\Model\UsersCapability $user_matchers user_matchers
     *
     * @return $this
     */
    public function setUserMatchers($user_matchers)
    {
        $this->container['user_matchers'] = $user_matchers;

        return $this;
    }

    /**
     * Gets deal_templates
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getDealTemplates()
    {
        return $this->container['deal_templates'];
    }

    /**
     * Sets deal_templates
     *
     * @param \Freee\Accounting\Model\UsersCapability $deal_templates deal_templates
     *
     * @return $this
     */
    public function setDealTemplates($deal_templates)
    {
        $this->container['deal_templates'] = $deal_templates;

        return $this;
    }

    /**
     * Gets manual_journal_templates
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getManualJournalTemplates()
    {
        return $this->container['manual_journal_templates'];
    }

    /**
     * Sets manual_journal_templates
     *
     * @param \Freee\Accounting\Model\UsersCapability $manual_journal_templates manual_journal_templates
     *
     * @return $this
     */
    public function setManualJournalTemplates($manual_journal_templates)
    {
        $this->container['manual_journal_templates'] = $manual_journal_templates;

        return $this;
    }

    /**
     * Gets cost_allocations
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getCostAllocations()
    {
        return $this->container['cost_allocations'];
    }

    /**
     * Sets cost_allocations
     *
     * @param \Freee\Accounting\Model\UsersCapability $cost_allocations cost_allocations
     *
     * @return $this
     */
    public function setCostAllocations($cost_allocations)
    {
        $this->container['cost_allocations'] = $cost_allocations;

        return $this;
    }

    /**
     * Gets approval_flow_routes
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getApprovalFlowRoutes()
    {
        return $this->container['approval_flow_routes'];
    }

    /**
     * Sets approval_flow_routes
     *
     * @param \Freee\Accounting\Model\UsersCapability $approval_flow_routes approval_flow_routes
     *
     * @return $this
     */
    public function setApprovalFlowRoutes($approval_flow_routes)
    {
        $this->container['approval_flow_routes'] = $approval_flow_routes;

        return $this;
    }

    /**
     * Gets expense_application_templates
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getExpenseApplicationTemplates()
    {
        return $this->container['expense_application_templates'];
    }

    /**
     * Sets expense_application_templates
     *
     * @param \Freee\Accounting\Model\UsersCapability $expense_application_templates expense_application_templates
     *
     * @return $this
     */
    public function setExpenseApplicationTemplates($expense_application_templates)
    {
        $this->container['expense_application_templates'] = $expense_application_templates;

        return $this;
    }

    /**
     * Gets workflows
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getWorkflows()
    {
        return $this->container['workflows'];
    }

    /**
     * Sets workflows
     *
     * @param \Freee\Accounting\Model\UsersCapability $workflows workflows
     *
     * @return $this
     */
    public function setWorkflows($workflows)
    {
        $this->container['workflows'] = $workflows;

        return $this;
    }

    /**
     * Gets oauth_applications
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getOauthApplications()
    {
        return $this->container['oauth_applications'];
    }

    /**
     * Sets oauth_applications
     *
     * @param \Freee\Accounting\Model\UsersCapability $oauth_applications oauth_applications
     *
     * @return $this
     */
    public function setOauthApplications($oauth_applications)
    {
        $this->container['oauth_applications'] = $oauth_applications;

        return $this;
    }

    /**
     * Gets oauth_authorizations
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getOauthAuthorizations()
    {
        return $this->container['oauth_authorizations'];
    }

    /**
     * Sets oauth_authorizations
     *
     * @param \Freee\Accounting\Model\UsersCapability $oauth_authorizations oauth_authorizations
     *
     * @return $this
     */
    public function setOauthAuthorizations($oauth_authorizations)
    {
        $this->container['oauth_authorizations'] = $oauth_authorizations;

        return $this;
    }

    /**
     * Gets bank_accountant_staff_users
     *
     * @return \Freee\Accounting\Model\UsersCapability
     */
    public function getBankAccountantStaffUsers()
    {
        return $this->container['bank_accountant_staff_users'];
    }

    /**
     * Sets bank_accountant_staff_users
     *
     * @param \Freee\Accounting\Model\UsersCapability $bank_accountant_staff_users bank_accountant_staff_users
     *
     * @return $this
     */
    public function setBankAccountantStaffUsers($bank_accountant_staff_users)
    {
        $this->container['bank_accountant_staff_users'] = $bank_accountant_staff_users;

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


