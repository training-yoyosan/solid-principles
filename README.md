# SOLID principles

## Single responsibility principle

* A class should have one, and only one, reason to change.
* Or each class should have a single responsibility.
* Classes that are not entirely conducive to change.
* See a full example at https://laracasts.com/series/solid-principles-in-php/episodes/1.

## Open-Closed principle

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

## Dependency inversion principle

* Not the same as dependency injection!
* Depend on abstractions, not on concretions.
    * High level modules should not depend upon low level modules. Instead they should depend upon abstractions.
    * Low level modules too should depend upon abstractions.
* *High level code* isn’t concerned with the specific details.
* *Low level code* is more concerned with details and specifics.
* All of this allows for decoupling.
