<?php
// Custom loader
spl_autoload_register(function ($class) {
    $indentified = 'PHP-CURL';
    $path = realpath(dirname(__FILE__));
    $load_path = explode($indentified, $path);
    if (count($load_path) > 0) {
        $file_path = $load_path[0] .$indentified . '/src/' .$class. '.php';
        include_once($file_path);
    }
});

use Crawler;
use PHPUnit\Framework\TestCase;
/**
 * @covers Crawler
 */
final class CrawlerTest extends TestCase
{
    public function testLoginRequireBasicAuthen()
    {
        $crawler = new Crawler();
        $crawler->requireBasicAuth('huybinh', '123456');
        $crawler->requireProxy('127.0.0.1', '80');
        $crawler->requireToken('okay-boy');
        $page = $crawler->login('http://for.blog.local/git/ensentials/PHP-CURL/server.php', 'Ha Noi', 'katana');
        $this->assertEquals(
            'user@example.com',
            $page);
    }
}