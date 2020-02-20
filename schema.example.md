# Schema

[`api_settings`](#table-api_settings)<br/>
&emsp;&emsp;[`id`](#table-api_settings-id)<br/>
&emsp;&emsp;[`key`](#table-api_settings-key)<br/>
&emsp;&emsp;[`value`](#table-api_settings-value)<br/>
&emsp;&emsp;[`created_at`](#table-api_settings-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-api_settings-updated_at)<br/>
[`banlist`](#table-banlist)<br/>
&emsp;&emsp;[`id`](#table-banlist-id)<br/>
&emsp;&emsp;[`ban_status`](#table-banlist-ban_status)<br/>
&emsp;&emsp;[`email_address`](#table-banlist-email_address)<br/>
&emsp;&emsp;[`internal_notes`](#table-banlist-internal_notes)<br/>
&emsp;&emsp;[`created_at`](#table-banlist-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-banlist-updated_at)<br/>
[`bar_notifications`](#table-bar_notifications)<br/>
&emsp;&emsp;[`id`](#table-bar_notifications-id)<br/>
&emsp;&emsp;[`key`](#table-bar_notifications-key)<br/>
&emsp;&emsp;[`value`](#table-bar_notifications-value)<br/>
&emsp;&emsp;[`created_at`](#table-bar_notifications-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-bar_notifications-updated_at)<br/>
[`canned_response`](#table-canned_response)<br/>
&emsp;&emsp;[`id`](#table-canned_response-id)<br/>
&emsp;&emsp;[`user_id`](#table-canned_response-user_id) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`title`](#table-canned_response-title)<br/>
&emsp;&emsp;[`message`](#table-canned_response-message)<br/>
&emsp;&emsp;[`created_at`](#table-canned_response-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-canned_response-updated_at)<br/>
[`common_settings`](#table-common_settings)<br/>
&emsp;&emsp;[`id`](#table-common_settings-id)<br/>
&emsp;&emsp;[`option_name`](#table-common_settings-option_name)<br/>
&emsp;&emsp;[`option_value`](#table-common_settings-option_value)<br/>
&emsp;&emsp;[`status`](#table-common_settings-status)<br/>
&emsp;&emsp;[`optional_field`](#table-common_settings-optional_field)<br/>
&emsp;&emsp;[`created_at`](#table-common_settings-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-common_settings-updated_at)<br/>
[`conditions`](#table-conditions)<br/>
&emsp;&emsp;[`id`](#table-conditions-id)<br/>
&emsp;&emsp;[`job`](#table-conditions-job)<br/>
&emsp;&emsp;[`value`](#table-conditions-value)<br/>
&emsp;&emsp;[`created_at`](#table-conditions-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-conditions-updated_at)<br/>
[`country_code`](#table-country_code)<br/>
&emsp;&emsp;[`id`](#table-country_code-id)<br/>
&emsp;&emsp;[`iso`](#table-country_code-iso)<br/>
&emsp;&emsp;[`name`](#table-country_code-name)<br/>
&emsp;&emsp;[`nicename`](#table-country_code-nicename)<br/>
&emsp;&emsp;[`iso3`](#table-country_code-iso3)<br/>
&emsp;&emsp;[`numcode`](#table-country_code-numcode)<br/>
&emsp;&emsp;[`phonecode`](#table-country_code-phonecode)<br/>
&emsp;&emsp;[`created_at`](#table-country_code-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-country_code-updated_at)<br/>
[`custom_form_fields`](#table-custom_form_fields)<br/>
&emsp;&emsp;[`id`](#table-custom_form_fields-id)<br/>
&emsp;&emsp;[`forms_id`](#table-custom_form_fields-forms_id)<br/>
&emsp;&emsp;[`label`](#table-custom_form_fields-label)<br/>
&emsp;&emsp;[`name`](#table-custom_form_fields-name)<br/>
&emsp;&emsp;[`type`](#table-custom_form_fields-type)<br/>
&emsp;&emsp;[`value`](#table-custom_form_fields-value)<br/>
&emsp;&emsp;[`required`](#table-custom_form_fields-required)<br/>
&emsp;&emsp;[`created_at`](#table-custom_form_fields-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-custom_form_fields-updated_at)<br/>
[`custom_forms`](#table-custom_forms)<br/>
&emsp;&emsp;[`id`](#table-custom_forms-id)<br/>
&emsp;&emsp;[`formname`](#table-custom_forms-formname)<br/>
&emsp;&emsp;[`created_at`](#table-custom_forms-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-custom_forms-updated_at)<br/>
[`date_format`](#table-date_format)<br/>
&emsp;&emsp;[`id`](#table-date_format-id)<br/>
&emsp;&emsp;[`format`](#table-date_format-format)<br/>
[`date_time_format`](#table-date_time_format)<br/>
&emsp;&emsp;[`id`](#table-date_time_format-id)<br/>
&emsp;&emsp;[`format`](#table-date_time_format-format)<br/>
[`department`](#table-department)<br/>
&emsp;&emsp;[`id`](#table-department-id)<br/>
&emsp;&emsp;[`name`](#table-department-name)<br/>
&emsp;&emsp;[`type`](#table-department-type)<br/>
&emsp;&emsp;[`sla`](#table-department-sla) => [`sla_plan.id`](#table-sla_plan-id)<br/>
&emsp;&emsp;[`manager`](#table-department-manager) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`ticket_assignment`](#table-department-ticket_assignment)<br/>
&emsp;&emsp;[`outgoing_email`](#table-department-outgoing_email)<br/>
&emsp;&emsp;[`template_set`](#table-department-template_set)<br/>
&emsp;&emsp;[`auto_ticket_response`](#table-department-auto_ticket_response)<br/>
&emsp;&emsp;[`auto_message_response`](#table-department-auto_message_response)<br/>
&emsp;&emsp;[`auto_response_email`](#table-department-auto_response_email)<br/>
&emsp;&emsp;[`recipient`](#table-department-recipient)<br/>
&emsp;&emsp;[`group_access`](#table-department-group_access)<br/>
&emsp;&emsp;[`department_sign`](#table-department-department_sign)<br/>
&emsp;&emsp;[`created_at`](#table-department-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-department-updated_at)<br/>
[`emails`](#table-emails)<br/>
&emsp;&emsp;[`id`](#table-emails-id)<br/>
&emsp;&emsp;[`email_address`](#table-emails-email_address)<br/>
&emsp;&emsp;[`email_name`](#table-emails-email_name)<br/>
&emsp;&emsp;[`department`](#table-emails-department) => [`department.id`](#table-department-id)<br/>
&emsp;&emsp;[`priority`](#table-emails-priority) => [`ticket_priority.priority_id`](#table-ticket_priority-priority_id)<br/>
&emsp;&emsp;[`help_topic`](#table-emails-help_topic) => [`help_topic.id`](#table-help_topic-id)<br/>
&emsp;&emsp;[`user_name`](#table-emails-user_name)<br/>
&emsp;&emsp;[`password`](#table-emails-password)<br/>
&emsp;&emsp;[`fetching_host`](#table-emails-fetching_host)<br/>
&emsp;&emsp;[`fetching_port`](#table-emails-fetching_port)<br/>
&emsp;&emsp;[`fetching_protocol`](#table-emails-fetching_protocol)<br/>
&emsp;&emsp;[`fetching_encryption`](#table-emails-fetching_encryption)<br/>
&emsp;&emsp;[`mailbox_protocol`](#table-emails-mailbox_protocol)<br/>
&emsp;&emsp;[`imap_config`](#table-emails-imap_config)<br/>
&emsp;&emsp;[`folder`](#table-emails-folder)<br/>
&emsp;&emsp;[`sending_host`](#table-emails-sending_host)<br/>
&emsp;&emsp;[`sending_port`](#table-emails-sending_port)<br/>
&emsp;&emsp;[`sending_protocol`](#table-emails-sending_protocol)<br/>
&emsp;&emsp;[`sending_encryption`](#table-emails-sending_encryption)<br/>
&emsp;&emsp;[`smtp_validate`](#table-emails-smtp_validate)<br/>
&emsp;&emsp;[`smtp_authentication`](#table-emails-smtp_authentication)<br/>
&emsp;&emsp;[`internal_notes`](#table-emails-internal_notes)<br/>
&emsp;&emsp;[`auto_response`](#table-emails-auto_response)<br/>
&emsp;&emsp;[`fetching_status`](#table-emails-fetching_status)<br/>
&emsp;&emsp;[`move_to_folder`](#table-emails-move_to_folder)<br/>
&emsp;&emsp;[`delete_email`](#table-emails-delete_email)<br/>
&emsp;&emsp;[`do_nothing`](#table-emails-do_nothing)<br/>
&emsp;&emsp;[`sending_status`](#table-emails-sending_status)<br/>
&emsp;&emsp;[`authentication`](#table-emails-authentication)<br/>
&emsp;&emsp;[`header_spoofing`](#table-emails-header_spoofing)<br/>
&emsp;&emsp;[`created_at`](#table-emails-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-emails-updated_at)<br/>
[`failed_jobs`](#table-failed_jobs)<br/>
&emsp;&emsp;[`id`](#table-failed_jobs-id)<br/>
&emsp;&emsp;[`connection`](#table-failed_jobs-connection)<br/>
&emsp;&emsp;[`queue`](#table-failed_jobs-queue)<br/>
&emsp;&emsp;[`payload`](#table-failed_jobs-payload)<br/>
&emsp;&emsp;[`failed_at`](#table-failed_jobs-failed_at)<br/>
[`faveo_mails`](#table-faveo_mails)<br/>
&emsp;&emsp;[`id`](#table-faveo_mails-id)<br/>
&emsp;&emsp;[`email_id`](#table-faveo_mails-email_id)<br/>
&emsp;&emsp;[`drive`](#table-faveo_mails-drive)<br/>
&emsp;&emsp;[`key`](#table-faveo_mails-key)<br/>
&emsp;&emsp;[`value`](#table-faveo_mails-value)<br/>
&emsp;&emsp;[`created_at`](#table-faveo_mails-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-faveo_mails-updated_at)<br/>
[`faveo_queues`](#table-faveo_queues)<br/>
&emsp;&emsp;[`id`](#table-faveo_queues-id)<br/>
&emsp;&emsp;[`service_id`](#table-faveo_queues-service_id)<br/>
&emsp;&emsp;[`key`](#table-faveo_queues-key)<br/>
&emsp;&emsp;[`value`](#table-faveo_queues-value)<br/>
&emsp;&emsp;[`created_at`](#table-faveo_queues-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-faveo_queues-updated_at)<br/>
[`field_values`](#table-field_values)<br/>
&emsp;&emsp;[`id`](#table-field_values-id)<br/>
&emsp;&emsp;[`field_id`](#table-field_values-field_id) => [`custom_form_fields.id`](#table-custom_form_fields-id)<br/>
&emsp;&emsp;[`child_id`](#table-field_values-child_id)<br/>
&emsp;&emsp;[`field_key`](#table-field_values-field_key)<br/>
&emsp;&emsp;[`field_value`](#table-field_values-field_value)<br/>
&emsp;&emsp;[`created_at`](#table-field_values-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-field_values-updated_at)<br/>
[`group_assign_department`](#table-group_assign_department)<br/>
&emsp;&emsp;[`id`](#table-group_assign_department-id)<br/>
&emsp;&emsp;[`group_id`](#table-group_assign_department-group_id) => [`groups.id`](#table-groups-id)<br/>
&emsp;&emsp;[`department_id`](#table-group_assign_department-department_id) => [`department.id`](#table-department-id)<br/>
&emsp;&emsp;[`created_at`](#table-group_assign_department-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-group_assign_department-updated_at)<br/>
[`groups`](#table-groups)<br/>
&emsp;&emsp;[`id`](#table-groups-id)<br/>
&emsp;&emsp;[`name`](#table-groups-name)<br/>
&emsp;&emsp;[`group_status`](#table-groups-group_status)<br/>
&emsp;&emsp;[`can_create_ticket`](#table-groups-can_create_ticket)<br/>
&emsp;&emsp;[`can_edit_ticket`](#table-groups-can_edit_ticket)<br/>
&emsp;&emsp;[`can_post_ticket`](#table-groups-can_post_ticket)<br/>
&emsp;&emsp;[`can_close_ticket`](#table-groups-can_close_ticket)<br/>
&emsp;&emsp;[`can_assign_ticket`](#table-groups-can_assign_ticket)<br/>
&emsp;&emsp;[`can_transfer_ticket`](#table-groups-can_transfer_ticket)<br/>
&emsp;&emsp;[`can_delete_ticket`](#table-groups-can_delete_ticket)<br/>
&emsp;&emsp;[`can_ban_email`](#table-groups-can_ban_email)<br/>
&emsp;&emsp;[`can_manage_canned`](#table-groups-can_manage_canned)<br/>
&emsp;&emsp;[`can_manage_faq`](#table-groups-can_manage_faq)<br/>
&emsp;&emsp;[`can_view_agent_stats`](#table-groups-can_view_agent_stats)<br/>
&emsp;&emsp;[`department_access`](#table-groups-department_access)<br/>
&emsp;&emsp;[`admin_notes`](#table-groups-admin_notes)<br/>
&emsp;&emsp;[`created_at`](#table-groups-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-groups-updated_at)<br/>
[`help_topic`](#table-help_topic)<br/>
&emsp;&emsp;[`id`](#table-help_topic-id)<br/>
&emsp;&emsp;[`topic`](#table-help_topic-topic)<br/>
&emsp;&emsp;[`parent_topic`](#table-help_topic-parent_topic)<br/>
&emsp;&emsp;[`custom_form`](#table-help_topic-custom_form) => [`custom_forms.id`](#table-custom_forms-id)<br/>
&emsp;&emsp;[`department`](#table-help_topic-department) => [`department.id`](#table-department-id)<br/>
&emsp;&emsp;[`ticket_status`](#table-help_topic-ticket_status) => [`ticket_status.id`](#table-ticket_status-id)<br/>
&emsp;&emsp;[`priority`](#table-help_topic-priority) => [`ticket_priority.priority_id`](#table-ticket_priority-priority_id)<br/>
&emsp;&emsp;[`sla_plan`](#table-help_topic-sla_plan) => [`sla_plan.id`](#table-sla_plan-id)<br/>
&emsp;&emsp;[`thank_page`](#table-help_topic-thank_page)<br/>
&emsp;&emsp;[`ticket_num_format`](#table-help_topic-ticket_num_format)<br/>
&emsp;&emsp;[`internal_notes`](#table-help_topic-internal_notes)<br/>
&emsp;&emsp;[`status`](#table-help_topic-status)<br/>
&emsp;&emsp;[`type`](#table-help_topic-type)<br/>
&emsp;&emsp;[`auto_assign`](#table-help_topic-auto_assign) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`auto_response`](#table-help_topic-auto_response)<br/>
&emsp;&emsp;[`created_at`](#table-help_topic-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-help_topic-updated_at)<br/>
[`jobs`](#table-jobs)<br/>
&emsp;&emsp;[`id`](#table-jobs-id)<br/>
&emsp;&emsp;[`queue`](#table-jobs-queue)<br/>
&emsp;&emsp;[`payload`](#table-jobs-payload)<br/>
&emsp;&emsp;[`attempts`](#table-jobs-attempts)<br/>
&emsp;&emsp;[`reserved`](#table-jobs-reserved)<br/>
&emsp;&emsp;[`reserved_at`](#table-jobs-reserved_at)<br/>
&emsp;&emsp;[`available_at`](#table-jobs-available_at)<br/>
&emsp;&emsp;[`created_at`](#table-jobs-created_at)<br/>
[`kb_article`](#table-kb_article)<br/>
&emsp;&emsp;[`id`](#table-kb_article-id)<br/>
&emsp;&emsp;[`name`](#table-kb_article-name)<br/>
&emsp;&emsp;[`slug`](#table-kb_article-slug)<br/>
&emsp;&emsp;[`description`](#table-kb_article-description)<br/>
&emsp;&emsp;[`status`](#table-kb_article-status)<br/>
&emsp;&emsp;[`type`](#table-kb_article-type)<br/>
&emsp;&emsp;[`publish_time`](#table-kb_article-publish_time)<br/>
&emsp;&emsp;[`created_at`](#table-kb_article-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-kb_article-updated_at)<br/>
[`kb_article_relationship`](#table-kb_article_relationship)<br/>
&emsp;&emsp;[`id`](#table-kb_article_relationship-id)<br/>
&emsp;&emsp;[`article_id`](#table-kb_article_relationship-article_id) => [`kb_article.id`](#table-kb_article-id)<br/>
&emsp;&emsp;[`category_id`](#table-kb_article_relationship-category_id) => [`kb_category.id`](#table-kb_category-id)<br/>
&emsp;&emsp;[`created_at`](#table-kb_article_relationship-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-kb_article_relationship-updated_at)<br/>
[`kb_category`](#table-kb_category)<br/>
&emsp;&emsp;[`id`](#table-kb_category-id)<br/>
&emsp;&emsp;[`name`](#table-kb_category-name)<br/>
&emsp;&emsp;[`slug`](#table-kb_category-slug)<br/>
&emsp;&emsp;[`description`](#table-kb_category-description)<br/>
&emsp;&emsp;[`status`](#table-kb_category-status)<br/>
&emsp;&emsp;[`parent`](#table-kb_category-parent)<br/>
&emsp;&emsp;[`created_at`](#table-kb_category-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-kb_category-updated_at)<br/>
[`kb_comment`](#table-kb_comment)<br/>
&emsp;&emsp;[`id`](#table-kb_comment-id)<br/>
&emsp;&emsp;[`article_id`](#table-kb_comment-article_id) => [`kb_article.id`](#table-kb_article-id)<br/>
&emsp;&emsp;[`name`](#table-kb_comment-name)<br/>
&emsp;&emsp;[`email`](#table-kb_comment-email)<br/>
&emsp;&emsp;[`website`](#table-kb_comment-website)<br/>
&emsp;&emsp;[`comment`](#table-kb_comment-comment)<br/>
&emsp;&emsp;[`status`](#table-kb_comment-status)<br/>
&emsp;&emsp;[`created_at`](#table-kb_comment-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-kb_comment-updated_at)<br/>
[`kb_pages`](#table-kb_pages)<br/>
&emsp;&emsp;[`id`](#table-kb_pages-id)<br/>
&emsp;&emsp;[`name`](#table-kb_pages-name)<br/>
&emsp;&emsp;[`status`](#table-kb_pages-status)<br/>
&emsp;&emsp;[`visibility`](#table-kb_pages-visibility)<br/>
&emsp;&emsp;[`slug`](#table-kb_pages-slug)<br/>
&emsp;&emsp;[`description`](#table-kb_pages-description)<br/>
&emsp;&emsp;[`created_at`](#table-kb_pages-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-kb_pages-updated_at)<br/>
[`kb_settings`](#table-kb_settings)<br/>
&emsp;&emsp;[`id`](#table-kb_settings-id)<br/>
&emsp;&emsp;[`pagination`](#table-kb_settings-pagination)<br/>
&emsp;&emsp;[`created_at`](#table-kb_settings-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-kb_settings-updated_at)<br/>
[`languages`](#table-languages)<br/>
&emsp;&emsp;[`id`](#table-languages-id)<br/>
&emsp;&emsp;[`name`](#table-languages-name)<br/>
&emsp;&emsp;[`locale`](#table-languages-locale)<br/>
[`log_notification`](#table-log_notification)<br/>
&emsp;&emsp;[`id`](#table-log_notification-id)<br/>
&emsp;&emsp;[`log`](#table-log_notification-log)<br/>
&emsp;&emsp;[`created_at`](#table-log_notification-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-log_notification-updated_at)<br/>
[`login_attempts`](#table-login_attempts)<br/>
&emsp;&emsp;[`id`](#table-login_attempts-id)<br/>
&emsp;&emsp;[`User`](#table-login_attempts-User)<br/>
&emsp;&emsp;[`IP`](#table-login_attempts-IP)<br/>
&emsp;&emsp;[`Attempts`](#table-login_attempts-Attempts)<br/>
&emsp;&emsp;[`LastLogin`](#table-login_attempts-LastLogin)<br/>
&emsp;&emsp;[`created_at`](#table-login_attempts-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-login_attempts-updated_at)<br/>
[`mail_services`](#table-mail_services)<br/>
&emsp;&emsp;[`id`](#table-mail_services-id)<br/>
&emsp;&emsp;[`name`](#table-mail_services-name)<br/>
&emsp;&emsp;[`short_name`](#table-mail_services-short_name)<br/>
&emsp;&emsp;[`created_at`](#table-mail_services-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-mail_services-updated_at)<br/>
[`mailbox_protocol`](#table-mailbox_protocol)<br/>
&emsp;&emsp;[`id`](#table-mailbox_protocol-id)<br/>
&emsp;&emsp;[`name`](#table-mailbox_protocol-name)<br/>
&emsp;&emsp;[`value`](#table-mailbox_protocol-value)<br/>
[`migrations`](#table-migrations)<br/>
&emsp;&emsp;[`id`](#table-migrations-id)<br/>
&emsp;&emsp;[`migration`](#table-migrations-migration)<br/>
&emsp;&emsp;[`batch`](#table-migrations-batch)<br/>
[`notification_types`](#table-notification_types)<br/>
&emsp;&emsp;[`id`](#table-notification_types-id)<br/>
&emsp;&emsp;[`message`](#table-notification_types-message)<br/>
&emsp;&emsp;[`type`](#table-notification_types-type)<br/>
&emsp;&emsp;[`icon_class`](#table-notification_types-icon_class)<br/>
&emsp;&emsp;[`created_at`](#table-notification_types-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-notification_types-updated_at)<br/>
[`notifications`](#table-notifications)<br/>
&emsp;&emsp;[`id`](#table-notifications-id)<br/>
&emsp;&emsp;[`model_id`](#table-notifications-model_id)<br/>
&emsp;&emsp;[`userid_created`](#table-notifications-userid_created)<br/>
&emsp;&emsp;[`type_id`](#table-notifications-type_id)<br/>
&emsp;&emsp;[`created_at`](#table-notifications-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-notifications-updated_at)<br/>
[`organization`](#table-organization)<br/>
&emsp;&emsp;[`id`](#table-organization-id)<br/>
&emsp;&emsp;[`name`](#table-organization-name)<br/>
&emsp;&emsp;[`phone`](#table-organization-phone)<br/>
&emsp;&emsp;[`website`](#table-organization-website)<br/>
&emsp;&emsp;[`address`](#table-organization-address)<br/>
&emsp;&emsp;[`head`](#table-organization-head) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`internal_notes`](#table-organization-internal_notes)<br/>
&emsp;&emsp;[`created_at`](#table-organization-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-organization-updated_at)<br/>
[`password_resets`](#table-password_resets)<br/>
&emsp;&emsp;[`email`](#table-password_resets-email)<br/>
&emsp;&emsp;[`token`](#table-password_resets-token)<br/>
&emsp;&emsp;[`created_at`](#table-password_resets-created_at)<br/>
[`plugins`](#table-plugins)<br/>
&emsp;&emsp;[`id`](#table-plugins-id)<br/>
&emsp;&emsp;[`name`](#table-plugins-name)<br/>
&emsp;&emsp;[`path`](#table-plugins-path)<br/>
&emsp;&emsp;[`status`](#table-plugins-status)<br/>
&emsp;&emsp;[`created_at`](#table-plugins-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-plugins-updated_at)<br/>
[`queue_services`](#table-queue_services)<br/>
&emsp;&emsp;[`id`](#table-queue_services-id)<br/>
&emsp;&emsp;[`name`](#table-queue_services-name)<br/>
&emsp;&emsp;[`short_name`](#table-queue_services-short_name)<br/>
&emsp;&emsp;[`status`](#table-queue_services-status)<br/>
&emsp;&emsp;[`created_at`](#table-queue_services-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-queue_services-updated_at)<br/>
[`rating_ref`](#table-rating_ref)<br/>
&emsp;&emsp;[`id`](#table-rating_ref-id)<br/>
&emsp;&emsp;[`rating_id`](#table-rating_ref-rating_id)<br/>
&emsp;&emsp;[`ticket_id`](#table-rating_ref-ticket_id)<br/>
&emsp;&emsp;[`thread_id`](#table-rating_ref-thread_id)<br/>
&emsp;&emsp;[`rating_value`](#table-rating_ref-rating_value)<br/>
&emsp;&emsp;[`created_at`](#table-rating_ref-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-rating_ref-updated_at)<br/>
[`ratings`](#table-ratings)<br/>
&emsp;&emsp;[`id`](#table-ratings-id)<br/>
&emsp;&emsp;[`name`](#table-ratings-name)<br/>
&emsp;&emsp;[`display_order`](#table-ratings-display_order)<br/>
&emsp;&emsp;[`allow_modification`](#table-ratings-allow_modification)<br/>
&emsp;&emsp;[`rating_scale`](#table-ratings-rating_scale)<br/>
&emsp;&emsp;[`rating_area`](#table-ratings-rating_area)<br/>
&emsp;&emsp;[`restrict`](#table-ratings-restrict)<br/>
&emsp;&emsp;[`created_at`](#table-ratings-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-ratings-updated_at)<br/>
[`settings_alert_notice`](#table-settings_alert_notice)<br/>
&emsp;&emsp;[`id`](#table-settings_alert_notice-id)<br/>
&emsp;&emsp;[`ticket_status`](#table-settings_alert_notice-ticket_status)<br/>
&emsp;&emsp;[`ticket_admin_email`](#table-settings_alert_notice-ticket_admin_email)<br/>
&emsp;&emsp;[`ticket_department_manager`](#table-settings_alert_notice-ticket_department_manager)<br/>
&emsp;&emsp;[`ticket_department_member`](#table-settings_alert_notice-ticket_department_member)<br/>
&emsp;&emsp;[`ticket_organization_accmanager`](#table-settings_alert_notice-ticket_organization_accmanager)<br/>
&emsp;&emsp;[`message_status`](#table-settings_alert_notice-message_status)<br/>
&emsp;&emsp;[`message_last_responder`](#table-settings_alert_notice-message_last_responder)<br/>
&emsp;&emsp;[`message_assigned_agent`](#table-settings_alert_notice-message_assigned_agent)<br/>
&emsp;&emsp;[`message_department_manager`](#table-settings_alert_notice-message_department_manager)<br/>
&emsp;&emsp;[`message_organization_accmanager`](#table-settings_alert_notice-message_organization_accmanager)<br/>
&emsp;&emsp;[`internal_status`](#table-settings_alert_notice-internal_status)<br/>
&emsp;&emsp;[`internal_last_responder`](#table-settings_alert_notice-internal_last_responder)<br/>
&emsp;&emsp;[`internal_assigned_agent`](#table-settings_alert_notice-internal_assigned_agent)<br/>
&emsp;&emsp;[`internal_department_manager`](#table-settings_alert_notice-internal_department_manager)<br/>
&emsp;&emsp;[`assignment_status`](#table-settings_alert_notice-assignment_status)<br/>
&emsp;&emsp;[`assignment_assigned_agent`](#table-settings_alert_notice-assignment_assigned_agent)<br/>
&emsp;&emsp;[`assignment_team_leader`](#table-settings_alert_notice-assignment_team_leader)<br/>
&emsp;&emsp;[`assignment_team_member`](#table-settings_alert_notice-assignment_team_member)<br/>
&emsp;&emsp;[`transfer_status`](#table-settings_alert_notice-transfer_status)<br/>
&emsp;&emsp;[`transfer_assigned_agent`](#table-settings_alert_notice-transfer_assigned_agent)<br/>
&emsp;&emsp;[`transfer_department_manager`](#table-settings_alert_notice-transfer_department_manager)<br/>
&emsp;&emsp;[`transfer_department_member`](#table-settings_alert_notice-transfer_department_member)<br/>
&emsp;&emsp;[`overdue_status`](#table-settings_alert_notice-overdue_status)<br/>
&emsp;&emsp;[`overdue_assigned_agent`](#table-settings_alert_notice-overdue_assigned_agent)<br/>
&emsp;&emsp;[`overdue_department_manager`](#table-settings_alert_notice-overdue_department_manager)<br/>
&emsp;&emsp;[`overdue_department_member`](#table-settings_alert_notice-overdue_department_member)<br/>
&emsp;&emsp;[`system_error`](#table-settings_alert_notice-system_error)<br/>
&emsp;&emsp;[`sql_error`](#table-settings_alert_notice-sql_error)<br/>
&emsp;&emsp;[`excessive_failure`](#table-settings_alert_notice-excessive_failure)<br/>
&emsp;&emsp;[`created_at`](#table-settings_alert_notice-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-settings_alert_notice-updated_at)<br/>
[`settings_auto_response`](#table-settings_auto_response)<br/>
&emsp;&emsp;[`id`](#table-settings_auto_response-id)<br/>
&emsp;&emsp;[`new_ticket`](#table-settings_auto_response-new_ticket)<br/>
&emsp;&emsp;[`agent_new_ticket`](#table-settings_auto_response-agent_new_ticket)<br/>
&emsp;&emsp;[`submitter`](#table-settings_auto_response-submitter)<br/>
&emsp;&emsp;[`participants`](#table-settings_auto_response-participants)<br/>
&emsp;&emsp;[`overlimit`](#table-settings_auto_response-overlimit)<br/>
&emsp;&emsp;[`created_at`](#table-settings_auto_response-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-settings_auto_response-updated_at)<br/>
[`settings_company`](#table-settings_company)<br/>
&emsp;&emsp;[`id`](#table-settings_company-id)<br/>
&emsp;&emsp;[`company_name`](#table-settings_company-company_name)<br/>
&emsp;&emsp;[`website`](#table-settings_company-website)<br/>
&emsp;&emsp;[`phone`](#table-settings_company-phone)<br/>
&emsp;&emsp;[`address`](#table-settings_company-address)<br/>
&emsp;&emsp;[`landing_page`](#table-settings_company-landing_page)<br/>
&emsp;&emsp;[`offline_page`](#table-settings_company-offline_page)<br/>
&emsp;&emsp;[`thank_page`](#table-settings_company-thank_page)<br/>
&emsp;&emsp;[`logo`](#table-settings_company-logo)<br/>
&emsp;&emsp;[`use_logo`](#table-settings_company-use_logo)<br/>
&emsp;&emsp;[`created_at`](#table-settings_company-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-settings_company-updated_at)<br/>
[`settings_email`](#table-settings_email)<br/>
&emsp;&emsp;[`id`](#table-settings_email-id)<br/>
&emsp;&emsp;[`template`](#table-settings_email-template)<br/>
&emsp;&emsp;[`sys_email`](#table-settings_email-sys_email)<br/>
&emsp;&emsp;[`alert_email`](#table-settings_email-alert_email)<br/>
&emsp;&emsp;[`admin_email`](#table-settings_email-admin_email)<br/>
&emsp;&emsp;[`mta`](#table-settings_email-mta)<br/>
&emsp;&emsp;[`email_fetching`](#table-settings_email-email_fetching)<br/>
&emsp;&emsp;[`notification_cron`](#table-settings_email-notification_cron)<br/>
&emsp;&emsp;[`strip`](#table-settings_email-strip)<br/>
&emsp;&emsp;[`separator`](#table-settings_email-separator)<br/>
&emsp;&emsp;[`all_emails`](#table-settings_email-all_emails)<br/>
&emsp;&emsp;[`email_collaborator`](#table-settings_email-email_collaborator)<br/>
&emsp;&emsp;[`attachment`](#table-settings_email-attachment)<br/>
&emsp;&emsp;[`created_at`](#table-settings_email-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-settings_email-updated_at)<br/>
[`settings_ratings`](#table-settings_ratings)<br/>
&emsp;&emsp;[`id`](#table-settings_ratings-id)<br/>
&emsp;&emsp;[`rating_name`](#table-settings_ratings-rating_name)<br/>
&emsp;&emsp;[`publish`](#table-settings_ratings-publish)<br/>
&emsp;&emsp;[`modify`](#table-settings_ratings-modify)<br/>
&emsp;&emsp;[`slug`](#table-settings_ratings-slug)<br/>
&emsp;&emsp;[`created_at`](#table-settings_ratings-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-settings_ratings-updated_at)<br/>
[`settings_security`](#table-settings_security)<br/>
&emsp;&emsp;[`id`](#table-settings_security-id)<br/>
&emsp;&emsp;[`lockout_message`](#table-settings_security-lockout_message)<br/>
&emsp;&emsp;[`backlist_offender`](#table-settings_security-backlist_offender)<br/>
&emsp;&emsp;[`backlist_threshold`](#table-settings_security-backlist_threshold)<br/>
&emsp;&emsp;[`lockout_period`](#table-settings_security-lockout_period)<br/>
&emsp;&emsp;[`days_to_keep_logs`](#table-settings_security-days_to_keep_logs)<br/>
&emsp;&emsp;[`created_at`](#table-settings_security-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-settings_security-updated_at)<br/>
[`settings_system`](#table-settings_system)<br/>
&emsp;&emsp;[`id`](#table-settings_system-id)<br/>
&emsp;&emsp;[`status`](#table-settings_system-status)<br/>
&emsp;&emsp;[`url`](#table-settings_system-url)<br/>
&emsp;&emsp;[`name`](#table-settings_system-name)<br/>
&emsp;&emsp;[`department`](#table-settings_system-department)<br/>
&emsp;&emsp;[`page_size`](#table-settings_system-page_size)<br/>
&emsp;&emsp;[`log_level`](#table-settings_system-log_level)<br/>
&emsp;&emsp;[`purge_log`](#table-settings_system-purge_log)<br/>
&emsp;&emsp;[`api_enable`](#table-settings_system-api_enable)<br/>
&emsp;&emsp;[`api_key_mandatory`](#table-settings_system-api_key_mandatory)<br/>
&emsp;&emsp;[`api_key`](#table-settings_system-api_key)<br/>
&emsp;&emsp;[`name_format`](#table-settings_system-name_format)<br/>
&emsp;&emsp;[`time_farmat`](#table-settings_system-time_farmat) => [`time_format.id`](#table-time_format-id)<br/>
&emsp;&emsp;[`date_format`](#table-settings_system-date_format) => [`date_format.id`](#table-date_format-id)<br/>
&emsp;&emsp;[`date_time_format`](#table-settings_system-date_time_format) => [`date_time_format.id`](#table-date_time_format-id)<br/>
&emsp;&emsp;[`day_date_time`](#table-settings_system-day_date_time)<br/>
&emsp;&emsp;[`time_zone`](#table-settings_system-time_zone) => [`timezone.id`](#table-timezone-id)<br/>
&emsp;&emsp;[`content`](#table-settings_system-content)<br/>
&emsp;&emsp;[`version`](#table-settings_system-version)<br/>
&emsp;&emsp;[`created_at`](#table-settings_system-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-settings_system-updated_at)<br/>
[`settings_ticket`](#table-settings_ticket)<br/>
&emsp;&emsp;[`id`](#table-settings_ticket-id)<br/>
&emsp;&emsp;[`num_format`](#table-settings_ticket-num_format)<br/>
&emsp;&emsp;[`num_sequence`](#table-settings_ticket-num_sequence)<br/>
&emsp;&emsp;[`priority`](#table-settings_ticket-priority)<br/>
&emsp;&emsp;[`sla`](#table-settings_ticket-sla)<br/>
&emsp;&emsp;[`help_topic`](#table-settings_ticket-help_topic)<br/>
&emsp;&emsp;[`max_open_ticket`](#table-settings_ticket-max_open_ticket)<br/>
&emsp;&emsp;[`collision_avoid`](#table-settings_ticket-collision_avoid)<br/>
&emsp;&emsp;[`lock_ticket_frequency`](#table-settings_ticket-lock_ticket_frequency)<br/>
&emsp;&emsp;[`captcha`](#table-settings_ticket-captcha)<br/>
&emsp;&emsp;[`status`](#table-settings_ticket-status)<br/>
&emsp;&emsp;[`claim_response`](#table-settings_ticket-claim_response)<br/>
&emsp;&emsp;[`assigned_ticket`](#table-settings_ticket-assigned_ticket)<br/>
&emsp;&emsp;[`answered_ticket`](#table-settings_ticket-answered_ticket)<br/>
&emsp;&emsp;[`agent_mask`](#table-settings_ticket-agent_mask)<br/>
&emsp;&emsp;[`html`](#table-settings_ticket-html)<br/>
&emsp;&emsp;[`client_update`](#table-settings_ticket-client_update)<br/>
&emsp;&emsp;[`max_file_size`](#table-settings_ticket-max_file_size)<br/>
&emsp;&emsp;[`created_at`](#table-settings_ticket-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-settings_ticket-updated_at)<br/>
[`sla_plan`](#table-sla_plan)<br/>
&emsp;&emsp;[`id`](#table-sla_plan-id)<br/>
&emsp;&emsp;[`name`](#table-sla_plan-name)<br/>
&emsp;&emsp;[`grace_period`](#table-sla_plan-grace_period)<br/>
&emsp;&emsp;[`admin_note`](#table-sla_plan-admin_note)<br/>
&emsp;&emsp;[`status`](#table-sla_plan-status)<br/>
&emsp;&emsp;[`transient`](#table-sla_plan-transient)<br/>
&emsp;&emsp;[`ticket_overdue`](#table-sla_plan-ticket_overdue)<br/>
&emsp;&emsp;[`created_at`](#table-sla_plan-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-sla_plan-updated_at)<br/>
[`social_media`](#table-social_media)<br/>
&emsp;&emsp;[`id`](#table-social_media-id)<br/>
&emsp;&emsp;[`provider`](#table-social_media-provider)<br/>
&emsp;&emsp;[`key`](#table-social_media-key)<br/>
&emsp;&emsp;[`value`](#table-social_media-value)<br/>
&emsp;&emsp;[`created_at`](#table-social_media-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-social_media-updated_at)<br/>
[`team_assign_agent`](#table-team_assign_agent)<br/>
&emsp;&emsp;[`id`](#table-team_assign_agent-id)<br/>
&emsp;&emsp;[`team_id`](#table-team_assign_agent-team_id) => [`teams.id`](#table-teams-id)<br/>
&emsp;&emsp;[`agent_id`](#table-team_assign_agent-agent_id) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`created_at`](#table-team_assign_agent-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-team_assign_agent-updated_at)<br/>
[`teams`](#table-teams)<br/>
&emsp;&emsp;[`id`](#table-teams-id)<br/>
&emsp;&emsp;[`name`](#table-teams-name)<br/>
&emsp;&emsp;[`status`](#table-teams-status)<br/>
&emsp;&emsp;[`team_lead`](#table-teams-team_lead) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`assign_alert`](#table-teams-assign_alert)<br/>
&emsp;&emsp;[`admin_notes`](#table-teams-admin_notes)<br/>
&emsp;&emsp;[`created_at`](#table-teams-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-teams-updated_at)<br/>
[`template`](#table-template)<br/>
&emsp;&emsp;[`id`](#table-template-id)<br/>
&emsp;&emsp;[`name`](#table-template-name)<br/>
&emsp;&emsp;[`status`](#table-template-status)<br/>
&emsp;&emsp;[`template_set_to_clone`](#table-template-template_set_to_clone)<br/>
&emsp;&emsp;[`language`](#table-template-language)<br/>
&emsp;&emsp;[`internal_note`](#table-template-internal_note)<br/>
&emsp;&emsp;[`created_at`](#table-template-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-template-updated_at)<br/>
[`template_sets`](#table-template_sets)<br/>
&emsp;&emsp;[`id`](#table-template_sets-id)<br/>
&emsp;&emsp;[`name`](#table-template_sets-name)<br/>
&emsp;&emsp;[`active`](#table-template_sets-active)<br/>
&emsp;&emsp;[`created_at`](#table-template_sets-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-template_sets-updated_at)<br/>
[`template_types`](#table-template_types)<br/>
&emsp;&emsp;[`id`](#table-template_types-id)<br/>
&emsp;&emsp;[`name`](#table-template_types-name)<br/>
&emsp;&emsp;[`created_at`](#table-template_types-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-template_types-updated_at)<br/>
[`templates`](#table-templates)<br/>
&emsp;&emsp;[`id`](#table-templates-id)<br/>
&emsp;&emsp;[`name`](#table-templates-name)<br/>
&emsp;&emsp;[`variable`](#table-templates-variable)<br/>
&emsp;&emsp;[`type`](#table-templates-type)<br/>
&emsp;&emsp;[`subject`](#table-templates-subject)<br/>
&emsp;&emsp;[`message`](#table-templates-message)<br/>
&emsp;&emsp;[`description`](#table-templates-description)<br/>
&emsp;&emsp;[`set_id`](#table-templates-set_id)<br/>
&emsp;&emsp;[`created_at`](#table-templates-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-templates-updated_at)<br/>
[`ticket_attachment`](#table-ticket_attachment)<br/>
&emsp;&emsp;[`id`](#table-ticket_attachment-id)<br/>
&emsp;&emsp;[`name`](#table-ticket_attachment-name)<br/>
&emsp;&emsp;[`thread_id`](#table-ticket_attachment-thread_id) => [`ticket_thread.id`](#table-ticket_thread-id)<br/>
&emsp;&emsp;[`size`](#table-ticket_attachment-size)<br/>
&emsp;&emsp;[`type`](#table-ticket_attachment-type)<br/>
&emsp;&emsp;[`poster`](#table-ticket_attachment-poster)<br/>
&emsp;&emsp;[`created_at`](#table-ticket_attachment-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-ticket_attachment-updated_at)<br/>
&emsp;&emsp;[`file`](#table-ticket_attachment-file)<br/>
[`ticket_collaborator`](#table-ticket_collaborator)<br/>
&emsp;&emsp;[`id`](#table-ticket_collaborator-id)<br/>
&emsp;&emsp;[`isactive`](#table-ticket_collaborator-isactive)<br/>
&emsp;&emsp;[`ticket_id`](#table-ticket_collaborator-ticket_id) => [`tickets.id`](#table-tickets-id)<br/>
&emsp;&emsp;[`user_id`](#table-ticket_collaborator-user_id) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`role`](#table-ticket_collaborator-role)<br/>
&emsp;&emsp;[`created_at`](#table-ticket_collaborator-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-ticket_collaborator-updated_at)<br/>
[`ticket_form_data`](#table-ticket_form_data)<br/>
&emsp;&emsp;[`id`](#table-ticket_form_data-id)<br/>
&emsp;&emsp;[`ticket_id`](#table-ticket_form_data-ticket_id) => [`tickets.id`](#table-tickets-id)<br/>
&emsp;&emsp;[`title`](#table-ticket_form_data-title)<br/>
&emsp;&emsp;[`content`](#table-ticket_form_data-content)<br/>
&emsp;&emsp;[`created_at`](#table-ticket_form_data-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-ticket_form_data-updated_at)<br/>
[`ticket_priority`](#table-ticket_priority)<br/>
&emsp;&emsp;[`priority_id`](#table-ticket_priority-priority_id)<br/>
&emsp;&emsp;[`priority`](#table-ticket_priority-priority)<br/>
&emsp;&emsp;[`status`](#table-ticket_priority-status)<br/>
&emsp;&emsp;[`priority_desc`](#table-ticket_priority-priority_desc)<br/>
&emsp;&emsp;[`priority_color`](#table-ticket_priority-priority_color)<br/>
&emsp;&emsp;[`priority_urgency`](#table-ticket_priority-priority_urgency)<br/>
&emsp;&emsp;[`ispublic`](#table-ticket_priority-ispublic)<br/>
&emsp;&emsp;[`is_default`](#table-ticket_priority-is_default)<br/>
&emsp;&emsp;[`created_at`](#table-ticket_priority-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-ticket_priority-updated_at)<br/>
[`ticket_source`](#table-ticket_source)<br/>
&emsp;&emsp;[`id`](#table-ticket_source-id)<br/>
&emsp;&emsp;[`name`](#table-ticket_source-name)<br/>
&emsp;&emsp;[`value`](#table-ticket_source-value)<br/>
&emsp;&emsp;[`css_class`](#table-ticket_source-css_class)<br/>
[`ticket_status`](#table-ticket_status)<br/>
&emsp;&emsp;[`id`](#table-ticket_status-id)<br/>
&emsp;&emsp;[`name`](#table-ticket_status-name)<br/>
&emsp;&emsp;[`state`](#table-ticket_status-state)<br/>
&emsp;&emsp;[`mode`](#table-ticket_status-mode)<br/>
&emsp;&emsp;[`message`](#table-ticket_status-message)<br/>
&emsp;&emsp;[`flags`](#table-ticket_status-flags)<br/>
&emsp;&emsp;[`sort`](#table-ticket_status-sort)<br/>
&emsp;&emsp;[`email_user`](#table-ticket_status-email_user)<br/>
&emsp;&emsp;[`icon_class`](#table-ticket_status-icon_class)<br/>
&emsp;&emsp;[`properties`](#table-ticket_status-properties)<br/>
&emsp;&emsp;[`created_at`](#table-ticket_status-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-ticket_status-updated_at)<br/>
[`ticket_thread`](#table-ticket_thread)<br/>
&emsp;&emsp;[`id`](#table-ticket_thread-id)<br/>
&emsp;&emsp;[`ticket_id`](#table-ticket_thread-ticket_id) => [`tickets.id`](#table-tickets-id)<br/>
&emsp;&emsp;[`user_id`](#table-ticket_thread-user_id) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`poster`](#table-ticket_thread-poster)<br/>
&emsp;&emsp;[`source`](#table-ticket_thread-source) => [`ticket_source.id`](#table-ticket_source-id)<br/>
&emsp;&emsp;[`reply_rating`](#table-ticket_thread-reply_rating)<br/>
&emsp;&emsp;[`rating_count`](#table-ticket_thread-rating_count)<br/>
&emsp;&emsp;[`is_internal`](#table-ticket_thread-is_internal)<br/>
&emsp;&emsp;[`title`](#table-ticket_thread-title)<br/>
&emsp;&emsp;[`body`](#table-ticket_thread-body)<br/>
&emsp;&emsp;[`format`](#table-ticket_thread-format)<br/>
&emsp;&emsp;[`ip_address`](#table-ticket_thread-ip_address)<br/>
&emsp;&emsp;[`created_at`](#table-ticket_thread-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-ticket_thread-updated_at)<br/>
[`ticket_token`](#table-ticket_token)<br/>
&emsp;&emsp;[`id`](#table-ticket_token-id)<br/>
&emsp;&emsp;[`ticket_id`](#table-ticket_token-ticket_id)<br/>
&emsp;&emsp;[`token`](#table-ticket_token-token)<br/>
&emsp;&emsp;[`created_at`](#table-ticket_token-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-ticket_token-updated_at)<br/>
[`tickets`](#table-tickets)<br/>
&emsp;&emsp;[`id`](#table-tickets-id)<br/>
&emsp;&emsp;[`ticket_number`](#table-tickets-ticket_number)<br/>
&emsp;&emsp;[`user_id`](#table-tickets-user_id) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`dept_id`](#table-tickets-dept_id) => [`department.id`](#table-department-id)<br/>
&emsp;&emsp;[`team_id`](#table-tickets-team_id) => [`teams.id`](#table-teams-id)<br/>
&emsp;&emsp;[`priority_id`](#table-tickets-priority_id) => [`ticket_priority.priority_id`](#table-ticket_priority-priority_id)<br/>
&emsp;&emsp;[`sla`](#table-tickets-sla) => [`sla_plan.id`](#table-sla_plan-id)<br/>
&emsp;&emsp;[`help_topic_id`](#table-tickets-help_topic_id) => [`help_topic.id`](#table-help_topic-id)<br/>
&emsp;&emsp;[`status`](#table-tickets-status) => [`ticket_status.id`](#table-ticket_status-id)<br/>
&emsp;&emsp;[`rating`](#table-tickets-rating)<br/>
&emsp;&emsp;[`ratingreply`](#table-tickets-ratingreply)<br/>
&emsp;&emsp;[`flags`](#table-tickets-flags)<br/>
&emsp;&emsp;[`ip_address`](#table-tickets-ip_address)<br/>
&emsp;&emsp;[`assigned_to`](#table-tickets-assigned_to) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`lock_by`](#table-tickets-lock_by)<br/>
&emsp;&emsp;[`lock_at`](#table-tickets-lock_at)<br/>
&emsp;&emsp;[`source`](#table-tickets-source) => [`ticket_source.id`](#table-ticket_source-id)<br/>
&emsp;&emsp;[`isoverdue`](#table-tickets-isoverdue)<br/>
&emsp;&emsp;[`reopened`](#table-tickets-reopened)<br/>
&emsp;&emsp;[`isanswered`](#table-tickets-isanswered)<br/>
&emsp;&emsp;[`html`](#table-tickets-html)<br/>
&emsp;&emsp;[`is_deleted`](#table-tickets-is_deleted)<br/>
&emsp;&emsp;[`closed`](#table-tickets-closed)<br/>
&emsp;&emsp;[`is_transferred`](#table-tickets-is_transferred)<br/>
&emsp;&emsp;[`transferred_at`](#table-tickets-transferred_at)<br/>
&emsp;&emsp;[`reopened_at`](#table-tickets-reopened_at)<br/>
&emsp;&emsp;[`duedate`](#table-tickets-duedate)<br/>
&emsp;&emsp;[`closed_at`](#table-tickets-closed_at)<br/>
&emsp;&emsp;[`last_message_at`](#table-tickets-last_message_at)<br/>
&emsp;&emsp;[`last_response_at`](#table-tickets-last_response_at)<br/>
&emsp;&emsp;[`approval`](#table-tickets-approval)<br/>
&emsp;&emsp;[`follow_up`](#table-tickets-follow_up)<br/>
&emsp;&emsp;[`created_at`](#table-tickets-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-tickets-updated_at)<br/>
[`time_format`](#table-time_format)<br/>
&emsp;&emsp;[`id`](#table-time_format-id)<br/>
&emsp;&emsp;[`format`](#table-time_format-format)<br/>
[`timezone`](#table-timezone)<br/>
&emsp;&emsp;[`id`](#table-timezone-id)<br/>
&emsp;&emsp;[`name`](#table-timezone-name)<br/>
&emsp;&emsp;[`location`](#table-timezone-location)<br/>
[`user_additional_infos`](#table-user_additional_infos)<br/>
&emsp;&emsp;[`id`](#table-user_additional_infos-id)<br/>
&emsp;&emsp;[`owner`](#table-user_additional_infos-owner)<br/>
&emsp;&emsp;[`service`](#table-user_additional_infos-service)<br/>
&emsp;&emsp;[`key`](#table-user_additional_infos-key)<br/>
&emsp;&emsp;[`value`](#table-user_additional_infos-value)<br/>
&emsp;&emsp;[`created_at`](#table-user_additional_infos-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-user_additional_infos-updated_at)<br/>
[`user_assign_organization`](#table-user_assign_organization)<br/>
&emsp;&emsp;[`id`](#table-user_assign_organization-id)<br/>
&emsp;&emsp;[`org_id`](#table-user_assign_organization-org_id) => [`organization.id`](#table-organization-id)<br/>
&emsp;&emsp;[`user_id`](#table-user_assign_organization-user_id) => [`users.id`](#table-users-id)<br/>
&emsp;&emsp;[`created_at`](#table-user_assign_organization-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-user_assign_organization-updated_at)<br/>
[`user_notification`](#table-user_notification)<br/>
&emsp;&emsp;[`id`](#table-user_notification-id)<br/>
&emsp;&emsp;[`notification_id`](#table-user_notification-notification_id)<br/>
&emsp;&emsp;[`user_id`](#table-user_notification-user_id)<br/>
&emsp;&emsp;[`is_read`](#table-user_notification-is_read)<br/>
&emsp;&emsp;[`created_at`](#table-user_notification-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-user_notification-updated_at)<br/>
[`users`](#table-users)<br/>
&emsp;&emsp;[`id`](#table-users-id)<br/>
&emsp;&emsp;[`user_name`](#table-users-user_name)<br/>
&emsp;&emsp;[`first_name`](#table-users-first_name)<br/>
&emsp;&emsp;[`last_name`](#table-users-last_name)<br/>
&emsp;&emsp;[`gender`](#table-users-gender)<br/>
&emsp;&emsp;[`email`](#table-users-email)<br/>
&emsp;&emsp;[`ban`](#table-users-ban)<br/>
&emsp;&emsp;[`password`](#table-users-password)<br/>
&emsp;&emsp;[`active`](#table-users-active)<br/>
&emsp;&emsp;[`is_delete`](#table-users-is_delete)<br/>
&emsp;&emsp;[`ext`](#table-users-ext)<br/>
&emsp;&emsp;[`country_code`](#table-users-country_code)<br/>
&emsp;&emsp;[`phone_number`](#table-users-phone_number)<br/>
&emsp;&emsp;[`mobile`](#table-users-mobile)<br/>
&emsp;&emsp;[`agent_sign`](#table-users-agent_sign)<br/>
&emsp;&emsp;[`account_type`](#table-users-account_type)<br/>
&emsp;&emsp;[`account_status`](#table-users-account_status)<br/>
&emsp;&emsp;[`assign_group`](#table-users-assign_group) => [`groups.id`](#table-groups-id)<br/>
&emsp;&emsp;[`primary_dpt`](#table-users-primary_dpt) => [`department.id`](#table-department-id)<br/>
&emsp;&emsp;[`agent_tzone`](#table-users-agent_tzone)<br/>
&emsp;&emsp;[`daylight_save`](#table-users-daylight_save)<br/>
&emsp;&emsp;[`limit_access`](#table-users-limit_access)<br/>
&emsp;&emsp;[`directory_listing`](#table-users-directory_listing)<br/>
&emsp;&emsp;[`vacation_mode`](#table-users-vacation_mode)<br/>
&emsp;&emsp;[`company`](#table-users-company)<br/>
&emsp;&emsp;[`role`](#table-users-role)<br/>
&emsp;&emsp;[`internal_note`](#table-users-internal_note)<br/>
&emsp;&emsp;[`profile_pic`](#table-users-profile_pic)<br/>
&emsp;&emsp;[`remember_token`](#table-users-remember_token)<br/>
&emsp;&emsp;[`created_at`](#table-users-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-users-updated_at)<br/>
&emsp;&emsp;[`user_language`](#table-users-user_language)<br/>
[`version_check`](#table-version_check)<br/>
&emsp;&emsp;[`id`](#table-version_check-id)<br/>
&emsp;&emsp;[`current_version`](#table-version_check-current_version)<br/>
&emsp;&emsp;[`new_version`](#table-version_check-new_version)<br/>
&emsp;&emsp;[`created_at`](#table-version_check-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-version_check-updated_at)<br/>
[`widgets`](#table-widgets)<br/>
&emsp;&emsp;[`id`](#table-widgets-id)<br/>
&emsp;&emsp;[`name`](#table-widgets-name)<br/>
&emsp;&emsp;[`title`](#table-widgets-title)<br/>
&emsp;&emsp;[`value`](#table-widgets-value)<br/>
&emsp;&emsp;[`created_at`](#table-widgets-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-widgets-updated_at)<br/>
[`workflow_action`](#table-workflow_action)<br/>
&emsp;&emsp;[`id`](#table-workflow_action-id)<br/>
&emsp;&emsp;[`workflow_id`](#table-workflow_action-workflow_id) => [`workflow_name.id`](#table-workflow_name-id)<br/>
&emsp;&emsp;[`condition`](#table-workflow_action-condition)<br/>
&emsp;&emsp;[`action`](#table-workflow_action-action)<br/>
&emsp;&emsp;[`created_at`](#table-workflow_action-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-workflow_action-updated_at)<br/>
[`workflow_close`](#table-workflow_close)<br/>
&emsp;&emsp;[`id`](#table-workflow_close-id)<br/>
&emsp;&emsp;[`days`](#table-workflow_close-days)<br/>
&emsp;&emsp;[`condition`](#table-workflow_close-condition)<br/>
&emsp;&emsp;[`send_email`](#table-workflow_close-send_email)<br/>
&emsp;&emsp;[`status`](#table-workflow_close-status)<br/>
&emsp;&emsp;[`created_at`](#table-workflow_close-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-workflow_close-updated_at)<br/>
[`workflow_name`](#table-workflow_name)<br/>
&emsp;&emsp;[`id`](#table-workflow_name-id)<br/>
&emsp;&emsp;[`name`](#table-workflow_name-name)<br/>
&emsp;&emsp;[`status`](#table-workflow_name-status)<br/>
&emsp;&emsp;[`order`](#table-workflow_name-order)<br/>
&emsp;&emsp;[`target`](#table-workflow_name-target)<br/>
&emsp;&emsp;[`internal_note`](#table-workflow_name-internal_note)<br/>
&emsp;&emsp;[`created_at`](#table-workflow_name-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-workflow_name-updated_at)<br/>
[`workflow_rules`](#table-workflow_rules)<br/>
&emsp;&emsp;[`id`](#table-workflow_rules-id)<br/>
&emsp;&emsp;[`workflow_id`](#table-workflow_rules-workflow_id) => [`workflow_name.id`](#table-workflow_name-id)<br/>
&emsp;&emsp;[`matching_criteria`](#table-workflow_rules-matching_criteria)<br/>
&emsp;&emsp;[`matching_scenario`](#table-workflow_rules-matching_scenario)<br/>
&emsp;&emsp;[`matching_relation`](#table-workflow_rules-matching_relation)<br/>
&emsp;&emsp;[`matching_value`](#table-workflow_rules-matching_value)<br/>
&emsp;&emsp;[`created_at`](#table-workflow_rules-created_at)<br/>
&emsp;&emsp;[`updated_at`](#table-workflow_rules-updated_at)<br/>

## Table: `api_settings`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-api_settings-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-api_settings-key">`key`</span> | `string(255)` |  |  |  |
| <span id="table-api_settings-value">`value`</span> | `string(255)` |  |  |  |
| <span id="table-api_settings-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-api_settings-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `banlist`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-banlist-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-banlist-ban_status">`ban_status`</span> | `boolean` |  |  |  |
| <span id="table-banlist-email_address">`email_address`</span> | `string(255)` |  |  |  |
| <span id="table-banlist-internal_notes">`internal_notes`</span> | `string(255)` |  |  |  |
| <span id="table-banlist-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-banlist-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `bar_notifications`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-bar_notifications-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-bar_notifications-key">`key`</span> | `string(255)` |  |  |  |
| <span id="table-bar_notifications-value">`value`</span> | `string(255)` |  |  |  |
| <span id="table-bar_notifications-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-bar_notifications-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `canned_response`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-canned_response-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-canned_response-user_id">`user_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-canned_response-title">`title`</span> | `string(255)` |  |  |  |
| <span id="table-canned_response-message">`message`</span> | `text` |  |  |  |
| <span id="table-canned_response-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-canned_response-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `user_id` | `index` | `user_id` |  |  |
| `canned_response_ibfk_1` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"NO ACTION"` |


## Table: `common_settings`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-common_settings-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-common_settings-option_name">`option_name`</span> | `string(255)` |  |  |  |
| <span id="table-common_settings-option_value">`option_value`</span> | `string(255)` |  |  |  |
| <span id="table-common_settings-status">`status`</span> | `string(255)` |  |  |  |
| <span id="table-common_settings-optional_field">`optional_field`</span> | `string(255)` |  |  |  |
| <span id="table-common_settings-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-common_settings-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `conditions`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-conditions-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-conditions-job">`job`</span> | `string(255)` |  |  |  |
| <span id="table-conditions-value">`value`</span> | `string(255)` |  |  |  |
| <span id="table-conditions-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-conditions-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `country_code`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-country_code-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-country_code-iso">`iso`</span> | `char(2)` |  |  |  |
| <span id="table-country_code-name">`name`</span> | `string(100)` |  |  |  |
| <span id="table-country_code-nicename">`nicename`</span> | `string(100)` |  |  |  |
| <span id="table-country_code-iso3">`iso3`</span> | `char(3)` |  |  |  |
| <span id="table-country_code-numcode">`numcode`</span> | `smallInteger` |  | `autoIncrement:false` |  |
| <span id="table-country_code-phonecode">`phonecode`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-country_code-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-country_code-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `custom_form_fields`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-custom_form_fields-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-custom_form_fields-forms_id">`forms_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-custom_form_fields-label">`label`</span> | `string(255)` |  |  |  |
| <span id="table-custom_form_fields-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-custom_form_fields-type">`type`</span> | `string(255)` |  |  |  |
| <span id="table-custom_form_fields-value">`value`</span> | `string(255)` |  |  |  |
| <span id="table-custom_form_fields-required">`required`</span> | `string(255)` |  |  |  |
| <span id="table-custom_form_fields-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-custom_form_fields-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `custom_forms`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-custom_forms-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-custom_forms-formname">`formname`</span> | `string(255)` |  |  |  |
| <span id="table-custom_forms-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-custom_forms-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `date_format`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-date_format-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-date_format-format">`format`</span> | `string(255)` |  |  |  |


## Table: `date_time_format`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-date_time_format-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-date_time_format-format">`format`</span> | `string(255)` |  |  |  |


## Table: `department`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-department-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-department-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-department-type">`type`</span> | `string(255)` |  |  |  |
| <span id="table-department-sla">`sla`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-department-manager">`manager`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-department-ticket_assignment">`ticket_assignment`</span> | `string(255)` |  |  |  |
| <span id="table-department-outgoing_email">`outgoing_email`</span> | `string(255)` |  |  |  |
| <span id="table-department-template_set">`template_set`</span> | `string(255)` |  |  |  |
| <span id="table-department-auto_ticket_response">`auto_ticket_response`</span> | `string(255)` |  |  |  |
| <span id="table-department-auto_message_response">`auto_message_response`</span> | `string(255)` |  |  |  |
| <span id="table-department-auto_response_email">`auto_response_email`</span> | `string(255)` |  |  |  |
| <span id="table-department-recipient">`recipient`</span> | `string(255)` |  |  |  |
| <span id="table-department-group_access">`group_access`</span> | `string(255)` |  |  |  |
| <span id="table-department-department_sign">`department_sign`</span> | `string(255)` |  |  |  |
| <span id="table-department-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-department-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `sla` | `index` | `sla` |  |  |
| `manager_2` | `index` | `manager` |  |  |
| `department_ibfk_1` | `foreign` | `sla` |  | `references:"id"`<br/>`on:"sla_plan"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `department_ibfk_2` | `foreign` | `manager` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `emails`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-emails-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-emails-email_address">`email_address`</span> | `string(255)` |  |  |  |
| <span id="table-emails-email_name">`email_name`</span> | `string(255)` |  |  |  |
| <span id="table-emails-department">`department`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-emails-priority">`priority`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-emails-help_topic">`help_topic`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-emails-user_name">`user_name`</span> | `string(255)` |  | `nullable:true` |  |
| <span id="table-emails-password">`password`</span> | `string(255)` |  |  |  |
| <span id="table-emails-fetching_host">`fetching_host`</span> | `string(255)` |  |  |  |
| <span id="table-emails-fetching_port">`fetching_port`</span> | `string(255)` |  |  |  |
| <span id="table-emails-fetching_protocol">`fetching_protocol`</span> | `string(255)` |  |  |  |
| <span id="table-emails-fetching_encryption">`fetching_encryption`</span> | `string(255)` |  |  |  |
| <span id="table-emails-mailbox_protocol">`mailbox_protocol`</span> | `string(255)` |  |  |  |
| <span id="table-emails-imap_config">`imap_config`</span> | `string(255)` |  |  |  |
| <span id="table-emails-folder">`folder`</span> | `string(255)` |  |  |  |
| <span id="table-emails-sending_host">`sending_host`</span> | `string(255)` |  |  |  |
| <span id="table-emails-sending_port">`sending_port`</span> | `string(255)` |  |  |  |
| <span id="table-emails-sending_protocol">`sending_protocol`</span> | `string(255)` |  |  |  |
| <span id="table-emails-sending_encryption">`sending_encryption`</span> | `string(255)` |  |  |  |
| <span id="table-emails-smtp_validate">`smtp_validate`</span> | `string(255)` |  |  |  |
| <span id="table-emails-smtp_authentication">`smtp_authentication`</span> | `string(255)` |  |  |  |
| <span id="table-emails-internal_notes">`internal_notes`</span> | `string(255)` |  |  |  |
| <span id="table-emails-auto_response">`auto_response`</span> | `boolean` |  |  |  |
| <span id="table-emails-fetching_status">`fetching_status`</span> | `boolean` |  |  |  |
| <span id="table-emails-move_to_folder">`move_to_folder`</span> | `boolean` |  |  |  |
| <span id="table-emails-delete_email">`delete_email`</span> | `boolean` |  |  |  |
| <span id="table-emails-do_nothing">`do_nothing`</span> | `boolean` |  |  |  |
| <span id="table-emails-sending_status">`sending_status`</span> | `boolean` |  |  |  |
| <span id="table-emails-authentication">`authentication`</span> | `boolean` |  |  |  |
| <span id="table-emails-header_spoofing">`header_spoofing`</span> | `boolean` |  |  |  |
| <span id="table-emails-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-emails-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `department` | `index` | `department`<br/>`priority`<br/>`help_topic` |  |  |
| `department_2` | `index` | `department`<br/>`priority`<br/>`help_topic` |  |  |
| `priority` | `index` | `priority` |  |  |
| `help_topic` | `index` | `help_topic` |  |  |
| `emails_ibfk_1` | `foreign` | `department` |  | `references:"id"`<br/>`on:"department"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `emails_ibfk_2` | `foreign` | `priority` |  | `references:"priority_id"`<br/>`on:"ticket_priority"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `emails_ibfk_3` | `foreign` | `help_topic` |  | `references:"id"`<br/>`on:"help_topic"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `failed_jobs`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-failed_jobs-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-failed_jobs-connection">`connection`</span> | `text` |  |  |  |
| <span id="table-failed_jobs-queue">`queue`</span> | `text` |  |  |  |
| <span id="table-failed_jobs-payload">`payload`</span> | `longText` |  |  |  |
| <span id="table-failed_jobs-failed_at">`failed_at`</span> | `timestamp` |  | `precision:0`<br/>`useCurrent:true` |  |


## Table: `faveo_mails`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-faveo_mails-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-faveo_mails-email_id">`email_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-faveo_mails-drive">`drive`</span> | `string(255)` |  |  |  |
| <span id="table-faveo_mails-key">`key`</span> | `string(255)` |  |  |  |
| <span id="table-faveo_mails-value">`value`</span> | `string(255)` |  |  |  |
| <span id="table-faveo_mails-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-faveo_mails-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `faveo_queues`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-faveo_queues-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-faveo_queues-service_id">`service_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-faveo_queues-key">`key`</span> | `string(255)` |  |  |  |
| <span id="table-faveo_queues-value">`value`</span> | `string(255)` |  |  |  |
| <span id="table-faveo_queues-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-faveo_queues-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `field_values`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-field_values-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-field_values-field_id">`field_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-field_values-child_id">`child_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-field_values-field_key">`field_key`</span> | `string(255)` |  | `nullable:true` |  |
| <span id="table-field_values-field_value">`field_value`</span> | `string(255)` |  | `nullable:true` |  |
| <span id="table-field_values-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-field_values-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `field_values_field_id_foreign` | `foreign` | `field_id` |  | `references:"id"`<br/>`on:"custom_form_fields"` |


## Table: `group_assign_department`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-group_assign_department-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-group_assign_department-group_id">`group_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-group_assign_department-department_id">`department_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-group_assign_department-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-group_assign_department-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `group_id` | `index` | `group_id` |  |  |
| `department_id` | `index` | `department_id` |  |  |
| `group_assign_department_ibfk_1` | `foreign` | `group_id` |  | `references:"id"`<br/>`on:"groups"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `group_assign_department_ibfk_2` | `foreign` | `department_id` |  | `references:"id"`<br/>`on:"department"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `groups`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-groups-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-groups-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-groups-group_status">`group_status`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_create_ticket">`can_create_ticket`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_edit_ticket">`can_edit_ticket`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_post_ticket">`can_post_ticket`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_close_ticket">`can_close_ticket`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_assign_ticket">`can_assign_ticket`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_transfer_ticket">`can_transfer_ticket`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_delete_ticket">`can_delete_ticket`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_ban_email">`can_ban_email`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_manage_canned">`can_manage_canned`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_manage_faq">`can_manage_faq`</span> | `boolean` |  |  |  |
| <span id="table-groups-can_view_agent_stats">`can_view_agent_stats`</span> | `boolean` |  |  |  |
| <span id="table-groups-department_access">`department_access`</span> | `boolean` |  |  |  |
| <span id="table-groups-admin_notes">`admin_notes`</span> | `string(255)` |  |  |  |
| <span id="table-groups-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-groups-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `help_topic`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-help_topic-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-help_topic-topic">`topic`</span> | `string(255)` |  |  |  |
| <span id="table-help_topic-parent_topic">`parent_topic`</span> | `string(255)` |  |  |  |
| <span id="table-help_topic-custom_form">`custom_form`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-help_topic-department">`department`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-help_topic-ticket_status">`ticket_status`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-help_topic-priority">`priority`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-help_topic-sla_plan">`sla_plan`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-help_topic-thank_page">`thank_page`</span> | `string(255)` |  |  |  |
| <span id="table-help_topic-ticket_num_format">`ticket_num_format`</span> | `string(255)` |  |  |  |
| <span id="table-help_topic-internal_notes">`internal_notes`</span> | `string(255)` |  |  |  |
| <span id="table-help_topic-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-help_topic-type">`type`</span> | `boolean` |  |  |  |
| <span id="table-help_topic-auto_assign">`auto_assign`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-help_topic-auto_response">`auto_response`</span> | `boolean` |  |  |  |
| <span id="table-help_topic-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-help_topic-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `custom_form` | `index` | `custom_form` |  |  |
| `department` | `index` | `department` |  |  |
| `ticket_status` | `index` | `ticket_status` |  |  |
| `priority` | `index` | `priority` |  |  |
| `sla_plan` | `index` | `sla_plan` |  |  |
| `auto_assign_2` | `index` | `auto_assign` |  |  |
| `help_topic_ibfk_1` | `foreign` | `custom_form` |  | `references:"id"`<br/>`on:"custom_forms"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `help_topic_ibfk_2` | `foreign` | `department` |  | `references:"id"`<br/>`on:"department"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `help_topic_ibfk_3` | `foreign` | `ticket_status` |  | `references:"id"`<br/>`on:"ticket_status"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `help_topic_ibfk_4` | `foreign` | `priority` |  | `references:"priority_id"`<br/>`on:"ticket_priority"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `help_topic_ibfk_5` | `foreign` | `sla_plan` |  | `references:"id"`<br/>`on:"sla_plan"`<br/>`onUpdate:"RESTRICT"`<br/>`onDelete:"RESTRICT"` |
| `help_topic_ibfk_6` | `foreign` | `auto_assign` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"RESTRICT"`<br/>`onDelete:"SET NULL"` |


## Table: `jobs`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-jobs-id">`id`</span> | `unsignedBigInteger` |  | `autoIncrement:true` |  |
| <span id="table-jobs-queue">`queue`</span> | `string(255)` |  |  |  |
| <span id="table-jobs-payload">`payload`</span> | `longText` |  |  |  |
| <span id="table-jobs-attempts">`attempts`</span> | `tinyInteger` |  | `autoIncrement:false` |  |
| <span id="table-jobs-reserved">`reserved`</span> | `tinyInteger` |  | `autoIncrement:false` |  |
| <span id="table-jobs-reserved_at">`reserved_at`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-jobs-available_at">`available_at`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-jobs-created_at">`created_at`</span> | `integer` |  | `autoIncrement:false` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `jobs_queue_reserved_reserved_at_index` | `index` | `queue`<br/>`reserved`<br/>`reserved_at` |  |  |


## Table: `kb_article`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-kb_article-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-kb_article-name">`name`</span> | `text` |  |  |  |
| <span id="table-kb_article-slug">`slug`</span> | `string(255)` |  |  |  |
| <span id="table-kb_article-description">`description`</span> | `text` |  |  |  |
| <span id="table-kb_article-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-kb_article-type">`type`</span> | `boolean` |  |  |  |
| <span id="table-kb_article-publish_time">`publish_time`</span> | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-kb_article-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-kb_article-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `kb_article_relationship`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-kb_article_relationship-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-kb_article_relationship-article_id">`article_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-kb_article_relationship-category_id">`category_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-kb_article_relationship-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-kb_article_relationship-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `article_relationship_article_id_foreign` | `index` | `article_id` |  |  |
| `article_relationship_category_id_foreign` | `index` | `category_id` |  |  |
| `article_relationship_article_id_foreign` | `foreign` | `article_id` |  | `references:"id"`<br/>`on:"kb_article"`<br/>`onUpdate:"RESTRICT"`<br/>`onDelete:"RESTRICT"` |
| `article_relationship_category_id_foreign` | `foreign` | `category_id` |  | `references:"id"`<br/>`on:"kb_category"`<br/>`onUpdate:"RESTRICT"`<br/>`onDelete:"RESTRICT"` |


## Table: `kb_category`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-kb_category-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-kb_category-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-kb_category-slug">`slug`</span> | `string(255)` |  |  |  |
| <span id="table-kb_category-description">`description`</span> | `text` |  |  |  |
| <span id="table-kb_category-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-kb_category-parent">`parent`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-kb_category-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-kb_category-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `kb_comment`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-kb_comment-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-kb_comment-article_id">`article_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-kb_comment-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-kb_comment-email">`email`</span> | `string(255)` |  |  |  |
| <span id="table-kb_comment-website">`website`</span> | `string(255)` |  |  |  |
| <span id="table-kb_comment-comment">`comment`</span> | `string(255)` |  |  |  |
| <span id="table-kb_comment-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-kb_comment-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-kb_comment-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `comment_article_id_foreign` | `index` | `article_id` |  |  |
| `comment_article_id_foreign` | `foreign` | `article_id` |  | `references:"id"`<br/>`on:"kb_article"`<br/>`onUpdate:"RESTRICT"`<br/>`onDelete:"RESTRICT"` |


## Table: `kb_pages`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-kb_pages-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-kb_pages-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-kb_pages-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-kb_pages-visibility">`visibility`</span> | `boolean` |  |  |  |
| <span id="table-kb_pages-slug">`slug`</span> | `string(255)` |  |  |  |
| <span id="table-kb_pages-description">`description`</span> | `text` |  |  |  |
| <span id="table-kb_pages-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-kb_pages-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `kb_settings`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-kb_settings-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-kb_settings-pagination">`pagination`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-kb_settings-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-kb_settings-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `languages`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-languages-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-languages-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-languages-locale">`locale`</span> | `string(255)` |  |  |  |


## Table: `log_notification`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-log_notification-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-log_notification-log">`log`</span> | `string(255)` |  |  |  |
| <span id="table-log_notification-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-log_notification-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `login_attempts`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-login_attempts-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-login_attempts-User">`User`</span> | `string(255)` |  |  |  |
| <span id="table-login_attempts-IP">`IP`</span> | `string(255)` |  |  |  |
| <span id="table-login_attempts-Attempts">`Attempts`</span> | `string(255)` |  |  |  |
| <span id="table-login_attempts-LastLogin">`LastLogin`</span> | `dateTime` |  | `precision:0` |  |
| <span id="table-login_attempts-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-login_attempts-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `mail_services`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-mail_services-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-mail_services-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-mail_services-short_name">`short_name`</span> | `string(255)` |  |  |  |
| <span id="table-mail_services-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-mail_services-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `mailbox_protocol`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-mailbox_protocol-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-mailbox_protocol-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-mailbox_protocol-value">`value`</span> | `string(50)` |  | `nullable:true` |  |


## Table: `notification_types`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-notification_types-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-notification_types-message">`message`</span> | `string(255)` |  |  |  |
| <span id="table-notification_types-type">`type`</span> | `string(255)` |  |  |  |
| <span id="table-notification_types-icon_class">`icon_class`</span> | `string(255)` |  |  |  |
| <span id="table-notification_types-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-notification_types-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `notifications`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-notifications-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-notifications-model_id">`model_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-notifications-userid_created">`userid_created`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-notifications-type_id">`type_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-notifications-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-notifications-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `organization`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-organization-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-organization-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-organization-phone">`phone`</span> | `string(255)` |  |  |  |
| <span id="table-organization-website">`website`</span> | `string(255)` |  |  |  |
| <span id="table-organization-address">`address`</span> | `string(255)` |  |  |  |
| <span id="table-organization-head">`head`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-organization-internal_notes">`internal_notes`</span> | `string(255)` |  |  |  |
| <span id="table-organization-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-organization-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `head` | `index` | `head` |  |  |
| `organization_ibfk_1` | `foreign` | `head` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"NO ACTION"` |


## Table: `password_resets`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-password_resets-email">`email`</span> | `string(255)` |  |  |  |
| <span id="table-password_resets-token">`token`</span> | `string(255)` |  |  |  |
| <span id="table-password_resets-created_at">`created_at`</span> | `dateTime` | `0000-00-00 00:00:00` | `precision:0` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `password_resets_email_index` | `index` | `email` |  |  |
| `password_resets_token_index` | `index` | `token` |  |  |


## Table: `plugins`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-plugins-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-plugins-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-plugins-path">`path`</span> | `string(255)` |  |  |  |
| <span id="table-plugins-status">`status`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-plugins-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-plugins-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `queue_services`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-queue_services-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-queue_services-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-queue_services-short_name">`short_name`</span> | `string(255)` |  |  |  |
| <span id="table-queue_services-status">`status`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-queue_services-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-queue_services-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `rating_ref`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-rating_ref-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-rating_ref-rating_id">`rating_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-rating_ref-ticket_id">`ticket_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-rating_ref-thread_id">`thread_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-rating_ref-rating_value">`rating_value`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-rating_ref-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-rating_ref-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `ratings`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ratings-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ratings-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-ratings-display_order">`display_order`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ratings-allow_modification">`allow_modification`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ratings-rating_scale">`rating_scale`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ratings-rating_area">`rating_area`</span> | `string(255)` |  |  |  |
| <span id="table-ratings-restrict">`restrict`</span> | `string(255)` |  |  |  |
| <span id="table-ratings-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-ratings-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `settings_alert_notice`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-settings_alert_notice-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-settings_alert_notice-ticket_status">`ticket_status`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-ticket_admin_email">`ticket_admin_email`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-ticket_department_manager">`ticket_department_manager`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-ticket_department_member">`ticket_department_member`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-ticket_organization_accmanager">`ticket_organization_accmanager`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-message_status">`message_status`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-message_last_responder">`message_last_responder`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-message_assigned_agent">`message_assigned_agent`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-message_department_manager">`message_department_manager`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-message_organization_accmanager">`message_organization_accmanager`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-internal_status">`internal_status`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-internal_last_responder">`internal_last_responder`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-internal_assigned_agent">`internal_assigned_agent`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-internal_department_manager">`internal_department_manager`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-assignment_status">`assignment_status`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-assignment_assigned_agent">`assignment_assigned_agent`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-assignment_team_leader">`assignment_team_leader`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-assignment_team_member">`assignment_team_member`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-transfer_status">`transfer_status`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-transfer_assigned_agent">`transfer_assigned_agent`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-transfer_department_manager">`transfer_department_manager`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-transfer_department_member">`transfer_department_member`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-overdue_status">`overdue_status`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-overdue_assigned_agent">`overdue_assigned_agent`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-overdue_department_manager">`overdue_department_manager`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-overdue_department_member">`overdue_department_member`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-system_error">`system_error`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-sql_error">`sql_error`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-excessive_failure">`excessive_failure`</span> | `boolean` |  |  |  |
| <span id="table-settings_alert_notice-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-settings_alert_notice-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `settings_auto_response`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-settings_auto_response-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-settings_auto_response-new_ticket">`new_ticket`</span> | `boolean` |  |  |  |
| <span id="table-settings_auto_response-agent_new_ticket">`agent_new_ticket`</span> | `boolean` |  |  |  |
| <span id="table-settings_auto_response-submitter">`submitter`</span> | `boolean` |  |  |  |
| <span id="table-settings_auto_response-participants">`participants`</span> | `boolean` |  |  |  |
| <span id="table-settings_auto_response-overlimit">`overlimit`</span> | `boolean` |  |  |  |
| <span id="table-settings_auto_response-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-settings_auto_response-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `settings_company`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-settings_company-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-settings_company-company_name">`company_name`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-website">`website`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-phone">`phone`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-address">`address`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-landing_page">`landing_page`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-offline_page">`offline_page`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-thank_page">`thank_page`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-logo">`logo`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-use_logo">`use_logo`</span> | `string(255)` |  |  |  |
| <span id="table-settings_company-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-settings_company-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `settings_email`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-settings_email-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-settings_email-template">`template`</span> | `string(255)` |  |  |  |
| <span id="table-settings_email-sys_email">`sys_email`</span> | `string(255)` |  | `nullable:true` |  |
| <span id="table-settings_email-alert_email">`alert_email`</span> | `string(255)` |  |  |  |
| <span id="table-settings_email-admin_email">`admin_email`</span> | `string(255)` |  |  |  |
| <span id="table-settings_email-mta">`mta`</span> | `string(255)` |  |  |  |
| <span id="table-settings_email-email_fetching">`email_fetching`</span> | `boolean` |  |  |  |
| <span id="table-settings_email-notification_cron">`notification_cron`</span> | `boolean` |  |  |  |
| <span id="table-settings_email-strip">`strip`</span> | `boolean` |  |  |  |
| <span id="table-settings_email-separator">`separator`</span> | `boolean` |  |  |  |
| <span id="table-settings_email-all_emails">`all_emails`</span> | `boolean` |  |  |  |
| <span id="table-settings_email-email_collaborator">`email_collaborator`</span> | `boolean` |  |  |  |
| <span id="table-settings_email-attachment">`attachment`</span> | `boolean` |  |  |  |
| <span id="table-settings_email-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-settings_email-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `settings_ratings`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-settings_ratings-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-settings_ratings-rating_name">`rating_name`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ratings-publish">`publish`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-settings_ratings-modify">`modify`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-settings_ratings-slug">`slug`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ratings-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-settings_ratings-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `settings_ratings_slug_unique` | `unique` | `slug` |  |  |


## Table: `settings_security`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-settings_security-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-settings_security-lockout_message">`lockout_message`</span> | `string(255)` |  |  |  |
| <span id="table-settings_security-backlist_offender">`backlist_offender`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-settings_security-backlist_threshold">`backlist_threshold`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-settings_security-lockout_period">`lockout_period`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-settings_security-days_to_keep_logs">`days_to_keep_logs`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-settings_security-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-settings_security-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `settings_system`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-settings_system-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-settings_system-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-settings_system-url">`url`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-department">`department`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-page_size">`page_size`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-log_level">`log_level`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-purge_log">`purge_log`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-api_enable">`api_enable`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-settings_system-api_key_mandatory">`api_key_mandatory`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-settings_system-api_key">`api_key`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-name_format">`name_format`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-time_farmat">`time_farmat`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-settings_system-date_format">`date_format`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-settings_system-date_time_format">`date_time_format`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-settings_system-day_date_time">`day_date_time`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-time_zone">`time_zone`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-settings_system-content">`content`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-version">`version`</span> | `string(255)` |  |  |  |
| <span id="table-settings_system-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-settings_system-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `time_farmat` | `index` | `time_farmat` |  |  |
| `date_format` | `index` | `date_format` |  |  |
| `date_time_format` | `index` | `date_time_format` |  |  |
| `time_zone` | `index` | `time_zone` |  |  |
| `settings_system_ibfk_1` | `foreign` | `time_zone` |  | `references:"id"`<br/>`on:"timezone"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `settings_system_ibfk_2` | `foreign` | `time_farmat` |  | `references:"id"`<br/>`on:"time_format"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `settings_system_ibfk_3` | `foreign` | `date_format` |  | `references:"id"`<br/>`on:"date_format"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `settings_system_ibfk_4` | `foreign` | `date_time_format` |  | `references:"id"`<br/>`on:"date_time_format"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `settings_ticket`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-settings_ticket-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-settings_ticket-num_format">`num_format`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-num_sequence">`num_sequence`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-priority">`priority`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-sla">`sla`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-help_topic">`help_topic`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-max_open_ticket">`max_open_ticket`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-collision_avoid">`collision_avoid`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-lock_ticket_frequency">`lock_ticket_frequency`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-captcha">`captcha`</span> | `string(255)` |  |  |  |
| <span id="table-settings_ticket-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-settings_ticket-claim_response">`claim_response`</span> | `boolean` |  |  |  |
| <span id="table-settings_ticket-assigned_ticket">`assigned_ticket`</span> | `boolean` |  |  |  |
| <span id="table-settings_ticket-answered_ticket">`answered_ticket`</span> | `boolean` |  |  |  |
| <span id="table-settings_ticket-agent_mask">`agent_mask`</span> | `boolean` |  |  |  |
| <span id="table-settings_ticket-html">`html`</span> | `boolean` |  |  |  |
| <span id="table-settings_ticket-client_update">`client_update`</span> | `boolean` |  |  |  |
| <span id="table-settings_ticket-max_file_size">`max_file_size`</span> | `boolean` |  |  |  |
| <span id="table-settings_ticket-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-settings_ticket-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `sla_plan`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-sla_plan-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-sla_plan-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-sla_plan-grace_period">`grace_period`</span> | `string(255)` |  |  |  |
| <span id="table-sla_plan-admin_note">`admin_note`</span> | `string(255)` |  |  |  |
| <span id="table-sla_plan-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-sla_plan-transient">`transient`</span> | `boolean` |  |  |  |
| <span id="table-sla_plan-ticket_overdue">`ticket_overdue`</span> | `boolean` |  |  |  |
| <span id="table-sla_plan-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-sla_plan-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `social_media`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-social_media-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-social_media-provider">`provider`</span> | `string(255)` |  |  |  |
| <span id="table-social_media-key">`key`</span> | `string(255)` |  |  |  |
| <span id="table-social_media-value">`value`</span> | `string(255)` |  |  |  |
| <span id="table-social_media-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-social_media-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `team_assign_agent`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-team_assign_agent-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-team_assign_agent-team_id">`team_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-team_assign_agent-agent_id">`agent_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-team_assign_agent-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-team_assign_agent-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `team_id` | `index` | `team_id` |  |  |
| `agent_id` | `index` | `agent_id` |  |  |
| `team_assign_agent_ibfk_1` | `foreign` | `team_id` |  | `references:"id"`<br/>`on:"teams"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `team_assign_agent_ibfk_2` | `foreign` | `agent_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `teams`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-teams-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-teams-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-teams-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-teams-team_lead">`team_lead`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-teams-assign_alert">`assign_alert`</span> | `boolean` |  |  |  |
| <span id="table-teams-admin_notes">`admin_notes`</span> | `string(255)` |  |  |  |
| <span id="table-teams-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-teams-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `team_lead` | `index` | `team_lead` |  |  |
| `teams_ibfk_1` | `foreign` | `team_lead` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `template`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-template-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-template-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-template-status">`status`</span> | `boolean` |  |  |  |
| <span id="table-template-template_set_to_clone">`template_set_to_clone`</span> | `string(255)` |  |  |  |
| <span id="table-template-language">`language`</span> | `string(255)` |  |  |  |
| <span id="table-template-internal_note">`internal_note`</span> | `string(255)` |  |  |  |
| <span id="table-template-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-template-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `template_sets`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-template_sets-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-template_sets-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-template_sets-active">`active`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-template_sets-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-template_sets-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `template_types`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-template_types-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-template_types-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-template_types-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-template_types-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `templates`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-templates-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-templates-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-templates-variable">`variable`</span> | `string(255)` |  |  |  |
| <span id="table-templates-type">`type`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-templates-subject">`subject`</span> | `string(255)` |  |  |  |
| <span id="table-templates-message">`message`</span> | `text` |  |  |  |
| <span id="table-templates-description">`description`</span> | `string(255)` |  |  |  |
| <span id="table-templates-set_id">`set_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-templates-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-templates-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `ticket_attachment`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ticket_attachment-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ticket_attachment-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_attachment-thread_id">`thread_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-ticket_attachment-size">`size`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_attachment-type">`type`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_attachment-poster">`poster`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_attachment-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-ticket_attachment-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `file` | | | | Not Defined In Blueprints |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `thread_id` | `index` | `thread_id` |  |  |
| `ticket_attachment_ibfk_1` | `foreign` | `thread_id` |  | `references:"id"`<br/>`on:"ticket_thread"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `ticket_collaborator`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ticket_collaborator-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ticket_collaborator-isactive">`isactive`</span> | `boolean` |  |  |  |
| <span id="table-ticket_collaborator-ticket_id">`ticket_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-ticket_collaborator-user_id">`user_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-ticket_collaborator-role">`role`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_collaborator-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-ticket_collaborator-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `ticket_id` | `index` | `ticket_id` |  |  |
| `user_id` | `index` | `user_id` |  |  |
| `ticket_collaborator_ibfk_1` | `foreign` | `ticket_id` |  | `references:"id"`<br/>`on:"tickets"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `ticket_collaborator_ibfk_2` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `ticket_form_data`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ticket_form_data-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ticket_form_data-ticket_id">`ticket_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-ticket_form_data-title">`title`</span> | `text` |  |  |  |
| <span id="table-ticket_form_data-content">`content`</span> | `text` |  |  |  |
| <span id="table-ticket_form_data-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-ticket_form_data-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `ticket_id` | `index` | `ticket_id` |  |  |
| `ticket_form_data_ibfk_1` | `foreign` | `ticket_id` |  | `references:"id"`<br/>`on:"tickets"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `ticket_priority`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ticket_priority-priority_id">`priority_id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ticket_priority-priority">`priority`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_priority-status">`status`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_priority-priority_desc">`priority_desc`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_priority-priority_color">`priority_color`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_priority-priority_urgency">`priority_urgency`</span> | `boolean` |  |  |  |
| <span id="table-ticket_priority-ispublic">`ispublic`</span> | `boolean` |  |  |  |
| <span id="table-ticket_priority-is_default">`is_default`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_priority-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-ticket_priority-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `ticket_source`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ticket_source-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ticket_source-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_source-value">`value`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_source-css_class">`css_class`</span> | `string(255)` |  |  |  |


## Table: `ticket_status`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ticket_status-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ticket_status-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_status-state">`state`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_status-mode">`mode`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ticket_status-message">`message`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_status-flags">`flags`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ticket_status-sort">`sort`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ticket_status-email_user">`email_user`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ticket_status-icon_class">`icon_class`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_status-properties">`properties`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_status-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-ticket_status-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `ticket_thread`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ticket_thread-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ticket_thread-ticket_id">`ticket_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-ticket_thread-user_id">`user_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-ticket_thread-poster">`poster`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_thread-source">`source`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-ticket_thread-reply_rating">`reply_rating`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ticket_thread-rating_count">`rating_count`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ticket_thread-is_internal">`is_internal`</span> | `boolean` |  |  |  |
| <span id="table-ticket_thread-title">`title`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_thread-body">`body`</span> | `text` |  |  |  |
| <span id="table-ticket_thread-format">`format`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_thread-ip_address">`ip_address`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_thread-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-ticket_thread-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `ticket_id_2` | `index` | `ticket_id` |  |  |
| `user_id` | `index` | `user_id` |  |  |
| `source` | `index` | `source` |  |  |
| `ticket_thread_ibfk_1` | `foreign` | `ticket_id` |  | `references:"id"`<br/>`on:"tickets"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `ticket_thread_ibfk_2` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `ticket_thread_ibfk_3` | `foreign` | `source` |  | `references:"id"`<br/>`on:"ticket_source"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `ticket_token`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-ticket_token-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-ticket_token-ticket_id">`ticket_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-ticket_token-token">`token`</span> | `string(255)` |  |  |  |
| <span id="table-ticket_token-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-ticket_token-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `tickets`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-tickets-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-tickets-ticket_number">`ticket_number`</span> | `string(255)` |  |  |  |
| <span id="table-tickets-user_id">`user_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-dept_id">`dept_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-team_id">`team_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-priority_id">`priority_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-sla">`sla`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-help_topic_id">`help_topic_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-status">`status`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-rating">`rating`</span> | `boolean` |  |  |  |
| <span id="table-tickets-ratingreply">`ratingreply`</span> | `boolean` |  |  |  |
| <span id="table-tickets-flags">`flags`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-ip_address">`ip_address`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-assigned_to">`assigned_to`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-lock_by">`lock_by`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-lock_at">`lock_at`</span> | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-tickets-source">`source`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-tickets-isoverdue">`isoverdue`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-reopened">`reopened`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-isanswered">`isanswered`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-html">`html`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-is_deleted">`is_deleted`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-closed">`closed`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-is_transferred">`is_transferred`</span> | `boolean` |  |  |  |
| <span id="table-tickets-transferred_at">`transferred_at`</span> | `dateTime` |  | `precision:0` |  |
| <span id="table-tickets-reopened_at">`reopened_at`</span> | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-tickets-duedate">`duedate`</span> | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-tickets-closed_at">`closed_at`</span> | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-tickets-last_message_at">`last_message_at`</span> | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-tickets-last_response_at">`last_response_at`</span> | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-tickets-approval">`approval`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-follow_up">`follow_up`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-tickets-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-tickets-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `user_id` | `index` | `user_id` |  |  |
| `dept_id` | `index` | `dept_id` |  |  |
| `team_id` | `index` | `team_id` |  |  |
| `priority_id` | `index` | `priority_id` |  |  |
| `sla` | `index` | `sla` |  |  |
| `help_topic_id` | `index` | `help_topic_id` |  |  |
| `status` | `index` | `status` |  |  |
| `assigned_to` | `index` | `assigned_to` |  |  |
| `source` | `index` | `source` |  |  |
| `tickets_ibfk_1` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `tickets_ibfk_2` | `foreign` | `dept_id` |  | `references:"id"`<br/>`on:"department"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `tickets_ibfk_3` | `foreign` | `team_id` |  | `references:"id"`<br/>`on:"teams"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `tickets_ibfk_4` | `foreign` | `priority_id` |  | `references:"priority_id"`<br/>`on:"ticket_priority"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `tickets_ibfk_5` | `foreign` | `sla` |  | `references:"id"`<br/>`on:"sla_plan"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `tickets_ibfk_6` | `foreign` | `help_topic_id` |  | `references:"id"`<br/>`on:"help_topic"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `tickets_ibfk_7` | `foreign` | `status` |  | `references:"id"`<br/>`on:"ticket_status"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `tickets_ibfk_8` | `foreign` | `source` |  | `references:"id"`<br/>`on:"ticket_source"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `tickets_ibfk_9` | `foreign` | `assigned_to` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `time_format`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-time_format-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-time_format-format">`format`</span> | `string(255)` |  |  |  |


## Table: `timezone`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-timezone-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-timezone-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-timezone-location">`location`</span> | `string(255)` |  |  |  |


## Table: `user_additional_infos`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-user_additional_infos-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-user_additional_infos-owner">`owner`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-user_additional_infos-service">`service`</span> | `string(255)` |  |  |  |
| <span id="table-user_additional_infos-key">`key`</span> | `string(255)` |  |  |  |
| <span id="table-user_additional_infos-value">`value`</span> | `string(255)` |  | `nullable:true` |  |
| <span id="table-user_additional_infos-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-user_additional_infos-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `user_assign_organization`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-user_assign_organization-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-user_assign_organization-org_id">`org_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-user_assign_organization-user_id">`user_id`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-user_assign_organization-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-user_assign_organization-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `org_id` | `index` | `org_id` |  |  |
| `user_id` | `index` | `user_id` |  |  |
| `user_assign_organization_ibfk_1` | `foreign` | `org_id` |  | `references:"id"`<br/>`on:"organization"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `user_assign_organization_ibfk_2` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `user_notification`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-user_notification-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-user_notification-notification_id">`notification_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-user_notification-user_id">`user_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-user_notification-is_read">`is_read`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-user_notification-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-user_notification-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `users`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-users-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-users-user_name">`user_name`</span> | `string(255)` |  |  |  |
| <span id="table-users-first_name">`first_name`</span> | `string(255)` |  |  |  |
| <span id="table-users-last_name">`last_name`</span> | `string(255)` |  |  |  |
| <span id="table-users-gender">`gender`</span> | `boolean` |  |  |  |
| <span id="table-users-email">`email`</span> | `string(255)` |  | `nullable:true` |  |
| <span id="table-users-ban">`ban`</span> | `boolean` |  |  |  |
| <span id="table-users-password">`password`</span> | `string(60)` |  |  |  |
| <span id="table-users-active">`active`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-users-is_delete">`is_delete`</span> | `boolean` |  |  |  |
| <span id="table-users-ext">`ext`</span> | `string(255)` |  |  |  |
| <span id="table-users-country_code">`country_code`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-users-phone_number">`phone_number`</span> | `string(255)` |  |  |  |
| <span id="table-users-mobile">`mobile`</span> | `string(255)` |  | `nullable:true` |  |
| <span id="table-users-agent_sign">`agent_sign`</span> | `text` |  |  |  |
| <span id="table-users-account_type">`account_type`</span> | `string(255)` |  |  |  |
| <span id="table-users-account_status">`account_status`</span> | `string(255)` |  |  |  |
| <span id="table-users-assign_group">`assign_group`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-users-primary_dpt">`primary_dpt`</span> | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| <span id="table-users-agent_tzone">`agent_tzone`</span> | `string(255)` |  |  |  |
| <span id="table-users-daylight_save">`daylight_save`</span> | `string(255)` |  |  |  |
| <span id="table-users-limit_access">`limit_access`</span> | `string(255)` |  |  |  |
| <span id="table-users-directory_listing">`directory_listing`</span> | `string(255)` |  |  |  |
| <span id="table-users-vacation_mode">`vacation_mode`</span> | `string(255)` |  |  |  |
| <span id="table-users-company">`company`</span> | `string(255)` |  |  |  |
| <span id="table-users-role">`role`</span> | `string(255)` |  |  |  |
| <span id="table-users-internal_note">`internal_note`</span> | `string(255)` |  |  |  |
| <span id="table-users-profile_pic">`profile_pic`</span> | `string(255)` |  |  |  |
| <span id="table-users-remember_token">`remember_token`</span> | `string(100)` |  | `nullable:true` |  |
| <span id="table-users-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-users-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-users-user_language">`user_language`</span> | `string(10)` |  | `nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `users_email_unique` | `unique` | `email` |  |  |
| `users_mobile_unique` | `unique` | `mobile` |  |  |
| `assign_group_3` | `index` | `assign_group` |  |  |
| `primary_dpt_2` | `index` | `primary_dpt` |  |  |
| `users_ibfk_1` | `foreign` | `assign_group` |  | `references:"id"`<br/>`on:"groups"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `users_ibfk_2` | `foreign` | `primary_dpt` |  | `references:"id"`<br/>`on:"department"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `version_check`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-version_check-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-version_check-current_version">`current_version`</span> | `string(255)` |  |  |  |
| <span id="table-version_check-new_version">`new_version`</span> | `string(255)` |  |  |  |
| <span id="table-version_check-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-version_check-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `widgets`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-widgets-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-widgets-name">`name`</span> | `string(30)` |  | `nullable:true` |  |
| <span id="table-widgets-title">`title`</span> | `string(50)` |  | `nullable:true` |  |
| <span id="table-widgets-value">`value`</span> | `text` |  | `nullable:true` |  |
| <span id="table-widgets-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-widgets-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `workflow_action`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-workflow_action-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-workflow_action-workflow_id">`workflow_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-workflow_action-condition">`condition`</span> | `string(255)` |  |  |  |
| <span id="table-workflow_action-action">`action`</span> | `string(255)` |  |  |  |
| <span id="table-workflow_action-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-workflow_action-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `workflow_action_1` | `foreign` | `workflow_id` |  | `references:"id"`<br/>`on:"workflow_name"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## Table: `workflow_close`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-workflow_close-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-workflow_close-days">`days`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-workflow_close-condition">`condition`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-workflow_close-send_email">`send_email`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-workflow_close-status">`status`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-workflow_close-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-workflow_close-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `workflow_name`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-workflow_name-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-workflow_name-name">`name`</span> | `string(255)` |  |  |  |
| <span id="table-workflow_name-status">`status`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-workflow_name-order">`order`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-workflow_name-target">`target`</span> | `string(255)` |  |  |  |
| <span id="table-workflow_name-internal_note">`internal_note`</span> | `text` |  |  |  |
| <span id="table-workflow_name-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-workflow_name-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## Table: `workflow_rules`

### Columns

| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| <span id="table-workflow_rules-id">`id`</span> | `integer` |  | `autoIncrement:true` |  |
| <span id="table-workflow_rules-workflow_id">`workflow_id`</span> | `integer` |  | `autoIncrement:false` |  |
| <span id="table-workflow_rules-matching_criteria">`matching_criteria`</span> | `string(255)` |  |  |  |
| <span id="table-workflow_rules-matching_scenario">`matching_scenario`</span> | `string(255)` |  |  |  |
| <span id="table-workflow_rules-matching_relation">`matching_relation`</span> | `string(255)` |  |  |  |
| <span id="table-workflow_rules-matching_value">`matching_value`</span> | `text` |  |  |  |
| <span id="table-workflow_rules-created_at">`created_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| <span id="table-workflow_rules-updated_at">`updated_at`</span> | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `workflow_rules_1` | `foreign` | `workflow_id` |  | `references:"id"`<br/>`on:"workflow_name"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


