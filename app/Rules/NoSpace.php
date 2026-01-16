<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoSpace implements ValidationRule
{
	/**
	 * Run the validation rule.
	 *
	 * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		//p{Cf} - Caracteres invisíveis - sem o /u não funciona
		//p{Cn} - Pontos Unicode que existem, mas ainda não foram oficialmente definidos - sem o /u não funciona
		if (preg_match('/[\s\p{Cf}\p{Cn}]/u', $value)) {
			$fail("The {$attribute} contain space or invisible characters");
		}
	}
}
