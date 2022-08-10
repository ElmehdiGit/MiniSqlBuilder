<?php

namespace MSB;

interface ISqlBuilder {

    public function select(string $s): ISqlBuilder;
    public function from(string $s): ISqlBuilder;
    public function where(string $s): ISqlBuilder;
    public function build(): ISqlQuery;
}