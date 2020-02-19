# Schema

## api_settings

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `key` | `string(255)` |  |  |  |
| `value` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## banlist

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `ban_status` | `boolean` |  |  |  |
| `email_address` | `string(255)` |  |  |  |
| `internal_notes` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## bar_notifications

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `key` | `string(255)` |  |  |  |
| `value` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## canned_response

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `user_id` | `integer` |  | `autoIncrement:false` |  |
| `title` | `string(255)` |  |  |  |
| `message` | `text` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `user_id` | `index` | `user_id` |  |  |
| `canned_response_ibfk_1` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"NO ACTION"` |


## common_settings

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `option_name` | `string(255)` |  |  |  |
| `option_value` | `string(255)` |  |  |  |
| `status` | `string(255)` |  |  |  |
| `optional_field` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## conditions

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `job` | `string(255)` |  |  |  |
| `value` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## country_code

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `iso` | `char` |  |  |  |
| `name` | `string(100)` |  |  |  |
| `nicename` | `string(100)` |  |  |  |
| `iso3` | `char` |  |  |  |
| `numcode` | `smallInteger` |  | `autoIncrement:false` |  |
| `phonecode` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## custom_form_fields

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `forms_id` | `integer` |  | `autoIncrement:false` |  |
| `label` | `string(255)` |  |  |  |
| `name` | `string(255)` |  |  |  |
| `type` | `string(255)` |  |  |  |
| `value` | `string(255)` |  |  |  |
| `required` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## custom_forms

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `formname` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## date_format

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `format` | `string(255)` |  |  |  |


## date_time_format

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `format` | `string(255)` |  |  |  |


## department

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `type` | `string(255)` |  |  |  |
| `sla` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `manager` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `ticket_assignment` | `string(255)` |  |  |  |
| `outgoing_email` | `string(255)` |  |  |  |
| `template_set` | `string(255)` |  |  |  |
| `auto_ticket_response` | `string(255)` |  |  |  |
| `auto_message_response` | `string(255)` |  |  |  |
| `auto_response_email` | `string(255)` |  |  |  |
| `recipient` | `string(255)` |  |  |  |
| `group_access` | `string(255)` |  |  |  |
| `department_sign` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `sla` | `index` | `sla` |  |  |
| `manager_2` | `index` | `manager` |  |  |
| `department_ibfk_1` | `foreign` | `sla` |  | `references:"id"`<br/>`on:"sla_plan"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `department_ibfk_2` | `foreign` | `manager` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## emails

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `email_address` | `string(255)` |  |  |  |
| `email_name` | `string(255)` |  |  |  |
| `department` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `priority` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `help_topic` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `user_name` | `string(255)` |  | `nullable:true` |  |
| `password` | `string(255)` |  |  |  |
| `fetching_host` | `string(255)` |  |  |  |
| `fetching_port` | `string(255)` |  |  |  |
| `fetching_protocol` | `string(255)` |  |  |  |
| `fetching_encryption` | `string(255)` |  |  |  |
| `mailbox_protocol` | `string(255)` |  |  |  |
| `imap_config` | `string(255)` |  |  |  |
| `folder` | `string(255)` |  |  |  |
| `sending_host` | `string(255)` |  |  |  |
| `sending_port` | `string(255)` |  |  |  |
| `sending_protocol` | `string(255)` |  |  |  |
| `sending_encryption` | `string(255)` |  |  |  |
| `smtp_validate` | `string(255)` |  |  |  |
| `smtp_authentication` | `string(255)` |  |  |  |
| `internal_notes` | `string(255)` |  |  |  |
| `auto_response` | `boolean` |  |  |  |
| `fetching_status` | `boolean` |  |  |  |
| `move_to_folder` | `boolean` |  |  |  |
| `delete_email` | `boolean` |  |  |  |
| `do_nothing` | `boolean` |  |  |  |
| `sending_status` | `boolean` |  |  |  |
| `authentication` | `boolean` |  |  |  |
| `header_spoofing` | `boolean` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

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


