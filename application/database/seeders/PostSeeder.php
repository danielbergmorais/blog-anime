<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            //Animes
            [
                'title' => $title = 'Data de lançamento da 2ª temporada de Tower of God é revelada',
                'slug' => Str::slug($title),
                'subtitle' => 'Prepare-se para voltar à torre',
                'youtube' => 'https://youtu.be/wMqlnGZRUZ8',
                'file' => '101fc93213958369e7d1ff0aa4f6a52d9f.jpg',
                'category_id' => 1,
                'user_id' => 1,
                'active' => 1,
                'content' => 'A webcomic original de Tower of God foi publicada originalmente na plataforma WEBTOON em junho de 2010, com 13 volumes físicas encadernados lançados na Coreia do Sul. No Brasil, a obra é publicada pela editora Panini.

                
Fonte: Crunchyroll 
https://www.crunchyroll.com/pt-br/news/announcements/2024/7/5/tower-of-god-temporada-2-anime-data-lancamento-crunchyroll'
            ],
            [
                'title' => $title = 'Trilogia de filmes Demon Slayer: Kimetsu no Yaiba Castelo Infinito é anunciada',
                'slug' => Str::slug($title),
                'subtitle' => 'Demon Slayer: Kimetsu no Yaiba Castelo Infinito será lançada, adaptando o arco final do popular mangá em animação',
                'youtube' => 'https://www.youtube.com/watch?v=wyiZWYMilgk',
                'file' => '104e5d6f5f7d34a969c79b8085d03657ee.webp',
                'category_id' => 1,
                'user_id' => 2,
                'active' => 1,
                'content' => 'A Crunchyroll e a Sony Pictures Entertainment vão distribuir o filme no mundo inteiro (exceto alguns países da Ásia)
Logo após o episódio final de Demon Slayer: Kimetsu no Yaiba Hashira Training Arc ser exibido no Japão, as contas oficiais da série anunciaram que uma trilogia de filmes de Demon Slayer: Kimetsu no Yaiba Castelo Infinito será lançada, adaptando o arco final do popular mangá em animação.

Além disso, a Crunchyroll e a Sony Pictures Entertainment anunciaram também que vão distribuir a trilogia de filmes em cinemas de todo o mundo, exceto de alguns territórios na Ásia e Japão. Nenhuma data de lançamento foi confirmada até o momento.

Haruo Sotozaki segue na direção de Demon Slayer: Kimetsu no Yaiba, que conta com produção do estúdio ufotable, tendo Akira Matsushima na direção de animação-chefe e design de personagens, músicas por Yuki Kajiura e Go Shiina.

Na Crunchyroll você pode assistir a todos os arcos anteriores, nas versões com legendas e dublagem em português brasileiro. A dublagem em português brasileiro de Demon Slayer: Kimetsu no Yaiba Hashira Training Arc chega à Crunchyroll no dia 30 de junho.


Fonte: Crunchyroll 
https://www.crunchyroll.com/pt-br/news/announcements/2024/6/30/demon-slayer-kimetsu-no-yaiba-castelo-infinito-filmes-crunchyroll'
            ],
            [
                'title' => $title = 'Anime Kaiju No. 8 tem continuação anunciada, com transmissão confirmada na Crunchyroll',
                'slug' => Str::slug($title),
                'subtitle' => 'O anúncio foi feito logo depois da exibição do episódio final no Japão',
                'youtube' => 'https://youtu.be/VtSmC5DHWB4',
                'file' => '103aac9f2577b04082a984bbf6e6ecc8.webp',
                'category_id' => 1,
                'user_id' => 1,
                'active' => 1,
                'content' => 'A história de Kafka Hibino não acabou! Logo após a exibição do episódio 12 do anime no Japão, uma continuação para Kaiju No. 8 foi oficialmente anunciada, e a Crunchyroll aproveitou para confirmar que essa continuação vai chegar por aqui quando for lançada! Mais detalhes sobre a continuação de Kaiju No. 8 não foram anunciados até o momento desta notícia.

A primeira temporada de Kaiju No. 8 apresentou os fãs à história de Kafka Hibino, Reno Ichikawa, Kikoru Shinomiya e o resto da Força de Defesa enquanto eles lidam com os problemas causados pelos kaiju à humanidade.

Baseado no mangá de sucesso de Naoya Matsumoto, o anime de Kaiju No. 8 está atualmente sendo adaptado pelo estúdio Production I.G. e conta com direção de Shigeyuki Miya e Tomomi Kamiya, composição de série por Ichiro Okouchi (Mobile Suit Gundam: The Witch from Mercury), design de personagens por Tetsuya Nishio (Naruto) e músicas por Yuta Bando (BELLE).


Fonte: Crunchyroll
https://www.crunchyroll.com/pt-br/news/announcements/2024/6/29/kaiju-no-8-anime-temporada-2-continuacao-crunchyroll'
            ],
            [
                'title' => $title = '2ª temporada de BLUE LOCK ganha trailer cheio de tensão',
                'slug' => Str::slug($title),
                'subtitle' => 'No vídeo, podemos ouvir pela primeira vez Satoshi Hino interpretando Oliver Aiku',
                'youtube' => 'https://www.youtube.com/watch?v=XvurJZKbMwA',
                'file' => '1028f8db7661844d9321080eac9ff2d84e.webp',
                'category_id' => 1,
                'user_id' => 2,
                'active' => 1,
                'content' => 'A ação futebolística intensa de BLUE LOCK irá continuar no dia 5 de outubro de 2024 com a estreia da sua 2ª temporada na TV japonesa. No novo trailer podemos ver novas cenas da vindoura temporada, enquanto conferimos um pouco da interpretação de Satoshi Hino como a voz de Oliver Aiku.
Baseado no mangá de sucesso de Muneyuki Kaneshiro e Yusuke Nomura, o anime de BLUE LOCK conta com direção de Tetsuaki Watanabe (direção de episódio de Haikyu!!), tendo Shunsuke Ishikawa (direção de episódio de Sword Art Online Alicization) como assistente de direção, sendo produzido pelo estúdio eightbit (That Time I Got Reincarnated as a Slime). Ishikawa também é responsável pela direção de -EPISODE NAGI-.


Fonte: Crunchyroll
https://www.crunchyroll.com/pt-br/news/latest/2024/7/5/blue-lock-temporada-2-trailer'
            ],
            //Jogos
            [
                'title' => $title = 'Metaphor: ReFantazio, novo RPG dos criadores de Persona, ganha trailer estonteante e data de lançamento',
                'slug' => Str::slug($title),
                'subtitle' => 'Metaphor é uma aventura de fantasia com muito mais conceito',
                'youtube' => 'https://www.youtube.com/watch?v=SjbgJaYi4NE',
                'file' => '20998d46365282a9873d76a6cb67c9fbc5.jpg',
                'category_id' => 2,
                'user_id' => 1,
                'active' => 1,
                'content' => 'A data de lançamento foi revelada em meio a um showcase de 25 minutos apresentado pelo diretor Katsura Hashino, que mostrou jogabilidade, música e outros elementos. A exibição revelou um vislumbre do que os fãs de Persona podem esperar do próximo projeto de Hashino, que tem algumas semelhanças com Persona 5, mas em outros aspectos é muito diferente.

Ao contrário de Persona, que busca capturar a sensação de estar em uma escola japonesa, Metaphor é uma aventura de fantasia com muito mais conceito. Ele mantém vários elementos da série Persona, incluindo o combate por turnos e a passagem do tempo, mas os reimagina. Por exemplo, em vez de um ano letivo que avança dia a dia, Metaphor é mais uma viagem de fantasia em um vasto mundo com tramas políticas.

É tudo um pouco difícil de descrever, mas o trailer acima deve dar uma ideia do que esperar. De uma forma ou de outra, espere que o jogo apresente a mesma arte e música memoráveis que tornaram os jogos Persona tão famosos.

Hashino trabalha em Metaphor pelo menos desde 2017, quando deixou o P-Studio para fundar o Studio Zero com a intenção de trabalhar em uma nova IP. Ele foi acompanhado pelo compositor Shoji Meguro e pelo artista Shigenori Soejima, entre outros, que ajudaram na formação da série Persona. Metaphor foi exibido pela primeira vez no Xbox Game Showcase em 2023, com a Atlus revelando constantemente mais detalhes nos meses seguintes.

Metaphor: ReFantazio estará disponível no Xbox Series X|S, PlayStation 4, PlayStation 5 e PC quando for lançado em 11 de outubro de 2024. 


Fonte: IGN Brasil 
https://br.ign.com/metaphor-re-fantazio/122916/news/metaphor-refantazio-novo-rpg-dos-criadores-de-persona-ganha-trailer-estonteante-e-data-de-lancamento
'
            ],
            [
                'title' => $title = 'Novo trailer cinematográfico de Elden Ring: Shadow of the Erdtree apresenta trama de Messmer e Miquella',
                'slug' => Str::slug($title),
                'subtitle' => 'No vídeo podemos ver a Terra das Sombras assolada pelo tirano Messmer, misterioso vilão da expansão.',
                'youtube' => 'https://www.youtube.com/watch?v=6uT8wGtB3yQ',
                'file' => '20ce5d6f5f7d34a969c79b8085d03657ee.webp',
                'category_id' => 2,
                'user_id' => 1,
                'active' => 1,
                'content' => 'Além do vilão principal, podemos ver outros inimigos que já foram apresentados anteriormente, como um grande e feroz cão, além de uma cesta gigantesca que está em chamas, ambos serão chefes.

Miquella, enigmático gêmeo de Malenia, tem grande destaque e parece ter relação com runas que aparecem em determinados locais do mapa, semelhantes aos Locais de Graça. O personagem é destacado por sua aura dourada e ele parece ser o oposto de Messmer.

Elden Ring: Shadow of the Erdtree será lançado PlayStation 4, PlayStation 5, Xbox One, Xbox Series X|S e PC no dia 21 de junho de 2024.


Fonte: IGN Brasil 
https://br.ign.com/elden-ring/124154/news/novo-trailer-cinematografico-de-elden-ring-shadow-of-the-erdtree-apresenta-trama-de-messmer-e-miquel'
            ],
            [
                'title' => $title = 'Trailer empolgante de Black Myth: Wukong mostra novas batalhas contra chefes',
                'slug' => Str::slug($title),
                'subtitle' => 'Trailer também revela que um dos principais artefatos de Sun Wukong estará no game',
                'youtube' => 'https://www.youtube.com/watch?v=cpH2sUkdRE8',
                'file' => '20bc3fae1a89497fd1454d301c46473c43.webp',
                'category_id' => 2,
                'user_id' => 2,
                'active' => 1,
                'content' => 'Durante o WeGame Tonight 2024, a Game Science divulgou um novo trailer de Black Myth: Wukong. As imagens destacam novos confrontos contra chefes e confirmam a introdução de um poderoso artefato no game.

Desde seus primeiros materiais promocionais, o jogo de ação vem apresentando um forte foco na luta contra chefões. Diversos seres mitológicos já foram exibidos, mas os desenvolvedores encontraram espaço para mostrar um pouco mais.

Seres voadores, criaturas elementais e gigantes são apenas algumas das ameaças em Black Myth: Wukong. E para enfrentá-las, o protagonista terá o suporte da Coroa do Sol, artefato capaz de aumentar o chi do usuário.

Black Myth: Wukong será lançado em 20 de agosto para PS5, Xbox Series e PC.


Fonte: Meu PS
https://meups.com.br/noticias/trailer-de-black-myth-wukong-contra-chefes/
'
            ],
            [
                'title' => $title = 'Zenless Zone Zero, da HoYoverse, já está disponível',
                'slug' => Str::slug($title),
                'subtitle' => 'ZZZ é o mais novo ARPG de fantasia urbana da HoYoverse',
                'youtube' => 'https://www.youtube.com/watch?v=KGOynaQoofc',
                'file' => '20f88d000bbfdca8da44e348bdbddfa070.webp',
                'category_id' => 2,
                'user_id' => 1,
                'active' => 1,
                'content' => 'Zenless Zone Zero é o mais novo ARPG de fantasia urbana da HoYoverse. Ambientado em um mundo pós-apocalíptico, os jogadores assumem o papel de um “Proxy” e exploram os perigosos Hollows, combatem inimigos, completam missões e desvendam os mistérios por trás da última metrópole restante, New Eridu, com personagens únicos.

Para abraçar o lançamento oficial, uma ampla gama de atividades foi realizada em todo o mundo para entreter os Proxies, incluindo o lançamento de “ZENLESS” com o vencedor do Grammy DJ Tiësto, bem como uma Mesa Redonda de Criadores entre Zenless Zone Zero e Street Fighter 6. Além disso, Zenless Zone Zero preparou generosas recompensas no jogo para os jogadores, incluindo até 1600 Polychromes, 70 Master Tapes, 20 Encrypted Master Tapes e 80 Boopons.


Fonte: Critical Hits
https://criticalhits.com.br/games/zenless-zone-zero-da-hoyoverse-ja-esta-disponivel/
'
            ],

            //Filmes
            [
                'title' => $title = 'O que você precisa saber sobre Venom: The Last Dance antes da chegada do filme nos cinemas?',
                'slug' => Str::slug($title),
                'subtitle' => 'A sequência de Venom chega aos cinemas no dia 28 de outubro deste ano!',
                'youtube' => 'https://www.youtube.com/watch?v=STScKOUpXR8',
                'file' => '401f88d000bbfdca8da44e348bdbddfa070.webp',
                'category_id' => 3,
                'user_id' => 1,
                'active' => 1,
                'content' => 'Marcado pela greve dos atores e roteiristas de Hollywood que buscavam por melhores condições de trabalho, o ano de 2023 ficou lembrado pela paralisação de inúmeras produções cinematográficas como Duna: Parte 2, Deadpool & Wolverine, dentre outros que tiveram as gravações pausadas e datas de estreias adiadas.

A sequência de Venom foi um dos projetos que foi impactado com as manifestações. As gravações do longa retornaram quase 6 meses após imagens do set terem sido vazadas nas redes sociais. Na última terça-feira (12), a Sony anunciou que Venom: The Last Dance chegará aos cinemas antes da data prevista, mudando de 8 de novembro para 28 de outubro deste ano.

Com título sugestivo, este pode ser o último filme do vilão, criando expectativas em meios aos fãs de uma possível participação do Homem-Aranha no longa. Vale lembrar que Venom tem origem dos quadrinhos da Marvel, sendo um dos vilões do herói da vizinhança, que arruinou a vida de Eddie Brock, hospedeiro do simbionte.

Apesar do filme caminhar para o multiverso e suas camadas, ainda não foi confirmado o confronto entre os personagens, mas caso aconteça, talvez não seja com o teioso interpretado por Tom Holland e sim por Andrew Garfield por questões relacionadas à produtora.

Fonte: Terra
https://www.terra.com.br/diversao/entre-telas/o-que-voce-precisa-saber-sobre-venom-the-last-dance-antes-da-chegada-do-filme-nos-cinemas,0e03ff796a4be7c76d76eec31a44fdfeqpns1lyc.html
'
            ],
            [
                'title' => $title = 'Fotos dos bastidores de Superman não dão spoilers, diz James Gunn',
                'slug' => Str::slug($title),
                'subtitle' => 'Chefão da DC nos cinemas diz que não gravaria uma grande revelação no meio da cidade',
                'youtube' => '',
                'file' => '40530333f74c59829b7391ff75ff284cf4.jpg',
                'category_id' => 3,
                'user_id' => 2,
                'active' => 1,
                'content' => 'As gravações de Superman estão a todo vapor e, com isso, estão surgindo muitas fotos e vídeos dos bastidores. Diretor e roteirista da produção, James Gunn não está nem um pouco surpreso ou preocupado com tais vazamentos.

No Threads, o cineasta falou um pouco sobre os vazamentos do filme que marca o reinício do Universo DC nos cinemas. James Gunn disse que as fotos e vídeos dos bastidores são “completamente esperados” e ao ser questionado se há spoilers no material divulgado até aqui, foi categórico:

“Nem um pouco. Nunca gravaria uma grande revelação ao ar livre no meio da cidade”

O novo filme do Superman terá David Corenswet (Pearl) como o herói, Rachel Brosnahan (Marvelous Mrs. Maisel) como Lois Lane e Nicholas Hoult (Mad Max: Estrada da Fúria) como Lex Luthor. A estreia nos cinemas está marcada para 10 de julho de 2025.

Fonte: Jovem Nerd
https://jovemnerd.com.br/noticias/filmes/superman-fotos-nao-dao-spoilers-diz-james-gunn
'
            ],
            [
                'title' => $title = 'Deadpool & Wolverine destaca dupla e Cassandra Nova em imagens inéditas',
                'slug' => Str::slug($title),
                'subtitle' => 'Aguardado filme da Marvel chega aos cinemas brasileiros em julho',
                'youtube' => 'https://www.youtube.com/watch?v=dEbe0rS4Z2A',
                'file' => '4ffd60f4abd001f12b15082bf045a5ed.webp',
                'category_id' => 3,
                'user_id' => 2,
                'active' => 1,
                'content' => 'O lançamento de Deadpool & Wolverine está batendo à porta, e a produção estrelada por Ryan Reynolds e Hugh Jackman ganhou novas imagens nesta terça-feira (2).

Deadpool & Wolverine chega aos cinemas brasileiros em 25 de julho. Reynolds, Jackman, Corrin e mais integram o elenco.
                
Fonte: Jovem Nerd
https://jovemnerd.com.br/noticias/filmes/deadpool-wolverine-destaca-dupla-e-cassandra-nova-imagens
                '
            ],
            [
                'title' => $title = 'Ator de "The Batman" revela data para início das gravações do segundo filme',
                'slug' => Str::slug($title),
                'subtitle' => 'A sequência do sucesso de 2022, "The Batman", estrelado por Robert Pattinson, deve chegar aos cinemas apenas no final de 2026',
                'youtube' => 'https://youtu.be/HJv4LQxbVEA',
                'file' => '40b6a4e52ca76d4352fff333380db10a8a.jpg',
                'category_id' => 3,
                'user_id' => 1,
                'active' => 1,
                'content' => 'Após o enorme sucesso de "The Batman", filme sobre o clássico herói da DC Comics estrelado por Robert Pattinson e dirigido por Matt Reeves, os fãs do Homem Morcego têm estado extremamente ansiosos para o lançamento da sequência do longa.

Apesar de ainda não terem sido divulgados muitos detalhes sobre a produção, durante uma recente entrevista ao PopVerse, o ator Andy Serkis, responsável por viver o mordomo Alfred Pennyworth revelou a data para o início das filmagens do segundo longa, além de uma previsão para a estreia nos cinemas.

"Basicamente, eu não sei nada sobre o filme, além de ter acabado de descobrir que provavelmente começaremos a filmar no início do próximo ano. Portanto, se você fizer as contas, será um ano e meio depois disso.”, declarou Serkis.
Andy também comentou que, atualmente, Reeves está “trabalhando muito duro no roteiro”, além de rasgar elogios para o cineasta, e dizer que está ansioso para voltar a dar vida à Alfred.
"Eu sei que Matt [Reeves] está trabalhando muito duro no roteiro. Matt Reeves sendo Matt Reeves, o cineasta extraordinário que ele é, só posso supor que será mais um roteiro brilhante, porque o que ele fez com aquele primeiro filme foi bastante incrível. Eu adorei trabalhar com Rob Pattinson e realmente estou ansioso para interpretar Alfred mais uma vez.", finalizou o ator.
Além de Pattinson e Serkis, “The Batman”, lançado em 2022, também contou com a participação de Zoë Kravitz (Mulher-Gato), Colin Farrell (Pinguim) e Paul Dano (Charada), arrecadando mais de 770 milhões de dólares em bilheteria mundial. Relembre o trailer!


Fonte: Recreio
https://recreio.com.br/noticias/entretenimento/ator-de-batman-revela-data-para-inicio-das-gravacoes-do-segundo-filme.phtml
                '
            ],

        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert($post);
        }
    }
}
