<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoEmoji implements ValidationRule
{
	/**
	 * Run the validation rule.
	 *
	 * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		// \p{So} - Symbols, Other (onde emojis vivem)
		//p{Cn} - Pontos Unicode que existem, mas ainda não foram oficialmente definidos - sem o /u não funciona
		if (preg_match('/[\p{So}\p{Cn}]/u', $value)) {
			$fail('Please, do not try to use emojis');
		}
	}
}
