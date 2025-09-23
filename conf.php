<?php
/**
 * conf.php - Global configuration for email sending
 */

$conf = [
    // General site settings
    'site_name'   => 'My PHP App',
    'site_url'    => 'http://localhost/myapp/', // adjust when deployed
    'site_email'  => 'your-email@example.com',

    // SMTP settings 
    'smtp_host'   => 'icsaacademy@gmail.com',    
    'smtp_user'   => 'kangethecyntia834@gmail.com',
    'smtp_pass'   => 'nkaz lwfb siph redx',   
    'smtp_port'   => 587,                 // 
    'smtp_secure' => 'tls',               //

    // Default From name
    'smtp_from_name' => 'My PHP App Team',

    // Email templates (subjects can be overridden in code)
    'email_templates' => [
        'welcome' => [
            'subject' => 'Welcome to My PHP App'
        ],
        'password_reset' => [
            'subject' => 'Reset Your Password'
        ],
        'notification' => [
            'subject' => 'New Notification from My PHP App'
        ]
    ]
];

/**
 * Validate SMTP configuration
 */
function validateSMTPConfig() {
    global $conf;

    $required = ['smtp_host', 'smtp_user', 'smtp_pass', 'smtp_port'];
    foreach ($required as $key) {
        if (empty($conf[$key])) {
            return "Missing SMTP configuration: $key";
        }
    }
    return true;
}
?>
