<?php

defined('_JEXEC') or die;

class PlgHelloWorld extends JPlugin
{
    public function onContentAfterSave($context, $article, $isNew)
    {
        return true;
    }
}
