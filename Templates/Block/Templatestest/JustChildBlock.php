<?php

namespace EgyptMango\Templates\Block\Templatestest;
 
class JustChildBlock extends \Magento\Framework\View\Element\Template
{
    public function getGetChildMethod()
    {
        return 'Child block method works';
    }
}