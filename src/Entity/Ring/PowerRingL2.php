<?php

declare(strict_types=1);

namespace Thies\ZeldaOraclePasswordGenerator\Entity\Ring;

final class PowerRingL2 extends AbstractRing
{
    public function __construct()
    {
        parent::__construct('Power Ring L-2', 'Sword damage ▲▲\nDamage taken ▲▲', '0x4');
    }
}