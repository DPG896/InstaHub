<?php

namespace DPGD896\Hub;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
	
	public function onEnable(){
	$this->getServer()->getLogger()->info("Enabled Plugin");
        //to create file config.yml
        @mkdir($this->getDataFolder());
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
	
	      switch($cmd->getName()){
                 case "hub":
	               if($sender instanceof Player){
                               //teleport player to default world and get spawn is safe to player
		               $sender->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
                               $sender->addTitle($this->config->get("title-hub", $this->config->get("sub-hub"),);
                               $sender->sendMessage($this->config->get("message-hub"));
		               //$sender->addtitle("Teleported", "to Lobby!",);
		               //$sender->sendMessage("Teleported!");
                  }
	     }
	return true;
	}
	
	
}
