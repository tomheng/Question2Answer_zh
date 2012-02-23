<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-options.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for all options, as shown in admin center

	--------------Translate to chiness-------------
	Author: tomheng 
	Created: 2012-02-08
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
		'allow_change_usernames' => '允许用户修改用户名:',
		'allow_close_questions' => '允许手动关闭问题:',
		'allow_login_email_only' => '仅邮箱登录 (用户名禁止登录):', 
		'allow_multi_answers' => '用户可多次回复同一个问题:',
		'allow_no_category' => '问题可以无分类',
		'allow_no_sub_category' => '问题可以不设置子分类',
		'allow_private_messages' => '用户可以彼此发送私信:',
		'allow_self_answer' => '用户可以回答自己的提问:',
		'allow_view_q_bots' => '允许搜索引擎机器人查看问题页面',
		'avatar_allow_gravatar' => '支持^1Gravatar^2 头像:',
		'avatar_allow_upload' => '允许用户上传头像:',
		'avatar_default_show' => '默认头像:',
		'avatar_profile_size' => '用户详情页面头像大小（像素）:',
		'avatar_q_list_size' => '问题列表页面头像大小（像素）:',
		'avatar_q_page_a_size' => '回复中头像大小（像素）:',
		'avatar_q_page_c_size' => '评论中头像大小（像素）:',
		'avatar_q_page_q_size' => '问题页面头像大小（像素）:',
		'avatar_store_size' => '最大头像（像素）:',
		'avatar_users_size' => '用户排行榜中头像的大小（像素）:',
		'block_bad_words' => '屏蔽关键词（用空格或“,”分割）:',
		'block_ips_write' => 'IP黑名单（用空格或“,”分割）:',
		'captcha_module' => '启用验证码:',
		'captcha_on_anon_post' => '您名提问须填写验证码:',
		'captcha_on_feedback' => '反馈页面须验证码:',
		'captcha_on_register' => '注册页须验证码:',
		'captcha_on_reset_password' => '重置密码须验证码:',
		'captcha_on_unconfirmed' => '邮箱未验证须验证码:',
		'columns_tags' => '标签页栏数:',
		'columns_users' => '用户页栏数:',
		'comment_on_as' => '允许对回复发表评论:',
		'comment_on_qs' => '允许对问题发表评论:',
		'confirm_user_emails' => '验证用户邮箱:',
		'confirm_user_required' => '新用户必须完整填写信息:',
		'custom_home_content' => '首页内容 - 支持HTML标签:',
		'custom_home_heading' => '首页头部内容:',
		'default_privacy' => '隐私政策: 用户邮箱不会泄漏或者出售给第三方。',
		'default_sidebar' => "欢迎来到 ^, 你可以在此提问和回复，和社区其他用户共同交流。",
		'default_subject' => '来自^的消息',
		'default_suffix' => 'Q&A',
		'do_ask_check_qs' => '提问前请先查找类似问题:',
		'do_close_on_select' => '关闭已设置最佳答案的问题:',
		'do_complete_tags' => '输入的时候显示匹配的标签:',
		'do_count_q_views' => '统计问题的浏览量:',
		'do_example_tags' => '显示问题的示例标签:',
		'editor_for_as' => '回复时的默认编辑器:',
		'editor_for_cs' => '评论时的默认编辑器:',
		'editor_for_qs' => '提问时的默认编辑器:',
		'email_privacy' => '邮件隐私条款 - 支持HTML标签:',
		'extra_field_active' => '提问表单中的附加信息自定义字段:',
		'extra_field_display_label' => '在问题页面显示附加信息:',
		'extra_field_display' => '在问题页面显示附加信息',
		'feed_for_activity' => '最新活动Feed:',
		'feed_for_hot' => '热门问题Feed:',
		'feed_for_qa' => '最近提问和回复Feed:',
		'feed_for_questions' => '最近提问Feed:',
		'feed_for_search' => '搜索结果Feeds:',
		'feed_for_tag_qs' => '标签对应问题Feed:',
		'feed_for_unanswered' => '等待回复问题Feed:',
		'feed_full_text' => 'Feed中输出全文内容:',
		'feed_number_items' => 'Feed输出条目数:',
		'feed_per_category' => '为每个分类目录提供单独的Feed输出:',
		'feedback_email' => '用于接受用户反馈的管理员邮箱 - 不会公开展示给用户:',
		'feedback_enabled' => '启用反馈问题页面',
		'flagging_hide_after' => '启用隐藏问题的举报次数上限:',
		'flagging_notify_every' => '有举报内容时邮件通知我:',
		'flagging_notify_first' => '有提问时邮件通知:',
		'flagging_of_posts' => '允许举报内容:',
		'follow_on_as' => '允许针对回复提问相关问题:',
		'from_email' => '发出的邮件地址:',
		'hot_weight_a_age' => '新回复:',
		'hot_weight_answers' => '回复数:',
		'hot_weight_q_age' => '新问题:',
		'hot_weight_views' => '浏览数:',
		'hot_weight_votes' => '赞成数:',
		'links_in_new_window' => '链接在新窗口打开:',
		'logo_height' => 'Logo高度（像素）:',
		'logo_show' => '在网页顶部显示Logo图片',
		'logo_url' => 'URL图片地址（绝对地址或相对于根目录的地址）:',
		'logo_width' => 'Logo 宽度（像素）:',
		'mailing_body' => '正文内容:',
		'mailing_enabled' => '启用群发邮件（向所有用户发送邮件）：',
		'mailing_from_email' => '发件邮箱:',
		'mailing_from_name' => '发件人:',
		'mailing_per_minute' => '每分钟最大发送数:',
		'mailing_subject' => '邮件标题:',
		'match_1' => '最窄',
		'match_2' => '较窄',
		'match_3' => '默认',
		'match_4' => '较宽',
		'match_5' => '最宽',
		'match_ask_check_qs' => '相似问题:',
		'match_example_tags' => '相似标签:',
		'match_related_qs' => '相关问题:',
		'max_len_q_title' => '提问标题允许的最大字符数:',
		'max_num_q_tags' => '标签最大字符数:',
		'max_rate_ip_as' => '同一IP最多回复数:',
		'max_rate_ip_cs' => '同一IP最多评论:',
		'max_rate_ip_flags' => '同一IP最多举报次数:',
		'max_rate_ip_logins' => '同一IP允许的最多尝试登录次数:',
		'max_rate_ip_messages' => '同一IP最多发送的私信数:',
		'max_rate_ip_qs' => '同一IP最多的提问数:',
		'max_rate_ip_registers' => '同一IP的最多注册数:',
		'max_rate_ip_uploads' => '同一IP最多的上传文件数:',
		'max_rate_ip_votes' => '同一IP最多的投票数:',
		'max_rate_user_as' => '每个用户每小时最多回复数:',
		'max_rate_user_cs' => '每个用户每小时最多评论数:',
		'max_rate_user_flags' => '每个用户每小时最多举报次数:',
		'max_rate_user_messages' => '每个用户每个小时最多私信数:',
		'max_rate_user_qs' => '每个用户每小时最多提问数:',
		'max_rate_user_uploads' => '每个用户每小时最多上传文件数:',
		'max_rate_user_votes' => '每个用户每小时最多投票数:',
		'min_len_a_content' => '回复内容最少字符数:',
		'min_len_c_content' => '评论内容最少字符数:',
		'min_len_q_content' => '问题描述最少字符数:',
		'min_len_q_title' => '提问标题最少字符数:',
		'min_num_q_tags' => '问题最少的标签数:',
		'moderate_anon_post' => '审核匿名用户的发布内容:',
		'moderate_by_points' => '审核积分过低的用户的发布内容:',
		'moderate_notify_admin' => '当有内容需要审核时发邮件:',
		'moderate_points_limit' => '用户不被审核的最少积分:',
		'moderate_unconfirmed' => '审核未验证邮箱用户的发布内容:',
		'neat_urls' => 'URL结构:',
		'notify_admin_q_post' => '有新问题时邮件通知',
		'notify_users_default' => '默认发送邮件通知:',
		'option_default' => '默认选项',
		'page_size_activity' => '所有动态信息页面展示条数:',
		'page_size_ask_check_qs' => '相似问题最多展示条数:',
		'page_size_ask_tags' => '提示的最多标签数:',
		'page_size_home' => 'Q&A页面展示条数:',
		'page_size_hot_qs' => '热门页面展示条数:',
		'page_size_q_as' => '每页最多回复数:',
		'page_size_qs' => '问题页面展示条数:',
		'page_size_related_qs' => '最大相关问题数量:',
		'page_size_search' => '搜索结果页面展示条数:',
		'page_size_tag_qs' => '标签页展示问题数:',
		'page_size_tags' => '标签页展示记录数:',
		'page_size_una_qs' => '未回复问题页面展示记录数:',
		'page_size_user_posts' => '用户页面显示的问题数:',
		'page_size_users' => '用户页面展示的记录数:',
		'pages_prev_next' => '上/下 页链接数:',
		'permit_admins' => '管理员',
		'permit_all' => '任何人',
		'permit_block' => '封锁、解锁用户或IP地址:',
		'permit_confirmed' => '已验证邮箱的注册用户',
		'permit_create_admins' => '创建管理员:',
		'permit_create_eds_mods' => '创建编辑和版主:',
		'permit_create_experts' => '创建专家:',
		'permit_delete_users' => '删除用户:',
		'permit_editors' => '编辑、版主、管理员',
		'permit_experts' => '专家、编辑、版主、管理员',
		'permit_moderators' => '版主和管理员',
		'permit_points_confirmed' => '已验证用户积分达到',
		'permit_points' => '注册用户积分奖励',
		'permit_see_emails' => '查看用户邮箱:',
		'permit_supers' => '超级管理员',
		'permit_users' => '注册用户',
		'place_full_below_content' => '全部宽度 - 页面中部下面',
		'place_full_below_footer' => '全部宽度 - 页脚之下',
		'place_full_below_nav' => '全部宽度 - 导航之下',
		'place_full_top' => '全部宽度 - 页顶',
		'place_main_below_lists' => '列表内容之下',
		'place_main_below_title' => '内容页标题之下',
		'place_main_bottom' => '主内容之下',
		'place_main_top' => '主内容顶部',
		'place_side_below_categories' => '边栏分类之下',
		'place_side_below_sidebar' => '边栏之下',
		'place_side_last' => '边栏最下',
		'place_side_top' => '边栏顶部',
		'points_a_selected' => '被选为最佳答案:',
		'points_a_voted_max_gain' => '回答的赞成票积分上限:',
		'points_a_voted_max_loss' => '回答的反对票积分上限:',
		'points_base' => '初始积分:',
		'points_multiple' => '积分倍率:',
		'points_per_a_voted_down' => '回答获得一个反对票:',
		'points_per_a_voted_up' => '回答获得一个赞成票:',
		'points_per_q_voted_down' => '提问获得一个反对票:',
		'points_per_q_voted_up' => '提问获得一个赞成票:',
		'points_post_a' => '回答一次问题:',
		'points_post_q' => '提一个问题:',
		'points_q_voted_max_gain' => '问题的赞成票积分上限:',
		'points_q_voted_max_loss' => '问题的反对票积分上限:',
		'points_select_a' => '为问题选择最佳答案:',
		'points_vote_down_a' => '对一个回复投了反对票:',
		'points_vote_down_q' => '对一个提问投了反对票:',
		'points_vote_up_a' => '对一个回复投了赞成票:',
		'points_vote_up_q' => '对一个提问投了赞成票:',
		'q_urls_remove_accents' => '移除URL中的语音符号（英文）:',
		'q_urls_title_length' => 'URL中显示的最多字符数:',
		'search_module' => '搜索模块:',
		'show_a_form_immediate' => '显示快速回复表单:',
		'show_always' => '总是',
		'show_c_reply_buttons' => '评论中显示回复按钮:',
		'show_custom_answer' => '回复表单自定义信息 - 支持HTML标签:',
		'show_custom_ask' => '提问表单自定义信息 - 支持HTML标签:',
		'show_custom_comment' => '评论表单自定义信息 - 支持HTML:',
		'show_custom_footer' => '所有页面底部自定义内容（支持HTML）:',
		'show_custom_header' => '所有页面头部自定义内容（支持HTML）:',
		'show_custom_home' => '自定义首页HTML内容取代Q&A列表页面',
		'show_custom_in_head' => '自定义<HEAD>区域内容:',
		'show_custom_register' => '注册表单自定义信息 - 支持HTML标签:',
		'show_custom_sidebar' => '所有页面右侧边栏自定义内容（支持HTML）:',
		'show_custom_sidepanel' => '所有页面右侧边栏自定义内容（支持HTML）:',
		'show_custom_welcome' => '发送给注册用户的邮件内容:',
		'show_fewer_cs_count' => '如果部分隐藏，显示最近:',
		'show_fewer_cs_from' => '达到多少则部分隐藏:',
		'show_full_date_days' => '内容发布多久后显示完整日期:',
		'show_home_description' => '首页描述(description meta)信息 :',
		'show_if_no_as' => '如果没有回复',
		'show_message_history' => '保存私信历史记录:',
		'show_never' => '永不',
		'show_notice_visitor' => '初次访问用户页面顶部显示的信息（支持HTML）',
		'show_notice_welcome' => '新注册用户页面顶部显示的信息（支持HTML）:',
		'show_selected_first' => '将最佳答案制定:',
		'show_url_links' => '问题中的URL自动加上链接:',
		'show_user_points' => '用户名后显示积分:',
		'show_user_titles' => '用户名后显示头衔:',
		'show_view_counts' => '问题列表页面显示浏览数:',
		'show_when_created' => '显示用户提问时间:',
		'site_language' => '语言包:',
		'site_maintenance' => '进入维护模式',
		'site_theme_mobile' => '手机主题:',
		'site_theme' => '主题:',
		'site_title' => '网站名称:',
		'site_url' => '网站网址:',
		'smtp_active' => '通过SMTP发送邮件',
		'smtp_address' => 'SMTP服务器地址:',
		'smtp_authenticate' => 'SMTP用户名和密码',
		'smtp_password' => 'SMTP密码:',
		'smtp_port' => 'SMTP服务器端口:',
		'smtp_secure_none' => '没有',
		'smtp_secure' => 'SMTP安全链接:',
		'smtp_username' => 'SMTP用户名:',
		'sort_answers_by' => '默认回复排序规则:',
		'sort_time' => '按时间排序',
		'sort_votes' => '按投票数排序',
		'suspend_register_users' => '暂停新用户注册:',
		'tag_separator_comma' => '标签仅使用逗号做为分割符:',
		'tags_or_categories' => '问题分类规则:',
		'votes_separated' => '分开展示赞成票和反对票:',
		'voting_on_as' => '允许对回复投票:',
		'voting_on_q_page_only' => '仅允许问题页面投票:',
		'voting_on_qs' => '允许对问题投票:',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
