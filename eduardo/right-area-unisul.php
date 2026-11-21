<h3 id="unisul">Unisul Virtual - Palhoça/SC <span>2005 — 2008</span></h3>
<h4>Auxiliar administrativo da Logistica de
    materiais</h4>


<p>Trabalhar no setor de Logística de Materiais foi uma experiência altamente enriquecedora, caracterizada por uma
    dinâmica única e desafiadora. Alguns dias eram de intensa demanda, com uma avalanche de solicitações, enquanto em
    outros o ritmo era muito tranquilo. Foi nesses períodos de calmaria que surgiu a ideia de desenvolver um Sistema de
    Controle de Envio de Materiais, com o intuito de substituir as ineficientes planilhas Excel.</p>

<p>Depois implementei um sistema de protocolo online que permitia à secretaria realizar solicitações de materiais
    diretamente pela internet. Além de simplificar o processo, essa solução possibilitou o acompanhamento em tempo real
    de cada solicitação, eliminando a sobrecarga de e-mails e acelerando a resolução de problemas dos alunos.</p>

<p>Também criei um novo modelo de etiqueta que facilitou a personalização dos envelopes. Esse modelo não apenas
    simplificou o cadastro de materiais, mas também integrou o processo de rastreamento de entregas, associando-o aos
    Correios e ao sistema da Unisul. Hoje, ao receber um pacote pelos Correios com uma etiqueta contendo o endereço de
    entrega e devolução, os usuários estão usufruindo dessa inovação que nasceu na UnisulVirtual.</p>

<p>Desenvolvi ainda um sistema automatizado de geração de etiquetas, que classificava os alunos de acordo com critérios
    predefinidos, além de criar uma solução para monitorar as devoluções de materiais enviadas pelos Correios. Esse
    sistema automatizou o envio de e-mails e o registro das devoluções, prevenindo erros de endereçamento e otimizando
    os custos com correios, evitando o envio de livros para endereços incorretos.</p>

<p>Essas inovações foram apresentadas no Seminário EAD de 29/10/2007, e podem ser conferidas no <a
            href="https://eduardokraus.com/eduardo/arquivos/Artigo_Seminario_EAD.pdf" target="_blank">Artigo_Seminario_EAD.pdf</a>.
</p>

<p>Além disso, atendendo a um pedido da equipe de Avaliações, desenvolvi módulos específicos no sistema interno para
    aprimorar o desempenho do setor. Criamos um sistema de controle de provas, que incluía a geração automática das
    atas, sorteio de questões, formatação das provas, gerenciamento de rastreamento e relatórios, além de uma etiqueta
    inteligente para facilitar o controle e o arquivamento das provas recebidas.</p>

<p>Essas inovações não só simplificaram nossas tarefas diárias de todos, como também elevaram a qualidade dos serviços
    prestados, tornando o processo mais eficiente e ágil.</p>

<?php
if( isset( $_GET[ "prints" ] ) ) {
    Prints::load( "unisul" );
}