<?hh //strict

function assertVectorLike(bool $b, KeyedContainer<mixed, mixed> $x): void {
  if ($b) {
    $i = 0;
  } else {
    $i = 1;
  }
  contains_key($x, $i);
  expect_int($i);
}

function contains_key<Tk, Tv>(
  KeyedContainer<Tk, Tv> $container,
  Tk $key,
): bool {
  return true;
}

function expect_int(int $i): void {}
