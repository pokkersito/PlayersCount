<?php

namespace Pokker;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\SingletonTrait;
use function count;
use function implode;
use const PHP_EOL;


class Main extends PluginBase implements Listener{

    use SingletonTrait;
   
   public function onLoad(): void {
      self::setInstance($this);
   }
   
   public function onEnable(): void {
    $this->getLogger()->info('§aPlayerCount enable by: §bPokker77');
   }

   public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
      switch($command->getName()){
      case "players":

        if(!isset($args[0])){
        $guion = [
          ' §bPlayer Online: §f' . count($sender->getServer()->getOnlinePlayers()),
      ];
      $sender->sendMessage(implode(PHP_EOL, $guion));
    }
    return true;
  }
}
}
