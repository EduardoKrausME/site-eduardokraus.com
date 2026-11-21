<h3 id="cers">CERS - Recife/PE <span>2009 — 2022</span></h3>
<h4>Consultor de Inovação em Vídeos</h4>

<p>Em 2009, fui contratado para uma consultoria para lidar com os problemas persistentes no Flash Media Server, que
    afetavam a estabilidade das transmissões de vídeo em horários de pico, comprometendo a experiência em assistir aulas
    online.
    Em 2011, liderei a migração dos vídeos do CERS para a Akamai (na época era a única CDN de vídeos do mundo) o que
    permitiu que o CERS escalasse para atender a uma base massiva de alunos, chegando a picos de 50.000 alunos
    simultâneos assistindo vídeos.</p>

<p>Em novembro de 2014, o CERS realizou a migração para a plataforma Samba, uma decisão que, posteriormente, revelou-se
    problemática. No entanto, devido a um contrato mínimo de 12 meses, estava preso a ela.
    Em julho de 2015, diante dessa situação, iniciamos uma discussão que resultou no desenvolvimento de um CMS de vídeos
    próprio.
    O desafio era considerável, dado o prazo de apenas quatro meses.
    Surpreendentemente, consegui entregar o sistema e migrar com sucesso os 150 mil vídeos antes do término do contrato
    com a Samba.
    Até hoje a videoteca do CERS continua a ser a espinha dorsal de todos os vídeos do CERS, e possui integração
    perfeita com o LMS, com uma experiência excepcional da equipe pedagógica, equipe de produção/edição e curadoria de
    vídeos.</p>

<p>Desde que a Netflix introduziu a opção de download de vídeos para visualização offline, o CERS tinha o desejo de
    implementar esse recurso.
    Após inúmeras tentativas fracassadas por parte de outras empresas, e a última que se aventurou no projeto desistiu a
    apenas três meses do lançamento do edital da OAB.
    Foi nesse momento que me ofereci para <a
            href="https://www.facebook.com/pedrozanre/posts/pfbid0ot15Ch2gxELfrEr8HMAnqzx5G68vokq3xjfb4AZMhtRuu9yjJ2bGQkZFJSn1FsUvl"
            target="_blank">desenvolver o aplicativo com a funcionalidade de assistir offline e eu consegui.</a></p>

<p>O CERS se aventurou nas franquias e, para isso, foi criado um sistema de <a
            href="https://cloud.google.com/cdn/docs/locations?hl=pt-br" target="_blank">PoP nas franquias do CERS</a>,
    permitindo que os alunos nas salas de aula assistissem aos vídeos diretamente pelo CDN interno, sem enfrentar
    qualquer interrupção.</p>

<p>Criei também o LiveSparrow, uma ferramenta especializada na detecção de download de videoaulas, auxiliando no combate
    à pirataria de vídeo aulas.</p>

<?php
if( isset( $_GET[ "prints" ] ) ) {
    Prints::load( "cers" );
}
