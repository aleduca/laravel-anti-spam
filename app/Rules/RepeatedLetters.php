<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RepeatedLetters implements ValidationRule
{
	/**
	 * Run the validation rule.
	 *
	 * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		//\s - Espaços em brancos, tabs.
		//p{Cf} - Caracteres invisíveis - sem o /u não funciona
		//p{Cn} - Pontos Unicode que existem, mas ainda não foram oficialmente definidos - sem o /u não funciona
		$normalized = preg_replace('/[\s\p{Cf}\p{Cn}]/u', '', $value);

		// ([a-zA-Z0-9\.]) - Captura letras, numeros ou pontos
		// /1 - Use o valor que foi capturado no grupo 1 e verifique se ele se repete.
		// {2,} - verifica se repetiu mais de 2 vezes.
		if (preg_match('/([a-zA-Z0-9\.])\1{2,}/', $normalized)) {
			$fail("The {$attribute} contains repeated characters.");
		}
	}
}
