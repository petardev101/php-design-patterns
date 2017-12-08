# Chain Of Responsibility

Gives us the ability to chain object calls, while giving each of these objects the ability to either end the execution and handle the request
or otherwise if it can't handle the request for some reason, than at that point, the next object has the chance to do the exact same thing.
Similar to Decorator pattern. With C.O.R. pattern, any objects have the ability to slice through the chain so nothing else gets triggered._