## failed_jobs

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `connection` | `text` |  |  |  |
| `queue` | `text` |  |  |  |
| `payload` | `longText` |  |  |  |
| `failed_at` | `timestamp` |  | `precision:0`<br/>`useCurrent:true` |  |


## faveo_mails

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `email_id` | `integer` |  | `autoIncrement:false` |  |
| `drive` | `string(255)` |  |  |  |
| `key` | `string(255)` |  |  |  |
| `value` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## faveo_queues

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `service_id` | `integer` |  | `autoIncrement:false` |  |
| `key` | `string(255)` |  |  |  |
| `value` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## field_values

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `field_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `child_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `field_key` | `string(255)` |  | `nullable:true` |  |
| `field_value` | `string(255)` |  | `nullable:true` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `field_values_field_id_foreign` | `foreign` | `field_id` |  | `references:"id"`<br/>`on:"custom_form_fields"` |


## group_assign_department

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `group_id` | `integer` |  | `autoIncrement:false` |  |
| `department_id` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `group_id` | `index` | `group_id` |  |  |
| `department_id` | `index` | `department_id` |  |  |
| `group_assign_department_ibfk_1` | `foreign` | `group_id` |  | `references:"id"`<br/>`on:"groups"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `group_assign_department_ibfk_2` | `foreign` | `department_id` |  | `references:"id"`<br/>`on:"department"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## groups

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `group_status` | `boolean` |  |  |  |
| `can_create_ticket` | `boolean` |  |  |  |
| `can_edit_ticket` | `boolean` |  |  |  |
| `can_post_ticket` | `boolean` |  |  |  |
| `can_close_ticket` | `boolean` |  |  |  |
| `can_assign_ticket` | `boolean` |  |  |  |
| `can_transfer_ticket` | `boolean` |  |  |  |
| `can_delete_ticket` | `boolean` |  |  |  |
| `can_ban_email` | `boolean` |  |  |  |
| `can_manage_canned` | `boolean` |  |  |  |
| `can_manage_faq` | `boolean` |  |  |  |
| `can_view_agent_stats` | `boolean` |  |  |  |
| `department_access` | `boolean` |  |  |  |
| `admin_notes` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## help_topic

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `topic` | `string(255)` |  |  |  |
| `parent_topic` | `string(255)` |  |  |  |
| `custom_form` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `department` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `ticket_status` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `priority` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `sla_plan` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `thank_page` | `string(255)` |  |  |  |
| `ticket_num_format` | `string(255)` |  |  |  |
| `internal_notes` | `string(255)` |  |  |  |
| `status` | `boolean` |  |  |  |
| `type` | `boolean` |  |  |  |
| `auto_assign` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `auto_response` | `boolean` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

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


## jobs

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `unsignedBigInteger` |  | `autoIncrement:true` |  |
| `queue` | `string(255)` |  |  |  |
| `payload` | `longText` |  |  |  |
| `attempts` | `tinyInteger` |  | `autoIncrement:false` |  |
| `reserved` | `tinyInteger` |  | `autoIncrement:false` |  |
| `reserved_at` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `available_at` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `integer` |  | `autoIncrement:false` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `jobs_queue_reserved_reserved_at_index` | `index` | `queue`<br/>`reserved`<br/>`reserved_at` |  |  |


## kb_article

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `text` |  |  |  |
| `slug` | `string(255)` |  |  |  |
| `description` | `text` |  |  |  |
| `status` | `boolean` |  |  |  |
| `type` | `boolean` |  |  |  |
| `publish_time` | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## kb_article_relationship

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `article_id` | `integer` |  | `autoIncrement:false` |  |
| `category_id` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `article_relationship_article_id_foreign` | `index` | `article_id` |  |  |
| `article_relationship_category_id_foreign` | `index` | `category_id` |  |  |
| `article_relationship_article_id_foreign` | `foreign` | `article_id` |  | `references:"id"`<br/>`on:"kb_article"`<br/>`onUpdate:"RESTRICT"`<br/>`onDelete:"RESTRICT"` |
| `article_relationship_category_id_foreign` | `foreign` | `category_id` |  | `references:"id"`<br/>`on:"kb_category"`<br/>`onUpdate:"RESTRICT"`<br/>`onDelete:"RESTRICT"` |


