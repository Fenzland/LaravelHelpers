<?php

use Illuminate\Support\Debug\Dumper;

////////////////////////////////////////////////////////////////

if (! function_exists('z')) {
	/**
	 * Dump the given expression and return it.
	 *
	 * @param  mixed
	 * @return void
	 */
	function z( $x )
	{
		( new Dumper )->dump($x);

		return $x;
	}
}


if (! function_exists('routo')) {
	/**
	 * Generate a URL to a named route.
	 *
	 * @param  string  $name
	 * @param  array   $parameters
	 * @param  bool    $absolute
	 * @param  \Illuminate\Routing\Route  $route
	 *
	 * @return string
	 */
	function routo( $name, $parameters=[], $absolute=true )
	{
		$currentRouteName= app('router')->currentRouteName();

		if( empty($name) ){
			$name= $currentRouteName;
		}elseif( starts_with($name,'.') ){
			$name= preg_replace('/[^:\.]+$/',substr($name,1),$currentRouteName);
		}elseif( starts_with($name,':') ){
			$name= strtok($currentRouteName,':').$name;
		}

		$parameterNames= app('routes')->getByName($name)->parameterNames();

		$inheritParameters= collect( Route::current()->parameters() )->filter( function( $value, $key )use($parameterNames){  return in_array($key,$parameterNames);  } )->all();

		$parameters+= $inheritParameters;

		return app('url')->route($name,$parameters,$absolute);
	}
}


if (! function_exists('array_transposition')) {
	/**
	 * Transposition an 2-dimensional array.
	 *
	 * @param  array
	 * @return array
	 */
	function array_transposition( array$input )
	{
		$keys=   array_keys($input);
		$values= array_values($input);
		return array_combine(array_keys($values[0]),array_map(function(...$args)use($keys){return array_combine($keys,$args);},...$values));
	}
}
