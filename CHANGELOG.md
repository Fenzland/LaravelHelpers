CHANGELOG
================================

## 0.1.5
* Function: route(); accept name start with more than one dot to different level. For example
	In `Home:foo.bar.baz`, call `routo( '.goal' )` route to `Home:foo.bar.goal`
	In `Home:foo.bar.baz`, call `routo( '..goal' )` route to `Home:foo.goal`
	In `Home:foo.bar.baz`, call `routo( '...goal' )` route to `Home:goal`
	In `Home:foo.bar.baz`, call `routo( '....goal' )` route to `Home:goal`

## 0.1.4
* Function: route(); Throws friendly Exception when route with given name not found.

## 0.1.3
* Update dependence, require illuminate/* instead of laravel/framework

## 0.1.2
* Split file to laravel-helpers.php and php-helpers.php
* Add "strrstr" php helper

## 0.1.1
* Fix some bug in routo