## kb_category

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `slug` | `string(255)` |  |  |  |
| `description` | `text` |  |  |  |
| `status` | `boolean` |  |  |  |
| `parent` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## kb_comment

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `article_id` | `integer` |  | `autoIncrement:false` |  |
| `name` | `string(255)` |  |  |  |
| `email` | `string(255)` |  |  |  |
| `website` | `string(255)` |  |  |  |
| `comment` | `string(255)` |  |  |  |
| `status` | `boolean` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `comment_article_id_foreign` | `index` | `article_id` |  |  |
| `comment_article_id_foreign` | `foreign` | `article_id` |  | `references:"id"`<br/>`on:"kb_article"`<br/>`onUpdate:"RESTRICT"`<br/>`onDelete:"RESTRICT"` |


## kb_pages

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `status` | `boolean` |  |  |  |
| `visibility` | `boolean` |  |  |  |
| `slug` | `string(255)` |  |  |  |
| `description` | `text` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## kb_settings

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `pagination` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## languages

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `locale` | `string(255)` |  |  |  |


## log_notification

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `log` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## login_attempts

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `User` | `string(255)` |  |  |  |
| `IP` | `string(255)` |  |  |  |
| `Attempts` | `string(255)` |  |  |  |
| `LastLogin` | `dateTime` |  | `precision:0` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## mail_services

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `short_name` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## mailbox_protocol

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `value` | `string(50)` |  | `nullable:true` |  |


