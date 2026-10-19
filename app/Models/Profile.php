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
            'name' => 'Sheena Ashly Egloria',
            'bio' => 'Brand strategist & creative director helping bold ideas become unforgettable brands.',
            'hero_image' => 'images/sample.jpg',
            'links' => [
                [
                    'label' => 'EMAIL',
                    'value' => 'egloriasheena30@gmail.com',
                    // Opens default mail app with pre-filled address
                    'url' => 'mailto:egloriasheena30@gmail.com?subject=Inquiry%20from%20Website',
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
                    'value' => '@ahlsyyy',
                    // Direct social profile link
                    'url' => 'https://www.instagram.com/ahlsyyy/',
                    'icon' => 'fab fa-instagram',
                ],
                [
                    'label' => 'FACEBOOK',
                    'value' => 'Sheena Ashly Egloria',
                    // Direct Facebook page/profile link
                    'url' => 'https://www.facebook.com/sheena.egloria',
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