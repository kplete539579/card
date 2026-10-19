<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public static function getProfileData()
    {
        return [
            'status' => 'Available for projects',
            'company' => 'HART & CO. CREATIVE',
            'name' => 'Romeo Paolo Patrimonio',
            'bio' => 'Brand strategist & creative director helping bold ideas become unforgettable brands.',
            'hero_image' => 'images/sample.jpg',
            'links' => [
                [
                    'label' => 'EMAIL',
                    'value' => 'p.patrimonio.560605@umindanao.edu.ph',
                    // Opens default mail app with pre-filled address
                    'url' => 'https://mail.google.com/mail/u/0/?tab=rm&ogbl#search/p.patrimonio.560605%40umindanao.edu.ph?compose=DmwnWrRpdTRqCDKPsrKCLxthsLDhkPnrZwBrvDMBkRnvLtTgVnRRrSRfWPMMfqfrfbCwXZVSdXCq',
                    'icon' => 'far fa-envelope',
                ],
                [
                    'label' => 'PHONE',
                    'value' => '+1 (212) 555-0148',
                    // Opens device phone dialer
                    'url' => 'tel:+12125550148',
                    'icon' => 'fas fa-phone-alt',
                ],
                [
                    'label' => 'INSTAGRAM',
                    'value' => '@pabolito8',
                    // Direct social profile link
                    'url' => 'https://www.instagram.com/pabolito8/',
                    'icon' => 'fab fa-instagram',
                ],
                [
                    'label' => 'FACEBOOK',
                    'value' => 'Romeo Patrimonio',
                    // Direct Facebook page/profile link
                    'url' => 'https://www.facebook.com/romeo.patrimonio.312569',
                    'icon' => 'fab fa-facebook-f',  
                ],
                [
                    'label' => 'WHATSAPP',
                    'value' => '+1 (212) 555-0148',
                    // Direct WhatsApp chat link
                    'url' => 'https://wa.me/12125550148?text=Hi%20Amelia!',
                    'icon' => 'fab fa-whatsapp',
                ],
               
            ],
            'footer_logo' => 'PK',
            'footer_text_line1' => 'NFC CARD',
            'footer_text_line2' => 'CUSTOMIZATIONS',
        ];
    }
}