## notification_types

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `message` | `string(255)` |  |  |  |
| `type` | `string(255)` |  |  |  |
| `icon_class` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## notifications

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `model_id` | `integer` |  | `autoIncrement:false` |  |
| `userid_created` | `integer` |  | `autoIncrement:false` |  |
| `type_id` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## organization

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `phone` | `string(255)` |  |  |  |
| `website` | `string(255)` |  |  |  |
| `address` | `string(255)` |  |  |  |
| `head` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `internal_notes` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `head` | `index` | `head` |  |  |
| `organization_ibfk_1` | `foreign` | `head` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"NO ACTION"` |


## password_resets

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `email` | `string(255)` |  |  |  |
| `token` | `string(255)` |  |  |  |
| `created_at` | `dateTime` | `0000-00-00 00:00:00` | `precision:0` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `password_resets_email_index` | `index` | `email` |  |  |
| `password_resets_token_index` | `index` | `token` |  |  |


## plugins

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `path` | `string(255)` |  |  |  |
| `status` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## queue_services

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `short_name` | `string(255)` |  |  |  |
| `status` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## rating_ref

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `rating_id` | `integer` |  | `autoIncrement:false` |  |
| `ticket_id` | `integer` |  | `autoIncrement:false` |  |
| `thread_id` | `integer` |  | `autoIncrement:false` |  |
| `rating_value` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## ratings

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `display_order` | `integer` |  | `autoIncrement:false` |  |
| `allow_modification` | `integer` |  | `autoIncrement:false` |  |
| `rating_scale` | `integer` |  | `autoIncrement:false` |  |
| `rating_area` | `string(255)` |  |  |  |
| `restrict` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## settings_alert_notice

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `ticket_status` | `boolean` |  |  |  |
| `ticket_admin_email` | `boolean` |  |  |  |
| `ticket_department_manager` | `boolean` |  |  |  |
| `ticket_department_member` | `boolean` |  |  |  |
| `ticket_organization_accmanager` | `boolean` |  |  |  |
| `message_status` | `boolean` |  |  |  |
| `message_last_responder` | `boolean` |  |  |  |
| `message_assigned_agent` | `boolean` |  |  |  |
| `message_department_manager` | `boolean` |  |  |  |
| `message_organization_accmanager` | `boolean` |  |  |  |
| `internal_status` | `boolean` |  |  |  |
| `internal_last_responder` | `boolean` |  |  |  |
| `internal_assigned_agent` | `boolean` |  |  |  |
| `internal_department_manager` | `boolean` |  |  |  |
| `assignment_status` | `boolean` |  |  |  |
| `assignment_assigned_agent` | `boolean` |  |  |  |
| `assignment_team_leader` | `boolean` |  |  |  |
| `assignment_team_member` | `boolean` |  |  |  |
| `transfer_status` | `boolean` |  |  |  |
| `transfer_assigned_agent` | `boolean` |  |  |  |
| `transfer_department_manager` | `boolean` |  |  |  |
| `transfer_department_member` | `boolean` |  |  |  |
| `overdue_status` | `boolean` |  |  |  |
| `overdue_assigned_agent` | `boolean` |  |  |  |
| `overdue_department_manager` | `boolean` |  |  |  |
| `overdue_department_member` | `boolean` |  |  |  |
| `system_error` | `boolean` |  |  |  |
| `sql_error` | `boolean` |  |  |  |
| `excessive_failure` | `boolean` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## settings_auto_response

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `new_ticket` | `boolean` |  |  |  |
| `agent_new_ticket` | `boolean` |  |  |  |
| `submitter` | `boolean` |  |  |  |
| `participants` | `boolean` |  |  |  |
| `overlimit` | `boolean` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## settings_company

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `company_name` | `string(255)` |  |  |  |
| `website` | `string(255)` |  |  |  |
| `phone` | `string(255)` |  |  |  |
| `address` | `string(255)` |  |  |  |
| `landing_page` | `string(255)` |  |  |  |
| `offline_page` | `string(255)` |  |  |  |
| `thank_page` | `string(255)` |  |  |  |
| `logo` | `string(255)` |  |  |  |
| `use_logo` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## settings_email

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `template` | `string(255)` |  |  |  |
| `sys_email` | `string(255)` |  | `nullable:true` |  |
| `alert_email` | `string(255)` |  |  |  |
| `admin_email` | `string(255)` |  |  |  |
| `mta` | `string(255)` |  |  |  |
| `email_fetching` | `boolean` |  |  |  |
| `notification_cron` | `boolean` |  |  |  |
| `strip` | `boolean` |  |  |  |
| `separator` | `boolean` |  |  |  |
| `all_emails` | `boolean` |  |  |  |
| `email_collaborator` | `boolean` |  |  |  |
| `attachment` | `boolean` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## settings_ratings

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `rating_name` | `string(255)` |  |  |  |
| `publish` | `integer` |  | `autoIncrement:false` |  |
| `modify` | `integer` |  | `autoIncrement:false` |  |
| `slug` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `settings_ratings_slug_unique` | `unique` | `slug` |  |  |


## settings_security

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `lockout_message` | `string(255)` |  |  |  |
| `backlist_offender` | `integer` |  | `autoIncrement:false` |  |
| `backlist_threshold` | `integer` |  | `autoIncrement:false` |  |
| `lockout_period` | `integer` |  | `autoIncrement:false` |  |
| `days_to_keep_logs` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## settings_system

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `status` | `boolean` |  |  |  |
| `url` | `string(255)` |  |  |  |
| `name` | `string(255)` |  |  |  |
| `department` | `string(255)` |  |  |  |
| `page_size` | `string(255)` |  |  |  |
| `log_level` | `string(255)` |  |  |  |
| `purge_log` | `string(255)` |  |  |  |
| `api_enable` | `integer` |  | `autoIncrement:false` |  |
| `api_key_mandatory` | `integer` |  | `autoIncrement:false` |  |
| `api_key` | `string(255)` |  |  |  |
| `name_format` | `string(255)` |  |  |  |
| `time_farmat` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `date_format` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `date_time_format` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `day_date_time` | `string(255)` |  |  |  |
| `time_zone` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `content` | `string(255)` |  |  |  |
| `version` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

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


## settings_ticket

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `num_format` | `string(255)` |  |  |  |
| `num_sequence` | `string(255)` |  |  |  |
| `priority` | `string(255)` |  |  |  |
| `sla` | `string(255)` |  |  |  |
| `help_topic` | `string(255)` |  |  |  |
| `max_open_ticket` | `string(255)` |  |  |  |
| `collision_avoid` | `string(255)` |  |  |  |
| `lock_ticket_frequency` | `string(255)` |  |  |  |
| `captcha` | `string(255)` |  |  |  |
| `status` | `boolean` |  |  |  |
| `claim_response` | `boolean` |  |  |  |
| `assigned_ticket` | `boolean` |  |  |  |
| `answered_ticket` | `boolean` |  |  |  |
| `agent_mask` | `boolean` |  |  |  |
| `html` | `boolean` |  |  |  |
| `client_update` | `boolean` |  |  |  |
| `max_file_size` | `boolean` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## sla_plan

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `grace_period` | `string(255)` |  |  |  |
| `admin_note` | `string(255)` |  |  |  |
| `status` | `boolean` |  |  |  |
| `transient` | `boolean` |  |  |  |
| `ticket_overdue` | `boolean` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## social_media

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `provider` | `string(255)` |  |  |  |
| `key` | `string(255)` |  |  |  |
| `value` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## team_assign_agent

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `team_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `agent_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `team_id` | `index` | `team_id` |  |  |
| `agent_id` | `index` | `agent_id` |  |  |
| `team_assign_agent_ibfk_1` | `foreign` | `team_id` |  | `references:"id"`<br/>`on:"teams"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `team_assign_agent_ibfk_2` | `foreign` | `agent_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## teams

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `status` | `boolean` |  |  |  |
| `team_lead` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `assign_alert` | `boolean` |  |  |  |
| `admin_notes` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `team_lead` | `index` | `team_lead` |  |  |
| `teams_ibfk_1` | `foreign` | `team_lead` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## template

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `status` | `boolean` |  |  |  |
| `template_set_to_clone` | `string(255)` |  |  |  |
| `language` | `string(255)` |  |  |  |
| `internal_note` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## template_sets

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `active` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## template_types

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## templates

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `variable` | `string(255)` |  |  |  |
| `type` | `integer` |  | `autoIncrement:false` |  |
| `subject` | `string(255)` |  |  |  |
| `message` | `text` |  |  |  |
| `description` | `string(255)` |  |  |  |
| `set_id` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## ticket_attachment

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `thread_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `size` | `string(255)` |  |  |  |
| `type` | `string(255)` |  |  |  |
| `poster` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| file | | | | Not Defined In Blueprints |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `thread_id` | `index` | `thread_id` |  |  |
| `ticket_attachment_ibfk_1` | `foreign` | `thread_id` |  | `references:"id"`<br/>`on:"ticket_thread"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## ticket_collaborator

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `isactive` | `boolean` |  |  |  |
| `ticket_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `user_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `role` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `ticket_id` | `index` | `ticket_id` |  |  |
| `user_id` | `index` | `user_id` |  |  |
| `ticket_collaborator_ibfk_1` | `foreign` | `ticket_id` |  | `references:"id"`<br/>`on:"tickets"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `ticket_collaborator_ibfk_2` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## ticket_form_data

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `ticket_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `title` | `text` |  |  |  |
| `content` | `text` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `ticket_id` | `index` | `ticket_id` |  |  |
| `ticket_form_data_ibfk_1` | `foreign` | `ticket_id` |  | `references:"id"`<br/>`on:"tickets"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## ticket_priority

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `priority_id` | `integer` |  | `autoIncrement:true` |  |
| `priority` | `string(255)` |  |  |  |
| `status` | `string(255)` |  |  |  |
| `priority_desc` | `string(255)` |  |  |  |
| `priority_color` | `string(255)` |  |  |  |
| `priority_urgency` | `boolean` |  |  |  |
| `ispublic` | `boolean` |  |  |  |
| `is_default` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## ticket_source

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `value` | `string(255)` |  |  |  |
| `css_class` | `string(255)` |  |  |  |


