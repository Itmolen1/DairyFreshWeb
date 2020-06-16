<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-20 04:30:58 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2020-02-20 04:31:04 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2020-02-20 10:32:11 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ')' /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 43
ERROR - 2020-02-20 10:52:15 --> Query error: Unknown column 'item_master_id' in 'field list' - Invalid query: INSERT INTO `tbl_cart` (`cart_id`, `cart_ref_no`, `item_master_id`, `item_unit_id`, `item_master_price`, `item_qty`, `item_total`) VALUES (4, '686e71d23cad4e3a68c10d13a521c6e4', '11', '3', '1000', '2', 2000)
ERROR - 2020-02-20 11:16:22 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ')' /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 37
ERROR - 2020-02-20 11:17:07 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 37
ERROR - 2020-02-20 11:17:09 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 37
ERROR - 2020-02-20 11:17:21 --> Query error: Column 'cart_user_id' cannot be null - Invalid query: INSERT INTO `tbl_cart` (`cart_user_id`, `cart_ref_no`, `cart_created_at`, `cart_updated_at`) VALUES (NULL, '49afa0bc2367b3708ef8474799df56a1', '2020-02-20 11:17:21', '2020-02-20 11:17:21')
ERROR - 2020-02-20 11:33:04 --> Severity: Notice --> Undefined index: tbl_cart_boi /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 35
ERROR - 2020-02-20 11:44:40 --> Severity: Notice --> Undefined index: tbl_cart_boi /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 35
ERROR - 2020-02-20 11:45:10 --> Severity: Notice --> Undefined index: tbl_cart_boi /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 35
ERROR - 2020-02-20 11:45:13 --> Severity: Notice --> Undefined index: tbl_cart_boi /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 35
ERROR - 2020-02-20 11:51:24 --> Query error: Column 'cart_user_id' cannot be null - Invalid query: INSERT INTO `tbl_cart` (`cart_user_id`, `cart_ref_no`, `cart_created_at`, `cart_updated_at`) VALUES (NULL, 'f98ff800df935fe6cff76868e708eb1d', '2020-02-20 11:51:24', '2020-02-20 11:51:24')
ERROR - 2020-02-20 11:52:40 --> Severity: Notice --> Undefined variable: refno /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 44
ERROR - 2020-02-20 11:52:40 --> Query error: Column 'cart_ref_no' cannot be null - Invalid query: INSERT INTO `tbl_cart_boi` (`cart_id`, `cart_ref_no`, `item_master_id`, `item_unit_id`, `item_master_price`, `item_qty`, `item_total`) VALUES ('8', NULL, '10', '3', '1000', '2', 2000)
ERROR - 2020-02-20 11:52:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-20 12:03:26 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ')' /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 54
ERROR - 2020-02-20 12:11:05 --> Query error: Unknown column 'grand_total' in 'field list' - Invalid query: SELECT SUM(`grand_total`) AS `grand_total`, `item_total`
FROM `tbl_cart_boi`
WHERE `cart_ref_no` = '27a86d710380959c353951dddef46cae'
ERROR - 2020-02-20 12:13:30 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::row_array() /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 58
ERROR - 2020-02-20 12:13:52 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::result_array() /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 58
ERROR - 2020-02-20 12:16:45 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::result_array() /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 58
ERROR - 2020-02-20 12:23:21 --> Severity: Notice --> Undefined variable: lid /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 64
