<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class BlockedDomains implements ValidationRule
{
	/**
	 * Run the validation rule.
	 *
	 * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		$blockedDomains = [
			'mailinator.com',
			'tempmail.com',
			'10minutemail.com',
			'teste.com.br',
			'localhost.com.br',
			'email.com.br',
			'email.com',
		];

		$domain = substr(strrchr($value, '@'), 1);

		if (in_array($domain, $blockedDomains)) {
			$fail("Invalid domain to {$attribute}");
		}
	}
}
