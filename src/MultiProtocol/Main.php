<?php

namespace MultiProtocol;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;


class Main extends PluginBase implements Listener {
	
    public function onDataPacketRecieve (DataPacketReceiveEvent $ev) {
    	$pk = $ev->getPacket();
    	if ($pk instanceof LoginPacket) {
    		$pk->protocol = ProtocolInfo::CURRENT_PROTOCOL;
    	}
    }
}
