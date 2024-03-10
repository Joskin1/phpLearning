<?php
use Core\Validator;
it('validate a string', function(){
  expect(Validator::string('foobar'))->toBeTrue();
});
it('validate a string with minimum length', function(){
    expect(Validator::string('foobar', 20))->toBeFalse();
  });
  it('validate an email', function(){
    expect(Validator::email('foobar'))->toBeFalse();
    expect(Validator::email('foobar@example.com'))->toBeTrue();
  });