<?php

namespace DPGD896\Hub;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
    
    public function onEnable() : void{
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
        $this->getResource("config.yml"); 
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args): bool {
        switch($cmd->getName()){
            case "hub":
                if($sender->hasPermission("instahub.command")){
                    if($sender instanceof Player) {
                        $world = $this->getServer()->getWorldManager()->getWorldByName($this->getConfig()->get("world"));
                        $sender->teleport($world->getSafeSpawn());
                        $sender->sendTitle($this->getConfig()->get("title"), $this->getConfig()->get("subtitle"),);
                        $sender->sendMessage($this->getConfig()->get("message-to-player"));
                    } else {
                        $sender->sendMessage($this->getConfig()->get("console-error"));
                    }
                }
            break;
        }
        return true;
    }
}
