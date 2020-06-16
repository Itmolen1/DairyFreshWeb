<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-29 09:42:59 --> Severity: Notice --> Undefined index: cart_user_id /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 94
ERROR - 2020-02-29 09:42:59 --> Severity: Notice --> Undefined index: cart_user_id /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 100
ERROR - 2020-02-29 09:42:59 --> Query error: Column 'cart_user_id' cannot be null - Invalid query: INSERT INTO `tbl_cart` (`cart_user_id`, `cart_ref_no`, `cart_created_at`, `cart_updated_at`) VALUES (NULL, '180c461ca563c2287518b4f32f034878', '2020-02-29 09:42:59', '2020-02-29 09:42:59')
ERROR - 2020-02-29 09:42:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 09:43:15 --> Severity: Notice --> Undefined index: tbl_user_name /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 551
ERROR - 2020-02-29 09:43:15 --> Severity: Notice --> Undefined index: tbl_user_mobile /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 552
ERROR - 2020-02-29 09:43:15 --> Severity: Notice --> Undefined index: tbl_user_email /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 553
ERROR - 2020-02-29 09:43:15 --> Severity: Notice --> Undefined index: tbl_user_password /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 554
ERROR - 2020-02-29 09:43:15 --> Query error: Table 'soordairyfresh_main.tbl_user' doesn't exist - Invalid query: INSERT INTO `tbl_user` (`tbl_user_name`, `tbl_user_mobile`, `tbl_user_email`, `tbl_user_password`, `tbl_user_createdat`, `tbl_user_updatedat`) VALUES (NULL, NULL, NULL, NULL, '2020-02-29 09:43:15', '2020-02-29 09:43:15')
ERROR - 2020-02-29 09:43:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 09:45:49 --> Query error: Table 'soordairyfresh_main.tbl_user_devices' doesn't exist - Invalid query: INSERT INTO `tbl_user_devices` (`tbl_user_id`, `tbl_user_device_id`, `tbl_user_platform`, `tbl_user_device_token`, `created_at`, `updated_at`, `isDeleted`) VALUES (40, 'dfasdff', 'Android', 'ae5d4fa5s4d654f64sd654fs6d4f6s4fasd54f65', '2020-02-29 09:45:49', '2020-02-29 09:45:49', 0)
ERROR - 2020-02-29 10:36:56 --> Severity: Notice --> Undefined index: user_address_type /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 230
ERROR - 2020-02-29 10:36:56 --> Query error: Column 'user_address_type' cannot be null - Invalid query: INSERT INTO `tbl_user_address` (`userId`, `user_address_type`, `user_address`, `user_latitude`, `user_longitude`, `person_name`, `person_mobile`, `created_at`, `updated_at`) VALUES (1, NULL, 'M-10,shabia,abudhabi', '0.0', '0.0', 'Mr.Khan', 7855, '2020-02-29 10:36:56', '2020-02-29 10:36:56')
ERROR - 2020-02-29 10:36:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 10:52:31 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /home/soordairyfresh/public_html/admin/application/controllers/webapi/User_api.php 179
ERROR - 2020-02-29 10:55:01 --> Severity: Notice --> Undefined index: user_address_type /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 250
ERROR - 2020-02-29 10:56:10 --> Severity: Notice --> Undefined index: user_id /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 2260
ERROR - 2020-02-29 10:56:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY user_address_id DESC' at line 1 - Invalid query: SELECT user_address_id,user_address_type,user_address,user_latitude,user_longitude,person_name,person_mobile FROM tbl_user_address  WHERE isDeleted = 0 AND user_id =  ORDER BY user_address_id DESC 
ERROR - 2020-02-29 10:56:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 11:41:23 --> Severity: Notice --> Undefined variable: grand_total /home/soordairyfresh/public_html/admin/application/controllers/webapi/User_api.php 204
ERROR - 2020-02-29 11:41:23 --> Severity: Notice --> Undefined index: user /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 311
ERROR - 2020-02-29 11:41:23 --> Severity: Notice --> Undefined index: user_delivery_address_id /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 312
ERROR - 2020-02-29 11:41:23 --> Query error: Column 'userId' cannot be null - Invalid query: INSERT INTO `tbl_order` (`order_ref_no`, `userid`, `user_address_id`, `payment_method`, `payment_status`, `status`, `order_grand_total`, `created_at`, `updated_at`) VALUES ('ORD5E5A008B29D87', NULL, NULL, 0, 0, 0, NULL, '2020-02-29 11:41:23', '2020-02-29 11:41:23')
ERROR - 2020-02-29 11:41:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 11:42:16 --> Severity: Notice --> Undefined variable: cart_boi /home/soordairyfresh/public_html/admin/application/controllers/webapi/User_api.php 205
ERROR - 2020-02-29 11:42:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/soordairyfresh/public_html/admin/application/controllers/webapi/User_api.php 205
ERROR - 2020-02-29 11:42:16 --> Severity: Notice --> Undefined index: user /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 311
ERROR - 2020-02-29 11:42:16 --> Severity: Notice --> Undefined index: user_delivery_address_id /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 312
ERROR - 2020-02-29 11:42:16 --> Query error: Column 'userId' cannot be null - Invalid query: INSERT INTO `tbl_order` (`order_ref_no`, `userid`, `user_address_id`, `payment_method`, `payment_status`, `status`, `order_grand_total`, `created_at`, `updated_at`) VALUES ('ORD5E5A00C05940A', NULL, NULL, 0, 0, 0, 0, '2020-02-29 11:42:16', '2020-02-29 11:42:16')
ERROR - 2020-02-29 11:42:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 11:42:45 --> Severity: Notice --> Undefined index: user /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 311
ERROR - 2020-02-29 11:42:45 --> Severity: Notice --> Undefined index: user_delivery_address_id /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 312
ERROR - 2020-02-29 11:42:45 --> Query error: Column 'userId' cannot be null - Invalid query: INSERT INTO `tbl_order` (`order_ref_no`, `userid`, `user_address_id`, `payment_method`, `payment_status`, `status`, `order_grand_total`, `created_at`, `updated_at`) VALUES ('ORD5E5A00DD1277E', NULL, NULL, 0, 0, 0, 780, '2020-02-29 11:42:45', '2020-02-29 11:42:45')
ERROR - 2020-02-29 11:42:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 11:42:47 --> Severity: Notice --> Undefined index: user /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 311
ERROR - 2020-02-29 11:42:47 --> Severity: Notice --> Undefined index: user_delivery_address_id /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 312
ERROR - 2020-02-29 11:42:47 --> Query error: Column 'userId' cannot be null - Invalid query: INSERT INTO `tbl_order` (`order_ref_no`, `userid`, `user_address_id`, `payment_method`, `payment_status`, `status`, `order_grand_total`, `created_at`, `updated_at`) VALUES ('ORD5E5A00DF8128B', NULL, NULL, 0, 0, 0, 780, '2020-02-29 11:42:47', '2020-02-29 11:42:47')
ERROR - 2020-02-29 11:42:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Array to string conversion /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 329
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Undefined variable: Array /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 329
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Array to string conversion /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 330
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Undefined variable: Array /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 330
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Array to string conversion /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 331
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Undefined variable: Array /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 331
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Array to string conversion /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 332
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Undefined variable: Array /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 332
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Array to string conversion /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 333
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Undefined variable: Array /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 333
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Array to string conversion /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 334
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Undefined variable: Array /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 334
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Array to string conversion /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 335
ERROR - 2020-02-29 11:46:07 --> Severity: Notice --> Undefined variable: Array /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 335
ERROR - 2020-02-29 11:46:07 --> Query error: Column 'item_master_id' cannot be null - Invalid query: INSERT INTO `tbl_order_boi` (`order_id`, `order_ref_no`, `item_master_id`, `item_master_name`, `item_master_url_slug`, `item_master_unit`, `item_master_price`, `item_master_logo`, `item_qty`, `created_at`, `updated_at`) VALUES (10, 'ORD5E5A01A70EFEA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-29 11:46:07', '2020-02-29 11:46:07')
ERROR - 2020-02-29 11:46:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 11:46:41 --> Severity: Notice --> Array to string conversion /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 335
ERROR - 2020-02-29 11:46:41 --> Severity: Notice --> Undefined variable: Array /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 335
ERROR - 2020-02-29 11:46:41 --> Query error: Column 'item_qty' cannot be null - Invalid query: INSERT INTO `tbl_order_boi` (`order_id`, `order_ref_no`, `item_master_id`, `item_master_name`, `item_master_url_slug`, `item_master_unit`, `item_master_price`, `item_master_logo`, `item_qty`, `created_at`, `updated_at`) VALUES (11, 'ORD5E5A01C9EB818', '2', 'Berry Blask Cake', 'berry-blask-cake', '3', 780, 'http://soordairyfresh.com/admin/assets/item/item_5e2920483335e.jpg', NULL, '2020-02-29 11:46:41', '2020-02-29 11:46:41')
ERROR - 2020-02-29 11:46:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/soordairyfresh/public_html/admin/system/core/Exceptions.php:271) /home/soordairyfresh/public_html/admin/system/core/Common.php 570
ERROR - 2020-02-29 12:53:36 --> Severity: Notice --> Undefined offset: 9 /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 376
ERROR - 2020-02-29 12:55:06 --> Severity: Notice --> Undefined offset: 9 /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 376
ERROR - 2020-02-29 12:56:37 --> Severity: Notice --> Undefined offset: 9 /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 376
ERROR - 2020-02-29 14:47:24 --> Severity: Notice --> Undefined offset: 9 /home/soordairyfresh/public_html/admin/application/models/webapi/User_api_model.php 376
ERROR - 2020-02-29 14:52:10 --> Query error: Table 'soordairyfresh_main.tbl_user' doesn't exist - Invalid query: SELECT *
FROM `tbl_user`
WHERE `isDeleted` = 0
ERROR - 2020-02-29 14:59:27 --> Query error: Table 'soordairyfresh_main.tbl_user' doesn't exist - Invalid query: SELECT *
FROM `tbl_user`
WHERE `isDeleted` = 0
ERROR - 2020-02-29 15:01:56 --> Query error: Table 'soordairyfresh_main.tbl_user' doesn't exist - Invalid query: SELECT `BaseTbl`.*, `u`.*, `ts`.`time_slot_name`
FROM `tbl_service_request` as `BaseTbl`
LEFT JOIN `tbl_user` as `u` ON `u`.`tbl_user_id` = `BaseTbl`.`tbl_user_id`
LEFT JOIN `tbl_time_slot` as `ts` ON `ts`.`time_slot_id` = `BaseTbl`.`prefferd_time`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ERROR - 2020-02-29 15:05:48 --> 404 Page Not Found: Order_listing/index
ERROR - 2020-02-29 15:10:53 --> 404 Page Not Found: Service_request/order_listing
ERROR - 2020-02-29 15:10:55 --> 404 Page Not Found: Service_request/order_listing
ERROR - 2020-02-29 15:11:25 --> Query error: Table 'soordairyfresh_main.tbl_user' doesn't exist - Invalid query: SELECT `BaseTbl`.*, `u`.*, `ts`.`time_slot_name`
FROM `tbl_order` as `BaseTbl`
LEFT JOIN `tbl_user` as `u` ON `u`.`tbl_user_id` = `BaseTbl`.`tbl_user_id`
LEFT JOIN `tbl_time_slot` as `ts` ON `ts`.`time_slot_id` = `BaseTbl`.`prefferd_time`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ERROR - 2020-02-29 15:11:27 --> Query error: Table 'soordairyfresh_main.tbl_user' doesn't exist - Invalid query: SELECT `BaseTbl`.*, `u`.*, `ts`.`time_slot_name`
FROM `tbl_order` as `BaseTbl`
LEFT JOIN `tbl_user` as `u` ON `u`.`tbl_user_id` = `BaseTbl`.`tbl_user_id`
LEFT JOIN `tbl_time_slot` as `ts` ON `ts`.`time_slot_id` = `BaseTbl`.`prefferd_time`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ERROR - 2020-02-29 15:17:27 --> Query error: Unknown column 'BaseTbl.isDeleted' in 'where clause' - Invalid query: SELECT `BaseTbl`.*, `u`.*
FROM `tbl_order` as `BaseTbl`
LEFT JOIN `tbl_users` as `u` ON `u`.`userId` = `BaseTbl`.`userId`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ERROR - 2020-02-29 15:17:29 --> Query error: Unknown column 'BaseTbl.isDeleted' in 'where clause' - Invalid query: SELECT `BaseTbl`.*, `u`.*
FROM `tbl_order` as `BaseTbl`
LEFT JOIN `tbl_users` as `u` ON `u`.`userId` = `BaseTbl`.`userId`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ERROR - 2020-02-29 15:18:39 --> Query error: Table 'soordairyfresh_main.tbl_user' doesn't exist - Invalid query: SELECT `BaseTbl`.*, `u`.*, `ts`.`time_slot_name`
FROM `tbl_order` as `BaseTbl`
LEFT JOIN `tbl_user` as `u` ON `u`.`tbl_user_id` = `BaseTbl`.`tbl_user_id`
LEFT JOIN `tbl_time_slot` as `ts` ON `ts`.`time_slot_id` = `BaseTbl`.`prefferd_time`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ORDER BY `BaseTbl`.`sr_id` DESC
 LIMIT 10
