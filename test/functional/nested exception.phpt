--TEST--
An exception containing another exception is thrown by another class.

--ARGS--
-c test --colors=always test/CapabilitiesTest --filter ::testNestedException$

--FILE_EXTERNAL--
PHPUnit runner.php

--EXPECTF--
PHPUnit %s

100% [31;1mE[0m [31;1mLifeWorksForksTest\PHPUnitImmediateExceptionPrinter\CapabilitiesTest::testNestedException[0m[32m (%d ms)[0m

[41;37m                [0m
[41;37m LogicException [0m[31m foo[0m
[41;37m                [0m
[31m[0m
[31m%s%eExceptionThrower.php:%d[0m
[31m%s%eCapabilitiesTest.php:%d[0m
[31m[0m
[31mCaused by[0m
[41;37m                  [0m
[41;37m RuntimeException [0m[31m bar[0m
[41;37m                  [0m
[31m[0m
[31m%s%eExceptionThrower.php:%d[0m
[31m%s%eCapabilitiesTest.php:%d[0m
[31m[0m


Time: %s

There was 1 error:

1) LifeWorksForksTest\PHPUnitImmediateExceptionPrinter\CapabilitiesTest::testNestedException
LogicException: foo

%s%eExceptionThrower.php:%d
%s%eCapabilitiesTest.php:%d

Caused by
RuntimeException: bar

%s%eExceptionThrower.php:%d
%s%eCapabilitiesTest.php:%d

[37;41mERRORS![0m
[37;41mTests: 1[0m[37;41m, Assertions: 0[0m[37;41m, Errors: 1[0m[37;41m.[0m
