<?php	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-admin.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for admin center
	
	--------------Translate to chiness-------------
	Author: tomheng 
	Created: 2012-02-07
	Blog: http://blog.webfuns.net
	Git: git@github.com:tomheng/Question2Answer_zh.git
	------------------------------------------------	

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'active_widgets_explanation' => '正在使用的工具:',
		'add_category_button' => '添加分类',
		'add_field_button' => '添加字段',
		'add_link_button' => '添加链接',
		'add_link_link' => ' - ^1添加链接^2',
		'add_new_field' => '添加新字段',
		'add_new_title' => '添加新标题',
		'add_page_button' => '添加页面',
		'add_title_button' => '添加标题',
		'add_widget_button' => '添加工具',
		'add_widget_link' => ' - ^1添加工具^2',
		'admin_title' => '管理中心',
		'after_footer' => '页脚链接之后',
		'after_main_menu' => '顶部所有选项卡之后',
		'after_x_tab' => '"^" 选项卡之后',
		'after_x' => '"^"之后',
		'moderate_title' => '审核',
		'basic_editor' => '初级编辑',
		'before_main_menu' => '顶部所有选项卡之前',
		'block_ips_note' => '用-表示范围，*表示任意数字。 示例: 192.168.0.4 , 192.168.0.0-192.168.0.31 , 192.168.0.*',
		'block_words_note' => '用*匹配任意字母。示例: doh (仅匹配单词 doh) , doh* (匹配 doh 或者dohno) , do*h (匹配 doh, dooh, dough)。',
		'cancel_mailing_button' => '取消邮件发送',
		'categories_introduction' => '使用分类, 点击 \'添加分类\' 按钮。',
		'categories_not_shown' => '隐藏分类的问题不会被显示。',
		'categories_title' => '分类',
		'categories' => '分类',
		'category_add_sub' => '添加子分类',
		'category_added' => '已经添加的分类',
		'category_already_used' => '已经被使用',
		'category_default_slug' => 'category-^',
		'category_description' => '可添加分类描述:',
		'category_max_depth_x' => '分类层次不能超过 ^ 层。',
		'category_move_parent' => '修改父级分类',
		'category_name_first' => '第一个分类名称:',
		'category_name' => '分类名称:',
		'category_no_add_subs_x' => '分类层次超过 ^ 层无法添加子分类。',
		'category_no_delete_subs' => '存在子分类无法删除',
		'category_no_sub_error' => '^q 问题没有设置子分类  - ^1设置子分类^2',
		'category_no_sub_to' => '移动没有子分类的问题 ^ 到 :',
		'category_no_subs' => '空',
		'category_none_error' => '^q 问题没有分类 - ^1设置分类^2',
		'category_none_to' => '移动未分类的问题到:',
		'category_parent' => '父级分类:',
		'category_saved' => '保存分类',
		'category_slug' => '分类标识 - URL fragment:',
		'category_subs' => '子分类:',
		'category_top_level' => '无父级分类 (顶级)',
		'characters' => '字符',
		'check_language_suffix' => ' - ^1检查语言文件^2',
		'click_name_edit' => '自定义页面或链接:',
		'database_cleanup' => '清理数据库',
		'delete_category_reassign' => '删除该分类，并将该分类下所有问题转移至:',
		'delete_category' => '删除此分类',
		'delete_field' => '删除此字段',
		'delete_hidden_complete' => '所有隐藏的，并且没有关联的主题已被删除',
		'delete_hidden_note' => ' - 删除所有没有关联的问题、回复和评论',
		'delete_hidden' => '删除所有隐藏问题',
		'delete_link' => '删除此链接',
		'delete_page' => '删除此页面',
		'delete_stop' => '停止删除',
		'delete_title' => '删除该头衔',
		'delete_widget_position' => '删除在这的这个工具',
		'edit_custom_page' => '编辑自定义页面',
		'edit_field' => ' - ^1编辑字段^2',
		'edit_link' => ' - ^1编辑链接^2',
		'edit_page' => ' - ^1编辑页面^2',
		'edit_title' => ' - ^1编辑标题^2',
		'emails_per_minute' => '邮件发送频率',
		'emails_title' => '邮件',
		'feed_link_example' => '示例feed',
		'feed_link' => 'Feed',
		'feeds_title' => 'RSS feeds',
		'field_link_url' => '链接地址',
		'field_multi_line' => '多行文本',
		'field_name' => '字段名:',
		'field_single_line' => '单行文本',
		'field_type' => '字段类型:',
		'first' => '第一个',
		'flagged_title' => '标记',
		'from_anon' => '来自匿名用户:',
		'from_users' => '来自用户:',
		'general_title' => '基本设置',
		'hidden_answers_deleted' => '已删除^1 条，共 ^2 条隐藏回复...',
		'hidden_comments_deleted' => '已删除^1条，共 ^2 条隐藏评论...',
		'hidden_questions_deleted' => '已删除^1条，共 ^2 条无关连的隐藏提问...',
		'hotness_factors' => '问题热度:',
		'hidden_title' => '隐藏',
		'installed_plugins' => '已安装的插件:',
		'ip_address_pages' => 'IP 地址页面',
		'layout_title' => '布局',
		'link_name' => '链接文本:',
		'link_new_window' => '新窗口打开链接',
		'link_url' => '链接- 绝对地址或者相对根目录的地址:',
		'lists_title' => '列表',
		'mailing_complete' => '邮件已发送',
		'mailing_explanation' => '用户可以在帐号设置中取消订阅。',
		'mailing_progress' => '已发送^1用户，共^2用户...',
		'mailing_title' =>'群发邮件',
		'mailing_unsubscribe' => '每条信息的页脚都会有一个退订链接。',
		'maintenance_admin_only' => '您的网站正在^1维护^2，普通用户无法访问。',
		'maximum_x' => ' (最大^)',
		'module_x_database_init' => ' ^1 ^2 模块 ^3数据库初始化^4.',
		'most_flagged_title' => '标识问题',
		'mysql_version' => 'MySQL 版本:',
		'nav_links_explanation' => '显示为导航链接:',
		'nav_qa_is_home' => 'Q&A (作为首页链接)',
		'neat_urls_note' => ' (须要支持 ^1htaccess^2 文件)',
		'no_approve_found' => '没有须要审核的内容',
		'no_classification' => '无分类',
		'no_flagged_found' => '没有标识内容',
		'no_hidden_found' => '没有隐藏内容',
		'no_image_gd' => '服务器PHP版本不支持GD扩展，用户无法上传头像。',
		'no_link' => '无链接',
		'no_multibyte' => '服务器的 PHP 没有多字节支持 (mbstring)，搜索非罗马字符的时候可能会有问题。',
		'no_plugin_options' => '已安装的插件没有设置选项。',
		'no_privileges' => '仅管理员可以访问本页面。',
		'not_logged_in' => '请以管理员帐号 ^1登录^2 访问。',
		'opposite_main_menu' => '标签右侧',
		'options_reset' => '已恢复默认设置',
		'options_saved' => '设置已保存',
		'options' => '选项',
		'page_already_used' => '页面已使用',
		'page_content_html' => '页面内容 - 支持HTML:',
		'page_default_slug' => 'page-^',
		'page_heading' => '页面顶部内容:',
		'page_name' => '页面名称 (用户标签和链接):',
		'page_slug' => '页面标识 (出现在链接中):',
		'pages_explanation' => '点击 \'添加页面\' 按钮添加自定义页面,或点击\'添加链接\' 到已存在的页。',
		'pages_title' => '页面',
		'pause_mailing_button' => '停止发送邮件',
		'per_ip_hour' => ' IP/小时',
		'per_user_hour' => '用户/小时',
		'permissions_title' => '权限',
		'permit_to_view' => '可见:',
		'php_version' => 'PHP版本:',
		'pixels' => '像素',
		'plugin_module' => ' (插件模块: ^)',
		'plugin_pages_explanation' => '插件页面:',
		'plugins_title' => '插件',
		'points_defaults_shown' => '默认选项显示如下，目前未生效:',
		'points_required' => '获得头衔须要的积分:',
		'points_title' => '积分',
		'points' => '积分',
		'position' => '位置:',
		'posting_title' => '发表',
		'profile_fields' => '用户信息附加字段:',
		'q2a_build_date' => '建立日期:',
		'q2a_db_size' => '数据库大小:',
		'q2a_db_version' => 'Q2A 数据库版本:',
		'q2a_latest_version' => 'Q2A最新版本号:',
		'q2a_version' => 'Question2Answer 版本:',
		'question_lists' => '问题列表',
		'question_pages' => '问题页面',
		'recalc_categories_backpaths' => 'Recalculating URL paths for ^1 of ^2 categories...',
		'recalc_categories_complete' => '所有分类已经被重新统计。',
		'recalc_categories_note' => ' - 将重新统计问题分类相关数据',
		'recalc_categories_recounting' => '正在重新计算 ^1 分类中的问题，共 ^2 分类...',
		'recalc_categories_updated' => 'Recalculated for ^1 of ^2 posts...',
		'recalc_categories' => '重新计算分类数据',
		'recalc_points_complete' => '所有的用户积分已重新计算',
		'recalc_points_note' => ' - 用户积分',
		'recalc_points_recalced' => '正在重新计算^1用户数据，共 ^2 用户...',
		'recalc_points_usercount' => '重新计算用户数...',
		'recalc_points' => '重新统计用户积分',
		'recalc_posts_count' => '重新统计问题、回复、评论数据...',
		'recalc_stop' => '停止统计',
		'recent_approve_title' => '最近等待批准的内容',
		'recent_hidden_title' => '最近隐藏的内容',
		'recount_posts_as_recounted' => 'Recounted answers and hotness for ^1 of ^2 posts...',
		'recount_posts_complete' => '所有问题已被重新计数。',
		'recount_posts_note' => ' -每一个问题的回复、投票、标记、和热度数',
		'recount_posts_stop' => '停止计算',
		'recount_posts_votes_recounted' => 'Recounted votes and flags for ^1 of ^2 posts...',
		'recount_posts' => '重新计算提问数',
		'refill_events_complete' => 'All events streams were successfully refilled',
		'refill_events_note' => ' - for each user\'s list of updates',
		'refill_events_refilled' => 'Refilled for ^1 of ^2 questions...',
		'refill_events' => 'Refill event streams',
		'reindex_content' => '为内容重新建立索引',
		'reindex_content_note' => ' - 为搜索和相关问题提供相关信息',
		'reindex_content_stop' => '停止建立索引',
		'reindex_pages_reindexed' => '已重建索引 ^1 个页面，共 ^2 页面...',
		'reindex_posts_complete' => '所有页面已重新建立索引。',
		'reindex_posts_reindexed' => '已重建所有 ^1 提问，共 ^2 提问...',
		'reindex_posts_wordcounted' => 'Recounted ^1 of ^2 words...',
		'requires_php_version' => '不可用 - 须 PHP ^ 或更高版本',
		'requires_q2a_version' => '不可用 - 须 Question2Answer ^ 或更高版本',
		'reset_options_button' => '恢复默认设置',
		'resume_mailing_button' => '继续发送邮件',
		'save_options_button' => '保存设置',
		'save_recalc_button' => '保存并重新统计',
		'send_test_button' => '向我发送测试',
		'show_defaults_button' => '查看默认选项',
		'slug_bad_chars' => '标识不能包含字符: ^',
		'slug_reserved' => '保留标识',
		'spam_title' => '防垃圾',
		'start_mailing_button' => '开始发送邮件',
		'stats_title' => '统计',
		'stop_recalc_warning' => '关闭页面，将影响正在进行的数据库清理操作。',
		'tag_pages' => '标签页',
		'tags_and_categories' => '标签和分类',
		'tags_not_shown' => '隐藏标签下问题不会被显示.',
		'tags' => '标签',
		'test_sent_to_x' => '测邮件已试发送到 ^',
		'title_already_used' => '标题已经被使用',
		'top_level_categories' => '顶级分类:',
		'total_as' => '回复数:',
		'total_cs' => '评论数:',
		'total_qs' => '问题数:',
		'unnamed_plugin' => '未命名插件',
		'upgrade_db' => ' 此版本的Question2Answer数据库需要 ^1升级^2。',
		'url_format_note' => '^标识表示可用选项，为了对搜索引擎更友好(SEO),建议使用具有^ 标识的第一个选项。',
		'user_pages' => '用户页面',
		'user_title' => '用户头衔 - HTML标签可用:',
		'user_titles' => '用户头衔（根据计算）:',
		'users_active' => '活跃用户:',
		'users_must_have' => '用户必须有',
		'users_posted' => '提问过的用户:',
		'users_registered' => '注册用户:',
		'users_title' => '用户',
		'users_voted' => '投票用户:',
		'version_get_x' => '获得 ^',
		'version_latest_unknown' => '未知最新版本',
		'version_latest' => '最新版本',
		'viewing_title' => '查看',
		'widget_all_pages' => '在所有页面的此位置显示该工具',
		'widget_global_options' => ' - ^1选项^2',
		'widget_name' => '工具名称:',
		'widget_no_positions' => '没有位置可以添加此工具了.',
		'widget_not_available' => '插件提供的工具未安装导致工具没有显示。',
		'widget_pages_explanation' => '工具显示在页面:',
		'widgets_explanation' => '可用的工具:',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
