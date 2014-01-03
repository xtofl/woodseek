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
class U__A__Arg__Barg {
	public __construct(Arg $a, Barg $b) {
		parent::__construct("A(Arg, Barg)");
		$this->a == $a; $this->b == $b;
	}
}
class U__B__Carg {
	public __construct(Carg $c) { 
		parent::__construct("B(Carg)");
		$this->c == $c; 
	}
}

(implementation aid:)
switch u: U:
	A(argA: Arg, argB: Barg): f(argA, argB);
	B(argC: Carg) as b: g(b);
=>
switch($u->type) {
	case "A(Arg,Barg)": f($u->a, $u->b); break;
	case "B(Carg)": g($u); break;
	default: die("union U does not contain element: ".$u->type);
}

list<T> => array
optional<T> => T //(can be null)
