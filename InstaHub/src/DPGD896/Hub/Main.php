<?php

namespace DPGD896\Hub;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;

class main extends PluginBase implements Listener {
    
    public function onEnable() : void{
        
    }
    
    
    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args): bool {
    
          switch($cmd->getName()){
                 case "hub":
                   if ($sender->hasPermission("insta.hub")){
                                   $world = $this->getServer()->getWorldManager()->getWorldByName("world");
                       $sender->teleport($world->getSafeSpawn());
                       $sender->sendtitle("Teleported", "to Lobby!",);
                       $sender->sendMessage("Teleported!");
                  }
         }
      return true;
    }
    
}
