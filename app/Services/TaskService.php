<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{
    public function __construct(protected array $request = []) {}

    public static function make(...$args)
    {
        return new static(...$args);
    }

    public function greet()
    {
        return 'hellosss';
    }


    public function save()
    {
        return Task::create($this->request);
    }

    public function update()
    {
        return Task::where('id', $this->request['id'])->update($this->request);
    }

    public function delete()
    {
        return 'hellosss';
    }

    public function fetch()
    {
        return 'hellosss';
    }
}
