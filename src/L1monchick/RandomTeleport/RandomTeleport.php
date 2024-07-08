<?php

namespace L1monchick\RandomTeleport;

use pocketmine\plugin\PluginBase;
use L1monchick\RandomTeleport\command\RandomTeleportCommand;

class RandomTeleport extends PluginBase
{
    private static self $instance;

    function onEnable() : void
    {
        self::$instance = $this;
        $this->getServer()->getCommandMap()->register("", new RandomTeleportCommand());
    }

    /**
     * @return $this
     */
    public static function getInstance() : self
    {
        return self::$instance;
    }
}
