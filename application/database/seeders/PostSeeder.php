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
            [
                'title' => $title = 'Data de lançamento da 2ª temporada de Tower of God é revelada',
                'slug' => Str::slug($title),
                'subtitle' => 'Prepare-se para voltar à torre',
                'youtube' => 'https://youtu.be/wMqlnGZRUZ8',
                'file' => 'IJg7gy5uE1576HYXCFTXWK7bKbIfR85cOtrPU6w3.jpg',
                'category_id' => 1,
                'user_id' => 1,
                'active' => 1,
                'content' => 'A webcomic original de Tower of God foi publicada originalmente na plataforma WEBTOON em junho de 2010, com 13 volumes físicas encadernados lançados na Coreia do Sul. No Brasil, a obra é publicada pela editora Panini.'
            ],
            [
                'title' => $title = 'Metaphor: ReFantazio, novo RPG dos criadores de Persona, ganha trailer estonteante e data de lançamento',
                'slug' => Str::slug($title),
                'subtitle' => 'Metaphor é uma aventura de fantasia com muito mais conceito',
                'youtube' => 'https://youtu.be/HJv4LQxbVEA',
                'file' => 'qGf5MQkTlNubFfjs9UuMGFdqZk5AQ870hAMPKACH.jpg',
                'category_id' => 2,
                'user_id' => 1,
                'active' => 1,
                'content' => 'A data de lançamento foi revelada em meio a um showcase de 25 minutos apresentado pelo diretor Katsura Hashino, que mostrou jogabilidade, música e outros elementos. A exibição revelou um vislumbre do que os fãs de Persona podem esperar do próximo projeto de Hashino, que tem algumas semelhanças com Persona 5, mas em outros aspectos é muito diferente.

Ao contrário de Persona, que busca capturar a sensação de estar em uma escola japonesa, Metaphor é uma aventura de fantasia com muito mais conceito. Ele mantém vários elementos da série Persona, incluindo o combate por turnos e a passagem do tempo, mas os reimagina. Por exemplo, em vez de um ano letivo que avança dia a dia, Metaphor é mais uma viagem de fantasia em um vasto mundo com tramas políticas.

É tudo um pouco difícil de descrever, mas o trailer acima deve dar uma ideia do que esperar. De uma forma ou de outra, espere que o jogo apresente a mesma arte e música memoráveis que tornaram os jogos Persona tão famosos.

Hashino trabalha em Metaphor pelo menos desde 2017, quando deixou o P-Studio para fundar o Studio Zero com a intenção de trabalhar em uma nova IP. Ele foi acompanhado pelo compositor Shoji Meguro e pelo artista Shigenori Soejima, entre outros, que ajudaram na formação da série Persona. Metaphor foi exibido pela primeira vez no Xbox Game Showcase em 2023, com a Atlus revelando constantemente mais detalhes nos meses seguintes.

Metaphor: ReFantazio estará disponível no Xbox Series X|S, PlayStation 4, PlayStation 5 e PC quando for lançado em 11 de outubro de 2024. 
'
            ],
            [
                'title' => $title = 'O que você precisa saber sobre Venom: The Last Dance antes da chegada do filme nos cinemas?',
                'slug' => Str::slug($title),
                'subtitle' => 'A sequência de Venom chega aos cinemas no dia 28 de outubro deste ano!',
                'youtube' => 'https://www.youtube.com/watch?v=STScKOUpXR8',
                'file' => 'VdIiLsZtZ6NDDzlaEsRfR4AEz2F25NByleHrRNkm.webp',
                'category_id' => 3,
                'user_id' => 1,
                'active' => 1,
                'content' => 'Marcado pela greve dos atores e roteiristas de Hollywood que buscavam por melhores condições de trabalho, o ano de 2023 ficou lembrado pela paralisação de inúmeras produções cinematográficas como Duna: Parte 2, Deadpool & Wolverine, dentre outros que tiveram as gravações pausadas e datas de estreias adiadas.

A sequência de Venom foi um dos projetos que foi impactado com as manifestações. As gravações do longa retornaram quase 6 meses após imagens do set terem sido vazadas nas redes sociais. Na última terça-feira (12), a Sony anunciou que Venom: The Last Dance chegará aos cinemas antes da data prevista, mudando de 8 de novembro para 28 de outubro deste ano.

Com título sugestivo, este pode ser o último filme do vilão, criando expectativas em meios aos fãs de uma possível participação do Homem-Aranha no longa. Vale lembrar que Venom tem origem dos quadrinhos da Marvel, sendo um dos vilões do herói da vizinhança, que arruinou a vida de Eddie Brock, hospedeiro do simbionte.

Apesar do filme caminhar para o multiverso e suas camadas, ainda não foi confirmado o confronto entre os personagens, mas caso aconteça, talvez não seja com o teioso interpretado por Tom Holland e sim por Andrew Garfield por questões relacionadas à produtora.
'
            ],
        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert($post);
        }
    }
}
