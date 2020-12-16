<?php 

namespace app\models;

use sksaju\phpmvc\Model;

/**  
 * Class LoginForm 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\models
 */

class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $message = '';

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'message' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [
            'subject' => 'Subject',
            'email' => 'Email',
            'message' => 'Message',
        ];
    }

    public function send()
    {
        return true;
    }
}