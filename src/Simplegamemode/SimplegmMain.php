<?php

namespace Simplegm;

use pocketmine\plugin\PluhinBase;
use pocketmine\event\Listener;
use pocketmine\{Player, Server};
use pocketmine\level\Level;
use pocketmine\command\{Command, CommandSender};
use pocketmine\event\player\{PlayerJoinEvent, PlayerQuitEvent, PlayerDropItemEvent, PlayerRespawnEvent, PlayerInteractEvent};
use pocketmine\permission\Permission;
use pocketmine\utils\TextFormat as T;

class SimplegmMain extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger(){info("Simplegm Plugin ON");
}

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
		switch($cmd){
		
		case "gm1":
		if($sender->hasPermission("gm1.simplegm"));
		    $sender->sendMessage(T::GREEN . "Tu modo de juego ha sido actualizado a §eCreativo");
		    $sender->setGamemode(1);
		
		    return false;
		    break;
		
		case"gm0":
		if($sender->hasPermission("gm0.simplegm"));
		    $sender->sendMessage(T::GREEN . "Tu modo de juego ha sido actualizado a §2Supervivencia");
		    $sender->setGamemode(0);
		
		    return false;
		    break;
		
		case "gm3":
		if($sender->hasPermission("gm3.simplegm"));
		    $sender->sendMessage(T::GREEN . "Tu modo de juego ha sido actualizado a §dEspectador");
		    $sender->setGamemode(3);
		
		case "gm2":
		if($sender->hasPermission("gm2.simplegm"));
		    $sender->sendMessage(T::GREEN . "Tu modo de juego ha sido actualizado a §cAventura");
		    $sender->setGamemode(2);
		
		    return false;
		    break;
		}
	}
	
public function onDisable(){
$this->getLogger(){info(" Simplegm Plugin OFF");
}
}