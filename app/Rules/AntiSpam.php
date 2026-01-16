<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AntiSpam implements ValidationRule
{
	/**
	 * Run the validation rule.
	 *
	 * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		foreach ([new RepeatedLetters, new NoSpace, new NoEmoji, new BlockedDomains] as $rule) {
			$rule->validate($attribute, $value, $fail);
		}
	}
}
