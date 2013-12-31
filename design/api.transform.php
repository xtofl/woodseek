// this file shows how to transform concepts of the api into PHP.

struct S { x: X; y: Y; }=> class S { public $x; public $y; }

enumberable<T> 
	=> array

// function declaration
function foo(a: Arg, b: Barg): Result
	=> function foo(Arg $a, Barg $b) { Result $ret; ...; return $ret; }

union U:
	A(a: Arg, b: Barg) |
	B(c: Carg)
=>
class U {
	public $type;
	public __construct($type) { 
		$this->type = $type; 
	}
}
class U__A {
	public __construct(Arg $a, Barg $b) {
		parent::__construct("U__A");
		$this->a == $a; $this->b == $b;
	}
}
class U__B {
	public __construct(Carg $c) { 
		parent::__construct("U__B");
		$this->c == $c; 
	}
}

list<T> => array
optional<T> => T //(can be null)
