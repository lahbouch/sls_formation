<?php

namespace App\View\Components;

use App\Models\Info;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public $phone;
    public $email;
    public $address;
    public $facebookUrl;
    public $twitterUrl;
    public $instagramUrl;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $info = Info::first();
        
        $this->phone = $info ? ($info->phone ?? '') : '';
        $this->email = $info ? ($info->email ?? '') : '';
        $this->address = $info ? ($info->address ?? '') : '';
        $this->facebookUrl = $info ? ($info->facebook_url ?? 'https://www.facebook.com') : 'https://www.facebook.com';
        $this->twitterUrl = $info ? ($info->twitter_url ?? 'https://www.twitter.com') : 'https://www.twitter.com';
        $this->instagramUrl = $info ? ($info->instagram_url ?? 'https://www.instagram.com') : 'https://www.instagram.com';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
