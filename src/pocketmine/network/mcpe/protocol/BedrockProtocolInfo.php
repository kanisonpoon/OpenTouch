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

	public const PROTOCOL_1_16_100 = "1.16.100";
	public const PROTOCOL_1_16_200 = "1.16.200";
	public const PROTOCOL_1_16_210 = "1.16.210";
	public const PROTOCOL_1_16_220 = "1.16.220";
	public const PROTOCOL_1_16_230 = "1.16.230";
	public const PROTOCOL_1_17_0 = "1.17.0";

	public static function translateProtocol(int $protocol) : int {
		if (in_array($protocol, [418, 419, 420, 421, 422, 423, 424], true)) {
			return self::PROTOCOL_419;
		}
		if (in_array($protocol, [425, 426, 427, 428], true)) {
			return self::PROTOCOL_428;
		}
		if (in_array($protocol, [429, 430, 431], true)) {
			return self::PROTOCOL_431;
		}
		if (in_array($protocol, [433, 434, 435, 437, 440], true)){
			return self::PROTOCOL_433;
		}
		if (in_array($protocol, [437, 440], true)){
			return self::PROTOCOL_437;
		}
		return $protocol;
	}
	public static function basegameversion(string $protocol){
		if (in_array($protocol, [418, 419], true)){
			return self::PROTOCOL_1_16_100;
		}
		if (in_array($protocol, [420, 421, 422], true)){
			return self::PROTOCOL_1_16_200;
		}
		if (in_array($protocol, [423, 424, 425, 427, 428], true)){
			return self::PROTOCOL_1_16_210;
		}
		if (in_array($protocol, [429, 430, 431], true)){
			return self::PROTOCOL_1_16_220;
		}
		if (in_array($protocol, [433, 434, 435], true)) {
			return self::PROTOCOL_1_16_230;
		}
		if (in_array($protocol, [437, 440], true)){
		    return self::PROTOCOL_1_17_0;
		}
		return $protocol;
	}
}
