<?php

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol;

use function in_array;

final class BedrockProtocolInfo {
	public const PROTOCOL_419 = 419;
	public const PROTOCOL_422 = 422;
	public const PROTOCOL_428 = 428;
	public const PROTOCOL_431 = 431;
    public const PROTOCOL_433 = 433;
	public const PROTOCOL_437 = 437;

	public static function translateProtocol(int $protocol) : int {
		if (in_array($protocol, [414, 415, 416, 417, 418, 419, 420, 421, 422, 423, 424], true)) {
			return BedrockProtocolInfo::PROTOCOL_419;
		}
		if (in_array($protocol, [425, 426, 427, 428], true)) {
			return BedrockProtocolInfo::PROTOCOL_428;
		}
		if (in_array($protocol, [429, 430, 431], true)) {
			return BedrockProtocolInfo::PROTOCOL_431;
		}
		if (in_array($protocol, [433, 434, 435, 437, 440], true)){
			return BedrockProtocolInfo::PROTOCOL_433;
		}
		if (in_array($protocol, [437, 440], true)){
			return BedrockProtocolInfo::PROTOCOL_437;
		}
		return $protocol;
	}
}
