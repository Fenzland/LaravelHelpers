<?php

if( !function_exists('array_transposition') )
{
	/**
	 * Transposition an 2-dimensional array.
	 *
	 * @param  array $input
	 *
	 * @return array
	 */
	function array_transposition( array$input )
	{
		$keys=   array_keys($input);
		$values= array_values($input);

		return array_combine( array_keys( $values[0] ), array_map( function( ...$args )use( $keys ){  return array_combine( $keys, $args );  }, ...$values ) );
	}
}
