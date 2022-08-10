<?php


namespace MSB;

class SqlBuilder implements ISqlBuilder{

    public SqlQuery $query;

    public function __construct()
    {
        $this->query = new SqlQuery();
    }
    
    public function select(string $s): ISqlBuilder
    {
        $this->query->addSnippet("select $s ");
        return $this;
    }

    public function from(string $s): ISqlBuilder
    {
        $this->query->addSnippet("from $s ");
        return $this;
    }

    public function where(string $s): ISqlBuilder
    {
        $this->query->addSnippet("where $s ");
        return $this;
    }

    public function build(): SqlQuery
    {
        $this->query->addSnippet(";");
        return $this->query;
    }
}