<?php

namespace App\Cmu\Requests;

use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Request
{
    use ValidatesRequests;

    protected $request;

    protected $messages = [];

    protected $rules;

    abstract public function handle();

    public function __construct(Request $request = null)
    {
        $this->request = $request ?: request();
    }

    public function isValid()
    {
        $this->validate($this->request, $this->rules, $this->messages);

        return true;
    }

    public function file($property)
    {
        return $this->request->file($property);
    }

    public function fields($property)
    {
        return $this->request->get($property);
    }
}