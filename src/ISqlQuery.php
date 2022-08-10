<?php

namespace MSB;

interface ISqlQuery{
    public function addSnippet(string $s) : void;
    public function showQuery() : string; 
}