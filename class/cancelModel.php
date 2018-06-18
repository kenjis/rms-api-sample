<?php

class CancelModel {
  // xmlで自動生成するときに順番通りに要素が並ぶ
  // RMS APIは順番を組み替えると400が返ってくるので注意すること
  public $reasonId; // キャンセル理由
  /* キャンセル理由：
  1	キャンセル	お客様都合
  2	返品	お客様都合
  3	前払い未入金	お客様都合
  4	納入後未払い	お客様都合
  5	いたずら	お客様都合
  6	その他	お客様都合
  7	決済方法都合	店舗様都合
  8	欠品	店舗様都合
  9	予約商品販売中止	店舗様都合
  10	その他	店舗様都合
  11	決済審査不可	お客様都合
  */
  public $orderNumber; // 受注番号
  public $restoreInventoryFlag; // 在庫連動オプション
  /* 在庫連動オプション:
  0 商品の設定に従う
  1 強制的に在庫数を変更する
  2 在庫連動しない
  */
  function __construct() {

  }
}