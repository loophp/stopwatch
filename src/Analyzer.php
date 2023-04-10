<?php

declare(strict_types=1);

namespace loophp\nanobench;

interface Analyzer
{
    public function getResult(): mixed;

    public function mark(): ?float;

    public function start(): Analyzer;

    public function stop(): Analyzer;

    public function withIterationResult(?float $start, mixed $result, ?float $stop): static;
}
