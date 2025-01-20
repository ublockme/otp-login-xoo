<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$settings = array(

	array(
		'callback' 		=> 'upload',
		'title' 		=> 'PHP SDK',
		'id' 			=> 'twilio-phpsdk',
		'section_id' 	=> 'sv_twilio',
		'default' 		=> '',
		'desc' 			=> '<a href="https://xootix.com/wp-content/uploads/twilio.zip">Download from here</a>'
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_twilio',
		'id' 			=> 'twilio-account-sid',
		'title' 		=> 'Account SID',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_twilio',
		'id' 			=> 'twilio-auth-token',
		'title' 		=> 'Auth Token',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_twilio',
		'id' 			=> 'twilio-sender-number',
		'title' 		=> 'Sender\'s Number',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_twilio',
		'id' 			=> 'twilio-wp-number',
		'title' 		=> 'WhatsApp Number',
		'desc' 			=> 'If you want to send OTP via whatsapp (Only approved whatsapp template works )'
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_firebase',
		'id' 			=> 'fb-api-key',
		'title' 		=> 'API key',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'textarea',
		'section_id' 	=> 'sv_firebase',
		'id' 			=> 'fb-config',
		'title' 		=> 'Config',
		'args' 			=> array(
			'rows' 	=> 9,
			'cols' 	=> 60
		)
	),

	array(
		'callback' 		=> 'upload',
		'title' 		=> 'PHP SDK',
		'id' 			=> 'aws-phpsdk',
		'section_id' 	=> 'sv_aws',
		'default' 		=> '',
		'desc' 			=> '<a href="https://xootix.com/wp-content/uploads/sms-services/aws.zip">Download from here</a>'
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_aws',
		'id' 			=> 'asns-access-key',
		'title' 		=> 'Access key',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_aws',
		'id' 			=> 'asns-secret-key',
		'title' 		=> 'Secret access key',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_aws',
		'id' 			=> 'asns-region',
		'title' 		=> 'Region Code',
		'default' 		=> 'us-east-1',
		'desc' 			=> 'Eg: us-east-1'
	),



	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_bulksms',
		'id' 			=> 'blksms-username',
		'title' 		=> 'Username',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_bulksms',
		'id' 			=> 'blksms-password',
		'title' 		=> 'Password',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_bulkssms',
		'id' 			=> 'bulksms-user',
		'title' 		=> 'User',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_bulkssms',
		'id' 			=> 'bulksms-key',
		'title' 		=> 'Key',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_bulkssms',
		'id' 			=> 'bulksms-senderid',
		'title' 		=> 'Sender ID',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_bulkssms',
		'id' 			=> 'bulksms-templateid',
		'title' 		=> 'Template ID',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_bulkssms',
		'id' 			=> 'bulksms-entityid',
		'title' 		=> 'Entity ID',
	),



	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_netgsm',
		'id' 			=> 'netgsm-usercode',
		'title' 		=> 'Usercode (Subscriber Number)',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_netgsm',
		'id' 			=> 'netgsm-password',
		'title' 		=> 'Password',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_netgsm',
		'id' 			=> 'netgsm-msgheader',
		'title' 		=> 'MSG Header',
		'desc' 			=> 'It is your message title (sender name) defined in the system. It consists of at least 3 and at most 11 characters. If you want your message title to contain your subscriber number, enter your subscriber number without a leading zero in this parameter.8xxxxxxxxxx'
	),



	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_oursms',
		'id' 			=> 'oursms-username',
		'title' 		=> 'Username',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_oursms',
		'id' 			=> 'oursms-apikey',
		'title' 		=> 'API Key',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_oursms',
		'id' 			=> 'oursms-senderid',
		'title' 		=> 'Sender ID',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_smsalert',
		'id' 			=> 'smsalert-apikey',
		'title' 		=> 'API Key',
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_smsalert',
		'id' 			=> 'smsalert-senderid',
		'title' 		=> 'Sender ID',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_unifonic',
		'id' 			=> 'unifonic-appid',
		'title' 		=> 'APP ID',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_unifonic',
		'id' 			=> 'unifonic-senderid',
		'title' 		=> 'Sender ID',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_msg91',
		'id' 			=> 'msg91-authkey',
		'title' 		=> 'Auth Key',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_msg91',
		'id' 			=> 'msg91-senderid',
		'title' 		=> 'Sender ID',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_msg91',
		'id' 			=> 'msg91-tmpid',
		'title' 		=> 'DLT Template ID (India)',
		'desc' 			=> 'For Indian users only'
	),



	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_txlocal',
		'id' 			=> 'txtlocal-sender',
		'title' 		=> 'Sender',
		'desc' 			=> 'Use this field to specify the sender name which is pre-approved by DLT and Textlocal.'
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_txlocal',
		'id' 			=> 'txtlocal-apikey',
		'title' 		=> 'API Key',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'checkbox',
		'section_id' 	=> 'sv_txlocal',
		'id' 			=> 'txtlocal-test',
		'title' 		=> 'Enable Test',
		'default' 		=> 'no'
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_smslane',
		'id' 			=> 'smslane-apikey',
		'title' 		=> 'API Key',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_smslane',
		'id' 			=> 'smslane-clientid',
		'title' 		=> 'Client ID',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_smslane',
		'id' 			=> 'smslane-senderid',
		'title' 		=> 'Sender ID',
	),



	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_semaphore',
		'id' 			=> 'semaphore-apikey',
		'title' 		=> 'API Key',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_semaphore',
		'id' 			=> 'semaphore-senderid',
		'title' 		=> 'Sender Name',
	),


	/* Msegat */
	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_msegat',
		'id' 			=> 'msegat-username',
		'title' 		=> 'Username',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_msegat',
		'id' 			=> 'msegat-apikey',
		'title' 		=> 'API Key',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_msegat',
		'id' 			=> 'msegat-usersender',
		'title' 		=> 'User Sender/Sender Name',
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_msegat',
		'id' 			=> 'msegat-msgencoding',
		'title' 		=> 'MsgEncoding',
		'default' 		=> 'UTF8'
	),

	/* Custom */


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'text',
		'section_id' 	=> 'sv_custom',
		'id' 			=> 'cus-url',
		'title' 		=> 'API URL',
		'desc' 			=> 'For eg: https://api.textlocal.in/send/'
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'select',
		'section_id' 	=> 'sv_custom',
		'id' 			=> 'cus-format',
		'title' 		=> 'Data Format',
		'args' 			=> array(
			'options' 		=> array(
				'url' 		=> 'URL encoded',
				'json' 		=> 'JSON',
			),
		),
		'default' 		=> 'url'
	),


	array(
		'type' 			=> 'setting',
		'callback' 		=> 'textarea',
		'section_id' 	=> 'sv_custom',
		'id' 			=> 'cus-params',
		'title' 		=> 'API Parameters',
		'desc' 			=> 'separated by &.<br>Shortcodes: Phone number of message recepient: [phone_number]<br>Message: [message]<br>For eg: apiKey=xxxx&senderID=yyy&numbers=[phone_number]&message=[message]<br>'
	),

	array(
		'type' 			=> 'setting',
		'callback' 		=> 'select',
		'section_id' 	=> 'sv_custom',
		'id' 			=> 'cus-method',
		'title' 		=> 'HTTP Method',
		'args' 			=> array(
			'options' 		=> array(
				'GET' 		=> 'GET',
				'POST' 		=> 'POST'
			),
		),
		'default' 		=> 'POST'
	),


);

return $settings;

?>
