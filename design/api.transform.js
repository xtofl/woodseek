// this file shows how to transform concepts of the api into PHP.

struct S { x: X; y: Y; } => object literal: { x: x; y: y; }

enumberable<T> 
	=> array

// function declaration
function foo(a: Arg, b: Barg): Result
	=> var foo = function(a /*Arg*/, b /*Barg*/) { var ret; ...; return ret; }

union U:
	A(a: Arg, b: Barg) |
	B(c: Carg)
=>
var U = {creators: {}};
U.add = function( typename, creator ) {
	U.creators[typename] = function(){
		var ret = creator(arguments);
		ret.type = typename;
		return ret;
	};
};
U.add("A(Arg,Barg)", function(a, b) { return {a: a, b: b}; });
U.add("B(Carg)", function(c) { return {c: c}; });

(implementation aid:)
switch u: U:
	A(argA: Arg, argB: Barg): f(argA, argB);
	B(argC: Carg) as b: g(b);
=>
switch(u.type) {
	case "A(Arg,Barg)": f(u.a, u.b); break;
	case "B(Carg)": g(u); break;
	default: throw {message: "union U does not contain element "+u.type};
}

list<T> => array
optional<T> => T //(can be null)
