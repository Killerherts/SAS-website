<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-13 21:58:46 --> Query error: Table 'dbs8017061.ea_services_providers' doesn't exist - Invalid query: SELECT DISTINCT `ea_services`.*, `ea_service_categories`.`name` AS `category_name`, `ea_service_categories`.`id` AS `category_id`
FROM `ea_services`
INNER JOIN `ea_services_providers` ON `ea_services_providers`.`id_services` = `ea_services`.`id`
LEFT JOIN `ea_service_categories` ON `ea_service_categories`.`id` = `ea_services`.`id_service_categories`
ORDER BY `name` ASC
ERROR - 2022-07-13 21:58:58 --> Query error: Table 'dbs8017061.ea_services_providers' doesn't exist - Invalid query: SELECT DISTINCT `ea_services`.*, `ea_service_categories`.`name` AS `category_name`, `ea_service_categories`.`id` AS `category_id`
FROM `ea_services`
INNER JOIN `ea_services_providers` ON `ea_services_providers`.`id_services` = `ea_services`.`id`
LEFT JOIN `ea_service_categories` ON `ea_service_categories`.`id` = `ea_services`.`id_service_categories`
ORDER BY `name` ASC
