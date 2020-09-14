<?php

namespace App\Services;

class Service
{

    private $class;

    public function __construct(string $class)
    {
        $this->class = $class;
    }

    public function create(array $data)
    {
        return $this->class::create($data);
    }

    public function update(array $data, int $id)
    {
        $entity = $this->class::find($id);
        if (is_null($entity)) {
            return null;
        }
        $entity->fill($data)->save();
        return $entity;
    }

    public function destroy(int $id)
    {
        $this->class::destroy($id);
    }
}
