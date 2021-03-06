<?php

namespace App\Http\ViewComponents\Header\Models;

class HeaderLinkViewModel {

    public $url;
    public $text;
    public $isActive;
    public $htmlTitle;

    public function __construct($url, $text, $isActive = false) {
        $this->url = $url;
        $this->text = $text;
        $this->htmlTitle = $text;
        $this->isActive = $isActive;
    }

}
