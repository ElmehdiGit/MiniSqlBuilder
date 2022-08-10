<?php

namespace MSB;

class SqlQuery implements ISqlQuery{

    public string $query = "";

    public function addSnippet(string $s): void
    {
        $this->query .= $s;
    }

    public function showQuery(): string
    {
        return $this->query;
    }
}