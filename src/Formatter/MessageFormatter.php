<?php

declare(strict_types=1);

namespace Duon\Log\Formatter;

use Duon\Log\Formatter;

class MessageFormatter implements Formatter
{
	public function format(string $message, ?array $context): string
	{
		return $message;
	}
}
