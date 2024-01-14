<?php
exec('touch async_start.txt');

sleep('10');
exec('touch async.txt');

exec('rm -rf async_start.txt');