# Specification Pattern

Allows you take any kind of business rule and promote or elevate it to a "first class citizen"

The Specification Pattern is a way of encapsulating business rules to return a boolean value. By encapsulating a business rule within a Specification object, we can create a class that has a single responsibility, but can be combined with other Specification objects to create maintainable rules that can be combined to satisfy complex requirements.

The Specification object has a single public isSatisfiedBy() method that will return a boolean value:
```
class UsernameIsUnique implements UsernameSpecification {
  /** @return bool **/
  public function isSatisfiedBy(Username $username)
  {
    //
  }
}
```