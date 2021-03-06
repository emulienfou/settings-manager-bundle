<?php
declare(strict_types=1);

namespace Helis\SettingsManagerBundle\Event;

use Helis\SettingsManagerBundle\Model\SettingModel;
use Symfony\Component\EventDispatcher\Event;

class SettingEvent extends Event
{
    protected $setting;

    public function __construct(SettingModel $setting)
    {
        $this->setting = $setting;
    }

    public function getSetting(): SettingModel
    {
        return $this->setting;
    }
}
