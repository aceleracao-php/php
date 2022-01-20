<?php

namespace Tests\Unit;

use App\Caixa;
use PHPUnit\Framework\TestCase;

class MeuPrimeiroTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function contemItemNaCaixa()
    {
        $caixa = new Caixa(["carro", "melancia", "colher", "quadro"]);
        $this->assertTrue($caixa->contem("colher"));
    }
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function naoContemItemNaCaixa()
    {
        $caixa = new Caixa(["carro", "melancia", "colher", "quadro"]);
        $this->assertFalse($caixa->contem("caminhonete"));
    }
    
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function verificaSeItemEIgual()
    {
        $caixa = new Caixa(["lençol"]);
        $this->assertEquals("lençol", $caixa->pegarUmItem());
        //agr a caixa vai estar vazia
        $this->assertNull($caixa->pegarUmItem());
    }
}
