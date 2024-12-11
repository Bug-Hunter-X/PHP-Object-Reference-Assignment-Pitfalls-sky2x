To avoid the issue demonstrated in `bug.php`, create a copy of the object. PHP's built in `clone` keyword can achieve this:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Create a copy
$obj2->value = 10;

echo $obj1->value; // Outputs 0
echo $obj2->value; // Outputs 10
```

Using `clone` ensures that modifications to `$obj2` do not affect `$obj1`, resulting in the expected behavior.