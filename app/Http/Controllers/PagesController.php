<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Bem-vindo ao portfólio do Breno Stacheski!';
        return view('pages.index')->with('title', $title);
    }

    public function portfolio() {
        $title = 'Portfólio';
        return view('pages.about')->with('title', $title);
    }

    public function experiencias() {
        $data = array(
            'title' => 'Experiências Profissionais',
            'services' => ['Tetra Pak:
            Auxílio na implementação da metodologia 5S na área de manutenção. 
            Participação nas manutenções preventivas, preditivas e corretivas programadas. 
            Elaboração de procedimentos internos para execução de serviços de manutenção, através do sistema SAP. 
            Gestão e análise de segurança pessoal através da ferramenta PROTEÇÃO implementada na área. 
            Auxílio no desenvolvimento de melhorias contínuas fabril. 
            Levantamento de dados estruturais em árvore de máquinas para lançamento de pedidos fiscais e cotações para requisição 
            de materiais',
            'Huhtamaki:
            Era responsável pela tradução simultânea de profissionais estrangeiros, que estavam realizando expansão na fábrica do 
            Brasil, para profissionais brasileiros situados na fábrica da Huhtamaki em Palmeira-PR.',
            'DAF Caminhões - Operador de Montagem Pleno:
            Montagem de peças conforme documentação (Build Paper, PWI) juntamente com percepção de problemas de qualidade 
            do produto e realizando itens de falhas operacionais durante o processo. Promovendo e atingindo metas de DPUs, 
            segurança e volume diário de produção operando manipuladores, pontes rolantes, apertadeiras e dispositivos 
            pneumáticos. Identificando problemas de qualidade de produto e indicação de melhorias.
            ']
        );
        return view('pages.services')->with($data);
    }
}
