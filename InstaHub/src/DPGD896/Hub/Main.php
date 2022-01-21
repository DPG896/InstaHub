<?php

namespace DENPlayz414502\HubPM4;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("Plugin Enabled");
    }

    public function onDisable(): void {
        $this->getLogger()->info("Plugin Disabled")
    }

    public function onCommand(CommandSender $sender , Command $cmd, String $label, Array $args) : bool {

        if($cmd->getName() == "test"){
            $sender->sendMessage("A test command");
        }
    return true;
    }

}
