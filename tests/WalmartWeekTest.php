<?php

require_once(__DIR__ . '/../lib/WhyteSpyder/WalmartWeek.php');

use PHPUnit\Framework\TestCase;
use WhyteSpyder\WalmartWeek;

class WalmartWeekTest extends TestCase {

    public function testCalculate2009DateToWalmartWeek() {
        $ww = new WalmartWeek();
        $this->assertEquals($ww->toWalmartWeek('2009-09-19'), '200934');
        $this->assertEquals($ww->toWalmartWeek('2009-09-26'), '200935');
        $this->assertEquals($ww->toWalmartWeek('2009-10-03'), '200936');
    }

    public function testCalculate2010DateToWalmartWeek() {
        $ww = new WalmartWeek();
        $this->assertEquals($ww->toWalmartWeek('2010-02-20'), '201004');
        $this->assertEquals($ww->toWalmartWeek('2010-03-13'), '201007');
        $this->assertEquals($ww->toWalmartWeek('2010-04-24'), '201013');
    }

    public function testCalculate2018DateToWalmartWeek() {
        $ww = new WalmartWeek();
        $this->assertEquals($ww->toWalmartWeek('2018-01-27'), '201801');
        $this->assertEquals($ww->toWalmartWeek('2018-02-01'), '201801');
        $this->assertEquals($ww->toWalmartWeek('2018-06-16'), '201821');
        $this->assertEquals($ww->toWalmartWeek('2018-06-21'), '201821');
        $this->assertEquals($ww->toWalmartWeek('2018-09-29'), '201836');
        $this->assertEquals($ww->toWalmartWeek('2018-10-04'), '201836');
    }

    public function testConvert2009WalmartWeekToDate() {
        $ww = new WalmartWeek();
        $this->assertEquals($ww->fromWalmartWeek('200934'), '2009-09-19');
        $this->assertEquals($ww->fromWalmartWeek('200935'), '2009-09-26');
        $this->assertEquals($ww->fromWalmartWeek('200936'), '2009-10-03');
    }

    public function testConvert2010WalmartWeekToDate() {
        $ww = new WalmartWeek();
        $this->assertEquals($ww->fromWalmartWeek('201004'), '2010-02-20');
        $this->assertEquals($ww->fromWalmartWeek('201007'), '2010-03-13');
        $this->assertEquals($ww->fromWalmartWeek('201013'), '2010-04-24');
    }

    public function testConvert2011WalmartWeekToDate() {
        $ww = new WalmartWeek();
        $this->assertEquals($ww->fromWalmartWeek('201111'), '2011-04-09');
        $this->assertEquals($ww->fromWalmartWeek('201125'), '2011-07-16');
        $this->assertEquals($ww->fromWalmartWeek('201145'), '2011-12-03');
    }

    public function testConvert2018WalmartWeekToDate() {
        $ww = new WalmartWeek();
        $this->assertEquals($ww->fromWalmartWeek('201801'), '2018-01-27');
        $this->assertEquals($ww->fromWalmartWeek('201807'), '2018-03-10');
        $this->assertEquals($ww->fromWalmartWeek('201812'), '2018-04-14');
        $this->assertEquals($ww->fromWalmartWeek('201817'), '2018-05-19');
        $this->assertEquals($ww->fromWalmartWeek('201821'), '2018-06-16');
        $this->assertEquals($ww->fromWalmartWeek('201826'), '2018-07-21');
        $this->assertEquals($ww->fromWalmartWeek('201830'), '2018-08-18');
        $this->assertEquals($ww->fromWalmartWeek('201836'), '2018-09-29');
        $this->assertEquals($ww->fromWalmartWeek('201838'), '2018-10-13');
        $this->assertEquals($ww->fromWalmartWeek('201843'), '2018-11-17');
        $this->assertEquals($ww->fromWalmartWeek('201849'), '2018-12-29');
        // $this->assertEqual($ww->fromWalmartWeek('201852'), '2019-01-19');
    }

}