## ticket_status

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `state` | `string(255)` |  |  |  |
| `mode` | `integer` |  | `autoIncrement:false` |  |
| `message` | `string(255)` |  |  |  |
| `flags` | `integer` |  | `autoIncrement:false` |  |
| `sort` | `integer` |  | `autoIncrement:false` |  |
| `email_user` | `integer` |  | `autoIncrement:false` |  |
| `icon_class` | `string(255)` |  |  |  |
| `properties` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## ticket_thread

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `ticket_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `user_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `poster` | `string(255)` |  |  |  |
| `source` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `reply_rating` | `integer` |  | `autoIncrement:false` |  |
| `rating_count` | `integer` |  | `autoIncrement:false` |  |
| `is_internal` | `boolean` |  |  |  |
| `title` | `string(255)` |  |  |  |
| `body` | `text` |  |  |  |
| `format` | `string(255)` |  |  |  |
| `ip_address` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `ticket_id_2` | `index` | `ticket_id` |  |  |
| `user_id` | `index` | `user_id` |  |  |
| `source` | `index` | `source` |  |  |
| `ticket_thread_ibfk_1` | `foreign` | `ticket_id` |  | `references:"id"`<br/>`on:"tickets"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `ticket_thread_ibfk_2` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `ticket_thread_ibfk_3` | `foreign` | `source` |  | `references:"id"`<br/>`on:"ticket_source"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## ticket_token

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `ticket_id` | `integer` |  | `autoIncrement:false` |  |
| `token` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## tickets

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `ticket_number` | `string(255)` |  |  |  |
| `user_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `dept_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `team_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `priority_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `sla` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `help_topic_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `status` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `rating` | `boolean` |  |  |  |
| `ratingreply` | `boolean` |  |  |  |
| `flags` | `integer` |  | `autoIncrement:false` |  |
| `ip_address` | `integer` |  | `autoIncrement:false` |  |
| `assigned_to` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `lock_by` | `integer` |  | `autoIncrement:false` |  |
| `lock_at` | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| `source` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `isoverdue` | `integer` |  | `autoIncrement:false` |  |
| `reopened` | `integer` |  | `autoIncrement:false` |  |
| `isanswered` | `integer` |  | `autoIncrement:false` |  |
| `html` | `integer` |  | `autoIncrement:false` |  |
| `is_deleted` | `integer` |  | `autoIncrement:false` |  |
| `closed` | `integer` |  | `autoIncrement:false` |  |
| `is_transferred` | `boolean` |  |  |  |
| `transferred_at` | `dateTime` |  | `precision:0` |  |
| `reopened_at` | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| `duedate` | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| `closed_at` | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| `last_message_at` | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| `last_response_at` | `dateTime` |  | `precision:0`<br/>`nullable:true` |  |
| `approval` | `integer` |  | `autoIncrement:false` |  |
| `follow_up` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

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


## time_format

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `format` | `string(255)` |  |  |  |


## timezone

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `location` | `string(255)` |  |  |  |


## user_additional_infos

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `owner` | `integer` |  | `autoIncrement:false` |  |
| `service` | `string(255)` |  |  |  |
| `key` | `string(255)` |  |  |  |
| `value` | `string(255)` |  | `nullable:true` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## user_assign_organization

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `org_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `user_id` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `org_id` | `index` | `org_id` |  |  |
| `user_id` | `index` | `user_id` |  |  |
| `user_assign_organization_ibfk_1` | `foreign` | `org_id` |  | `references:"id"`<br/>`on:"organization"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `user_assign_organization_ibfk_2` | `foreign` | `user_id` |  | `references:"id"`<br/>`on:"users"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## user_notification

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `notification_id` | `integer` |  | `autoIncrement:false` |  |
| `user_id` | `integer` |  | `autoIncrement:false` |  |
| `is_read` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## users

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `user_name` | `string(255)` |  |  |  |
| `first_name` | `string(255)` |  |  |  |
| `last_name` | `string(255)` |  |  |  |
| `gender` | `boolean` |  |  |  |
| `email` | `string(255)` |  | `nullable:true` |  |
| `ban` | `boolean` |  |  |  |
| `password` | `string(60)` |  |  |  |
| `active` | `integer` |  | `autoIncrement:false` |  |
| `is_delete` | `boolean` |  |  |  |
| `ext` | `string(255)` |  |  |  |
| `country_code` | `integer` |  | `autoIncrement:false` |  |
| `phone_number` | `string(255)` |  |  |  |
| `mobile` | `string(255)` |  | `nullable:true` |  |
| `agent_sign` | `text` |  |  |  |
| `account_type` | `string(255)` |  |  |  |
| `account_status` | `string(255)` |  |  |  |
| `assign_group` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `primary_dpt` | `integer` |  | `autoIncrement:false`<br/>`nullable:true` |  |
| `agent_tzone` | `string(255)` |  |  |  |
| `daylight_save` | `string(255)` |  |  |  |
| `limit_access` | `string(255)` |  |  |  |
| `directory_listing` | `string(255)` |  |  |  |
| `vacation_mode` | `string(255)` |  |  |  |
| `company` | `string(255)` |  |  |  |
| `role` | `string(255)` |  |  |  |
| `internal_note` | `string(255)` |  |  |  |
| `profile_pic` | `string(255)` |  |  |  |
| `remember_token` | `string(100)` |  | `nullable:true` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `user_language` | `string(10)` |  | `nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `users_email_unique` | `unique` | `email` |  |  |
| `users_mobile_unique` | `unique` | `mobile` |  |  |
| `assign_group_3` | `index` | `assign_group` |  |  |
| `primary_dpt_2` | `index` | `primary_dpt` |  |  |
| `users_ibfk_1` | `foreign` | `assign_group` |  | `references:"id"`<br/>`on:"groups"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |
| `users_ibfk_2` | `foreign` | `primary_dpt` |  | `references:"id"`<br/>`on:"department"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## version_check

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `current_version` | `string(255)` |  |  |  |
| `new_version` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## widgets

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(30)` |  | `nullable:true` |  |
| `title` | `string(50)` |  | `nullable:true` |  |
| `value` | `text` |  | `nullable:true` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## workflow_action

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `workflow_id` | `integer` |  | `autoIncrement:false` |  |
| `condition` | `string(255)` |  |  |  |
| `action` | `string(255)` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `workflow_action_1` | `foreign` | `workflow_id` |  | `references:"id"`<br/>`on:"workflow_name"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


## workflow_close

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `days` | `integer` |  | `autoIncrement:false` |  |
| `condition` | `integer` |  | `autoIncrement:false` |  |
| `send_email` | `integer` |  | `autoIncrement:false` |  |
| `status` | `integer` |  | `autoIncrement:false` |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## workflow_name

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `name` | `string(255)` |  |  |  |
| `status` | `integer` |  | `autoIncrement:false` |  |
| `order` | `integer` |  | `autoIncrement:false` |  |
| `target` | `string(255)` |  |  |  |
| `internal_note` | `text` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |


## workflow_rules

### Columns
| Column | Type | Default | Attributes  | Comment |
| --- | --- | --- | --- | --- |
| `id` | `integer` |  | `autoIncrement:true` |  |
| `workflow_id` | `integer` |  | `autoIncrement:false` |  |
| `matching_criteria` | `string(255)` |  |  |  |
| `matching_scenario` | `string(255)` |  |  |  |
| `matching_relation` | `string(255)` |  |  |  |
| `matching_value` | `text` |  |  |  |
| `created_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |
| `updated_at` | `timestamp` |  | `precision:0`<br/>`nullable:true` |  |

### Indices

| Index Name | Type | Columns | Algorithm | Attributes |
| --- | --- | --- | --- | --- |
| `workflow_rules_1` | `foreign` | `workflow_id` |  | `references:"id"`<br/>`on:"workflow_name"`<br/>`onUpdate:"NO ACTION"`<br/>`onDelete:"RESTRICT"` |


