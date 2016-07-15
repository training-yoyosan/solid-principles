# SOLID principles

Find the video lessons [here](https://laracasts.com/series/solid-principles-in-php).

## Single Responsibility Principle

* A class should have one, and only one, reason to change.
* Or each class should have a single responsibility.
* Classes that are not entirely conducive to change.

## Open-Closed Principle

* Entities(class, method, function) should be:
    * open for extension
    * but closed for modifications
* Open for extension means that it should be simple to change the behavior of a class.
* Closed for modification means:
    * Change the behavior of a class without modifying source code
    * And you do that by modifying the behaviour through extension.
    * **Uncle Bob** says: “Separate extensible behaviour behind an interface and flip the dependencies.”
    * Avoid code rot.
    * This is a goal.
        * It’s very difficult to follow perfectly.
        * But it’s something you strive for.

## Liskov Substitution Principle

* Mathematical definition: Let *q(x)* be a property provable about objects *x* of type *T*. Then *q(y)* should be provable for objects *y* of type *S*, where *S* is a subtype of *T*.
* In a computer program
    * If *B* is a subtype of *A*, then objects of type *A* may be replaced with objects of type *B*.
    * **Derived classes must be substitutable for their base classes**.
* Examples of a violations
    * Example1: When throwing an exception.
    * Example2: When you return different types.
* Here is a list of ways to adhere to LSP:
    * Signature must match
    * Preconditions can’t be greater
    * Post conditions at least equal to
    * Exception types must match

## Dependency Inversion Principle

* Not the same as dependency injection!
* Depend on abstractions, not on concretions.
    * High level modules should not depend upon low level modules. Instead they should depend upon abstractions.
    * Low level modules too should depend upon abstractions.
* *High level code* isn’t concerned with the specific details.
* *Low level code* is more concerned with details and specifics.
* All of this allows for decoupling.
