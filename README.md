# SOLID principles

## Single responsibility principle
* A class should have one, and only one, reason to change.
* Or each class should have a single responsibility.
* Classes that are not entirely conducive to change.
* See a full example at https://laracasts.com/series/solid-principles-in-php/episodes/1.

## Dependency inversion principle

* Not the same as dependency injection!
* Depend on abstractions, not on concretions.
    * High level modules should not depend upon low level modules. Instead they should depend upon abstractions.
    * Low level modules too should depend upon abstractions.
* *High level code* isn’t concerned with the specific details.
* *Low level code* is more concerned with details and specifics.
* All of this allows for decoupling.
