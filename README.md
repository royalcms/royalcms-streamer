# Royalcms Streamer

Royalcms Streamer is an Object-Oriented API for PHP streams.

## Why should I use Streams?

A stream is a flow of bytes from one container to the other. You already use streams a lot in PHP, for instance each time you load a file into memory (`file_get_contents()`). You should explicitly use streams each time that:

* You need to access data from a container, but you don't know the size of this container (e.g. reading from STDIN, or a web service using streaming)
* You need to start processing data from a container before the whole transfer is finished (e.g. start zipping a file before it's all in memory)
* You need to save time and memory

## What is Streamer?

PHP has a very elaborate stream API ; unfortunately, it uses functions for most stream operations (except for wrappers - go figure). Streamer is a generic library focusing on offering an object-oriented API to streams, and only that.

## Installation

Streamer is published on [packagist.org](http://packagist.org/packages/royalcms/streamer), so you can add it to your `composer.json` file for an easy installation:

```sh
composer require royalcms/streamer
```

or

```json
{
    "require": {
        "royalcms/streamer": "0.0.1"
    }
}
```

## Example

```php
<?php
use Royalcms\Component\Streamer\Stream;
use	Royalcms\Component\Streamer\FileStream;
use	Royalcms\Component\Streamer\NetworkStream;

// basic usage
$stream = new Stream(fopen('smiley.png', 'r'));
$image = '';
while (!$stream->isEOF()) {
  $image .= $stream->read();
}

// pipe dreams!
$stream1 = new Stream(fopen('smiley.png', 'r'));
$stream2 = new Stream(fopen('tmp.png', 'w'));
// copy the contents from the first stream to the second one
$stream1->pipe($stream2);

// factory
$fileStream = FileStream::create('smiley.png', 'r');
print_r($fileStream);

$networkStream = NetworkStream::create('tcp://www.google.com:80');
print_r($networkStream);

```

### Credits

Streamer is heavily inspired by other Stream class implementations:

* [Guzzle](https://github.com/guzzle/streams/blob/ce5a645ee89ea0914db1f601b917b8bf211e3630/src/Stream.php)
* [Joomla's Filesystem Stream](http://api.joomla.org/__filesource/fsource_Joomla-Platform_FileSystem--_librariesjoomlafilesystemstream.php.html)
* [Node.Js Stream API](http://nodejs.org/api/stream.html)
