# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 請求書ID | 
**company_id** | **int** | 事業所ID | 
**issue_date** | **string** | 請求日 (yyyy-mm-dd) | 
**partner_id** | **int** | 取引先ID | 
**partner_code** | **string** | 取引先コード | [optional] 
**invoice_number** | **string** | 請求書番号 | 
**title** | **string** | タイトル | [optional] 
**due_date** | **string** | 期日 (yyyy-mm-dd) | [optional] 
**total_amount** | **int** | 合計金額 | 
**total_vat** | **int** | 合計金額 | [optional] 
**sub_total** | **int** | 小計 | [optional] 
**booking_date** | **string** | 売上計上日 | [optional] 
**description** | **string** | 概要 | [optional] 
**invoice_status** | **string** | 請求書ステータス  (draft: 下書き, applying: 申請中, remanded: 差し戻し, rejected: 却下, approved: 承認済み, issued: 発行済み) | 
**payment_status** | **string** | 入金ステータス  (unsettled: 入金待ち, settled: 入金済み) | [optional] 
**payment_date** | **string** | 入金日 | [optional] 
**web_published_at** | **string** | Web共有日時(最新) | [optional] 
**web_downloaded_at** | **string** | Web共有ダウンロード日時(最新) | [optional] 
**web_confirmed_at** | **string** | Web共有取引先確認日時(最新) | [optional] 
**mail_sent_at** | **string** | メール送信日時(最新) | [optional] 
**posting_status** | **string** | 郵送ステータス(unrequested: リクエスト前, preview_registered: プレビュー登録, preview_failed: プレビュー登録失敗, ordered: 注文中, order_failed: 注文失敗, printing: 印刷中, canceled: キャンセル, posted: 投函済み) | 
**partner_name** | **string** | 取引先名 | [optional] 
**partner_long_name** | **string** | 取引先正式名称 | [optional] 
**partner_title** | **string** | 敬称（御中、様、(空白)の3つから選択） | [optional] 
**partner_zipcode** | **string** | 郵便番号 | [optional] 
**partner_prefecture_code** | **int** | 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄 | [optional] 
**partner_prefecture_name** | **string** | 都道府県 | [optional] 
**partner_address1** | **string** | 市区町村・番地 | [optional] 
**partner_address2** | **string** | 建物名・部屋番号など | [optional] 
**partner_contact_info** | **string** | 取引先担当者名 | [optional] 
**company_name** | **string** | 事業所名 | 
**company_zipcode** | **string** | 郵便番号 | [optional] 
**company_prefecture_code** | **int** | 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄 | [optional] 
**company_prefecture_name** | **string** | 都道府県 | [optional] 
**company_address1** | **string** | 市区町村・番地 | [optional] 
**company_address2** | **string** | 建物名・部屋番号など | [optional] 
**company_contact_info** | **string** | 事業所担当者名 | [optional] 
**payment_type** | **string** | 支払方法 (振込: transfer, 引き落とし: direct_debit) | 
**payment_bank_info** | **string** | 支払口座 | [optional] 
**message** | **string** | メッセージ | [optional] 
**notes** | **string** | 備考 | [optional] 
**invoice_layout** | **string** | レイアウト(default_classic: レイアウト１/クラシック, standard_classic: レイアウト２/クラシック, envelope_classic: 封筒１/クラシック, carried_forward_standard_classic: レイアウト３（繰越金額欄あり）/クラシック, carried_forward_envelope_classic: 封筒２（繰越金額欄あり）/クラシック, default_modern: レイアウト１/モダン, standard_modern: レイアウト２/モダン, envelope_modern: 封筒/モダン) | 
**tax_entry_method** | **string** | 請求書の消費税計算方法(inclusive: 内税, exclusive: 外税) | 
**deal_id** | **int** | 取引ID (invoice_statusがissuedの時のみIDが表示されます) | [optional] 
**invoice_contents** | [**\Freee\Accounting\Model\InvoiceInvoiceContents[]**](InvoiceInvoiceContents.md) | 請求内容 | [optional] 
**total_amount_per_vat_rate** | [**\Freee\Accounting\Model\InvoiceTotalAmountPerVatRate**](InvoiceTotalAmountPerVatRate.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


