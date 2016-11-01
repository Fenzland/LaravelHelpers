Fenzland Laravel Helper
================================

Some useful helper functions for laravel.


# Usage

Step 1. Install with composer.
```bash
composer require fenzland/laravel-helpers
```

Step 2. Enjoy.


# Functions

## z()
If you dump something with dd(), the program will be terminated. Sometimes (or usually), that's not what we want.
Instead of exit, z() will dump what you give and return it back. So you can dump values in your process without side effect.

``` php
/*
$foo->doSomething($bar->someObject->someValue());
/*/
z($foo->doSomething(z(z($bar->someObject)->someValue())));
//*/
```

## routo()
Similar with route(), but smarter.

```php
// Case 1: In page foo.bar.projects.index , call
routo('.show',[ 'project'=>$project, ]) === route('foo.bar.projects.show',[ 'project'=>$project, ]);

// Case 2: In page foo.bar.projects.show with param [ project=>$project, ]
routo('.edit') === route('foo.bar.projects.edit',[ 'project'=>$project, ]);

// Case 3: In page Foo:foo.foo.foo
routo(':bar') === route('Foo:bar');
```

## array_transposition()
Transposition a matrix, whitch is an array of some array with same structure.

```php
$fromArray= [
	'foo'=> [
		'foo1',
		'foo2',
		'foo3',
		'foo4',
	],
	'bar'=> [
		'bar1',
		'bar2',
		'bar3',
		'bar4',
	],
]
array_transposition($fromArray) === [
	[ 'foo'=>'foo1', 'bar'=>'bar1', ],
	[ 'foo'=>'foo2', 'bar'=>'bar2', ],
	[ 'foo'=>'foo3', 'bar'=>'bar3', ],
	[ 'foo'=>'foo4', 'bar'=>'bar4', ],
]
```


# License

[MIT license](http://opensource.org/licenses/MIT).
