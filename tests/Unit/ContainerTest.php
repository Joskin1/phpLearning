<?php

use Core\Container;

test('It can resolve something out of the container', function () {
    $container = new Container;
    $container->bind('foo', function () {
        return 'bar';
    });
    $result = $container->resolve('foo');
    expect($result)->toEqual('bar');

});