ERROR - 2020-02-29 15:18:58 --> Query error: Table 'soordairyfresh_main.tbl_user' doesn't exist - Invalid query: SELECT `BaseTbl`.*, `u`.*, `ts`.`time_slot_name`
FROM `tbl_order` as `BaseTbl`
LEFT JOIN `tbl_user` as `u` ON `u`.`tbl_user_id` = `BaseTbl`.`tbl_user_id`
LEFT JOIN `tbl_time_slot` as `ts` ON `ts`.`time_slot_id` = `BaseTbl`.`prefferd_time`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ORDER BY `BaseTbl`.`sr_id` DESC
 LIMIT 10
ERROR - 2020-02-29 15:20:57 --> Query error: Unknown column 'ts.time_slot_name' in 'field list' - Invalid query: SELECT `BaseTbl`.*, `u`.*, `ts`.`time_slot_name`
FROM `tbl_order` as `BaseTbl`
LEFT JOIN `tbl_users` as `u` ON `u`.`userId` = `BaseTbl`.`userId`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ORDER BY `BaseTbl`.`order_id` DESC
 LIMIT 10
ERROR - 2020-02-29 15:20:58 --> Query error: Unknown column 'ts.time_slot_name' in 'field list' - Invalid query: SELECT `BaseTbl`.*, `u`.*, `ts`.`time_slot_name`
FROM `tbl_order` as `BaseTbl`
LEFT JOIN `tbl_users` as `u` ON `u`.`userId` = `BaseTbl`.`userId`
WHERE `BaseTbl`.`status` != 20
AND `BaseTbl`.`isDeleted` = 0
ORDER BY `BaseTbl`.`order_id` DESC
 LIMIT 10
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:26:48 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 107
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:31:43 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$tbl_user_mobile /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 108
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:12 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:33 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$prefferd_date /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 109
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$time_slot_name /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 110
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 131
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 136
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 138
ERROR - 2020-02-29 15:32:34 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 140
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 128
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 133
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 135
ERROR - 2020-02-29 15:34:10 --> Severity: Notice --> Undefined property: stdClass::$sr_id /home/soordairyfresh/public_html/admin/application/views/order_list_view.php 137
ERROR - 2020-02-29 15:35:59 --> 404 Page Not Found: Delete_order/15
ERROR - 2020-02-29 15:39:49 --> Query error: Unknown column 'sr_id' in 'where clause' - Invalid query: UPDATE `tbl_order` SET `isDeleted` = 1
WHERE `sr_id` = '15'
ERROR - 2020-02-29 15:43:37 --> Query error: Unknown column 'BaseTbl.service_id' in 'on clause' - Invalid query: SELECT `BaseTbl`.*, `s`.`service_id`, `s`.`service_name`
FROM `tbl_order_boi` as `BaseTbl`
LEFT JOIN `tbl_services` as `s` ON `s`.`service_id` = `BaseTbl`.`service_id`
WHERE `order_id` = '1'
ERROR - 2020-02-29 15:43:41 --> Query error: Unknown column 'BaseTbl.service_id' in 'on clause' - Invalid query: SELECT `BaseTbl`.*, `s`.`service_id`, `s`.`service_name`
FROM `tbl_order_boi` as `BaseTbl`
LEFT JOIN `tbl_services` as `s` ON `s`.`service_id` = `BaseTbl`.`service_id`
WHERE `order_id` = '1'
ERROR - 2020-02-29 15:43:57 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 15:44:00 --> Query error: Unknown column 'BaseTbl.service_id' in 'on clause' - Invalid query: SELECT `BaseTbl`.*, `s`.`service_id`, `s`.`service_name`
FROM `tbl_order_boi` as `BaseTbl`
LEFT JOIN `tbl_services` as `s` ON `s`.`service_id` = `BaseTbl`.`service_id`
WHERE `order_id` = '1'
ERROR - 2020-02-29 16:18:16 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:18:25 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:19:41 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:27:59 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:28:00 --> Severity: Notice --> Undefined index: service_name /home/soordairyfresh/public_html/admin/application/controllers/Order.php 126
ERROR - 2020-02-29 16:28:00 --> Severity: Notice --> Undefined index: service_desc /home/soordairyfresh/public_html/admin/application/controllers/Order.php 126
ERROR - 2020-02-29 16:35:17 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:35:18 --> Severity: Notice --> Undefined index: service_name /home/soordairyfresh/public_html/admin/application/controllers/Order.php 126
ERROR - 2020-02-29 16:35:18 --> Severity: Notice --> Undefined index: service_desc /home/soordairyfresh/public_html/admin/application/controllers/Order.php 126
ERROR - 2020-02-29 16:35:55 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:44:26 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:46:38 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:51:22 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:51:59 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:52:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 16:54:53 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 17:04:28 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-29 17:05:40 --> 404 Page Not Found: Assets/js
