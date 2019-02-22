<?php 
  
namespace Akk7300\ChunkNorris\Tests;

use Akk7300\ChunkNorris\JokeFactory;

use PHPUnit\Framework\TestCase; 

class JokeFactoryTest extends TestCase
{
    /**
     * @test 
     * */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRamdomJoke();

        $this->assertSame('This is a joke', $joke);
    }

     /**
     * @test 
     * */
    public function it_returns_a_predefined_joke()
    {
        $chunkNorrisJokes = [
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'Chuck Norris has already been to Mars; that\'s why there are no signs of life there'
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRamdomJoke();

        $this->assertContains($joke, $chunkNorrisJokes);
    }
}