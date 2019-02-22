<?php

namespace Akk7300\ChunkNorris;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris counted to infinity... Twice.',
        'Chuck Norris has already been to Mars; that\'s why there are no signs of life there',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRamdomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
