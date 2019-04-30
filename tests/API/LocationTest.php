<?php
declare(strict_types=1);
require '.\api\sta\objects\location.php';
require '.\api\config\database.php';

use PHPUnit\Framework\TestCase;

final class locationTest extends TestCase{
    private $conn;
    public function testLocationCanBeCreatedFromDatabase(): void
    {
        $database = new Database();
        $db = $database->getConnection();
        $location = new Location($db);
        $this->assertInstanceOf(
           location::class,
           $location
        );
    }
    
}
?>